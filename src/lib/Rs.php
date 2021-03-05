<?php
namespace silentlun\qrcode\lib;

class Rs
{

    /**
     * @var array
     */
    public static $items = [];

    /**
     * @param $symSize
     * @param $gfPoly
     * @param $fcr
     * @param $prim
     * @param $nRoots
     * @param $pad
     *
     * @return RsItem|null
     */
    public static function initRs($symSize, $gfPoly, $fcr, $prim, $nRoots, $pad)
    {
        foreach (static::$items as $rs) {
            if ($rs->pad != $pad)
                continue;
            if ($rs->nRoots != $nRoots)
                continue;
            if ($rs->mm != $symSize)
                continue;
            if ($rs->gfPoly != $gfPoly)
                continue;
            if ($rs->fcr != $fcr)
                continue;
            if ($rs->prim != $prim)
                continue;

            return $rs;
        }

        $rs = RsItem::initRsChar($symSize, $gfPoly, $fcr, $prim, $nRoots, $pad);
        array_unshift(static::$items, $rs);

        return $rs;
    }

}