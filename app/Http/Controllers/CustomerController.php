<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

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

    function store(Request $request){

        DB::beginTransaction();

        try{
            $customer = new Customer();
            $customer->nombre = $request->txt_nombre;
            $customer->apellido = $request->txt_apellido;
            $customer->telefono = $request->txt_telefono;
            $customer->dui = $request->txt_dui;
            $customer->email = $request->txt_email;
            $customer->fecha_nacimiento = $request->txt_fecha_nacimiento;
            $customer->direccion = $request->txt_direccion;

            $customer->save();

            DB::commit();
            return response()->json(['title'=>'Exito!','msg'=>'Registro guardado con exito!!'],201);
        }catch(Throwable $e){
            DB::rollBack();

            Log::error(["error"=> $e->getMessage(),"line"=>$e->getLine()]);
            $error = ["title"=>"Error","msg"=> $e->getMessage()];
            return response()->json($error,500);
        }
    }
}
