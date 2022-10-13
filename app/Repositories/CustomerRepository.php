<?php

namespace App\Repositories;

use App\Models\Customer;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class CustomerRepository
{

    public function list($request) : LengthAwarePaginator
    {
        return Customer::when(!empty($request->country_code), function ($q) use ($request) {
            return $q->where('phone', 'like', '%(' . str_replace('+', '', $request->country_code) . ')%');
        })->when(isset($request->valid), function ($q) use ($request) {
            return $q->where('is_valid', $request->valid);
        })->paginate($request->per_page ?? 10);
    }
}
