<?php
// Redmouse njsfkjsns
class Math
{

    public static function getPow($num, $pow)
    {
        return pow($num, $pow);
    }

}

echo Math::getPow(2, 3);