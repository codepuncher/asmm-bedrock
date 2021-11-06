@include('partials.header')

<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<main id="main" class="w-full max-w-screen-xl min-h-screen mx-auto py-8 px-2 sm:px-6 lg:px-8 main">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
@endif

@include('partials.footer')
