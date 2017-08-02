<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManualController extends Controller
{
    function index(){
        return view('admin.manuals.index');
    }
}
