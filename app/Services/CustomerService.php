<?php

namespace App\Services;


class CustomerService {

    protected $customerRepository;

    public function __construct($customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function list($request)
    {
        return $this->customerRepository->list($request);
    }

}
