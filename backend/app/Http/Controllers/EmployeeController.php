<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

use Carbon\Carbon;

class EmployeeController extends Controller{


    // Allows to access the Model
    public function findAll(){
        // dataEmployee is created as a variable that contains all information about Employee Model
        $dataEmployee= Employee::all();
        // Returns a json with all data contained in $dataEmployee
        return response()->json($dataEmployee);
    }

    // Save employee in the database with a request 
    public function addEmployee(Request $request){

        $dataEmployee= new Employee;

        if($request->hasFile('image')){

            // Get the Image from the request, then save the name in the DB and the Image in upload/
            $OriginalName=$request->file('image')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('image')->move($Destiny, $newName);
            
            $dataEmployee->name=$request->name;
            $dataEmployee->surname=$request->surname;
            $dataEmployee->telephone=$request->telephone;
            $dataEmployee->image=ltrim($Destiny,'.').$newName;

            $dataEmployee->save();
        }
        $request->file('image');
        return response()->json($newName);
    }

    //Search an Employee using the ID
    public function findById($id){
        $employee= new Employee;
        $dataEmployee=$employee->find($id);
        return response()->json($dataEmployee);
    }

    //Erases a registry using the ID
    public function deleteById($id){
        $employee= Employee::find($id);
        if($employee){
            $fileRoute=base_path('public').$employee->image;
            if(file_exists($fileRoute)){

                unlink($fileRoute);
            }
            $employee->delete();
        }
        return response()->json("Registro Eliminado con éxito");
    }

    public function updateById(Request $request,$id){
        $employee= Employee::find($id);

        // If the File is changed...
        if($request->hasFile('image')){

            // If the Image already exists in the folder /upload, erases it
            if($employee){
                $fileRoute=base_path('public').$employee->image;
                if(file_exists($fileRoute)){
                    unlink($fileRoute);
                }
                $employee->delete();
            }

            // Get the Image from the request to change it if neccesary
            $OriginalName=$request->file('image')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('image')->move($Destiny, $newName);
            
            $employee->image=ltrim($Destiny,'.').$newName;
        }

        // If the main data is changed...
        if($request->input('name')){
            $employee->name=$request->input('name');
        }
        if($request->input('surname')){
            $employee->surname=$request->input('surname');
        }
        if($request->input('telephone')){
            $employee->telephone=$request->input('telephone');
        }

        $employee->save();
        return response()->json("Datos del Empleado actualizados");
    }

}