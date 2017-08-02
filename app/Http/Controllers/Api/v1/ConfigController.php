<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ConfigController extends Controller
{

    private $email = '654037450@qq.com';
    public function sendEmail(Request $request){
        $data = $request->only('name', 'email', 'phone');
        $data['messageLines'] = explode("\n", $request->get('message'));

        Mail::send('email', $data, function ($message) use ($data) {
            $message->subject('Blog Contact Form: '.$data['name'])
                ->to($this->email)
                ->bcc($this->email)
                ->replyTo($data['email']);
        });
    }

    public function singleType()
    {
        $single_type = config('setting.single_type');
        return json_encode($single_type);
    }
}