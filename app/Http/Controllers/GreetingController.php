<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{


    public function random()
    {
        $msgs = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        $msg_key = array_rand($msgs);
        $msg = $msgs[$msg_key];
        return view('messages.freeword', ['freeword' => $msg]);
    }


    public function greeting($operator)
    {
        $time = '';
        $result = '';

        switch ($operator) {
            case 'morning':
                $time = '朝';
                $result = 'おはようございます';
                break;
            case 'afternoon':
                $time = '昼';
                $result = 'こんにちは';
                break;
            case 'evening':
                $time = '夕方';
                $result = 'こんばんは';
                break;
            case 'night':
                $time = '夜';
                $result = 'おやすみなさい';
                break;
        }
        return view('messages.greeting', ['time' => $time, 'result' => $result]);
    }


    public function freeword($word)
    {

        return view('messages.word', ['word' => $word]);
    }
}
