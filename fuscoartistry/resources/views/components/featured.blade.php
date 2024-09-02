@props([
  'listings',
])

<section class="bg-blue-50 px-4 pt-6 pb-10">
  <div class="container-xl lg:container m-auto">
    <h2 class="text-3xl font-bold text-rose-700 mb-6 text-center">
      Featured Artworks
    </h2>

    {{-- Two cards in two columns -  each with a listing --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      @foreach ($listings as $listing)
        <div
          class="bg-white rounded-xl shadow-md relative flex flex-col md:flex-row"
        >
          {{-- Image --}}
          <img
            src="{{ asset($listing->image) }}"
            alt=" "
            class="object-cover rounded-t-xl md:rounded-tr-none md:rounded-l-xl w-full md:w-2/5"
            width="{200}"
            height="{300}"
          />
          {{-- Title / Medium / Original Price --}}
          <div class="p-6">
            <h3 class="text-xl font-bold">{{ $listing->title }}</h3>
            <div class="text-gray-600 mb-4">
              <x-listing-type :type="$listing->type" />
            </div>

            <div class="border border-gray-200 mb-5"></div>

            @if ($listing->original)
              <div class="text-lg font-bold mb-4">
                Original: ${{ $listing->price }}
              </div>
            @else
              {{-- If no original --}}
              <a href="/">
                <span class="text-lg font-bold mb-4">Prints Available</span>
              </a>
            @endif
            {{-- Details Button - Link to Listing Details Page --}}
            <a
              href="/listings/{{ $listing->id }}"
              class="absolute bottom-[10px] right-[15px] h-[36px] bg-cyan-700 hover:bg-cyan-800 text-white px-4 py-2 rounded-lg text-center text-sm"
            >
              Details
            </a>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
