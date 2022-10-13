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

    protected $appends = ['code', 'country'];

    public function getCodeAttribute()
    {
        preg_match_all("#\((.*?)\)#", $this->phone, $matches);
        
        return !empty($matches[1][0]) ? '+' . $matches[1][0] : null;
    }

    public function getCountryAttribute()
    {
        return self::COUNTRY_CODES[$this->code];
    }
}
