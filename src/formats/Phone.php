<?php
namespace silentlun\qrcode\formats;

class Phone extends FormatAbstract
{

    /**
     * @var string the phone
     */
    public $phone;

    /**
     * @return string
     */
    public function getText()
    {
        return "TEL:{$this->phone}";
    }
}