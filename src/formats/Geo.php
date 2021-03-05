<?php
namespace silentlun\qrcode\formats;

class Geo extends FormatAbstract
{
    public $lat;
    public $lng;
    public $altitude;

    /**
     * @inheritdoc
     */
    public function getText()
    {
        return "GEO:{$this->lat},{$this->lng},{$this->altitude}";
    }
}