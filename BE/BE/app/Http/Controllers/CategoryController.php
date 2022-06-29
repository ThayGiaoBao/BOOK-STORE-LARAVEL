<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Components\Recusive;


class CategoryController extends Controller
{

    private $htmlSelect;
    private $categorys;
    public function __construct(Category $category)
    {
        $this->htmlSelect = '';
        $this->categorys = $category;
    }

    public function create()
    {
        $categorys = $this->getCategory($parentId = "");
        return view('category.add',compact('categorys'));
    }


    public function index(){
        $categorys = $this->categorys->latest()->paginate(5);
        return view('category',compact('categorys'));
    }

    // thêm danh mục
    public function store(Request $request){
        $this->categorys->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('create');
    }

    public function getCategory($parentId){
        $data = Category::all();
        $recusive = new Recusive($data);
        $categorys = $recusive->recursion($parentId);
        return $categorys;
    }

    // sửa danh mục
    public function edit($id){
        $category = $this->categorys->find($id); 
        $categorys = $this->getCategory($category->parent_id);
        // dd($categorys);

        return view('category.edit', compact('category', 'categorys'));
    }   

    // update danh mục
    public function update($id, Request $request){
        $this->categorys->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('category.index');
    }

    // xóa danh mục
    public function delete($id){
        $this->categorys->find($id)->delete();
        return redirect()->route('category.index');
    }
}
