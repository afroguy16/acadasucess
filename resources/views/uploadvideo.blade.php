@extends('layouts.layouts')

@section("title", "Acada | Upload Video")

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
	<h1>Upload Video</h1>
</section>
<section>
	<form action="index.php" class="signup" method="GET">
	<div class="row">
		<div class="col-lg-4 col-lg-push-4">
			<input type="text" placeholder="Enter valid youtube url">
			<select name="category" id="">
				<option value="">Selecrt a category</option>
				<option value="JavaScript">Javascript</option>
				<option value="JavaScript">PHP</option>
				<option value="JavaScript">Python</option>
				<option value="JavaScript">Ruby</option>
			</select>
			<textarea name="description" id="" placeholder="Enter description..." rows="5"></textarea>
			<input type="submit" class="btn-submit" value="Upload">
		</div>
	</div>
	</form>
</section>

@endsection