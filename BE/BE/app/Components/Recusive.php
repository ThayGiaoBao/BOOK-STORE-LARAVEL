<?php

namespace App\Components;

class Recusive {
    private $data;
    private $htmlSelect = '';

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function recursion($data,$parentId = 0,$text=''){
        foreach ($this->data as $value) {
            if($value->parent_id == $parentId){
                $this->htmlSelect.="<option value='" . $value['id']. "'>" .$text. $value['name'] . "</option>";
                $this->recursion($data,$value->id,$text.'-');
            }   
        }
        return $this->htmlSelect;
    }
}