<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $produtos = Produtos::all();
        return response()->json(['data'=>$produtos,'status'=>true]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $produtos = Produtos::create($data);

        if ($produtos) {
            return response()->json(['data' =>$produtos,'status'=>true]);
        }else{
            return response()->json(['data' =>'Erro ao criar produto','status'=>false]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produtos = Produtos::find($id);

        if ($produtos) {
            return response()->json(['data' =>$produtos,'status'=>true]);
        }else{
            return response()->json(['data' =>'Erro ao Editar Produto','status'=>false]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =$request->all();
        $produtos = Produtos::find($id);

        if ($produtos) {
            $produtos ->update($data);
            return response()->json(['data' =>$produtos,'status'=>true]);
        }else{
            return response()->json(['data' =>'Erro ao Editar produto','status'=>false]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $produtos = Produtos::find($id);

        if ($produtos) {
            $produtos ->delete();
            return response()->json(['data' =>'Deletadi','status'=>true]);
        }else{
            return response()->json(['data' =>'Erro ao Deletar produto','status'=>false]);
        }
    }
}
