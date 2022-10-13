<?php

namespace App\Repositories;

use App\Models\Customer;

class CustomerRepository
{
   
    public function list()
    {
        return Customer::all();
    }

}