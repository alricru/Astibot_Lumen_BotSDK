<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintenance;

use Carbon\Carbon;

class MaintenanceController extends Controller{


    // Allows to access the Model
    public function findAll(){
        // dataMaintenance is created as a variable that contains all information about Employee Model
        $dataMaintenance= Maintenance::all();
        // Returns a json with all data contained in $dataEmployee
        return response()->json($dataMaintenance);
    }

    // Save employee in the database with a request 
    public function addMaintenance(Request $request){
        $dataMaintenance= new Maintenance;
  
        $dataMaintenance->service=$request->service;
        $dataMaintenance->description=$request->description;
        $dataMaintenance->status=$request->status;
        $dataMaintenance->shipyard=$request->shipyard;
        $dataMaintenance->employeeId=$request->employeeId;
        $dataMaintenance->shipId=$request->shipId;

        $dataMaintenance->save();
        return response()->json('Mantenimiento registrado con éxito');
    }

    //Search an Employee using the ID
    public function findById($id){
        $maintenance= new Maintenance;
        $dataMaintenance=$maintenance->find($id);
        return response()->json($dataMaintenance);
    }

    //Erases a registry using the ID
    public function deleteById($id){
        $maintenance= Maintenance::find($id);
        if(!$maintenance){
            return response()->json("Error - No existe el mantenimiento");
        }
        $maintenance->delete();
        return response()->json("Registro Eliminado con éxito");
    }

    public function updateById(Request $request,$id){
        $ship= Ship::find($id);

        // If the main data is changed...
        if($request->input('service')){
            $employee->service=$request->input('service');
        }
        if($request->input('description')){
            $employee->description=$request->input('description');
        }
        if($request->input('status')){
            $employee->status=$request->input('status');
        }
        if($request->input('shipyard')){
            $employee->shipyard=$request->input('shipyard');
        }
        if($request->input('employeeId')){
            $employee->employeeId=$request->input('employeeId');
        }
        if($request->input('shipId')){
            $employee->shipId=$request->input('shipId');
        }

        $ship->save();
        return response()->json("Datos de la Nave actualizados");
    }
}