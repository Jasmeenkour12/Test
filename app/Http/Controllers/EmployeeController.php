<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::whereNull('parent_id')->with('children')->get();
        return view('employee.index', compact('employees'));
    }
}
