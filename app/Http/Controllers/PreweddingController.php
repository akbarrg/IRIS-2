<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prewedding;

class PreweddingController extends Controller
{
    public function index()
    {
      $preweddings = Prewedding::all();

      return view('prewedding', [ 'preweddings' => $preweddings ]);
    }
}
