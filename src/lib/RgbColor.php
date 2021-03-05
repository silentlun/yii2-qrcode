<?php
namespace silentlun\qrcode\lib;

use yii\base\InvalidParamException;
use yii\base\BaseObject;

class RgbColor extends BaseObject
{
    /**
     * @var array
     */
    private $_color = array(
        'red' => null,
        'green' => null,
        'blue' => null
    );

    /**
     * Constructor
     *
     * @param int $red
     * @param int $green
     * @param int $blue
     */
    public function __construct($red = 255, $green = 255, $blue = 255)
    {
        $this->red = $red;
        $this->green = $green;
        $this->blue = $blue;
    }

    /**
     * @inheritdoc
     * @throws \yii\base\InvalidParamException
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->_color)) {
            if ($value >= 0 && $value <= 255)
                return $this->_color[$name] = $value;
            else
                throw new InvalidParamException('Wrong RGB value');
        }
        parent::__set($name, $value);
    }

    /**
     * @inheritdoc
     */
    public function __get($name)
    {

        if (array_key_exists($name, $this->_color)) {
            return $this->_color[$name];
        }

        return parent::__get($name);
    }

    /**
     * @inheritdoc
     */
    public function __isset($name)
    {
        return isset($this->_color[$name]) || parent::__isset($name);
    }

    /**
     * @inheritdoc
     */
    public function __unset($name)
    {
        if (isset($this->_color[$name])) {
            $this->_color[$name] = null;
        } else {
            parent::__unset($name);
        }
    }
}

