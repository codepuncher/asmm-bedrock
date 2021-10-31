<ul class="flex">
  @foreach($items as $item)
    @empty($item->children)
      <li class="px-4 text-purple-500 hover:text-purple-700 cursor-pointer font-bold text-base uppercase tracking-wide">
        <a
          href="{{ $item->url }}"
          @if($item->active)
          class="bg-green text-white px-3 py-2 rounded-md text-sm font-medium"
          @else
          class="text-white hover:bg-green hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors"
          @endif
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>
      </li>
    @else
      <li class="group relative dropdown px-4 text-purple-500 hover:text-purple-700 cursor-pointer font-bold text-base uppercase tracking-wide">
        <a
          href="{{ $item->url }}"
          @if($item->active)
          class="bg-green text-white px-3 py-2 rounded-md text-sm font-medium"
          @else
          class="text-white hover:bg-green hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors"
          @endif
          aria-current="page"
        >{!! esc_html($item->label) !!}</a>

        <div class="group-hover:block dropdown-menu absolute hidden h-auto">
          <ul clas="top-0 w-48 bg-white shadow px-6 py-8 hidden h-auto">
            @foreach($item->children as $child)
              <li>
                <a href="{{ $child->url }}">{!! esc_html($child->label) !!}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </li>
    @endempty
  @endforeach
</ul>
