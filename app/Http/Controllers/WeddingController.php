<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wedding;

class WeddingController extends Controller
{
    public function index() {
      $weddings = Wedding::all();

      return view('wedding', [ 'weddings' => $weddings ]);
    }
}
