  {{-- =========================================================
            PROSPECTUS DOWNLOAD BANNER (Alpine.js)
        ========================================================= --}}
        <section class="pt-12 pb-6">
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
                class="relative max-w-7xl mx-auto overflow-hidden bg-accent-25 border border-secondary-200 rounded-3xl shadow-xl shadow-brand-950/5 transition-all duration-300"
            >
                <!-- Ambient Glow inside card -->
                <div class="pointer-events-none absolute -right-24 -top-24 w-72 h-72 rounded-full bg-brand-600/10 blur-3xl"></div>

                <div class="relative px-6 py-8 sm:px-10 sm:py-10 lg:px-12 lg:py-11 flex flex-col lg:flex-row lg:items-center lg:justify-between gap-8">
                    
                    <!-- Left Content Block -->
                    <div class="max-w-xl space-y-3.5">
                        <!-- Accreditation Badge -->
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-brand-100/80 border border-brand-200 text-xs font-bold tracking-wide text-brand-700">
                            <iconify-icon icon="lucide:shield-check" class="text-base text-brand-600 shrink-0"></iconify-icon>
                            <span>Nationally Recognised Training</span>
                            <span class="text-brand-400">&bull;</span>
                            <span>ASQA Accredited</span>
                        </div>

                        <!-- Heading & Description -->
                        <div class="space-y-2">
                            <h2 class="text-2xl sm:text-3xl font-extrabold tracking-tight text-brand-950">
                                Download the <span class="font-serif italic font-semibold text-brand-600">2025 Course Prospectus</span>
                            </h2>
                            <p class="text-sm sm:text-base leading-relaxed text-brand-800/85">
                                Explore course structures, Victorian &amp; Commonwealth subsidies, flexible study schedules, and hands-on clinical salon placements.
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
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-brand-500">
                                        <iconify-icon icon="lucide:mail" class="text-lg"></iconify-icon>
                                    </div>
                                    <input
                                        id="prospectus-email"
                                        type="email"
                                        x-model="email"
                                        @input="error = ''"
                                        placeholder="Enter your email address"
                                        :class="error ? 'border-red-400 focus:border-red-500 focus:ring-red-500/20' : 'border-secondary-300 focus:border-brand-500 focus:ring-brand-500/20'"
                                        class="w-full h-12 pl-11 pr-4 text-sm text-brand-950 placeholder:text-brand-400 bg-accent-50 hover:bg-accent-25 focus:bg-accent-25 border rounded-full outline-none focus:ring-4 transition-all duration-200"
                                    />
                                </div>

                                <button
                                    type="submit"
                                    class="group inline-flex items-center justify-center gap-2 h-12 px-7 text-sm font-semibold text-accent-25 bg-brand-600 hover:bg-brand-700 active:bg-brand-800 rounded-full shadow-sm hover:shadow-md transition-all duration-200 cursor-pointer shrink-0"
                                >
                                    <span>Get Prospectus</span>
                                    <iconify-icon icon="lucide:arrow-right" class="text-base transition-transform duration-200 group-hover:translate-x-1"></iconify-icon>
                                </button>
                            </div>

                            <!-- Inline Validation Message -->
                            <p x-show="error" x-transition.opacity class="text-xs font-medium text-red-600 pl-3" x-text="error"></p>

                            <!-- Trust Micro-copy -->
                            <p x-show="!error" class="text-xs text-brand-700/70 pl-3">
                                Instant PDF delivery to your inbox. No spam, unsubscribe anytime.
                            </p>
                        </form>

                        <!-- Success Confirmation State -->
                        <div 
                            x-show="submitted" 
                            x-transition.opacity.duration.300ms
                            style="display: none;"
                            class="flex items-center justify-between gap-4 p-4 rounded-2xl bg-brand-100/90 border border-brand-200"
                        >
                            <div class="flex items-center gap-3">
                                <div class="w-9 h-9 rounded-full bg-brand-600 text-accent-25 flex items-center justify-center shrink-0">
                                    <iconify-icon icon="lucide:check" class="text-lg"></iconify-icon>
                                </div>
                                <div>
                                    <p class="text-sm font-extrabold text-brand-950">Prospectus Sent Successfully!</p>
                                    <p class="text-xs text-brand-800">We’ve emailed the 2025 PDF to <span class="font-bold text-brand-950" x-text="email"></span>.</p>
                                </div>
                            </div>
                            <button 
                                type="button" 
                                @click="submitted = false; email = ''" 
                                class="text-xs font-bold text-brand-700 hover:text-brand-950 underline shrink-0 cursor-pointer px-2 py-1"
                            >
                                Reset
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </section>