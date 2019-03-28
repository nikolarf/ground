<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use App\Company;

class CustomersController extends Controller
{
    public function list(){

        $activeCustomers = Customer::active()->get();
        $inactiveCustomers = Customer::inactive()->get();
        $companies = Company::all();

        //dd($activeCustomers);
    	$customers = Customer::all();

		return view ('internals.customers', compact('activeCustomers', 'inactiveCustomers', 'companies'));
    }

    public function store(Request $request){

    	$data = request()->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
    		'message' => 'required',
            'active' => 'required',
            'company_id' => 'required',
    	]);

        /*
    	$customer = new Customer();
    	$customer->name = $request->name;
    	$customer->email = $request->email;
    	$customer->message = $request->message;
        $customer->active = $request->active;
    	$customer->save();
        */

        Customer::create($data);

    	return back();
    }
}
