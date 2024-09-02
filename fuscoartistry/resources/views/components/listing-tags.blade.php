@props(['tagsCsv'])

@php
  $tags = explode(',', trim($tagsCsv)); 
  
@endphp
 

<ul class="flex">
  @foreach ($tags as $tag)
  <li
      class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
      <a href="/listings/all?tag={{$tag}}">
        {{$tag}}
  </li>
  @endforeach
</ul>