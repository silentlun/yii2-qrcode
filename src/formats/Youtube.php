<?php
namespace silentlun\qrcode\formats;

class Youtube extends FormatAbstract
{
    /**
     * @var string the video ID
     */
    public $videoId;

    /**
     * @return string the formatted string to be encoded
     */
    public function getText()
    {
        return "youtube://{$this->videoId}";
    }

}