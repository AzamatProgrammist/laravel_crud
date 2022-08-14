<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user($name=null){
        $name = "Azamat";
        $plans = ['plan1', 'plan2', 'plan3'];
        return view('users.show', [
            'username' => $name,
            'plaa' => $plans
        ]);
    }

    public function list(){
        $users = [
            'Azamat',
            'Davron',
            'Sherzod',
            'Begzod',
            'Bolbek'
        ];
        $plans = ['plan1', 'plan2', 'plan3'];
        return view('users.list', compact('users', 'plans'));
    }
}
