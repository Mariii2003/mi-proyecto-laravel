<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pais;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        try{
            $paises = Pais::all();
            return response()->json($paises, 200);
        }catch (Exception $th) {
            return response()->json([
                'errors' => $th
            ],403);
        }  
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
          $pais = Pais::create($request->all());
          return response()->json($pais,201);
        } catch(Exception $e){
          return response()->json([
            "Fallo" => $e
          ],400) ; 
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        try{
            $pais = Pais::findOrFail($id)->delete();
            return response()->json("Ha sido eliminado",200);
          } catch(Exception $e){
            return response()->json([
              "Fallo al eliminar" => $e
            ],400) ; 
          }

    }
    }

