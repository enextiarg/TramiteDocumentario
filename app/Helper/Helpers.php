<?php
/**
 * User: kodev
 * Date: 20/12/16
 * Time: 08:14 AM
 */

namespace App\Helper;


class Helpers
{
    public static function model2Array($object, $id, $value)
    {
        $array = array();
        foreach ($object as $v) {
            $data = explode('.', $value);
            $val = '';
            foreach ($data as $d) {
                $val .= $v[$d]. ' ';
            }
            $array[$v[$id]] = $val;
        }
        return $array;
    }
}