@include('partials.header')

<a class="sr-only focus:not-sr-only" href="#main">
  {{ __('Skip to content') }}
</a>

<main id="main" class="py-8 px-2 sm:px-6 lg:px-8 max-w-none main">
  @yield('content')
</main>

@hasSection('sidebar')
  <aside class="sidebar">
    @yield('sidebar')
  </aside>
@endif

@include('partials.footer')
