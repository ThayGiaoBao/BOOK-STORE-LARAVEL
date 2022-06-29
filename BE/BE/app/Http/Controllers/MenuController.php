<?php

namespace App\Http\Controllers;

use App\Components\MenuRecusive;
use Illuminate\Http\Request;
use App\Components\Recusive;
use App\Models\Menu;

class MenuController extends Controller
{
    private $menuRecusive;
    private $menu;
    public function __construct(MenuRecusive $menuRecusive, Menu $menu)
    {
        $this->menuRecusive = $menuRecusive;
        $this->menu = $menu;
    }
    // trở về trang menus
    public function index(){
        // list dữ liệu thêm menus ra màn hình
        $menus = $this->menu->paginate(10);
        return view('menus.index', compact('menus'));
    }

    // trở về trang thêm menus
    public function create(){
        $optionSelect = $this->menuRecusive->menuRecusiveAdd();
        return view('menus.add', compact('optionSelect'));
    }   
    
    // thiết lập phương thức store
    public function store(Request $request){
        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('menus');
    }

    // thiết lập phương thức edit hiện ra tên menus sẽ sữa
    public function edit($id, Request $request){
        $menuFollowIdEdit = $this->menu->find($id);
        $optionSelect = $this->menuRecusive->menuRecusiveEdit($menuFollowIdEdit->parent_id);
        return view('menus.edit', compact('optionSelect', 'menuFollowIdEdit'));
    }

    // thiết lập phương thức update hiện ra tên menu cha của nó
    public function update($id, Request $request){
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('menus.edit',['id'=>$id]);
    } 
}
