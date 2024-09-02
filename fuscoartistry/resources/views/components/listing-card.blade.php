@props([
  'listing',
])

<x-card>
  {{-- Display artwork with link to details page --}}
  <div class="relative group">
    <a href="/listings/{{ $listing->id }}">
      <img
        src="{{ asset($listing->image) }}"
        {{-- src='/{{$listing->image}}' --}}
        alt="artwork image"
        width="0"
        height="0"
        sizes="100vw"
        class="w-[300px]  md:block rounded-t-xl mx-auto"
      />
    </a>

    {{-- Create hidden / translucent overlay with listing details --}}
    <a href= "/listings/{{ $listing->id}}">
    <div
      class="rounded-lg absolute bottom-0 left-0 right-0 p-2 px-4 text-white duration-500 bg-cyan-800 opacity-0 group-hover:opacity-100 bg-opacity-40"
    >
      <div class="flex justify-between w-full text-center">
        <div class="font-normal">
          <p class="text-sm">"{{ $listing->title }}"</p>
          <p class="text-xs">{{ $listing->type }}</p>

          @if ($listing->original)
            <p class="text-xs">Original: ${{ $listing->price }}</p>
          @else
            <p class="text-xs">Original Not Available</p>
          @endif
        </div>
        <div class="flex items-center">
         
          </a>
        </div>
      </div>
    </div>
  </div>
</x-card>
