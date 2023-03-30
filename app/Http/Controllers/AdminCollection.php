<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCollection extends Controller
{
    public function collect(){
        return view ('pages.Admin.AdminCollection');
    }
}
