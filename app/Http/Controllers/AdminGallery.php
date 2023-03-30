<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminGallery extends Controller
{
    public function Admingallery(){
        return view ('pages.Admin.AdminGallery');
    }
}
