<nav x-data="{ open: false }" class="bg-blue-600 border-b border-t border-blue-200">
    <div class="hidden md:flex justify-center font-bold">
        <x-anuda.navlink :href="route('home')" :active="request()->routeIs('home')" class="w-32 flex justify-center">
                        {{ __('Home') }}
        </x-anuda.navlink>
        <x-anuda.navlink :href="route('home')" :active="request()->routeIs('home')" class="w-32 flex justify-center">
                        {{ __('About us') }}
        </x-anuda.navlink>
        
       

             <!-- Planning Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-2 hover:bg-blue-800 ">
                <x-anuda.dropdown align="top" width="44">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-white hover:border-gray-300 focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out w-32 justify-center">
                            <div>Planning</div>

                            <div class="ml-1 ">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                       
                         {{-- <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Jurisdiction') }}
                         </x-anuda.dropdown-link>
                         
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Building Rules') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Layout Rules') }}
                         </x-anuda.dropdown-link> --}}
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Fees & Charges') }}
                         </x-anuda.dropdown-link>
                          {{-- <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Deligation of Powers') }}
                         </x-anuda.dropdown-link>
                          
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Approved Layouts') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Approved Buildings') }}
                         </x-anuda.dropdown-link> --}}
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('BPS Approvals') }}
                         </x-anuda.dropdown-link>
                          {{-- <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Unauthorized Layouts') }}
                         </x-anuda.dropdown-link> --}}
                          {{-- <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Master Plans') }}
                         </x-anuda.dropdown-link> --}}
                          {{-- <x-anuda.dropdown-link :href="route('home')" class="whitespace-nowrap">                                    
                                {{ __('Licensed Persons') }}
                         </x-anuda.dropdown-link> --}}

                    </x-slot>
                  
                </x-dropdown>
            </div>

             <!-- Engineering Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-2 hover:bg-blue-800 ">
                <x-anuda.dropdown align="top">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-white  hover:border-gray-300 focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out w-32 justify-center">
                            <div>Engineering</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                       
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Tenders') }}
                         </x-anuda.dropdown-link>
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Ongoing works') }}
                         </x-anuda.dropdown-link>
                         
                        

                    </x-slot>
                  
                </x-dropdown>
            </div>
            <!-- Engineering Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-2 hover:bg-blue-800 ">
                <x-anuda.dropdown align="top">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-white hover:border-gray-300 focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out w-32 justify-center">
                            <div>Estate</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                       
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Landbank') }}
                         </x-anuda.dropdown-link>
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Mortgage deeds') }}
                         </x-anuda.dropdown-link>
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Land pooling') }}
                         </x-anuda.dropdown-link>
                        

                    </x-slot>
                  
                </x-dropdown>
            </div>

            <!-- Engineering Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-2 hover:bg-blue-800 ">
                <x-anuda.dropdown align="top" >
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-white  hover:border-gray-300 focus:outline-none focus:text-white focus:border-gray-300 transition duration-150 ease-in-out w-32 justify-center">
                            <div>GO's</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                       
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Circulars') }}
                         </x-anuda.dropdown-link>
                         <x-anuda.dropdown-link :href="route('gos')">                                    
                                {{ __('Go\'s') }}
                         </x-anuda.dropdown-link>
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Acts') }}
                         </x-anuda.dropdown-link>
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Rules') }}
                         </x-anuda.dropdown-link>
                        

                    </x-slot>
                  
                </x-dropdown>
            </div>
         <x-anuda.navlink :href="route('downloads')" :active="request()->routeIs('downloads')" class="w-32 flex justify-center">
                        {{ __('Downloads') }}
        </x-anuda.navlink>
        <x-anuda.navlink :href="route('contactus')" :active="request()->routeIs('contactus')" class="w-32 flex justify-center">
                        {{ __('Contact us') }}
        </x-anuda.navlink>
        <x-anuda.navlink :href="route('login')" :active="request()->routeIs('login')" class="w-32 flex justify-center">
                        {{ __('Login') }}
        </x-anuda.navlink>

         
        
    </div>
    <!-- Hamburger -->
            <div class="-mr-2 flex justify-between items-center sm:hidden p-2">
                <div class="text-white font-bold flex items-center space-x-1"><img src={{asset('images/logo.png')}} class="w-10 object-contain mr-2"/>ANUDA</div>
                <button x-on:click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-100 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
<!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('About us') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Fees & Charges') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('BPS Approvals') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Tenders') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Ongoing Works') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Landbank') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Mortgage Deeds') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Land Pooling') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('GO\'s') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Contact us') }}
            </x-responsive-nav-link>
            @guest
            <x-responsive-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-responsive-nav-link>
            @endguest
        </div>

        <!-- Responsive Settings Options -->
        @auth
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                <div class="flex-shrink-0">
                    <svg class="h-10 w-10 fill-current text-gray-100" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                </div>

                <div class="ml-3">
                    <div class="font-medium text-base text-gray-100">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-100">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1 ">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        <span class="text-white">{{ __('Log out') }}</span>
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
        @endauth

    </div>
</nav>
