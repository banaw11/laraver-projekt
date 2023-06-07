<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class KeysController extends Controller
{
    public function index() {
        $employees = Employees::all();
        dd('test', $employees);
    }
}
