@extends('layout')

@section('title', 'Customer List')
	
@section('content')

<row class="col-12">
	<h1>Customers</h1>	
</row>

<row class="col-12">
	<form action="customers" method="POST" class="pb-5">
		<label for="name">Name:</label>
		<div class="form-group pb-2">
			<input type="text" name="name" value="{{old('name')}}" class="form-control">
			<div>{{$errors->first('name')}}</div>
		</div>
		<label for="email">Email:</label>
		<div class="form-group">
			<input type="text" name="email" value="{{old('email')}}" class="form-control">
			<div>{{$errors->first('email')}}</div>
		</div>
		<label for="email">Message:</label>
		<div class="form-group">
			<input type="text" name="message" value="{{old('email')}}" class="form-control">
			<div>{{$errors->first('message')}}</div>
		</div>

		<div class="form-group">
			<label for="active">Status:</label>
			<select name="active" id="active" class="form-control">
				<option value="" disabled>Select customer status</option>
				<option value="1">Active</option>
				<option value="0">Inactive</option>
			</select>
		</div>

		<div class="form-group">
			<label for="company_id">Company:</label>
			<select name="company_id" id="company_id" class="form-control">
				@foreach($companies as $company)
					<option value="{{$company->id}}">{{$company->name}}</option>
				@endforeach
			</select>
		</div>
		
		<button type="submit" class="btn btn-primary">Add Customer</button>
		@csrf
	</form>
</row>

<hr>
<div class="row">
	<row class="col-6">
		<h3>Active Customers</h3>
		<ul>
			@foreach($activeCustomers as $activeCustomer)
				<li>{{$activeCustomer->name}} <span class="text-muted">({{$activeCustomer->email}})</span> {{$activeCustomer->company->name}}</li>

			@endforeach
		</ul>
	</row>
	<row class="col-6">
		<h3>Inactive Customers</h3>
		<ul>
			@foreach($inactiveCustomers as $inactiveCustomer)
				<li>{{$inactiveCustomer->name}} <span class="text-muted">({{$inactiveCustomer->email}})</span> {{$inactiveCustomer->company->name}}</li>
			@endforeach
		</ul>
	</row>
</div>
<div class="row">
	<div class="col-12">
		@foreach($companies as $company)
			<h3>{{$company->name}}</h3>
			<ul>
				@foreach($company->customers as $customer)
					<li>{{$customer->name}}</li>
				@endforeach
			</ul>
		@endforeach
	</div>
</div>
@endsection