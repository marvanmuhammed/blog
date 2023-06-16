<?php

namespace App\Http\Controllers;
use App\Http\Controllers\controller;
use App\Models\Ajax;
use Illuminate\Http\Request;
use App\Post;
class AjaxController extends Controller
{
    public function form_submit(Request $request)
    {
        $model= new Ajax();
        $model->name=$request->post('name');
        $model->email=$request->post('email');
        $model->save();   
        return ["msg"=>"Data Inserted"];
    }

}
