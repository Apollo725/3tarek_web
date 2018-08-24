<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

class DrivershowController extends Controller
{
    //
    public function index(){
        $drivers = Driver::all();
        // echo count($drivers);
        return view('admin.drivers') -> with(['drivers' => $drivers]);
    }
}