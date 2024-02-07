<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller
{
    public function index(Request $request)
    {
        $sampleValue = "トップテキスト";

        $records = DB::connection('mysql')->select('select * from users');
        $name = $records[0]->name;

         //$insertResult = DB::connection("mysql")->insert("insert into users (id, name, email, password) values (null, 'ot', 'o@o', 'ik')");
         
         $deleteResult = DB::connection("mysql")->delete("delete from users where name = 'moto'");
         dd($deleteResult);

        return view("top/index", ['sampleValue' => $sampleValue]);
    }
}
