<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sampleController";

        // 参照
        $records = DB::connection('mysql')->select("select * from users"); // query 実行処理 実行結果を $records に代入
        $name = $records[0]->name;

        // 追加
        // $insertSample1 = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,'konnitiha','えええ','eee')");
        // $insertSample2 = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,null,'おおお','ooo')");
        // $insertSample3 = DB::connection("mysql")->insert("insert into users (id,email,name,password) values (null,null,'んんん','nnn')");
        // dd($insertSample1);
        // dd($insertSample2);
        // dd($insertSample3);


        // 削除
        $deleteSample = DB::connection("mysql")->delete("delete from users where name = 'おおお'");
        dd($deleteSample);
        
        return view("top/index" , [ "sampleValue" => $sampleValue ]);
    }
}
