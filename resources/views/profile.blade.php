
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

		<div class="container book-section">
			<div class="col-xs-12 section-name-container">
				<h3>Shared Books</h3>
			</div>
			<div class="row">
				<a href = "#" class="col-md-8 col-md-offset-2 book-container">
					<div class="col-md-2 book-cover-container">
						<img src="{{url("images/books/1.jpg")}}" height="138px">
					</div>
					<div class="col-md-10 book-info-section">
						<h3>Python Programming for Dummies</h3>
						<h4><small>Maruf Ahmed Mridul</small></h4>
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
						<h4><small>John Hennessy</small></h4>
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
						<h4><small>Thomas Cormen, Leiserson</small></h4>
						<div>
							<p>
								Introduction to Algorithms is a book by Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, and Clifford Stein. It is used as the textbook for algorithms courses at many universities.
							</p>
						</div>
					</div>
				</a>
			</div>
		</div>

	</div>

@endsection