<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show($id){
         $users = [
        [
            'name' => 'Jawad',
            'age' => '21'
        ],
        [
            'name' => 'Ali',
            'age' => '22'
        ],
        [
            'name' => 'Ahmed',
            'age' => '23'
        ]
    ];
    return view('about-us',compact('users'),compact('id'));
    }
}
