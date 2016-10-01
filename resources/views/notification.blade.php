
@extends('layout')

@section('content')

	<div class="container notification-body">
		<div class="notification-nav-section row">
			<ul class="nav nav-tabs col-md-offset-1 col-md-10">
				<li role="presentation" class="active"><a data-toggle="tab" href="#request">Request</a></li>
				 <li role="presentation" class=""><a data-toggle="tab" href="#news">News</a></li>
			</ul>
		</div>

		<div class="tab-content">
			<div id="request" class="container request-section tab-pane fade in active">
				<div class="row">
					<div class="notification-bar notification-1 unread-notification col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/request.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Faisal Ahmed Shuvo</a>
								reuqested for 
								<a href="#">Python Programming for Dummies</a>
							</h5>
						</div>
						<div class="col-md-3 col-md-offset-0 col-xs-offset-6 col-xs-6 notification-btn">
							<a href="#" class="btn btn-primary btn-success col-md-1 accept-btn-1">Accept</a>
							<a href="#" class="btn btn-primary btn-danger col-md-1 decline-btn-1">Decline</a>
						</div>
					</div>
					<div class="notification-bar notification-2 unread-notification col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/request.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Arnab Sen Sharma</a>
								reuqested for 
								<a href="#">Computer Architecture</a>
							</h5>
						</div>
						<div class="col-md-3 col-md-offset-0 col-xs-offset-6 col-xs-6 notification-btn">
							<a href="#" class="btn btn-primary btn-success col-md-1 accept-btn-2">Accept</a>
							<a href="#" class="btn btn-primary btn-danger col-md-1 decline-btn-2">Decline</a>
						</div>
					</div>
					<div class="notification-bar notification-3 col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/request.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Jakir Hossain</a>
								reuqested for 
								<a href="#">Android Development</a>
							</h5>
						</div>
						<div class="col-md-3 col-md-offset-0 col-xs-offset-6 col-xs-6 notification-btn">
							<a href="#" class="btn btn-primary btn-success col-md-1 accept-btn-3">Accept</a>
							<a href="#" class="btn btn-primary btn-danger col-md-1 decline-btn-3">Decline</a>
						</div>
					</div>
					<div class="notification-bar notification-4 col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/request.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Maruf Ahmed Mridul</a>
								reuqested for 
								<a href="#">Unity Development</a>
							</h5>
						</div>
						<div class="col-md-3 col-md-offset-0 col-xs-offset-6 col-xs-6 notification-btn">
							<a href="#" class="btn btn-primary btn-success col-md-1 accept-btn-4">Accept</a>
							<a href="#" class="btn btn-primary btn-danger col-md-1 decline-btn-4">Decline</a>
						</div>
					</div>
					<div class="notification-bar notification-5 col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/request.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Mahir Hasan</a>
								reuqested for 
								<a href="#">Life of a Copy-Paste Programmer</a>
							</h5>
						</div>
						<div class="col-md-3 col-md-offset-0 col-xs-offset-6 col-xs-6 notification-btn">
							<a href="#" class="btn btn-primary btn-success col-md-1 accept-btn-5">Accept</a>
							<a href="#" class="btn btn-primary btn-danger col-md-1 decline-btn-5">Decline</a>
						</div>
					</div>
				</div>
			</div>

			<div id="news" class="container news-section tab-pane fade in">
				<div class="row">
					<div class="notification-bar col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/accept.png")}}"  height="40px">
						</div>
						<div class="col-md-11 col-xs-12 notification-text">
							<h5>
								<a href="#">Nazim Uddin</a>
								Accepted your request for 
								<a href="#">Python Programming for Dummies</a>
							</h5>
						</div>
					</div>
					<div class="notification-bar col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/accept.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Anwar Hossain</a>
								Accepted your request for 
								<a href="#">Communication Engineering</a>
							</h5>
						</div>
					</div>
					<div class="notification-bar col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/accept.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Nazim Uddin</a>
								Accepted your request for 
								<a href="#">Combinatoris A to Z</a>
							</h5>
						</div>
					</div>
					<div class="notification-bar col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/accept.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Talat Mursalin Babla</a>
								Accepted your request for 
								<a href="#">Android Development</a>
							</h5>
						</div>
					</div>
					<div class="notification-bar col-md-offset-1 col-md-10 col-xs-12">
						<div class="col-md-1 col-xs-2">
							<img src="{{url("images/accept.png")}}"  height="40px">
						</div>
						<div class="col-md-8 col-xs-12 notification-text">
							<h5>
								<a href="#">Rafik Farhad</a>
								Accepted your request for 
								<a href="#">Learning JavaFx</a>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<script>

$(document).ready(function(){
	$(".accept-btn-1").click(function(){
		$(".notification-1").fadeOut("slow");
	});
	$(".accept-btn-2").click(function(){
		$(".notification-2").fadeOut("slow");
	});
	$(".accept-btn-3").click(function(){
		$(".notification-3").fadeOut("slow");
	});
	$(".accept-btn-4").click(function(){
		$(".notification-4").fadeOut("slow");
	});
	$(".accept-btn-5").click(function(){
		$(".notification-5").fadeOut("slow");
	});
});

</script>

@endsection

