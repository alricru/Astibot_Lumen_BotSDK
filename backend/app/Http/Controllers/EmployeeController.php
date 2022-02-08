<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

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

        $dataEmployee->name=$request->name;
        $dataEmployee->surname=$request->surname;
        $dataEmployee->telephone=$request->telephone;
        $dataEmployee->image=$request->image;

        $dataEmployee->save();

        return response()->json($request);
    }

}