<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Controllers;

class HomeController extends Controller
{
        public function render()
        {
            return view ('home');
        }
}

