<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ship;

use Carbon\Carbon;

class ShipController extends Controller{


    // Allows to access the Model
    public function findAll(){
        // dataShip is created as a variable that contains all information about ship Model
        $dataShip= Ship::all();
        // Returns a json with all data contained in $dataShip
        return response()->json($dataShip);
    }

    // Save Ship in the database with a request 
    public function addShip(Request $request){
        $dataShip= new Ship;
  
        if($request->hasFile('image')){

            // Get the Image from the request, then save the name in the DB and the Image in upload/
            $OriginalName=$request->file('image')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('image')->move($Destiny, $newName);
            
            $dataShip->brand=$request->brand;
            $dataShip->model=$request->model;
            $dataShip->client=$request->client;
            $dataShip->description=$request->description;
            
            $dataShip->image=ltrim($Destiny,'.').$newName;

            $dataShip->save();
        }
        $request->file('image');
        return response()->json($dataShip);
    }

    //Search an ship using the ID
    public function findById($id){
        $ship= new Ship;
        $dataShip=$ship->find($id);
        return response()->json($dataShip);
    }

    //Erases a registry using the ID
    public function deleteById($id){
        $ship= Ship::find($id);
        if(!$ship){
            return response()->json("Error - No existe dicha nave");
        }
        $ship->delete();
        return response()->json("Registro Eliminado con éxito");
    }

    public function updateById(Request $request,$id){
        $ship= ship::find($id);

        // If the File is changed...
        if($request->hasFile('image')){
            // If the Image already exists in the folder /upload, erases it
            if($ship){
                $fileRoute=base_path('public').$ship->image;
                if(file_exists($fileRoute)){
                    unlink($fileRoute);
                }
                $ship->delete();
            }

            // Get the Image from the request to change it if neccesary
            $OriginalName=$request->file('image')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('image')->move($Destiny, $newName);
            $ship->image=ltrim($Destiny,'.').$newName;
        }

        // If the main data is changed...
        if($request->input('brand')){
            $ship->brand=$request->input('brand');
        }
        if($request->input('model')){
            $ship->model=$request->input('model');
        }
        if($request->input('client')){
            $ship->client=$request->input('client');
        }
        if($request->input('description')){
            $ship->description=$request->input('description');
        }

        $ship->save();
        return response()->json("Datos del Empleado actualizados");
    }
}
