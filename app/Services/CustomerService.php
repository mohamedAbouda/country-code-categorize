<?php

namespace App\Services;


class CustomerService {

    protected $customerRepository;

    public function __construct($customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function list()
    {
        return $this->customerRepository->list();
    }

}
