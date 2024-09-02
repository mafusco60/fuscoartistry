<footer
  
class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-cyan-800 text-white h-24 mt-24 opacity-90 md:justify-center"
>

 {{-- Logo --}}
 <a href="/">
    <img
      class="w-[200px]"
      src="{{ asset('logo.png') }}"
      alt="Fusco Artistry"
      class="logo"
    />
  </a>

  {{-- Company Name --}}
  <div class="  flex justify-between items-center">
    <a href="/">
      <span
        class="flex text-white text-xl font-bold justify-left pr-20"
        {{-- font-['ProtestRevolution-Regular'] --}}
      >
        
      </span>
    </a>
  </div>

{{-- Menu - Home and Gallery with Icons--}}
<ul class="flex space-x-6 mr-6 text-lg">              
  <li>
      <a href="/" class="hover:text-cyan-200"
          ><i class="fa-solid fa-house"></i> Home</a
      >
  </li>
  <li>
      <a href="/listings/all" class="hover:text-cyan-200"
          ><i class="fa fa-paintbrush" style=";color:white"></i>
          Gallery</a
      >
  </li>
</ul>
{{-- Copyright --}}
<p class="ml-2">
  Copyright &copy; 2023 - {{ date('Y')}} <span class="m-3">  All Rights reserved<span>
  </p>
</footer>