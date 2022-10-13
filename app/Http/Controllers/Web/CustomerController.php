<?php

namespace App\Http\Controllers\Web;

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

    public function index(Request $request)
    {
        $customers = $this->customerSerivce->list($request);
        return view('customers')->with([
            'customers' => $customers
        ]);
    }
}
