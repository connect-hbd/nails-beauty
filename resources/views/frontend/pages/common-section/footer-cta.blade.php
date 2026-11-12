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