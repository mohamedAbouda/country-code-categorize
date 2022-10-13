<?php

namespace App\Core;


class ValidateNumbers
{

    public static function validatePhoneNumber($phone, $country): bool
    {
        $matches = [];

        switch ($country) {
            case 'Morocco':
                preg_match('/^(?:(?:(?:\+|00)212[\s]?(?:[\s]?\(0\)[\s]?)?)|0){1}(?:5[\s.-]?[2-3]|6[\s.-]?[13-9]){1}[0-9]{1}(?:[\s.-]?\d{2}){3}$/', $phone, $matches, PREG_OFFSET_CAPTURE);
                break;
            case 'Cameroon':
                preg_match('/^\+237\d{7,8}/', $phone, $matches, PREG_OFFSET_CAPTURE);
                break;
            case 'Ethiopia':
                preg_match('/^\+251\d{8}/', $phone, $matches, PREG_OFFSET_CAPTURE);
                break;
            case 'Mozambique':
                preg_match('/^\+258\d{7,8}/', $phone, $matches, PREG_OFFSET_CAPTURE);
                break;
            case 'Uganda':
                preg_match('/^\+256\d{9}/', $phone, $matches, PREG_OFFSET_CAPTURE);
                break;
        }

        return count($matches) > 0;
    }
}
