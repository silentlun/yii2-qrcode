<?php
namespace silentlun\qrcode\formats;

class Mms extends Sms
{
    /**
     * @return string
     * @codeCoverageIgnore
     */
    public function getText()
    {
        $data = [];
        $data[] = "MMSTO";
        $data[] = $this->phone;
        $data[] = $this->msg;

        return implode(":", array_filter($data));
    }
}