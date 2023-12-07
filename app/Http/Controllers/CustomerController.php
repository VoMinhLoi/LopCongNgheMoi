<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    protected $customer;
    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }



    public function store(CustomerRequest $request){
        // dd($request);
        try{
            $customer = Customer::create($request->validated());
            $data = new CustomerResource($customer);
            return response()->json([
                'data'=> $data,
                'state' => 'Successful'
            ]);
        }catch(Exception $e) {
            return response()->json([
                'message'=> 'Failfully'
            ]);
        }
    }

    public function index(){
        $customer = Customer::all();
        return view('get-list',['customer'=>$customer]);
    }

    public function create(){
        return view('create_customer');
    }
    public function insert(CustomerRequest $request){
        
        $customer = Customer::create($request->validated());
        // dd($customer);
        // $customer = Customer::created($request->validate());
        if($customer){
            return redirect()->route('customers.index');
        }
        return view('create_customer');
    }
    public function show(Customer $customer){
        return view('detail_customer',['customer' => $customer]);
    }
    public function edit(Customer $customer){
        return view('edit_customer',['customer'=>$customer]);
    }
    public function update(Customer $customer, CustomerRequest $customerRequest){
        $customer->update($customerRequest->validated());
        return redirect()->route('customers.index');
    }
    public function delete(string $idCustomer){
        $customer = $this->customer->where('id', $idCustomer)->firstOrFail();
        $customer->delete();
        return redirect()->route('customers.index');
    }
    // public function delete(Customer $customer){
    //     $customer->delete();
    //     return redirect()->route('customers.index');
    // }
}