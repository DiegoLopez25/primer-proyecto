<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(){
        return view("customers.index");
    }

    function create(){
        return view("customers.create");
    }

    function edit(){
        return view("customers.edit");
    }

    function show($id){
        return view("customers.show",['id'=>$id]);
    }
}
