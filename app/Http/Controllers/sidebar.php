<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sidebar extends Controller
{
    public function home(){
      return view('home');
    }

    public function companyAudit(){
      return view('companyAudit');
    }

    public function balanceSheet(){
      return view('balanceSheet');
    }

    public function logOut(){
      return view('logOut');
    }
}
