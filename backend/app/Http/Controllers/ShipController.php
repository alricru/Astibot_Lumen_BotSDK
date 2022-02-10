<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

use Carbon\Carbon;

class ShipController extends Controller{


    // Allows to access the Model
    public function findAll(){
        // dataShip is created as a variable that contains all information about Employee Model
        $dataShip= Ship::all();
        // Returns a json with all data contained in $dataEmployee
        return response()->json($dataShip);
    }

    // Save employee in the database with a request 
    public function addShip(Request $request){
        $dataShip= new Ship;
  
        $dataShip->brand=$request->brand;
        $dataShip->model=$request->model;
        $dataShip->client=$request->client;
        $dataShip->description=$request->description;

        $dataShip->save();
        return response()->json('Nave añadida con éxito');
    }

    //Search an Employee using the ID
    public function findById($id){
        $ship= new Ship;
        $dataShip=$ship->find($id);
        return response()->json($dataShip);
    }

    //Erases a registry using the ID
    public function deleteById($id){
        $ship= Ship::find($id);
        if(!$employee){
            return response()->json("Error - No existe dicha nave");
        }
        $ship->delete();
        return response()->json("Registro Eliminado con éxito");
    }

    public function updateById(Request $request,$id){
        $ship= Ship::find($id);

        // If the main data is changed...
        if($request->input('brand')){
            $employee->brand=$request->input('brand');
        }
        if($request->input('model')){
            $employee->model=$request->input('model');
        }
        if($request->input('client')){
            $employee->client=$request->input('client');
        }
        if($request->input('description')){
            $employee->description=$request->input('description');
        }

        $ship->save();
        return response()->json("Datos de la Nave actualizados");
    }
}