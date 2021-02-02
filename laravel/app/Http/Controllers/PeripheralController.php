<?php

namespace App\Http\Controllers;

use App\Peripheral;

use Illuminate\Http\Request;

class PeripheralController extends Controller
{
    public function index() {

        return view('pages.peripheral');
    }
}
