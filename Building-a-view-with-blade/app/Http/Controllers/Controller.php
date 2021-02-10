<?php

namespace App\Http\Controllers;

use Illuminate\Http\Controllers;

class HomeController extends Controller {
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
