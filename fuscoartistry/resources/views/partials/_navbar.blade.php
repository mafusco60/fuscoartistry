{{-- Navbar: partials/_navbar.blade.php --}}

{{-- --------------- Navbar --------------- --}}
{{-- Navbar: Logo, Home, Gallery, Favorites, Contact, Admin Menu Items --}}
{{-- Home / Gallery / Favorites / Contact - Icons - Not needed for Admin --}}
{{-- Admin Menu Items: Create Listing / Manage Listings /  Manage Messages / View Users - Icons --}}
{{-- Welcome User and Logout --}}
{{-- Register / Login --}}

{{-- Navbar --}}

<nav class="container flex justify-between items-center mb-4 pt-3">
  {{-- Logo --}}
  <a href="/">
    <img
      class="w-[600px]"
      src="{{ asset('logo.png') }}"
      alt="Fusco Artistry"
      class="logo"
    />
  </a>

  {{-- Home / Gallery / Favorites / Contact - Icons - Admin not needed --}}
  <ul class="flex space-x-6 text-lg">
    @auth
      @if (auth()->user()->admin != 1)
        {{-- Home --}}
        <li class="group relative">
          <a href="/" class="hover:text-cyan-200">
            <i class="fa-solid fa-home"></i>
          </a>
          <span
            class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded"
          >
            Home
          </span>
        </li>
        {{-- Gallery --}}
        <li class="group relative">
          <a href="/listings/all" class="hover:text-cyan-200">
            <i class="fa-solid fa-paintbrush"></i>
          </a>
          <span
            class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded"
          >
            Gallery
          </span>
        </li>

        {{-- Favorites (if logged in) --}}
        @if (auth()->user() ?? null)
          <li class="group relative">
            <a
              href="/bookmarks/all/{{ auth()->user()->id }}"
              class="hover:text-cyan-200"
            >
              <span><i class="fa-solid fa-heart"></i></span>
            </a>
            <span
              class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded"
            >
              Favorites
            </span>
          </li>
          {{-- Contact --}}
          <li class="group relative">
            <a href="/contactmessages/create" class="hover:text-cyan-200">
              <i class="fa-solid fa-share"></i>
            </a>
            <span
              class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded text-center"
            >
              Send Message
            </span>
          </li>
        @endif
      @endauth
    @endif

    {{-- Admin Menu Items: Create Listing / Manage Listings /  Manage Messages / View Users- Icons --}}
    @auth
      @if (auth()->user()->admin == 1)
        {{-- Create Listing --}}
        <li class="group relative">
          <a href="/admin/create" class="text-white hover:text-cyan-200">
            <i class="fa-solid fa-square-plus"></i>
          </a>
          <span
            class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded text-center"
          >
            Create Listing
          </span>
        </li>
        {{-- Manage Listings --}}
        <li class="group relative">
          <a href="/admin/manage" class="hover:text-cyan-200">
            <i class="fa-solid fa-list"></i>
          </a>
          <span
            class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded text-center"
          >
            Manage Listings
          </span>
        </li>
        {{-- Manage Messages --}}
        <li class="group relative">
          <a href="/admin/contactmessages" class="hover:text-cyan-200">
            <i class="fa-solid fa-envelope"></i>
          </a>
          <span
            class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded text-center"
          >
            Manage Messages
          </span>
        </li>
        {{-- Users --}}
        <li class="group relative">
          <a href="/admin/users/index" class="hover:text-cyan-200">
            <i class="fa-solid fa-users"></i>
          </a>
          <span
            class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded text-center"
          >
            View Users
          </span>
        </li>
        {{-- Hello Admin! --}}
        <li class="group relative">
          <i class="fa-solid fa-user-cog"></i>
          <span
            class="absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded text-center"
          >
            Hello Admin!
          </span>
        </li>

        {{-- Welcome User and Logout --}}
      @else
        <li class="font-bold text-center">
          Welcome
          <span class="font-normal">{{ auth()->user()->name }}</span>
        </li>
      @endif

      <li class="group relative">
        <form class="inline" method="POST" action="/users/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-sign-out"></i>

            <span
              class="hover:text-cyan-200 absolute left-1/2 transform -translate-x-1/2 bottom-full hidden group-hover:block text-xs text-white bg-cyan-900 rounded text-center"
            >
              Logout
            </span>
          </button>
        </form>
      </li>
    @else
      {{-- Register / Login --}}
      <li>
        <a href="/users/register" class="hover:text-cyan-200">
          <i class="fa-solid fa-user-plus"></i>
          Register
        </a>
      </li>
      <li>
        <a href="/users/login" class="hover:text-cyan-200">
          <i class="fa-solid fa-arrow-right-to-bracket"></i>
          Login
        </a>
      </li>
    @endauth
  </ul>
</nav>
