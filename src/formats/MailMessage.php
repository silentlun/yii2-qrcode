<?php
namespace silentlun\qrcode\formats;

use silentlun\qrcode\traits\EmailTrait;

class MailMessage extends FormatAbstract
{
    use EmailTrait;

    /**
     * @var string the subject
     */
    public $subject;
    /**
     * @var string the body of the mail message
     */
    public $body;

    /**
     * @inheritdoc
     */
    public function getText()
    {
        return "MATMSG:TO:{$this->email};SUB:{$this->subject};BODY:{$this->body};;";
    }
}