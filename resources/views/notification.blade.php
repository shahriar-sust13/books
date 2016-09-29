
@extends('layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-xs-12 notification-box">
				<div class="col-md-12 col-xs-12 notification-container">
					<div class="col-md-2 time-section inline-block text-center">
						<h5 class="text-center inline-block">18:04<br>26.09.16</h5>
					</div>
					<div class="col-md-1 inline-block text-center notification-icon-container">
						<img src="{{url("/images/borrow-book-icon.png")}}">
					</div>
					<div class="col-md-8 notification-msg">
						<h5><a href="#">Faisal</a> requested for <a href="#">Python Programming for Dummies</a></h5>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection