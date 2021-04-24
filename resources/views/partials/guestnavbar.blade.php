<nav x-data="{ open: false }" class="bg-white border-b border-t border-gray-200">
    <div class="hidden md:flex justify-center space-x-4 p-2 font-bold">
        <x-anuda.navlink :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
        </x-anuda.navlink>
        
        <!-- About us Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-anuda.dropdown align="top" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-gray-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>About us</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                       
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('About us') }}
                         </x-anuda.dropdown-link>
                         
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('ANUDA Jurisdiction') }}
                         </x-anuda.dropdown-link>

                    </x-slot>
                  
                </x-dropdown>
            </div>

             <!-- Planning Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-anuda.dropdown align="top" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-gray-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                            <div>Planning</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                       
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Jurisdiction') }}
                         </x-anuda.dropdown-link>
                         
                         <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Building Rules') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Layout Rules') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Fees & Charges') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Deligation of Powers') }}
                         </x-anuda.dropdown-link>
                          
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Approved Layouts') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Approved Buildings') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('BPS Approvals') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Unauthorized Layouts') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')">                                    
                                {{ __('Master Plans') }}
                         </x-anuda.dropdown-link>
                          <x-anuda.dropdown-link :href="route('home')" class="whitespace-nowrap">                                    
                                {{ __('Licensed Persons') }}
                         </x-anuda.dropdown-link>

                    </x-slot>
                  
                </x-dropdown>
            </div>

             <!-- Engineering Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-anuda.dropdown align="top" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-gray-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
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
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-anuda.dropdown align="top" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-gray-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
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
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-anuda.dropdown align="top" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center font-bold text-gray-900 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
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
                         <x-anuda.dropdown-link :href="route('home')">                                    
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
         <x-anuda.navlink :href="route('downloads')" :active="request()->routeIs('downloads')">
                        {{ __('Downloads') }}
        </x-anuda.navlink>
        <x-anuda.navlink :href="route('contactus')" :active="request()->routeIs('contactus')">
                        {{ __('Contact us') }}
        </x-anuda.navlink>
        <x-anuda.navlink :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Login') }}
        </x-anuda.navlink>

        
    </div>
{{-- Mobile Navbar --}}
        <div x-data="{ open: false }" class=" flex justify-between p-3 items-center md:hidden">
            <div><span>ANUDA</span></div>
             <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

         <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
           TestingTestingTestingTestingTestingTesting
         </div>
</nav>
