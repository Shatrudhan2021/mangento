<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
//use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class FetchDataController extends Controller
{
    //
    public function FetchCategory(){
        $category = DB::select('select * from categories');
        //return view('stud_view',['users'=>$users]);
        return view('index',['category'=>$category]);
    }

    // //
    public function FetchPost($id){
        //$posts = DB::select('select * from posts')->where("category_id",[1]);
        $posts = DB::select('select * from posts where category_id = ?', [$id]);
        return view('magento',['posts'=>$posts]);
    }
    // public function ShowData($id){
        
    //     $users = DB::select('select * from users where id = ?', [$id]);

    //     //return view('user.index', ['users' => $users]);
    //     return $users;
    // }
}
