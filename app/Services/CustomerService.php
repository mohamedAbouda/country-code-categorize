<?php

namespace App\Services;


class CustomerServices {

    protected $customerRepository;

    public function __construct($customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

}
