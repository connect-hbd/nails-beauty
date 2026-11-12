    @php
        $industries = json_decode(file_get_contents(resource_path('data/industries.json')), true);

    @endphp
    <header class="fixed top-0 left-0 w-full z-50 border-0  bg-white backdrop-blur-md dark:bg-neutral-900/95">

        <nav class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="flex justify-between items-center h-18 md:h-20">
                <!-- Mobile Menu Button -->
                <button id="menuBtn" class="md:hidden">

                    <!-- Hamburger -->
                    <svg id="menuOpenIcon" class="w-7 h-7 text-neutral-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16">
                        </path>
                    </svg>

                    <!-- Close -->
                    <svg id="menuCloseIcon" class="hidden w-7 h-7 text-neutral-600" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>

                </button>
                <!-- Logo -->
                <div class=" p-1.5">
                    <a href="/" class="flex items-center gap-2 font-semibold">
                        Nails & Beauty Pty Ltd
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-4 md:gap-6 lg:gap-8 text-sm font-semibold uppercase">
                    {{-- about --}}
                    <a href="{{ route('about') }}"
                        class="relative font-semibold transition-all duration-300
                            {{ request()->routeIs('about') ? 'text-brand-600 font-semibold after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        About Us
                    </a>

                    <a href="{{ route('qualifications.index') }}"
                        class="relative font-semibold transition-all duration-300
                            {{ request()->routeIs('qualifications.*') ? 'text-brand-600 font-semibold after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        Qualifications
                    </a>                  
                   
                    {{-- contact --}}
                    <a href="{{ route('contact') }}"
                        class="relative font-semibold transition-all duration-300
                            {{ request()->routeIs('contact') ? 'text-brand-600 font-semibold after:w-full' : 'text-neutral-600 hover:text-brand-600 after:w-0 hover:after:w-full' }}
                            after:absolute after:left-0 after:-bottom-1.5
                            after:h-0.5 after:bg-brand-600 after:transition-all after:duration-300">
                        Contact Us
                    </a>


                </div>

                <div class="flex items-center gap-4 lg:gap-6">
                    <a href="{{ route('eligibility') }}"
                        class="hidden md:flex text-sm uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-semibold hover:bg-brand-600 transition">
                        Enroll Now
                    </a>
                </div>
            </div>

        </nav>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t border-slate-200 shadow-lg">

            <div class="flex flex-col px-6 py-5 space-y-3 text-base font-semibold">
                <a href="{{ route('about') }}"
                    class="{{ request()->routeIs('about') ? 'text-neutral-600 font-semibold' : 'text-neutral-600' }}">About
                    Us</a>
                <a href="{{ route('qualifications.index') }}"
                    class="{{ request()->routeIs('qualifications.*') ? 'text-neutral-600 font-semibold' : 'text-neutral-600' }}">Qualifications</a>
                
               
                <a href="{{ route('contact') }}"
                    class="{{ request()->routeIs('contact') ? 'text-neutral-600 font-semibold' : 'text-neutral-600' }}">Contact
                    Us</a>


                <div class="flex items-center justify-between mt-6">

                    <a href="{{ route('eligibility') }}"
                        class="text-sm uppercase bg-brand-600 text-white px-4 py-2 lg:px-6 lg:py-2.5 rounded-lg font-semibold hover:bg-brand-600 transition">
                        Check Your Eligibility
                    </a>

                </div>
            </div>
        </div>
    </header>
    <script>
        const menuBtn = document.getElementById('menuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        const openIcon = document.getElementById('menuOpenIcon');
        const closeIcon = document.getElementById('menuCloseIcon');

        menuBtn.addEventListener('click', () => {

            mobileMenu.classList.toggle('hidden');

            if (mobileMenu.classList.contains('hidden')) {
                openIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            } else {
                openIcon.classList.add('hidden');
                closeIcon.classList.remove('hidden');
            }

        });
    </script>
