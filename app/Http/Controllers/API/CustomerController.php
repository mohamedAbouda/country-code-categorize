<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Repositories\CustomerRepository;
use App\Services\CustomerService;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerSerivce;

    public function __construct()
    {
        $this->customerSerivce = new CustomerService(new CustomerRepository());
    }

    public function index()
    {
        return $this->customerSerivce->list();
    }
}
