<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Discord\Discord;
use Discord\Parts\Channel\Message;
use Discord\WebSockets\Event;

class DiscordController extends Controller
{
    public function index(){
        $b = 1;
        return view('welcome', $b);
    }
}
