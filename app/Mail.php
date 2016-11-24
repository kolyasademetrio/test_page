<?php
class Mail {

    private $from;
    private $from_name;
    private $phone;
    private $descr;
    private $dt;
    private $ip;
    private $type = "text/html";
    private $encoding = "utf-8";

    public function __construct($from, $from_name, $phone, $descr, $dt, $ip) {
        $this->from = $from;
        $this->from_name = $from_name;
        $this->phone = $phone;
        $this->descr = $descr;
        $this->dt = $dt;
        $this->ip = $ip;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function setEncoding($encoding) {
        $this->encoding = $encoding;
    }

    public function send($to, $subject) {
        $message = "Phone: " . "=?utf-8?B?" . base64_encode($this->phone) . "?=\r\n" .
                   "Description: " . "=?utf-8?B?" . base64_encode($this->descr) . "?=\r\n" .
                   "User ip: " . "=?utf-8?B?" . base64_encode($this->ip) . "?=\r\n" .
                   "Date and time of message: " . "=?utf-8?B?" . base64_encode($this->dt) . "?=\r\n";

        $from = "=?utf-8?B?".base64_encode($this->from_name)."?="." <".$this->from.">";

        $headers = "From: " . $from . "\r\n" . 
                    "Reply-To: " . $from . "\r\n" . 
                    "Content-type: " . $this->type . "; charset=" .$this->encoding . "\r\n";
       
        $subject = "=?utf-8?B?".base64_encode($subject)."?=";

        return mail($to, $subject, $message, $headers);
    }
}
