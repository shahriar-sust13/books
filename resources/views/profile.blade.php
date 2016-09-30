
@extends('layout')

@section('content')
	
	<div class="profile-section">
		<div class="cover-container">
			
		</div>

		<div class="container-fluid about-me-section">
			<div class="container">
				<img src="{{url("images/profile/pic1.jpg")}}" class="img-circle profile-pic">
				<h3 class="text-center profile-name">Moudud Khan Shahriar</h3>
				<h5 class="text-center profile-addrs">Upashahar, Sylhet</h5>
			</div>
		</div>

		<div class="container profile-body">
			<div class="profile-nav-section row">
				<ul class="nav nav-tabs col-md-offset-1 col-md-10">
				  	<li role="presentation" class="active"><a data-toggle="tab" href="#books">Shared Books</a></li>
				  	<li role="presentation" class=""><a data-toggle="tab" href="#about">About Me</a></li>
				</ul>
			</div>

			<div class="tab-content">
				<div id="books" class="container book-section tab-pane fade in active">

					<div class="row">
						<a href = "#" class="col-md-8 col-md-offset-2 book-container">
							<div class="col-md-2 book-cover-container">
								<img src="{{url("images/books/1.jpg")}}" height="138px">
							</div>
							<div class="col-md-10 book-info-section">
								<h3>Python Programming for Dummies</h3>
								<h4><small>by Maruf Ahmed Mridul</small></h4>
								<div>
									<p>
										This Books is mainly designed for those who know nothing about Python. But if you have basic knowledge of programming then this book will be awesome.
									</p>
								</div>
							</div>
						</a>
						<a href = "#" class="col-md-8 col-md-offset-2 book-container">
							<div class="col-md-2 book-cover-container">
								<img src="{{url("images/books/2.jpg")}}" height="138px">
							</div>
							<div class="col-md-10 book-info-section">
								<h3>Computer Architecture</h3>
								<h4><small>by John Hennessy</small></h4>
								<div>
									<p>
										Computer Architecture (5th Edition) by John Hennessy and David Patterson. Short Description goes here. Short Description goes here.
									</p>
								</div>
							</div>
						</a>
						<a href = "#" class="col-md-8 col-md-offset-2 book-container">
							<div class="col-md-2 book-cover-container">
								<img src="{{url("images/books/3.jpg")}}" height="138px">
							</div>
							<div class="col-md-10 book-info-section">
								<h3>Introduction to Algorithms</h3>
								<h4><small>by Thomas Cormen, Leiserson</small></h4>
								<div>
									<p>
										Introduction to Algorithms is a book by Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein. It is used as the textbook for algorithms courses at many universities.
									</p>
								</div>
							</div>
						</a>
					</div>

					<div class="container pagination-section" style="width: 260px;">
						<nav aria-label="Page navigation">
						  	<ul class="pagination">
						    	<li>
						    		<a href="#" aria-label="Previous">
							        	<span aria-hidden="true">&laquo;</span>
							    	</a>
							    </li>
							    <li class="active"><a href="#">1</a></li>
							    <li><a href="#">2</a></li>
							    <li><a href="#">3</a></li>
							    <li><a href="#">4</a></li>
							    <li><a href="#">5</a></li>
							    <li>
								    <a href="#" aria-label="Next">
								        <span aria-hidden="true">&raquo;</span>
								    </a>
							    </li>
							</ul>
						</nav>
					</div>
				</div>

				<div id="about" class="container tab-pane fade">
					<div class="container">
						<div class="info-section col-md-8 col-md-offset-2 col-xs-10 col-xs-offset-1">
							<h4 class="text-center">Studies at Dept. of Computer Science & Engineering</h4>
							<h4 class="text-center">Shahjalal University of Science and Technology, Sylhet</h4>
							<address class="text-center">
								<strong>Address: </strong> Shahjalal Upashahar, Sylhet	
							</address>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

@endsection