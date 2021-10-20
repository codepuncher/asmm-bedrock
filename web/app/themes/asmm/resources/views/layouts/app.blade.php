@include('partials.header')

<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  <main id="main" class="py-8 prose main">
    @yield('content')
  </main>

  @hasSection('sidebar')
    <aside class="sidebar">
      @yield('sidebar')
    </aside>
  @endif

</div>

@include('partials.footer')