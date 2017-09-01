@extends('layouts.app')

@section('content')

<imageslider
:slides='slides' 
:animate='true'
:delay='5000'>
</imageslider>


<section class="section">
	<div class="container">
		<h1 class="has-text-centered title">Onze specialiteiten</h1>
		<div class="columns">
			<div class="column has-text-centered">
				<img src="/images/brands.png" alt="">
			</div>
			<div class="column">
				<ul class="intro">
			<li class="is-flex"><i class="fa fa-circle is-light-grey p10 is-small-icon"></i> Aan en verkoop nieuwe geselecteerde 2dehandswagens en bestelwagens</li>

			<li class="is-flex"><i class="fa fa-circle is-light-grey p10 is-small-icon"></i> Speciale voorwaarden voor garages en handelaars</li>

			<li class="is-flex"><i class="fa fa-circle is-light-grey p10 is-small-icon"></i> Steeds een stock van 25 wagens</li>

			<li class="is-flex"><i class="fa fa-circle is-light-grey p10 is-small-icon"></i> Gespecialiceerd bedrijf in VW en Audi-group, 
				reeds 20 jaar actief
			</li>

			<li class="is-flex"><i class="fa fa-circle is-light-grey p10 is-small-icon"></i><p>Eigen werkplaats voor dienst na verkoop</p></li>
		</ul>
			</div>
		</div>

		

		<a href="/aanbod" class="button button-red has-text-centered mt-20 centered">Bekijk ons aanbod</a>
	</div>
</section>


<section class="section grey-section">
	<div class="container">
		<h1 class="title has-text-centered">EIGEN SERVICE-DIENST NA VERKOOP</h1>
	</div>
</section>

<section class="section">
	<div class="container with-icons is-flex is-centered mb-40">
		
		<div class="item-with-icon">
			<img src="/images/brug.png" alt="Brug">
			<span>
				4 Bruggen voor 
				diverse herstellingen
			</span>
		</div>

		<div class="item-with-icon">
			<img src="/images/airco.png" alt="Brug">
			<span>
				Airco 
				service-station
			</span>
		</div>

		<div class="item-with-icon">
			<img src="/images/banden.png" alt="Brug">
			<span>
				Service van
				velgen en banden
			</span>
		</div>

	</div>

	<div class="container with-icons is-flex is-centered">
		
		<div class="item-with-icon">
			<img src="/images/computer.png" alt="Brug">
			<span>
				Computer
				diagnose station
			</span>
		</div>

		<div class="item-with-icon">
			<img src="/images/depannage.png" alt="Brug">
			<span>
				Eigen depannage
				en takeldienst
			</span>
		</div>

		<div class="item-with-icon">
			<img src="/images/montage.png" alt="Brug">
			<span>
				Montage van 
				carkits en trekhaken
				en multimedia
			</span>
		</div>

	</div>
</section>

<section class="section grey-section">
	<div class="container">
		<h1 class="title has-text-centered">CARROSSERIE</h1>
	</div>
</section>

<section class="section">
	<div class="container has-text-centered">
		<img src="/images/carosserie.png" alt="" class="mb-40">
		<p>Voor uw carrosserie herstellingen kunt u ook bij ons terecht. Wij werken met erkende carrosserie herstellers</p>
	</div>
</section>


	<h2 class="subtitle has-text-centered">Brugsesteenweg 88, 8531 Hulste-Harelbeke (Opgelet, gps klopt soms niet)</h2>
	<div id="map"></div>

    
    

@endsection