@extends('layouts.master')
@section('content')
<div class="container margin-top-20">
	<div class="row">
		@include('partials.product-sidebar')
		<div class="col-md-8">
			<div class="widget">
				<h3>Feature Products</h3>
				<div class="row">
					<div class="col-md-3">
						<div class="card" >
							  <img class="card-img-top feature-img" src="{{ asset('images/product/'.'galaxy.png') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">	Samsung</h4>
							    <p class="card-text">Taka-500</p>
							    <a href="#" class="btn btn-outline-primary">Add to cart</a>
							  </div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="card" >
							  <img class="card-img-top feature-img" src="{{ asset('images/product/'.'galaxy.png') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">	Samsung</h4>
							    <p class="card-text">Taka-500</p>
							    <a href="#" class="btn btn-outline-primary">Add to cart</a>
							  </div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="card" >
							  <img class="card-img-top feature-img" src="{{ asset('images/product/'.'galaxy.png') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">	Samsung</h4>
							    <p class="card-text">Taka-500</p>
							    <a href="#" class="btn btn-outline-primary">Add to cart</a>
							  </div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="card" >
							  <img class="card-img-top feature-img" src="{{ asset('images/product/'.'galaxy.png') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">	Samsung</h4>
							    <p class="card-text">Taka-500</p>
							    <a href="#" class="btn btn-outline-primary">Add to cart</a>
							  </div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="card" >
							  <img class="card-img-top feature-img" src="{{ asset('images/product/'.'galaxy.png') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">	Samsung</h4>
							    <p class="card-text">Taka-500</p>
							    <a href="#" class="btn btn-outline-primary">Add to cart</a>
							  </div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="card" >
							  <img class="card-img-top feature-img" src="{{ asset('images/product/'.'galaxy.png') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">	Samsung</h4>
							    <p class="card-text">Taka-500</p>
							    <a href="#" class="btn btn-outline-primary">Add to cart</a>
							  </div>
							</div>
					</div>
					<div class="col-md-3">
						<div class="card" >
							  <img class="card-img-top feature-img" src="{{ asset('images/product/'.'galaxy.png') }}" alt="Card image">
							  <div class="card-body">
							    <h4 class="card-title">	Samsung</h4>
							    <p class="card-text">Taka-500</p>
							    <a href="#" class="btn btn-outline-primary">Add to cart</a>
							  </div>
							</div>
					</div>
				</div>
			</div>
			<div class="widget">
				
			</div>
		</div>
	</div>
</div>
@endsection