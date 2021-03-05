<?php
namespace silentlun\qrcode\formats;

use yii\base\Object;

abstract class FormatAbstract extends Object
{
    /**
     * @return string the formatted string to be encoded
     */
    abstract public function getText();

    /**
     * @return string the string representation of the object
     */
    public function __toString()
    {
        return $this->getText();
    }
}