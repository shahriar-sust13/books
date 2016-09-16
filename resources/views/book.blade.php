
@extends('layout')

@section('content')

	<div class="container book-header-section">
		<div class="row">
			<img src="{{url("images/books/1.jpg")}}" class="col-md-3 img-thumbnail">
			<div class="col-md-8 book-intro-section">
				<h3>Python Programming for Dummies</h3>
				<h4><small>by Maruf Ahmed Mridul</small></h4>
				<h5>Category: Programming</h5>
			</div>
		</div>
	</div>
	<div class="container book-description-container">
		<p>
			This Books is mainly designed for those who know nothing about Python. But if you have basic knowledge of programming then this book will be awesome.This Books is mainly designed for those who know nothing about Python. But if you have basic knowledge of programming then this book will be awesome.This Books is mainly designed for those who know nothing about Python. But if you have basic knowledge of programming then this book will be awesome.This Books is mainly designed for those who know nothing about Python. But if you have basic knowledge of programming then this book will be awesome.
		</p>
	</div>
	<div class="container shared-section">
		<h4>Shared by <a href="{{url("/profile")}}" class="">Moudud Khan Shahriar</a></h4>
		<div>
			<a href="#" class="request-btn">Request for This Book</a>
		</div>
	</div>

@endsection