<?php

namespace App\Models;

use App\Core\ValidateNumbers;
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

    protected $fillable = [
        'name', 'phone', 'is_valid'
    ];

    public $timestamps = false;

    protected $appends = ['code', 'country', 'phone_number'];

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
        $arr = preg_split('/\(.*?\)/', $this->phone);

        return trim(array_filter($arr)[1]);
    }

    public function getStateAttribute()
    {
        return ValidateNumbers::validatePhoneNumber($this->code . $this->phone_number, $this->country);
    }
}
