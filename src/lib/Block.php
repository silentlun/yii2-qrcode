<?php
namespace silentlun\qrcode\lib;

class Block
{
    /**
     * @var int the data length
     */
    public $dataLength;
    /**
     * @var array code block data
     */
    public $data = [];
    /**
     * @var int ecc length
     */
    public $eccLength;
    /**
     * @var array ecc
     */
    public $ecc = [];

    /**
     * @param int $dl data length
     * @param array $data the data of the code block
     * @param int $el length of the ecc
     * @param array $ecc specs
     * @param RsItem $rs
     *
     * @see Specifications::rsEccCodes2
     */
    public function __construct($dl, $data, $el, $ecc, RsItem $rs)
    {
        $rs->encodeRsChar($data, $ecc);

        $this->dataLength = $dl;
        $this->data = $data;
        $this->eccLength = $el;
        $this->ecc = $ecc;
    }
}