<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

use Carbon\Carbon;

class EmployeeController extends Controller{


    // Allows to access the Model
    public function index(){
        // dataEmployee is created as a variable that contains all information about Employee Model
        $dataEmployee= Employee::all();
        // Returns a json with all data contained in $dataEmployee
        return response()->json($dataEmployee);
    }

    // Save data in the database
    public function addEmployee(Request $request){

        $dataEmployee= new Employee;

        if($request->hasFile('image')){

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

}