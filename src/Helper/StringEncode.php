<?php

namespace AndreasGlaser\DoctrineRql\Helper;

/**
 * Class StringEncode
 *
 * @package AndreasGlaser\DoctrineRql\Helper
 * @author  Andreas Glaser
 */
class StringEncode
{
    /**
     * @param $string
     *
     * @return string
     * @author Andreas Glaser
     * @source https://github.com/xiag-ag/rql-parser#string-encoding-in-php
     */
    public static function encode($string)
    {
        return strtr(rawurlencode($string), [
            '-' => '%2D',
            '_' => '%5F',
            '.' => '%2E',
            '~' => '%7E',
        ]);
    }
}