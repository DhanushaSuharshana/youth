<?php

class Colors
{

    static function random_color_part()
    {
        return str_pad(dechex(mt_rand(0, 255)), 2, '0', STR_PAD_LEFT);
    }

    static function random_color()
    {
        return self::random_color_part() . self::random_color_part() . self::random_color_part();
    }

    static function getRandomColors($count)
    {
        $colors = [];
        for ($i = 0; $i < $count; $i++) {
            $colors['color' . $i]['color'] = [];
            $colors['color' . $i]['color'] = "#" . self::random_color();
        }
        return $colors;
    }
}
