<?php
namespace silentlun\qrcode\formats;

class Sms extends FormatAbstract
{
    /**
     * @var string the phone
     */
    public $phone;
    /**
     * @var string the message
     */
    public $msg;

    /**
     * @return string
     */
    public function getText()
    {
        $data = [];
        $data[] = "SMSTO";
        $data[] = $this->phone;
        $data[] = $this->msg;

        return implode(":", array_filter($data));
    }
}