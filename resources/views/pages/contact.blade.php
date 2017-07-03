@extends('layouts.app')

@section('content')

<imageslider
:slides='slides' 
:animate='false'
:delay='5000'>
</imageslider>

<section class="section">
	<div class="container">

		<h3 class="subtitle has-text-centered">Contactgegevens</h3>

		<div class="columns mw-800 aic">

			<div class="column has-icon-column">
				<img src="/images/contact.png" alt="">
			</div>

			<div class="column">
				<ul>
					<li>Brugsesteenweg 88</li>
					<li>8531 Hulste-Harelbeke</li>
					<li>g.vandenberghe.garage@telenet.be</li>
					<li>vandenberghe.garage@telenet.be</li>
				</ul>
			</div>

			<div class="column">
				<ul> 
					<li>info@mycarcenter.be</li>
					<li>Tel:051/30 89 39</li>
					<li>Fax:051/320255</li>
					<li>GSM :0475/744998</li>
				</ul>
			</div>

		</div>

		</div>

		<div class="container mt-50">

		<h1 class="subtitle has-text-centered">Bankgegevens</h1>

		<div class="columns mw-800 aic">

			<div class="column has-icon-column">
				<img src="/images/card.png" alt="">
			</div>

			<div class="column">
				<ul>
					<li>Fortis:001-372418-73</li>
					<li>IBAN Fortis:BE 27001372411873</li>
					<li>BIC Fortis:BIC GEBABEBB</li>
				</ul>
			</div>

			<div class="column">

				<ul> 
					<li>KBC :738-6031658-26</li>
					<li>IBAN KBC :BE 59738603165826</li>
					<li>BIC KBC :KREDBEBB</li>
				</ul>
			</div>

		</div>

	</div>
    
</section>

<h2 class="subtitle has-text-centered">Brugsesteenweg 88, 8531 Hulste-Harelbeke (Opgelet, gps klopt soms niet)</h2>
	<div id="map"></div>


@endsection