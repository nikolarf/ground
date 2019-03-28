<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){

        $activeCustomers = Customer::where('active', 1)->get();
        $inactiveCustomers = Customer::where('active', 0)->get();

        //dd($activeCustomers);
    	$customers = Customer::all();

		return view ('internals.customers', compact('activeCustomers', 'inactiveCustomers'));
    }

    public function store(Request $request){

    	$data = request()->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
    		'message' => 'required',
            'active' => 'required',
    	]);

    	$customer = new Customer();
    	$customer->name = $request->name;
    	$customer->email = $request->email;
    	$customer->message = $request->message;
        $customer->active = $request->active;
    	$customer->save();

    	return back();
    }
}
