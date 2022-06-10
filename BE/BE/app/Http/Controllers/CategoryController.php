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
        //lấy toàn bộ data trong Category
        $data = Category::all();
        $recusive = new Recusive($data);
        $categorys = $recusive->recursion($data);
        // echo $categorys;
        // foreach ($data as $value) {
            // xét data tìm thg cha
            // if ($value['parent_id'] == 0) {
            //     echo "<option>" . $value['name'] . "</option>";
            //     // xét lại data để tìm thg con
            //     foreach ($data as $value2) {
            //         // echo "<pre>";
            //         // echo "</pre>";

            //         if ($value2['parent_id'] == $value['id']) {
            //             echo "<option>" . $value2->name . "</option>";
            //             foreach ($data as $value3) {
            //                 # code...
            //                 if ($value3->parent_id == $value2->id) {
            //                     echo "<option>" . $value3->name . "</option>";
            //                 }
            //             }
            //         }
            //     }
            // }
        // }
        // echo "<select>";
        // echo "</select>";
        // var_dump($this->htmlSelect);
        // $categorys = $this->recursion($data,0,'');
        return view('category.add',compact('categorys'));
    }

    // function recursion($data,$parentId = 0,$text=''){
    //     foreach ($data as $value) {
    //         if($value->parent_id == $parentId){
    //             $this->htmlSelect.="<option>" .$text. $value['name'] . "</option>";
    //             $this->recursion($data,$value->id,$text.='-');
    //         }   
    //     }
    //     return $this->htmlSelect;
    // }

    public function index(){
        $categorys = $this->categorys->latest()->paginate(5);
        return view('category',compact('categorys'));
    }

    public function store(Request $request){
        $this->categorys->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => str_slug($request->name)
        ]);
        return redirect()->route('create');
    }
}
