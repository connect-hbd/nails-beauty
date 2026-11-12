
<footer class="relative overflow-hidden bg-brand-25 text-slate-700">

    {{-- Subtle Background Decoration --}}
    <div class="pointer-events-none absolute -top-32 right-0 h-80 w-80 rounded-full bg-brand-100/60 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-20 -left-32 h-72 w-72 rounded-full bg-secondary-100/50 blur-3xl"></div>

    

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <section class="pt-12 ">
  <div 
    x-data="{ 
      email: '', 
      submitted: false, 
      error: '',
      submitForm() {
        this.error = '';
        if (!this.email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.email)) {
          this.error = 'Please enter a valid email address.';
          return;
        }
        this.submitted = true;
      }
    }"
    class="relative max-w-7xl mx-auto overflow-hidden bg-white border border-slate-200/80 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.04)] transition-all duration-300"
  >
    <!-- Subtle Top Accent Line & Ambient Glow -->
 
    <div class="pointer-events-none absolute -right-24 -top-24 w-72 h-72 rounded-full bg-brand-500/10 blur-3xl"></div>

    <div class="relative px-6 py-8 sm:px-10 sm:py-10 lg:px-12 lg:py-11 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
      
      <!-- Left Content Block -->
      <div class="max-w-xl space-y-3.5">
        <!-- Accreditation Badge -->
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-500/10 border border-brand-500/20 text-xs font-semibold tracking-wide text-brand-500">
          <svg class="w-4 h-4 text-brand-500 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/>
            <path d="m9 12 2 2 4-4"/>
          </svg>
          <span>Nationally Recognised Training</span>
          <span class="text-brand-500/40">&bull;</span>
          <span>ASQA Accredited</span>
        </div>

        <!-- Heading & Description -->
        <div class="space-y-2">
          <h2 class="text-2xl sm:text-3xl font-bold tracking-tight text-slate-900">
            Download the 2025 Course Prospectus
          </h2>
          <p class="text-sm sm:text-base leading-relaxed text-slate-600">
            Explore course structures, Victorian &amp; Commonwealth subsidies, flexible study schedules, and hands-on clinical placements.
          </p>
        </div>
      </div>

      <!-- Right Action / Form Block -->
      <div class="w-full lg:w-auto lg:min-w-[440px] shrink-0">
        <!-- Default Form State -->
        <form 
          x-show="!submitted" 
          @submit.prevent="submitForm" 
          novalidate
          class="space-y-2.5"
        >
          <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
            <div class="relative flex-1">
              <label for="prospectus-email" class="sr-only">Email address</label>
              <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <rect width="20" height="16" x="2" y="4" rx="2"/>
                  <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                </svg>
              </div>
              <input
                id="prospectus-email"
                type="email"
                x-model="email"
                @input="error = ''"
                placeholder="Enter your email address"
                :class="error ? 'border-red-400 focus:border-red-500 focus:ring-red-500/20' : 'border-slate-300 focus:border-brand-500 focus:ring-brand-500/20'"
                class="w-full h-12 pl-10 pr-4 text-sm text-slate-900 placeholder:text-slate-400 bg-slate-50/70 hover:bg-white focus:bg-white border rounded-xl outline-none focus:ring-4 transition-all duration-200"
              />
            </div>

            <button
              type="submit"
              class="group inline-flex items-center justify-center gap-2 h-12 px-6 text-sm font-semibold text-white bg-brand-500 hover:bg-[#347314] active:scale-[0.99] rounded-xl shadow-sm hover:shadow transition-all duration-200 cursor-pointer shrink-0"
            >
              <span>Get Prospectus</span>
              <svg class="w-4 h-4 transition-transform duration-200 group-hover:translate-x-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"/>
                <path d="m12 5 7 7-7 7"/>
              </svg>
            </button>
          </div>

          <!-- Inline Validation Message -->
          <p x-show="error" x-transition.opacity class="text-xs font-medium text-red-600 pl-1" x-text="error"></p>

          <!-- Trust Micro-copy -->
          <p x-show="!error" class="text-xs text-slate-400 pl-1">
            Instant PDF delivery to your inbox. No spam, unsubscribe anytime.
          </p>
        </form>

        <!-- Success Confirmation State -->
        <div 
          x-show="submitted" 
          x-transition.opacity.duration.300ms
          style="display: none;"
          class="flex items-center justify-between gap-4 p-4 rounded-xl bg-brand-500/10 border border-brand-500/25"
        >
          <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full bg-brand-500 text-white flex items-center justify-center shrink-0">
              <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20 6 9 17l-5-5"/>
              </svg>
            </div>
            <div>
              <p class="text-sm font-semibold text-slate-900">Prospectus Sent!</p>
              <p class="text-xs text-slate-600">We’ve emailed the 2025 PDF to <span class="font-medium text-slate-800" x-text="email"></span>.</p>
            </div>
          </div>
          <button 
            type="button" 
            @click="submitted = false; email = ''" 
            class="text-xs font-medium text-brand-500 hover:underline shrink-0 cursor-pointer"
          >
            Reset
          </button>
        </div>
      </div>

    </div>
  </div>
</section>

        {{-- Main Footer --}}
        <div class="grid grid-cols-1 gap-10 border-b border-brand-200/70 py-12 sm:py-14 md:grid-cols-2 lg:grid-cols-12 lg:gap-12">

            {{-- Brand Information --}}
            <div class="lg:col-span-4">

                <a href="/" class="inline-flex items-center">
                    Nails & Beauty Pty Ltd
                </a>

                <p class="mt-5 max-w-sm text-sm leading-7 text-slate-600">
                    Nails & Beauty Pty Ltd is a registered training organisation delivering nationally recognised
                    vocational education and compliant training across Australia.
                </p>

                 <div class="flex flex-col gap-2">

                    <span class="text-[10px] font-bold uppercase tracking-[0.18em] text-brand-600">
                        Official Registration
                    </span>

                    <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-xs font-semibold text-slate-700">

                        <span class="inline-flex items-center gap-2">
                            <iconify-icon icon="lucide:badge-check" class="text-brand-600"></iconify-icon>
                            RTO CODE: 45685
                        </span>

                        <span class="inline-flex items-center gap-2">
                            <iconify-icon icon="lucide:building-2" class="text-brand-600"></iconify-icon>
                            ABN: 31 626 754 069
                        </span>

                    </div>

                </div>

              

                {{-- Action Buttons --}}
                <div class="mt-6 flex flex-col gap-3 sm:flex-row">

                    <a href="https://wa.me/0434 299 291"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl bg-[#25D366] px-4 py-3 text-sm font-bold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-[#20ba59] hover:shadow-md">

                         <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                <path
                                    d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                            </svg>
                        WhatsApp Us
                    </a>

                    <a href="{{ route('contact') }}"
                        class="inline-flex flex-1 items-center justify-center gap-2 rounded-xl bg-brand-950 px-4 py-3 text-sm font-bold text-white shadow-sm transition-all duration-300 hover:-translate-y-0.5 hover:bg-brand-800 hover:shadow-md">

                        <iconify-icon icon="lucide:calendar-check" class="text-lg"></iconify-icon>
                        Book a Meeting
                    </a>

                </div>

            </div>


            {{-- Quick Links --}}
            <div class="lg:col-span-3">

                <div class="mb-6">

                    <h3 class="text-lg font-extrabold text-brand-950">
                        Quick Links
                    </h3>

                    <div class="mt-3 h-1 w-10 rounded-full bg-secondary-500"></div>
                </div>

                <ul class="space-y-4">

                    <li>
                        <a href="https://www.usi.gov.au/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group flex items-center gap-3 text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-brand-700">

                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-brand-600 shadow-sm ring-1 ring-brand-100 transition-all group-hover:bg-brand-600 group-hover:text-white">
                                <iconify-icon icon="lucide:arrow-up-right" class="text-sm"></iconify-icon>
                            </span>

                            Create USI
                        </a>
                    </li>

                    <li>
                        <a href="https://www.advancecollege.edu.au/ndis-worker-screening-check/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group flex items-center gap-3 text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-brand-700">

                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-brand-600 shadow-sm ring-1 ring-brand-100 transition-all group-hover:bg-brand-600 group-hover:text-white">
                                <iconify-icon icon="lucide:arrow-up-right" class="text-sm"></iconify-icon>
                            </span>

                            NDIS Check
                        </a>
                    </li>

                    <li>
                        <a href="https://www.checked.com.au/"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group flex items-center gap-3 text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-brand-700">

                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-brand-600 shadow-sm ring-1 ring-brand-100 transition-all group-hover:bg-brand-600 group-hover:text-white">
                                <iconify-icon icon="lucide:arrow-up-right" class="text-sm"></iconify-icon>
                            </span>

                            Create Police Report
                        </a>
                    </li>

                    <li>
                        <a href="https://www.service.nsw.gov.au/transaction/apply-working-children-check"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="group flex items-center gap-3 text-sm font-medium text-slate-600 transition-colors duration-200 hover:text-brand-700">

                            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-white text-brand-600 shadow-sm ring-1 ring-brand-100 transition-all group-hover:bg-brand-600 group-hover:text-white">
                                <iconify-icon icon="lucide:arrow-up-right" class="text-sm"></iconify-icon>
                            </span>

                            Working With Children Check
                        </a>
                    </li>

                </ul>

            </div>


            {{-- Contact Information --}}
            <div class="lg:col-span-5">

                {{-- Contact Cards --}}
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">

                    {{-- Admissions --}}
                    <div class="group rounded-xl border border-brand-100 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md">

                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-600 group-hover:text-white">
                            <iconify-icon icon="lucide:graduation-cap" class="text-xl"></iconify-icon>
                        </div>

                        <span class="mb-1 block text-[10px] font-bold uppercase tracking-wider text-slate-500">
                            Admissions Enquiries
                        </span>

                        <a href="mailto:enrol@@csia.edu.au"
                            class="break-all text-sm font-bold text-brand-950 transition-colors hover:text-brand-600">
                            enrol@@csia.edu.au
                        </a>

                    </div>


                    {{-- General Enquiries --}}
                    <div class="group rounded-xl border border-brand-100 bg-white p-4 shadow-sm transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-md">

                        <div class="mb-3 flex h-10 w-10 items-center justify-center rounded-xl bg-brand-50 text-brand-600 transition-colors group-hover:bg-brand-600 group-hover:text-white">
                            <iconify-icon icon="lucide:mail" class="text-xl"></iconify-icon>
                        </div>

                        <span class="mb-1 block text-[10px] font-bold uppercase tracking-wider text-slate-500">
                            General Enquiries
                        </span>

                        <a href="mailto:admin@csia.edu.au"
                            class="break-all text-sm font-bold text-brand-950 transition-colors hover:text-brand-600">
                            admin@csia.edu.au
                        </a>

                    </div>

                </div>


                {{-- Address Card --}}
                <div class="mt-4 flex items-start gap-4 rounded-xl border border-brand-100 bg-white p-4 shadow-sm">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-brand-50 text-brand-600">
                        <iconify-icon icon="lucide:map-pin" class="text-xl"></iconify-icon>
                    </div>

                    <div class="min-w-0">

                        <span class="mb-1 block text-[10px] font-bold uppercase tracking-wider text-slate-500">
                            Our Location
                        </span>

                        <p class="text-sm font-semibold leading-6 text-brand-950">
                           17 Chuter St, MCMAHONS POINT, NSW, 2060
                        </p>

                        <a href="tel:+61286773600"
                            class="mt-1 inline-flex items-center gap-2 text-sm font-bold text-brand-600 transition-colors hover:text-brand-800">

                            <iconify-icon icon="lucide:phone" class="text-sm"></iconify-icon>
                           0434 299 291
                        </a>

                    </div>

                </div>

            </div>

        </div>


        {{-- Accreditation & Policies --}}
        <div class="flex flex-col gap-6 py-6 lg:flex-row lg:items-center lg:justify-between">

           
             <p class="text-xs font-medium leading-5 text-brand-500">
                &copy; {{ date('Y') }} Nails & Beauty Pty Ltd. All rights reserved.
            </p>


            {{-- Legal Links --}}
            <div class="flex flex-wrap items-center gap-x-6 gap-y-3 text-xs font-semibold text-brand-500">

                <a href="{{ route('privacy-policy') }}"
                    class="transition-colors hover:text-brand-700">
                    Privacy Policy
                </a>

                <a href="{{ route('terms-conditions') }}"
                    class="transition-colors hover:text-brand-700">
                    Refund Policy
                </a>

                <a href="#"
                    class="transition-colors hover:text-brand-700">
                    Terms of Conditions
                </a>

            </div>

        </div>

    </div>

</footer>
