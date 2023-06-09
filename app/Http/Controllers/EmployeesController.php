<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Validation\Rule;

class EmployeesController extends Controller
{
    public function index() {
        return view('employees.index', [
            'employees' => Employees::all()
        ]);
    }

    public function create() {
        return view('employees.create');
    }

    public function store(Request $request) {
        Employees::create(
            $request->validate([
                'name' => 'required|min:3|max:25',
                'surname' => 'required|min:2|max:35',
                'email' => 'required|email|unique:employees'
            ])
        );
        return redirect(route('employees.index'));
    }

    public function edit(Employees $employee) {
        return view('employees.edit', [
            'employee' => $employee
        ]);
    }

    public function update(Employees $employee, Request $request) {
        $employee->update(
            $request->validate([
                'name' => 'required|min:3|max:25',
                'surname' => 'required|min:2|max:35',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('employees', 'email')->ignore($employee->id)
                ]
            ])
        );
        return redirect(route('employees.index'))->with('success', 'Updated completed!');
    }

    public function delete(Employees $employee) {
        $employee->delete();
        return redirect(route('employees.index'))->with('success', 'Deleted completed!');
    }
}
