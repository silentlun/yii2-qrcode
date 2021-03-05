<?php
namespace silentlun\qrcode\formats;

class Bitcoin extends FormatAbstract
{
    /**
     * @var string the Bitcoin address
     */
    public $address;

    /**
     * @var string the payable amount
     */
    public $amount;

    /**
     * @inheritdoc
     */
    public function getText()
    {
        return "bitcoin:{$this->address}?amount={$this->amount}";
    }
}
