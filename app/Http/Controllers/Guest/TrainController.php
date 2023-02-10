<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index()
    {
        //trains è la cartella in view, home è il file da aprire
        $trains = Train::all();
        return view('trains.train', compact('trains'));
    }
}
