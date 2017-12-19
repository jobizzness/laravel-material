@extends('layouts.app')

@section('content')
	<section class="main-frame content-centered">
		<header>
			<h1 class="title">Create User</h1>
		</header>
		<form action="#" method="post" id="create_user_form">
			
			{{-- 
				Basic info
			 --}}
			<section class="layout horizontal">
				<div class="formgroup layout vertical flex-3">
					<div class="mdc-text-field mdc-text-field--box mdc-text-field--with-leading-icon shadow" data-mdc-auto-init="MDCTextField">
						<i class="material-icons mdc-text-field__icon" tabindex="-1">person</i>
					  	<input type="text" 
					  			name="name" 
					  			required 
					  			class="mdc-text-field__input no-border">
					  	<label for="email" class="mdc-text-field__label">Full Name</label>
					  	<div class="mdc-text-field__bottom-line"></div>
					</div>	
					<div class="mdc-text-field mdc-text-field--box mdc-text-field--with-leading-icon shadow" data-mdc-auto-init="MDCTextField">
						<i class="material-icons mdc-text-field__icon" tabindex="-1">mail</i>
					  	<input 
					  		type="email" 
					  		name="email" 
					  		required 
					  		class="mdc-text-field__input no-border">
					  	<label for="email" class="mdc-text-field__label">Email address</label>
					  	<div class="mdc-text-field__bottom-line"></div>
					</div>	
				</div>
				<div class="avatar-input shadow layout vertical center-center">
					<i class="material-icons mdc-text-field__icon" tabindex="-1">camera</i>
					<span class="avatar-input--label">Add Profile Picture</span>
				</div>
			</section>

			{{-- 
				Bio Input
			 --}}
			<section>
				<div class="mdc-text-field mdc-text-field--textarea no-border mdc-text-field--fullwidth shadow" data-mdc-auto-init="MDCTextField">
				  <textarea id="textarea" class="mdc-text-field__input" rows="8" cols="40"></textarea>
				  <label for="textarea" class="mdc-text-field__label">Textarea Label</label>
				</div>
			</section>

			<section class="layout horizontal formgroup">

				{{-- 
					Status Dropdown
				 --}}
				<section class="flex">
					<div id="hero-js-select" class="mdc-select" role="listbox" tabindex="0" data-mdc-auto-init="MDCSelect">
			          <div class="mdc-select__surface">
			            <div class="mdc-select__label">User Role</div>
			            <div class="mdc-select__selected-text"></div>
			            <div class="mdc-select__bottom-line"></div>
			          </div>
			          <div class="mdc-simple-menu mdc-select__menu">
			            <ul class="mdc-list mdc-simple-menu__items">
			              <li class="mdc-list-item" role="option" tabindex="0">
			                Member
			              </li>
			              <li class="mdc-list-item" role="option" aria-disabled="true" tabindex="0">
			                Admin
			              </li>
			              <li class="mdc-list-item" role="option" tabindex="0">
			                Owner
			              </li>
			            </ul>
			          </div>
			        </div>
				</section>

				{{-- 
					Status Dropdown
				 --}}
				<section class="flex">
					<div class="mdc-select">
			          <select class="mdc-select__surface">
			            <option value="" selected>Change Account Status</option>
			            <option value="grains">Active</option>
			            <option value="vegetables">Inactive</option>
			          </select>
			          <div class="mdc-select__bottom-line"></div>
			        </div>
				</section>
			</section>

			{{-- 
				Actions
			 --}}
			<footer class="layout horizontal">
				<button class="mdc-button">
				  Cancel
				</button>
				<span class="flex"></span>
				<button class="mdc-button mdc-button--raised" type="submit">
				  Create
				  <i class="material-icons mdc-button__icon">favorite</i>
				</button>
			</footer>
		</form>
	</section>
@endsection