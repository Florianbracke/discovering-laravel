<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Models\this;

class FormController extends Controller
{
   

    public function formValidation (Request $request) {
        
    }

    public function insertDB (Request $request){
        
        $validated = $request->validate([
            'first_name' => 'required|max:25',
            'email' => 'required|email:rfc,dns', 
        ]);
                                                  // DB::table('this')->insert([           == syntax regular laravel
        this::create([
            'first_name' =>  $request->first_name,
            'email' => $request->email
        ]);

    return redirect('/');

    }

}


