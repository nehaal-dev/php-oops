<?php 
// Level 2 — Notification System 🟡
// Parent class Notification:
// Property: $time — "10:00 AM"
// Constructor mein $time lo
// Method send() — "Sending notification..."
// EmailNotification — child:
// Extra property: $email
// Constructor: $time, $email
// send() override — "Notification sent via Email to user@gmail.com"
// getLog() — "Email Log: Sent at 10:00 AM"
// SMSNotification — child:
// Extra property: $phone
// Constructor: $time, $phone
// send() override — "Notification sent via SMS to +91-9999999999"
// getLog() — "SMS Log: Sent at 10:00 AM"
// PushNotification — child:
// Extra property: $deviceId
// Constructor: $time, $deviceId
// send() override — "Notification sent via Push to Device #XYZ123"
// getLog() — "Push Log: Sent at 10:00 AM"


class Notification{
    protected $time;

    function __construct($time) {
        $this->time=$time; 
    }

    function send(){
        return ' Sending Notification at starting time   ' .$this->time .'<br>';
    }
}

class Email_Notification extends Notification{
    private $email;

    function __construct($time,$email){
        parent::__construct($time);
        $this->email=$email;
    }

    function send(){
        return '     Notification sent via Email to   ' .$this->email;
    }

    function get_log(){
        return "   ||    Email Log: Sent at    ".$this->time  .' <br>';
    }
}

class Sms_Notification extends Notification{
    private $phone;
    function __construct($time , $phone){  
        parent::__construct($time) ;
        $this->phone=$phone;

    }

    function send(){
        return '  Notification sent via SMS to   ' .$this->phone;
    }

    function get_log(){
        return ' ||  SMS Log: Sent at    '. $this->time  .'<br>';
    }
}

class PushNotification extends Notification{
    private $deviceId;

    function __construct($time,$deviceId){
        parent::__construct($time);
        $this->deviceId=$deviceId;
    }

    function send(){
        return   '    Notification sent via Push to Device    '.$this->deviceId;
    }

    function get_log(){
        return '  ||  Push Log: Sent at      '.$this->time .'<br>';
    }
}


$notification=new Notification('5am');
echo $notification->send();


$email=new Email_Notification('6 am' , 'nehal@gmail.com');
echo $email->send();
echo $email->get_log();


$sms=new Sms_Notification('7 am' , 'Redmi');
echo $sms->send();
echo $sms->get_log();


$push_notification=new PushNotification('9 am' , 'Redmix123');
echo $push_notification->send();
echo $push_notification->get_log();










 ?>




