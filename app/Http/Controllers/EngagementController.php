<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Engagement;

class EngagementController extends Controller
{
    public function index()
    {
      $engagements = Engagement::all();

      return view('engagement', [ 'engagements' => $engagements ]);
    }
}
