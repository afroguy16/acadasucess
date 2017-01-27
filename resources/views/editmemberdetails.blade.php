@extends('layouts.layouts')

@section("title", "Acada | Edit Details")

@section('page')

<section class="second-link">
	<div class="row">
		<div class="col-lg-3 col-lg-push-9">
			<ul>
				<li><a href="{{ url('/details') }}">Details</a></li>
				<li><a href="{{ url('/myvideos') }}">My Videos</a></li>
			</ul>
		</div>
	</div>	
</section>
<section class="page-title">
	<h1>Edit Details</h1>
</section>
<section>
	<form action="index.php" class="signup" method="GET">
	<div class="row">
		<div class="col-lg-4 col-lg-push-4">
			<input type="text" value="{{ Auth::user()->name }}">
			<input type="text" value="{{ Auth::user()->email }}">
			<input type="text" value="Male"> 
			<input type="date" value="1st October 1960">
			<input type="text" value="08123456789">
			<input type="submit" class="btn-submit" value="Update">
		</div>
	</div>
	</form>
</section>

@endsection