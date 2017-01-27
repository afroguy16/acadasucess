@extends('layouts.layouts')

@section("title", "Acada | My Videos")

@section('page')

<section class="second-link">
	<div class="row">
		<div class="col-lg-3 col-lg-push-9">
			<ul>
				<li><a href="{{ url('/details') }}">Details</a></li>
				<li><a href="#">My Videos</a></li>
				<li><a href="{{ url('/uploadvideo') }}">Upload Video</a></li>
			</ul>
		</div>
	</div>	
</section>
<section>
	<div class="myvideos">
		<div class="main-title">
			<h2>My Videos</h2>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="my-videos-recently-viewed">
		<div class="main-title">
			<h2>Recently Viewed</h2>
		</div>
		<div class="row">
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="main-videos">
					<div class="video-content">
						<a href="#"><video src="#"></video></a>
						<span>65:04</span>
					</div>
					<div class="video-prop">
						<a href="#"><p>Learn Javascript in one week</p></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection