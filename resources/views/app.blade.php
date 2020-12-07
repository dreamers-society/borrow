<!DOCTYPE HTML>
<html lang="fa">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>@yield('title') - {{ config('app.name') }}</title>
  @include('partials.styles')
  @stack('styles')
</head>

<body>
  @include('partials.header')
  @yield('content')
  @include('partials.footer')
  @include('partials.scripts')
  @stack('scripts')

  @guest
  <p>TBD</p>
  @else
  <form id="logout-form" action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">
      {{ __('Logout') }}
    </button>
  </form>
  @endguest
</body>

</html>