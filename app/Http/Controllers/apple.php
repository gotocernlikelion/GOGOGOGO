<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apple extends Controller
{
    //
    public function __construct(){
      $this->middleware('auth')->only('show','read');
    }

    public function show(){
      return '1';
    }
    public function read(){
      return '2';
    }
    public function create(){
      return '3';
    }
}
