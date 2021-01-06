<?php

namespace App\Http\Controllers;

use App\Services\SMSService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function sendSms(){
//        $services = new SMSService();
//        $services->send('18710227216', '这里是内容哦');
        app('sms')->send('18710227216', '这里是内容哦');
    }
}