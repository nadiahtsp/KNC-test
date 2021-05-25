<?php

namespace App\Http\Controllers;

use App\Company;
use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::with(['company'])->paginate(5);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view('employee.create', compact('companies'));
    }
    public function store(Request $r)
    {
        $data = [
            'fullname' => $r->fullname,
            'id_comp' => $r->id_comp,
            'department' => $r->department,
            'email' => $r->email,
            'phone' => $r->phone,
        ];
        // return $data;
        Employee::create($data);
        return redirect()->route('index.employee')->with('status', 'Data ' . $r->fullname . ' Berhasil Disimpan');
    }

    public function show(Employee $employee)
    {
        // $get_employee = Employee::find($employee->id)->first();
        return view('employee.detail', compact('employee'));
    }
    public function edit(Employee $employee)
    {
        $companies = Company::all();
        // $get_employee = Employee::find($employee->id)->first();
        return view('employee.edit', compact('employee', 'companies'));
    }
    public function update(Request $request, Employee $employee)
    {
        $data = [
            'fullname' => $request->fullname,
            'id_comp' => $request->id_comp,
            'department' => $request->department,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
       
        try {
            $employee->update($data);
            return redirect()->route('index.employee')->with('status', 'Data berhasil di update');
        } catch (\Throwable $th) {
            return redirect()->route('index.employee')->with('status', 'Data gagal di update');
            //throw $th;
        }
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('index.employee')->with('status', 'Data ' . $employee->fullaname . ' berhasil dihapus!');
    }
}
