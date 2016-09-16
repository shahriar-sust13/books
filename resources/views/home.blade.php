@extends('layout')

@section('content')
	
	<div class="slider-section">
		<div class="container">
			<div class="col-md-offset-8 col-md-3">
				<a class="subtle-button btn-lg text-center custom-btn" href="{{ url('share') }}">Share Books</a>
				<a class="subtle-button btn-lg custom-btn text-center" href="{{ url('share') }}">Borrow Books</a>
			</div>
		</div>
	</div>

	<div class="">
		<div class="container headline-container">
			<h1 class="text-center">How It Works</h1>
			<div class="headline-border col-md-offset-5"></div>
		</div>
		<div class="container middle-container">
			<div class="timeline-border">
				
			</div>
			<div class="col-md-8 col-md-offset-2 full-box-container">
				<div class="col-md-6 box-icon-container">
					
				</div>
				<div class="col-md-6 box-text-container">
					<h2 class="text-left">How do we do it?</h2>
					<p class="text-left">Using our revolutionary “middle-out” algorithm, we find long-range structure in your files to create the most efficient encoding of your data. It’s just as exciting as it sounds.</p>
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2 full-box-container">
				<div class="col-md-6 box-text-container">
					<h2 class="text-left">How do we do it?</h2>
					<p class="text-left">Using our revolutionary “middle-out” algorithm, we find long-range structure in your files to create the most efficient encoding of your data. It’s just as exciting as it sounds.</p>
				</div>
				<div class="col-md-6 box-icon-container">
					
				</div>
			</div>
			<div class="col-md-8 col-md-offset-2 full-box-container">
				<div class="col-md-6 box-icon-container">
					
				</div>
				<div class="col-md-6 box-text-container">
					<h2 class="text-left">How do we do it?</h2>
					<p class="text-left">Using our revolutionary “middle-out” algorithm, we find long-range structure in your files to create the most efficient encoding of your data. It’s just as exciting as it sounds.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="team-section">
		<div class="container team-container">
			<div class="team-headline-container text-center">
				<h3>Meet The Team</h3>
			</div>
			<div class="member-container">
				<img class="img-circle member-img" src="{{url("images/shahriar.jpg")}}" height="150px">
				<h4 class="text-center member-name">Moudud Khan Shahriar</h4>
				<h5 class="text-center member-position">CEO, Books</h5>
				<h5 class="text-center member-inst">CSE, SUST</h5>
			</div>
			<div class="member-container">
				<img class="img-circle member-img" src="{{url("images/nazim.jpg")}}" height="150px">
				<h4 class="text-center member-name">Md. Nazim Uddin</h4>
				<h5 class="text-center member-position">CTO, Books</h5>
				<h5 class="text-center member-inst">CSE, SUST</h5>
			</div>
		</div>
	</div>

@endsection