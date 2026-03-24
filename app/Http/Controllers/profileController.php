<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    public function show(){
       $users =  ['id'=> 1,
        'name'=> 'Jawad',
        'last_name'=> 'Kadery',
        'gender'=> 'male',
        'nationality'=> 'Lebanon',
        'age'=> 21,
        'address'=> 'Fawar',
        'skills'=>['developer','gamer','cashier'],
        'img' => 'hero-img.jpg'
        ];
        return view('pages.user.profile',compact('users'));
    }
}
