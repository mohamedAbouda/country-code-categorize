<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    const COUNTRY_CODES = [
        '+237' => 'Cameroon',
        '+251' => 'Ethiopia',
        '+212' => 'Morocco',
        '+258' => 'Mozambique',
        '+256' => 'Uganda',
    ];


    const COUNTRY_REGEX = [
        'Cameroon'   => '\ (237\)\ ?[2368]\d{7,8}$',
        'Ethiopia'   => '\ (251\)\ ?[1-59]\d{8}$',
        'Morocco'    => '\ (212\)\ ?[5-9]\d{8}$',
        'Mozambique' => '\ (258\)\ ?[28]\d{7,8}$',
        'Uganda'     => '\ (256\)\ ?\d{9}$',
    ];

    protected $appends = ['code', 'country', 'state', 'phone_number'];

    public function getCodeAttribute()
    {
        preg_match_all("#\((.*?)\)#", $this->phone, $matches);

        return !empty($matches[1][0]) ? '+' . $matches[1][0] : null;
    }

    public function getCountryAttribute()
    {
        return self::COUNTRY_CODES[$this->code];
    }

    public function getPhoneNumberAttribute()
    {
        $arr = preg_split('/\(.*?\)/',$this->phone);

        return trim(array_filter($arr)[1]);
    }

    public function getStateAttribute()
    {
        preg_match('/^(?:(?:(?:\+|00)212[\s]?(?:[\s]?\(0\)[\s]?)?)|0){1}(?:5[\s.-]?[2-3]|6[\s.-]?[13-9]){1}[0-9]{1}(?:[\s.-]?\d{2}){3}$/',$this->code.$this->phone_number , $matches, PREG_OFFSET_CAPTURE);
        return count($matches) > 0;
    }
}
