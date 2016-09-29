
@extends('layout')

@section('content')
	
	<div class="container search-bar">
		<h3>Select Your Address and Book Category!</h3>
		<form>
			<div class="row">
				<div class="search-item col-md-offset-2 col-md-3 col-xs-6">
					<h4>District:</h4>
					<select class="form-control district-option ">
						<option>Sylhet</option>
						<option>Moulvibazar</option>
						<option>Sunamganj</option>
						<option>Habiganj</option>
					</select>
				</div>
				<div class="search-item col-md-3 com-md-offset-2 col-xs-6">
					<h4>Area:</h4>
					<select class="form-control upazila-option ">
						<option>Barlekha</option>
						<option>Upashahar</option>
						<option>Akhalia</option>
						<option>Amborkhana</option>
					</select>
				</div>
				<div class="search-item col-md-3 col-md-offset-0 col-xs-offset-2 col-xs-8">
					<button class="btn-lg btn-primary">Apply</button>
				</div>
			</div>
		</form>
	</div>

	<div class="container search-result-section">
			<div class="row">
				<div class="col-md-12 col-xs-12 section-name-container">
					<h3>Search Results</h3>
				</div>
			</div>

			<!-- Following row will be visible if any Error exists -->
			<div class="row">
				<div class="alert alert-danger error-msg col-xs-12 col-md-offset-2 col-md-8">
					<h4 class="text-center">
						<strong>Error: </strong> District and Area not matched!
					</h4>
				</div>
			</div>

			<!-- Following row will be visible if no Error exists -->
			<div class="row">
				<a href = "{{url('book')}}" class="col-md-8 col-md-offset-2 book-container">
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
		</div>

@endsection