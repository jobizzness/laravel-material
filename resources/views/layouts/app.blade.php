<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" class="mdc-typography">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
        {{-- 
             Main Navigation/Sidebar
         --}}
        <nav class="mdc-permanent-drawer mdc-typography">
          <div class="mdc-permanent-drawer__toolbar-spacer"></div>
          <div class="mdc-permanent-drawer__content">
            <nav id="icon-with-text-demo" class="mdc-list">
              <a class="mdc-list-item {{selectedRoute('/')}}" href="/">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">blur_on</i>Dashboard
              </a>
              <a class="mdc-list-item {{selectedRoute('user')}}" href="{{route('user.index')}}">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">person</i>Users
              </a>
              <a class="mdc-list-item {{selectedRoute('post')}}" href="{{route('post.index')}}">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">create</i>Posts
              </a>
              <a class="mdc-list-item" href="#">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">swap_vert</i>API
              </a>
              <a class="mdc-list-item" href="#">
                <i class="material-icons mdc-list-item__start-detail" aria-hidden="true">settings</i>Settings
              </a>
            </nav>
          </div>
        </nav>

        {{-- 
            Main App Content goes here
         --}}
        <div class="content actual-content">

            {{--
             App Header Goes here
             --}}
            <header class="mdc-toolbar mdc-toolbar--fixed mdc-toolbar--waterfall">
              <div class="mdc-toolbar__row">
                <section class="mdc-toolbar__section mdc-toolbar__section--align-start">
                  <span class="mdc-toolbar__title">App Name</span>
                </section>
              </div>
            </header>

            <main class="mdc-toolbar-fixed-adjust">
                {{-- 
                    Page Component comes here
                 --}}
              @yield('content')
            </main>
        </div>
        
    </div>
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>window.mdc.autoInit();</script>
</body>
</html>
