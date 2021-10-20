<header class="banner">
  <nav class="nav-primary bg-blue-dark">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        @include('partials.menu-mobile-toggle')

        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-between">
          <div class="flex-shrink-0 flex items-center">
            <a class="brand" href="{{ home_url('/') }}">{{ $siteName }}</a>
          </div>
          <div class="hidden sm:block sm:ml-6">
            <div class="flex space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-green text-blue-dark px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Dashboard</a>

              <a href="#" class="text-gray-300 hover:bg-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>

              <a href="#" class="text-gray-300 hover:bg-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>

              <a href="#" class="text-gray-300 hover:bg-green-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('partials.menu-mobile')
  </nav>
</header>
