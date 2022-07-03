<?php

namespace App\Http\Controllers\Admin\Component;

class Recusive{

    private $data;
    private $htmlSelected = '';
    //constructor chạy trc và nhận đc biến $category
    public function __construct($data)
    {
       $this->data = $data;
    }

    public function CategoryRecusive($id = 0, $text = ''){
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id){
                //mỗi lần tìm thất giá trị thì nối chuỗi
                $this->htmlSelected .= "<option value='" .$value['id'] . "'>". $text. $value['name']. "</option>";
                $this->CategoryRecusive($value['id'], $text. '-');
            }
        }
        return $this->htmlSelected;
    }

}

?>