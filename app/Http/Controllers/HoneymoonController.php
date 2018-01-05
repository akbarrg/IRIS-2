<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Honeymoon;

class HoneymoonController extends Controller
{
    public function index() {
      $honeymoons = Honeymoon::all();

      return view('honeymoon', [ 'honeymoons' => $honeymoons ]);
    }
}
