<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller {
    public function index( Request $request ) {
        $sampleValue = "sample テキストです。";

        // 参照
        // $records = DB::connection('mysql')->select("select * from items"); // query 実行処理 実行結果を $records に代入
        // $name = $records[0]->name;

        // 追加
        // $insertResult = DB::connection("mysql")->insert("insert into items (id,name,price) values (null,'メロン',2000)");
        
        // 更新
        // $updateResult = DB::connection("mysql")->update("update items set price = 600 where name = 'jon'");

        // 削除
        // $deleteResult = DB::connection("mysql")->delete("delete from items where name = 'jon'");
        // dd($deleteResult);
        
        return view("top/index" , [ "sampleValue" => $sampleValue ]);
    }
}

