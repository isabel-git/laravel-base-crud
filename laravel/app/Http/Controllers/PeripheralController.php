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

    public function create() {

        return view('pages.peripheral-create');
    }
    public function store(Request $request) { //riceve un paramentro in ingresso

       // dd($request -> all());

       $newPeripheral = new Peripheral;

       $newPeripheral -> name = $request -> get('name'); //valorizzo ogni attributo
       $newPeripheral -> model = $request -> get('model');
       $newPeripheral -> price = $request -> get('price');
       $newPeripheral -> watt = $request -> get('watt');

       $newPeripheral -> save(); //salva nel database

       // return redirect() -> route('peripheral-index'); //ritorna nalla indexpage

       $peripheral = Peripheral::create($request -> all()); //all'interno è contenuto l'id

       return redirect() -> route('peripheral-show', $peripheral -> id); //ritorna nalla showpage

    }
}
