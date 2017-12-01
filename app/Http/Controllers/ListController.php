<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    public function display($data){
        return view('list')
                ->with('data', $data);
    }
    /*
    * アナグラム
    */
    public function anagram(){
        $data = "a";
        return $this->display($data);
    }
    
    /*
    * 回文
    */
    public function palindrome(){
        $data = "p";
        $this->display($data);
    }

    /*
    * 誤変換
    */
    public function misconversion(){
        $data = "m";
        $this->display($data);
    }
}
