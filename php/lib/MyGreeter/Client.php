<?php
namespace MyGreeter;
class Client
{
    
    private $message;

    public function getGreeting(){
        $date=date('H');
        if($date>0 && $date<12){
            $this->message="Good morning";
        }elseif($date>12 && $date<18){
            $this->message="Good afternoon";
        }elseif($date>18 && $date<24){
            $this->message="Good evening";
        }

        return $this->message;
    }
}
