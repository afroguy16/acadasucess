@extends('layouts.layouts')

@section("title", "Acada | Browse Videos | Share Videos")

@section('page')

<section class="second-link">
	<div class="row">
		<div class="col-lg-3 col-lg-push-9">
			<ul>
				<li><a href="#">Details</a></li>
				<li><a href="#">My Videos</a></li>
			</ul>
		</div>
	</div>	
</section>
<section class="page-title">
	<h1>User Details</h1>
</section>
<section>
	<div class="row">
		<div class="col-lg-4 col-lg-push-4">
			<div class="user-top">
				<img src="#" alt="User Image">
				<h3>Jonathan Otokun</h3>
				<p>Software Developer/Designer</p>
			</div>
		<div class="user-bottom">
			<table>
				<tr>
				<td>Sex:</td>
				<td>Male</td>
				</tr>
				<tr>
				<td>Birthday:</td>
				<td>1st October, 1960</td>
				</tr>
				<tr>
				<td>Email:</td>
				<td>tega_joe@hotmail.com</td>
				</tr>
				<tr>
				<td>Mobile:</td>
				<td>08123456789</td>
				</tr>
				<tr>
				<td>My Videos</td>
				<td>3302</td>
				</tr>
				<tr>
				<td>Likes</td>
				<td>45,932,82</td>
				</tr>
				<tr>
				<td>Shares</td>
				<td>28,329,832</td>
				</tr>
			</table>
		</div>
		</div>
	</div>
	
</section>

@endsection