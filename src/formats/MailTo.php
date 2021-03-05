<?php
namespace silentlun\qrcode\formats;

use silentlun\qrcode\traits\EmailTrait;

class MailTo extends FormatAbstract
{
    use EmailTrait;

    /**
     * @inheritdoc
     */
    public function getText()
    {
        return "MAILTO:{$this->email}";
    }
}