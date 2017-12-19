@extends('layouts.app')

@section('content')
	<section class="main-frame">
		<header>
			<h1 class="title">Create Post</h1>
		</header>
		<main class="layout horizontal">
			<section class="flex-3">

				<div class="formgroup layout vertical flex-3">
					<div class="mdc-text-field mdc-text-field--box shadow" data-mdc-auto-init="MDCTextField">
					  	<input type="text" 
					  			name="title" 
					  			required 
					  			class="mdc-text-field__input no-border">
					  	<label for="email" class="mdc-text-field__label">Title</label>
					  	<div class="mdc-text-field__bottom-line"></div>
					</div>	
					<div class="mdc-text-field mdc-text-field--box shadow" data-mdc-auto-init="MDCTextField">
					  	<input 
					  		type="text" 
					  		name="slug" 
					  		required 
					  		class="mdc-text-field__input no-border">
					  	<label for="email" class="mdc-text-field__label">Slug</label>
					  	<div class="mdc-text-field__bottom-line"></div>
					</div>	
				</div>

				<section class="formgroup">
					<app-wysiwyg></app-wysiwyg>

					<section class="card card-with--header shadow layout vertical">
						<header class="with-border--bottom">
							<h4>Excerpt</h4>
						</header>
						<div class="flex">
							<div class="mdc-text-field mdc-text-field--textarea mdc-text-field--fullwidth" data-mdc-auto-init="MDCTextField">
							  <textarea id="textarea" class="mdc-text-field__input" rows="8" cols="40"></textarea>
							  <label for="textarea" class="mdc-text-field__label">Textarea Label</label>
							</div>
						</div>
					</section>

					<section class="card card-with--header shadow">
						<header class="with-border--bottom">
							<h4>SEO Optimization</h4>
						</header>
						<div>
							{{-- SEO THINGGY --}}
						</div>
					</section>

					<section class="card card-with--header shadow">
						<header class="with-border--bottom">
							<h4>Discussions</h4>
						</header>
					</section>

				</section>
				
			</section>
			<aside class="post-form--aside formgroup">
				<section class="card shadow card-with--header">
					<div class="card-content">
						<header class="with-border--bottom">
							<h4>Publish</h4>
						</header>
						<section class="card-body">
							<div class="layout horizontal" style="height: 200px;">
								<button class="mdc-button">
								  Save Draft
								</button>
								<span class="flex"></span>
								<button class="mdc-button">
								  <i class="material-icons mdc-button__icon">visibility</i>
								  
								</button>
							</div>
							<div>
								Status: Draft
								Visibility: Public
								Published on: Date
							</div>
						</section>
						<footer class="with-border--top">
							<button class="mdc-button" style="width: 100%;height: 55px;">Publish 
								<i class="material-icons mdc-button__icon">publish</i>
							</button>

						</footer>
					</div>
				</section>
				<section class="card shadow card-with--header">
					<div class="card-content">
						<header class="with-border--bottom">
							<h4>Tags</h4>
						</header>
						<section class="card-body">
							<div class="layout horizontal" style="height: 200px;">
								
							</div>
						</section>
					</div>
				</section>
				<section class="card shadow card-with--header">
					<div class="card-content">
						<header class="with-border--bottom">
							<h4>Categories</h4>
						</header>
						<section class="card-body">
							<div class="layout horizontal" style="height: 200px;">
								
							</div>
						</section>
					</div>
				</section>
			</aside>
		</main>
		
		</form>
	</section>
@endsection