<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DriverinfoController extends Controller
{
    public function index() {
        $driver_infos = DB::table('driver_infos')
                            ->join('ranks', 'ranks.id', '=', 'driver_infos.rank_id')
                            ->join('drivers', 'drivers.id', '=', 'driver_infos.rank_id')
                            ->select('driver_infos.*', 'ranks.rank_name', 'drivers.first_name', 'drivers.last_name')
                            ->get();
        return view('admin.driver_info')->with(['driver_infos' => $driver_infos]);
    }
}
