<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title', 'LaraBBS') - {{ setting('site_name', '产品交流社区') }}</title>
  <meta name="description" content="@yield('description', setting('seo_description', '产品交流社区'))" />
  <meta name="keyword" content="@yield('keyword', setting('seo_keyword', '南相,社区,论坛,开发者论坛'))" />

  <!-- Styles -->
  <link href="{{ mix('static/css/app.css') }}" rel="stylesheet">
  <link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.9.0/css/all.min.css" rel="stylesheet">
  @yield('styles')

</head>

<body>
  <div id="app" class="{{ route_class() }}-page">

    @include('layouts._header')

    <div class="container">

      @include('shared._messages')

      @yield('content')

    </div>

    @include('layouts._footer')
  </div>
  @if (app()->isLocal())
    @include('sudosu::user-selector')
  @endif
  <!-- Scripts -->
  <script src="{{ mix('static/js/app.js') }}"></script>
  @yield('scripts')
</body>

</html>
