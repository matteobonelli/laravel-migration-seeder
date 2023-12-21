<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('data', '2023-12-21')->get();
        return view("trains.index", compact('trains'));
    }
}
