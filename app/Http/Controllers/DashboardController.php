<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public static function index() {
        $bln = array('Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des');
        return view('pages.dashboard.index', [
           'title' => 'Dashboard | UMK Broadcasting',
           'page' => 'dashboard',
           'bulan' => $bln
        ]);
    }


    public static function visitor() {
        return view('pages.dashboard.visitor', [
           'title' => 'Visitor | UMK Broadcasting',
           'page' => 'visitor',
           'now' => Carbon::now()
        ]);
    }


    public static function content() {
        return view('pages.dashboard.content', [
           'title' => 'Content | UMK Broadcasting',
           'page' => 'content'
        ]);
    }
}
