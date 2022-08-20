<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function index()
    {
        return view('admin.unit.add');
    }

    public function create(Request $request)
    {
        Unit::newUnit($request);
        return redirect()->back()->with('message', 'Unit info create successfully.');
    }

    public function manage()
    {
        return view('admin.unit.manage', ['units' => Unit::orderBy('id', 'desc')->get()]);
    }
}
