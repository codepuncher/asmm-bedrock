<header class="banner">
  <nav class="nav-primary bg-blue-dark">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        @include('partials.menu-mobile-toggle')

        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-between">
          <div class="flex-shrink-0 flex items-center">
            <a class="brand" href="{{ home_url('/') }}">{{ $siteName }}</a>
          </div>
          @unless(empty($menu))
            <div class="hidden sm:block sm:ml-6">
              @include('partials.nav.nav', ['items' => $menu])
            </div>
        @endunless
        </div>
      </div>
    </div>

    @include('partials.menu-mobile')
  </nav>
</header>
