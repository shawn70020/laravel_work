<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\board;

class HomeController extends Controller
{
    public function index(){
        $news = board::all();
        return view("index", compact('news'));
    }
    public function show($id)
    {
        $news = board::find($id);
        return view('show', compact('news'));
    }
    public function login(){
        return view("login");
    }
    public function check(Request $request){
        $username = $request->input('username');
        $passwd = $request->input('passwd');
        if($passwd !=''&& $username !=''){
            return redirect("/admin");
        }else{
            return false;
        }
    }
    public function admin(){
        $news = board::all();
        return view("admin", compact('news'));
    }
    public function add(){
        return view("add");
    }
    public function add_check(Request $request){
        $emp = new board();
        $emp->topic = $request->topic;
        $emp->content = $request->content;
        $emp->save();
        return redirect("/admin");
    }
    public function edit($id){
        $news = board::find($id);
        return view('edit', compact('news'));
    }
    public function update(Request $request ,$id){
        $emp = board::find($id);
        $emp->topic = $request->topic;
        $emp->content = $request->content;
        $emp->save();
        return redirect("/admin");
    }
}
