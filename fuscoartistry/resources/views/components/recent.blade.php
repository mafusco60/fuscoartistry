@props([
  'listings',
])

<div class="text-cyan-800 text-center font-bold text-3xl mt-5 mx-auto">
  Recent Listings
</div>
<section class="px-4 py-6">
  <div class="container lg:container m-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      @foreach ($listings as $listing)
        <x-listing-card :listing="$listing" />
      @endforeach
    </div>
  </div>
</section>
