<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{
    public function list(){
    	$customers = Customer::all();


		return view ('internals.customers', [
			'customers' => $customers,
		]);
    }

    public function store(Request $request){

    	$data = request()->validate([
    		'name' => 'required|min:3',
    		'email' => 'required|email',
    		'message' => 'required',
    	]);

    	$customer = new Customer();
    	$customer->name = $request->name;
    	$customer->email = $request->email;
    	$customer->message = $request->message;
    	$customer->save();

    	return back();
    }
}
