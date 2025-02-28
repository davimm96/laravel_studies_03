<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function showPage(): View
    {
        $data = [
            'João' => [
                'Português',
                'inglês'
            ],
            'Maria' => [
                'Português',
                'Espanhol'
            ],
            'Ana' => [
                'Portugues',
                'Inglês',
                'Frances'
            ]
        ];
        return view('home', ['pessoas_linguas' => $data]);
    }
}
