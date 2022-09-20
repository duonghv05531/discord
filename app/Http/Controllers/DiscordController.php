<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Discord\Discord;
use Discord\Parts\Channel\Message;
use Discord\WebSockets\Event;

class DiscordController extends Controller
{
    public function index(){
        return view('welcome');
    }
}
