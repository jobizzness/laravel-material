@extends('layouts.app')

@section('content')

	<section class="main-frame">
		<header class="stats">
			<div class="stats-item">
				<div class="card shadow stats-item--inner blue">
					<span class="stats-item--number">150</span> Total Customer
				</div>
			</div>
			<div class="stats-item">
				<div class="card shadow stats-item--inner purple">
					<span class="stats-item--number">$150k</span> Total Sales
				</div>
			</div>
			<div style="width: 50%;" class="stats-item">
				<div class="card shadow stats-item--inner nested">
					<span class="title-small" style="margin-left: 24px;">This Month:</span>
					<div class="stats nested">
						<div>
							<span class="stats-item--number">150k</span> Visits
						</div>
						<div>
							<span class="stats-item--number">270</span> Subscribers
						</div>
						<div>
							<span class="stats-item--number">100</span> New Users
						</div>
					</div>
				</div>
			</div>
		</header>
		{{-- 
			Dashboard Cards
		 --}}
		<main class="mdc-layout-grid">
			<div class="mdc-layout-grid__inner">
				@for ($i = 0; $i < 10; $i++)
				   <article class="mdc-layout-grid__cell mdc-layout-grid__cell--span-6-desktop mdc-layout-grid__cell--span-12-tablet">
				   		<h1 class="sub-heading">Current Stats</h1>
				   		<div class="shadow card">
				   			
				   		</div>
				   </article>
				@endfor
			</div>
		</main>
	</section>
@endsection
