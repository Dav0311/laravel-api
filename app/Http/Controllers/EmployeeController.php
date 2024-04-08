<?php

namespace App\Http\Controllers;

use App\Models\employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //get data controller
    public function get_all_employees (Request $request)
    {
        //getting the data using the api 
        $employee = employee::all();
        return response()->json($employee);

    }

    //create data 
    public function create_employee (Request $request)
    {
        //craeting instance
        $newEmployee = Employee::create($request->all());
        // $r->message="";
        // $r-> status=200;
        // return response()->json($r);
        return response()->json($newEmployee);
    }

    //delete data
    public function delete_employee ($id)
    {
        //search the db for the id 
        $employee = Employee ::find($id);

        //delete the employee
        $employee -> delete();

        //provide response in an array
        $res = [
            "message"=>"deleted successfully",
            "status"=> 200,
            "data"=>$employee,
        ];

        return response()->json($res);

    }
}
