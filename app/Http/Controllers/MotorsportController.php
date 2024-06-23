<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vehicle_ad;

class MotorsportController extends Controller
{
    public function index() {
        $vehicles_ads = Vehicle_ad::all();
        return view('welcome', ['vehicles_ads'=> $vehicles_ads]);
    }
    public function create() {
       return view('announcement.create');
    }
}
