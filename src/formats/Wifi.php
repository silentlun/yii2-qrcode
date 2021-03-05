<?php
namespace silentlun\qrcode\formats;

use yii\base\InvalidConfigException;

class Wifi extends FormatAbstract
{

    /**
     * @var string the authentication type. e.g., WPA
     */
    public $authentication;
    /**
     * @var string the network SSID
     */
    public $ssid;
    /**
     * @var string the wifi password
     */
    public $password;
    /**
     * @var string hidden SSID (optional; equals false if omitted): either true or false
     */
    public $hidden;

    /**
     * @throws InvalidConfigException
     */
    public function init()
    {
        if ($this->ssid === null) {
            throw new InvalidConfigException("'ssid' cannot be null");
        }
    }

    /**
     * @inheritdoc
     */
    public function getText()
    {
        $data = [];
        $data[] = $this->authentication !== null ? "T:{$this->authentication}" : "";
        $data[] = "S:{$this->ssid}";
        $data[] = $this->password !== null ? "P:{$this->password}" : "";
        $data[] = $this->hidden !== null ? "H:{$this->hidden}" : "";
        return "WIFI:" . implode(";", $data) . ";";
    }
}