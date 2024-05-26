<div id="menu-mobile" class="lg:hidden transform translate-x-0 translate-x-full transition-transform fixed top-0 right-0 h-full w-full bg-yellow-500">
  <div class="top-bar text-slate-800 flex items-center justify-between px-2 sm:px-6 border-b border-slate-800">
    <a class="brand text-2xl font-medium text-slate-800" href="{{ home_url('/') }}">{{ $siteName }}</a>

    @include('partials.menu-mobile-toggle', ['type' => 'close'])
  </div>
  <nav>
    <ul>
      @foreach($items as $item)
        <li class="{{ $item->active || $item->activeParent ? 'bg-slate-800' : '' }} {{ empty($item->children) ? '' : 'pb-2' }}">
          <a
            href="{{ $item->url }}"
            @if($item->active)
            class="text-yellow-500 block p-2 sm:p-6 text-lg font-medium"
            @elseif($item->activeParent)
            class="text-white block p-2 sm:p-6 text-lg font-medium"
            @else
            class="text-slate-800 hover:bg-slate-800 hover:text-white block p-2 sm:p-6 text-lg font-medium transition-colors"
            @endif
            aria-current="page"
          >{!! esc_html($item->label) !!}</a>

          @unless(empty($item->children))
            <ul>
              @foreach($item->children as $child)
                <li class="ml-5">
                  <a
                    href="{{ $child->url }}"
                    @if($child->active)
                    class="text-yellow-500 text-sm"
                    @elseif($item->active || $item->activeParent)
                    class="text-white text-sm"
                    @else
                    class="text-slate-800 text-sm"
                    @endif
                  >{!! esc_html($child->label) !!}</a>
                </li>
              @endforeach
            </ul>
          @endunless
        </li>
      @endforeach
    </ul>
  </nav>
</div>
