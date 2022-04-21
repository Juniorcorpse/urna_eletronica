<?php

DB::table('users')
           ->whereBetween('votes', [1, 100])
           ->get();


// scope no model
// public function scopeDateBetween($query, $start, $end) {
// return $query->whereBetween('created_at', [$start, $end]);
// }

// usando whereBetween
$start = Carbon::parse($request->start)->startOfDay();  //2016-09-29 00:00:00.000000
$end = Carbon::parse($request->end)->endOfDay(); //2016-09-29 23:59:59.000000
$clicks->dateBetween($start, $end);

// usando whereBetween relationship locations()
App\VehicleModel::find(3)->locations()->whereBetween('time', $range)->get();


//controller

$from = date('2018-01-01');
$to = date('2018-05-02');

Reservation::whereBetween('reservation_from', [$from, $to])->get();

//namespace App\Http\Controllers;

use App\Mail\CheckUser;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;

class TestController extends Controller
{
    public function index()
    {   
       return view('welcome');
    }

    public function daily_report(Request $request)
    {
       $start_date = Carbon::parse($request->start_date)
                             ->toDateTimeString();

       $end_date = Carbon::parse($request->end_date)
                             ->toDateTimeString();

       return User::whereBetween('created_at', [
         $start_date, $end_date
       ])->get();
    }
}