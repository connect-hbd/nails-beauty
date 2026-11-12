<section class="py-16 sm:py-20 px-4 sm:px-6 lg:px-8 bg-accent-50 ">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
        
        <!-- Left Image Card -->
        <div class="lg:col-span-7 relative rounded-3xl overflow-hidden border border-secondary-200 shadow-sm min-h-[420px] sm:min-h-[500px] lg:min-h-[540px] flex flex-col justify-between p-6 sm:p-8 group">
            <!-- Background Image with Subtle Hover Zoom -->
            <div 
                class="absolute inset-0 bg-cover bg-center z-0 transition-transform duration-700 ease-out group-hover:scale-105" 
                style="background-image: url('{{ asset('images/hero/bannar.jpg') }}');"
            >
                <!-- Warm Espresso Gradient Overlay for Legibility -->
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/65 via-brand-950/15 to-brand-950/20"></div>
            </div>

            <!-- Top Badge (Warm Sand & Espresso instead of Lime Green) -->
            <div class="relative z-10 self-start bg-secondary-100/95 backdrop-blur-md border border-secondary-300 rounded-2xl px-4 sm:px-5 py-3 shadow-xs">
                <span class="block text-[10px] sm:text-xs font-bold tracking-wider uppercase text-brand-700 mb-0.5">
                    Earn Nationally Accredited Qualifications
                </span>
                <h3 class="text-lg sm:text-2xl font-extrabold text-brand-950 tracking-tight">
                    Popular 16 Qualifications
                </h3>
            </div>

            <!-- Bottom Floating Card -->
            <div class="relative z-10 bg-accent-25/95 backdrop-blur-md border border-secondary-200 rounded-2xl p-4 sm:p-5 shadow-md flex items-start sm:items-center gap-3.5 max-w-2xl">
                <span class="w-2.5 h-2.5 rounded-full bg-success-600 mt-1.5 sm:mt-0 shrink-0 ring-4 ring-success-100"></span>
                <p class="text-xs sm:text-sm text-brand-900 font-medium leading-relaxed">
                    Discover nationally recognised qualifications designed to develop practical clinical skills and unlock rewarding salon career opportunities.
                </p>
            </div>
        </div>

        <!-- Right Info Card -->
        <div class="lg:col-span-5 bg-accent-25 rounded-3xl p-6 sm:p-8 shadow-xs border border-secondary-200 flex flex-col justify-between">
            <div>
                <!-- Card Header Top -->
                <div class="flex flex-wrap items-center justify-between gap-2 pb-5 mb-6 border-b border-secondary-200">
                    <span class="text-[11px] font-bold tracking-wider uppercase text-brand-600">
                        Training Provider in Australia
                    </span>
                    <span class="inline-flex items-center gap-1.5 bg-success-50 text-success-700 text-xs font-semibold px-3 py-1 rounded-full border border-success-200">
                        <svg class="w-3.5 h-3.5 fill-current shrink-0" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        Authorised RTO
                    </span>
                </div>

                <!-- RTO Details Box -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-brand-100 border border-brand-200 flex items-center justify-center text-brand-800 shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="inline-block text-xs font-bold text-brand-600 uppercase tracking-wider mb-0.5">
                            RTO 21851
                        </span>
                        <h2 class="text-lg sm:text-xl font-extrabold text-brand-950 leading-snug">
                            Melbourne Institute of Nails &amp; Beauty Pty Ltd
                        </h2>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mb-6">
                    <div class="bg-accent-50 p-3.5 rounded-2xl border border-secondary-200">
                        <span class="block text-[11px] font-semibold text-brand-600 uppercase tracking-wider mb-1">
                            Recognition
                        </span>
                        <span class="text-sm font-bold text-brand-950 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 1.176-.303 2.308-.758 3.364-1.352"/>
                            </svg>
                            Nationally Recognised
                        </span>
                    </div>

                    <div class="bg-accent-50 p-3.5 rounded-2xl border border-secondary-200">
                        <span class="block text-[11px] font-semibold text-brand-600 uppercase tracking-wider mb-1">
                            Qualifications
                        </span>
                        <span class="text-sm font-bold text-brand-950 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-brand-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                            </svg>
                            16 Qualifications
                        </span>
                    </div>

                    <div class="bg-accent-50 p-3.5 rounded-2xl border border-secondary-200">
                        <span class="block text-[11px] font-semibold text-brand-600 uppercase tracking-wider mb-1">
                            Units of Competency
                        </span>
                        <span class="text-sm font-bold text-brand-950">
                            412 Accredited Units
                        </span>
                    </div>

                    <div class="bg-accent-50 p-3.5 rounded-2xl border border-secondary-200">
                        <span class="block text-[11px] font-semibold text-brand-600 uppercase tracking-wider mb-1">
                            Accreditations
                        </span>
                        <span class="text-sm font-bold text-brand-950 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-success-600 shrink-0" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                            </svg>
                            NRT &amp; AQF Approved
                        </span>
                    </div>
                </div>

                <!-- Description Note -->
                <p class="text-xs sm:text-sm text-brand-700 leading-relaxed mb-6">
                    Delivering government-approved, nationally recognised training under the Australian Qualifications Framework (AQF).
                </p>
            </div>

            <!-- CTA Actions -->
            <div class="flex items-center gap-3 pt-2">
                <a href="#enquire" class="flex-1 inline-flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-800 active:bg-brand-900 text-accent-25 font-semibold text-sm py-3.5 px-6 rounded-full shadow-xs hover:shadow-md transition-all duration-200">
                    <span>Enquire Now</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <button type="button" class="w-12 h-12 rounded-full border border-secondary-300 bg-accent-50 hover:bg-secondary-100 flex items-center justify-center text-brand-800 hover:text-brand-950 transition-all duration-200 shrink-0" aria-label="Save RTO Profile">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"/>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</section>