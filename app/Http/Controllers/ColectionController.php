<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ColectionController extends Controller
{
    public function collection(){
        return view ('pages.collection');
    }
}