<?php

namespace App\Services;

class SMSService{


    /**
     * 短信发送方法
     * 在这里定义了一个发送sms的方法,只需要调用这个方法并传入相应的参数就能发送短信
        也就是说 在控制器中调用这个方法就可以实现发送短信
     * @param $phone
     * @param $content
     */
    public function send($phone, $content){
        echo "手机号为：".$phone."请输入正确的验证码111111：".$content;die;
    }

}