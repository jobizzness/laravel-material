@extends('layouts.app')

@section('content')

	<section class="main-frame">
		<header class="header-actions">
			<a href="{{ route('post.create') }}">
				<button class="mdc-button">
				  <i class="material-icons mdc-button__icon">add</i> Create
				</button>
			</a>
			<button class="mdc-button">
			  <i class="material-icons mdc-button__icon">favorite</i>
			  Export
			</button>
			<button class="mdc-button">
			  <i class="material-icons mdc-button__icon">delete</i>
			  Delete
			</button>
			<span class="flex"></span>
			<button class="mdc-button">
			  <i class="material-icons mdc-button__icon">search</i>
			  Search
			</button>
			<button class="mdc-button">
			  <i class="material-icons mdc-button__icon">filter_list</i>
			  Filter
			</button>
		</header>
		<main style="padding:0">
			<data-table></data-table>
		</main>
	</section>
@endsection
