<?php

namespace App\Http\Controllers;

use App\Peripheral;

use Illuminate\Http\Request;

class PeripheralController extends Controller
{
    public function index() {

        $peripherals = Peripheral::all();
        return view('pages.peripheral', compact('peripherals'));
    }
    public function show($id) {

        $peripheral = Peripheral::findOrFail($id);
        return view('pages.peripheral-show', compact('peripheral'));
    }
}
