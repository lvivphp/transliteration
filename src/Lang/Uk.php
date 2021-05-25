<?php

namespace Lvivphp\Transliteration\Lang;

use Lvivphp\Transliteration\ILang;

class Uk implements ILang
{
    private array $alphabetPattern = [];

    private array $alphabet = [
        'Я' => 'Ya', 'Є' => 'Ye', 'Ю' => 'Yu', 'Ї' => 'Yi', 'Й' => 'Y',
        'Зг' => 'Zgh', 'Щ' => 'Shch', 'Ш' => 'Sh', 'Ч' => 'Ch', 'Ц' => 'Ts', 'Ж' => 'Zh', 'Х' => 'Kh',
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'H', 'Ґ' => 'G', 'Д' => 'D', 'Е' => 'E', 'З' => 'Z',
        'И' => 'Y', 'І' => 'I', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O', 'П' => 'P',
        'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Ь' => '',

        'я' => 'ia', 'є' => 'ie', 'ю' => 'iu', 'ї' => 'i', 'й' => 'i',
        'зг' => 'zgh', 'щ' => 'shch', 'ш' => 'sh', 'ч' => 'ch', 'ц' => 'ts', 'ж' => 'zh', 'х' => 'kh',
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'h', 'ґ' => 'g', 'д' => 'd', 'е' => 'e', 'з' => 'z',
        'и' => 'y', 'і' => 'i', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p',
        'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'ь' => '',

        '\'' => '',
    ];

    public function convert($text)
    {
        return str_replace(
            array_values($this->alphabet),
            array_keys($this->alphabet),
            preg_replace(array_keys($this->alphabetPattern), array_values($this->alphabetPattern), $text)
        );
    }
}
