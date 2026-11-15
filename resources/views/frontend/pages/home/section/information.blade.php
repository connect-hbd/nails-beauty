<section class="py-16 sm:py-24 px-4 sm:px-6 lg:px-8 bg-accent-50">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-stretch">
        
        <!-- Left Image Card -->
        <div class="lg:col-span-7 relative rounded-3xl overflow-hidden border border-secondary-200 shadow-xs min-h-[420px] sm:min-h-[500px] lg:min-h-[560px] flex flex-col justify-between p-6 sm:p-8 group">
            <!-- Background Image with Subtle Hover Zoom -->
            <div 
                class="absolute inset-0 bg-cover bg-center z-0 transition-transform duration-700 ease-out group-hover:scale-105" 
                style="background-image: url('{{ asset('images/hero/bannar.jpg') }}');"
            >
                <!-- Warm Espresso Gradient Overlay for Legibility -->
                <div class="absolute inset-0 bg-gradient-to-t from-brand-950/75 via-brand-950/20 to-brand-950/25"></div>
            </div>

            <!-- Top Glass Badge -->
            <div class="relative z-10 self-start bg-accent-25/95 backdrop-blur-md border border-secondary-200 rounded-2xl px-4 sm:px-5 py-3.5 shadow-xs">
                <span class="block text-[10px] sm:text-xs font-bold tracking-wider uppercase text-brand-600 mb-0.5">
                    Earn Nationally Accredited Qualifications
                </span>
                <h3 class="text-xl sm:text-2xl font-extrabold text-brand-950 tracking-tight">
                    Popular <span class="font-serif italic font-semibold text-brand-600">16 Qualifications</span>
                </h3>
            </div>

            <!-- Bottom Floating Card -->
            <div class="relative z-10 bg-accent-25/95 backdrop-blur-md border border-secondary-200 rounded-2xl p-4 sm:p-5 shadow-md flex items-start sm:items-center gap-3.5 max-w-2xl">
                <span class="w-2.5 h-2.5 rounded-full bg-brand-600 mt-1.5 sm:mt-0 shrink-0 ring-4 ring-brand-200/70"></span>
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
                    <span class="inline-flex items-center gap-1.5 bg-secondary-100 text-brand-800 text-xs font-semibold px-3 py-1 rounded-full border border-secondary-300">
                        <iconify-icon icon="lucide:badge-check" class="text-sm text-brand-600 shrink-0"></iconify-icon>
                        Authorised RTO
                    </span>
                </div>

                <!-- RTO Details Box -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-brand-100/80 border border-brand-200 flex items-center justify-center text-brand-700 shrink-0">
                        <iconify-icon icon="lucide:shield-check" class="text-2xl"></iconify-icon>
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
                            <iconify-icon icon="lucide:award" class="text-base text-brand-600 shrink-0"></iconify-icon>
                            Nationally Recognised
                        </span>
                    </div>

                    <div class="bg-accent-50 p-3.5 rounded-2xl border border-secondary-200">
                        <span class="block text-[11px] font-semibold text-brand-600 uppercase tracking-wider mb-1">
                            Qualifications
                        </span>
                        <span class="text-sm font-bold text-brand-950 flex items-center gap-1.5">
                            <iconify-icon icon="lucide:book-open" class="text-base text-brand-600 shrink-0"></iconify-icon>
                            16 Qualifications
                        </span>
                    </div>

                    <div class="bg-accent-50 p-3.5 rounded-2xl border border-secondary-200">
                        <span class="block text-[11px] font-semibold text-brand-600 uppercase tracking-wider mb-1">
                            Units of Competency
                        </span>
                        <span class="text-sm font-bold text-brand-950 flex items-center gap-1.5">
                            <iconify-icon icon="lucide:layers" class="text-base text-brand-600 shrink-0"></iconify-icon>
                            412 Accredited Units
                        </span>
                    </div>

                    <div class="bg-accent-50 p-3.5 rounded-2xl border border-secondary-200">
                        <span class="block text-[11px] font-semibold text-brand-600 uppercase tracking-wider mb-1">
                            Accreditations
                        </span>
                        <span class="text-sm font-bold text-brand-950 flex items-center gap-1.5">
                            <iconify-icon icon="lucide:check-circle-2" class="text-base text-brand-600 shrink-0"></iconify-icon>
                            NRT &amp; AQF Approved
                        </span>
                    </div>
                </div>

                <!-- Description Note -->
                <p class="text-xs sm:text-sm text-brand-800/85 leading-relaxed mb-6">
                    Delivering government-approved, nationally recognised training under the Australian Qualifications Framework (AQF).
                </p>
            </div>

            <!-- CTA Actions -->
            <div class="flex items-center gap-3 pt-2">
                <a href="#enquire" class="group flex-1 inline-flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-700 active:bg-brand-800 text-accent-25 font-semibold text-sm py-3.5 px-6 rounded-full shadow-xs hover:shadow-md transition-all duration-200">
                    <span>Enquire Now</span>
                    <iconify-icon icon="lucide:arrow-right" class="text-base transition-transform duration-200 group-hover:translate-x-1"></iconify-icon>
                </a>
                <button type="button" class="w-12 h-12 rounded-full border border-secondary-300 bg-accent-50 hover:bg-secondary-100 flex items-center justify-center text-brand-800 hover:text-brand-950 transition-all duration-200 shrink-0 cursor-pointer" aria-label="Save RTO Profile">
                    <iconify-icon icon="lucide:bookmark" class="text-lg"></iconify-icon>
                </button>
            </div>
        </div>

    </div>
</section>