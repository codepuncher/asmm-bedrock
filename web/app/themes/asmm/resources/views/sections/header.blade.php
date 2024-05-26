<header id="header" class="w-full flex justify-center relative z-10 border-b border-yellow-500">
  <div class="w-full max-w-screen-xl flex justify-between px-2 sm:px-6 lg:py-8 lg:px-8">
    <nav class="nav-primary w-full">
      <div class="flex-1 flex items-center justify-between sm:items-center sm:justify-between">
        <div class="flex-shrink-0 flex items-center">
          <a class="brand text-2xl font-medium text-inherit" href="{{ home_url('/') }}">{{ $siteName }}</a>
        </div>
        <div class="hidden lg:block">
          @include('partials.nav.desktop')
        </div>

        @include('partials.menu-mobile-toggle', ['type' => 'open'])
      </div>

      @include('partials.nav.mobile')
    </nav>
  </div>
</header>
