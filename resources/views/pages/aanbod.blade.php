@extends('layouts.app')

@section('content')

<imageslider
:slides='slides' 
:animate='false'
:delay='5000'>
</imageslider>

<section class="section">
	<div class="container has-text-centered">
		<img src="/images/gauges.png" alt="" class="mb-40">
		<p>Onze tweedehands wagens worden steeds verkocht met 1 jaar garantie
			of indien uitdrukkelijk anders vermeld
			<br><br>
			Naar wens zoeken wij voor u de gewenste tweedehands wagen
			<br><br>
			Iedere wagen vertrekt met een voorafgaande onderhoudsbeurt</p>
		</div>
	</section>

	<section class="section grey-section">
		<div class="container">
			<h1 class="title has-text-centered">ONS AANBOD WAGENS</h1>
		</div>
	</section>

	<section class="section">
		<div class="container">
			<ul class="cars-list">
				@foreach($articles as $article)
				<li class="car-card">
					<div class="car-card-image">
						<span class="car-price">€{{ $article->pp }}</span>
						<img src="http://pic1.autoscout24.net/images-big/{{ $article->imgs->firstimg }}" alt="car image" class="car-image">
					</div>
					<div class="car-card-info">
						<div class="car-card-head">
							<h4><a href="http://nl.ww3.autoscout24.be/classified/{{ $article->ei }}" target="_blank">{{ $article->article_title }}</a></h4>
							<span class="car-card-head-details">
								<p>Tweedehands: </p>
								<p>bouwjaar: {{ $article->fr }}</p>
							</span>
						</div>
						<div class="car-card-body">
							<span class="level is-flex">
								<p><i class="fa fa-circle left-icon"></i>{{ $article->ma }} km</p>
								@if($article->fl == "D")
								<p><i class="fa fa-circle left-icon"></i>Diesel</p>
								@elseif($article->fl == "G")
								<p><i class="fa fa-circle left-icon"></i>Benzine</p>
								@endif
							</span>
							<span class="level is-flex">
								<p><i class="fa fa-circle left-icon"></i>{{ $article->pk }}kW ({{ $article->ph }}PK)</p>
								@if($article->gr == "M")
								<p><i class="fa fa-circle left-icon"></i>Manueel</p>
								@else
								<p><i class="fa fa-circle left-icon"></i>Automatisch</p>
								@endif
							</span>
						</div>
						<div class="car-card-button">
							<a href="http://nl.ww3.autoscout24.be/classified/{{ $article->ei }}" target="_blank" class="button button-red">Meer info</a>
						</div>
					</div>
				</li>
				@endforeach
			</ul>
		</div>
	</section>

	@endsection