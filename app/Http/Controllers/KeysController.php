<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\Keys;

class KeysController extends Controller
{
    public function index() {
        return view('keys.index', [
            'keys' => Keys::all(),
            'employees' => Employees::all()
        ]);
    }

    public function create() {
        return view('keys.create', [
            'employees' => Employees::all()
        ]);
    }

    public function store(Request $request) {
        Keys::create(
            $request->validate([
                'employee_id' => 'required',
                'key' => 'required|unique:keys',
                'program_name' => 'required'
            ])
        );
        return redirect(route('keys.index'));
    }

    public function edit(Keys $key) {
        return view('keys.edit', [
            'key' => $key,
            'employees' => Employees::all()
        ]);
    }

    public function update(Keys $key, Request $request) {
        $key->update(
            $request->validate([
                'employee_id' => 'required',
                'key' => 'required',
                'program_name' => 'required'
            ])
        );
        return redirect(route('keys.index'))->with('success', 'Updated completed!');
    }

    public function delete(Keys $key) {
        $key->delete();
        return redirect(route('keys.index'))->with('success', 'Deleted completed!');
    }
}
