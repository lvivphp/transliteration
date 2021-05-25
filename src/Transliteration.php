<?php

namespace Lvivphp\Transliteration;

class Transliteration
{
    public function convert($string, $from = 'en', $to = 'uk'): string
    {
        $class = '\Lvivphp\Transliteration\Lang\\'.ucfirst($to);

        if (($instance = new $class()) instanceof ILang) {
            return $instance->convert($string);
        }

        return '';
    }
}
