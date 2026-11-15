<footer class="relative overflow-hidden bg-brand-25 text-brand-950 border-t border-secondary-200/80 antialiased">

    {{-- Subtle Background Decoration Glows --}}
    <div class="pointer-events-none absolute -top-32 right-0 h-96 w-96 rounded-full bg-brand-100/50 blur-3xl"></div>
    <div class="pointer-events-none absolute bottom-20 -left-32 h-80 w-80 rounded-full bg-secondary-100/40 blur-3xl"></div>

    <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

      @include('frontend.pages.common-section.footer-cta')

        {{-- =========================================================
            MAIN FOOTER GRID
        ========================================================= --}}
        <div class="grid grid-cols-1 gap-10 border-b border-secondary-200 py-12 sm:py-16 md:grid-cols-2 lg:grid-cols-12 lg:gap-10">

            {{-- Brand Information & RTO Badges (Col 4) --}}
            <div class="lg:col-span-4 space-y-5">
                <a href="/" class="inline-flex items-center gap-2.5 text-xl font-extrabold tracking-tight text-brand-950">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-600 text-accent-25 shadow-xs">
                        <iconify-icon icon="lucide:sparkles" class="text-xl"></iconify-icon>
                    </span>
                    <span>Melbourne Institute of Melbourne Institute of Nails & Beauty Pty Ltd</span>
                </a>

                <p class="text-sm leading-relaxed text-brand-800/85 max-w-sm">
                    Nails &amp; Beauty Pty Ltd is an authorised registered training organisation delivering nationally recognised vocational education and clinical training across Australia.
                </p>

                <div class="flex flex-col gap-2.5 pt-2">
                    <span class="text-[11px] font-bold uppercase tracking-[0.18em] text-brand-600">
                        Official Registration
                    </span>

                    <div class="flex flex-wrap items-center gap-x-5 gap-y-2 text-xs font-bold text-brand-900">
                        <span class="inline-flex items-center gap-1.5 bg-accent-25 border border-secondary-200 px-3 py-1.5 rounded-xl shadow-2xs">
                            <iconify-icon icon="lucide:badge-check" class="text-brand-600 text-sm"></iconify-icon>
                            RTO CODE: 45685
                        </span>

                        <span class="inline-flex items-center gap-1.5 bg-accent-25 border border-secondary-200 px-3 py-1.5 rounded-xl shadow-2xs">
                            <iconify-icon icon="lucide:building-2" class="text-brand-600 text-sm"></iconify-icon>
                            ABN: 31 626 754 069
                        </span>
                    </div>
                </div>
            </div>

            {{-- Quick Links (Col 4) --}}
            <div class="lg:col-span-4 lg:pl-6">
                <div class="mb-5">
                    <h3 class="text-base font-extrabold text-brand-950 uppercase tracking-wide">
                        Quick Links
                    </h3>
                    <div class="mt-2 h-1 w-10 rounded-full bg-brand-500"></div>
                </div>

                <ul class="grid grid-cols-2 gap-2.5 text-sm font-semibold text-brand-800">
                    <li>
                        <a href="#qualifications" class="inline-flex items-center gap-1.5 hover:text-brand-600 transition-colors">
                            <iconify-icon icon="lucide:chevron-right" class="text-xs text-brand-500"></iconify-icon>
                            Qualifications
                        </a>
                    </li>
                    <li>
                        <a href="#faq" class="inline-flex items-center gap-1.5 hover:text-brand-600 transition-colors">
                            <iconify-icon icon="lucide:chevron-right" class="text-xs text-brand-500"></iconify-icon>
                            RPL Guide
                        </a>
                    </li>
                    <li>
                        <a href="#enquire" class="inline-flex items-center gap-1.5 hover:text-brand-600 transition-colors">
                            <iconify-icon icon="lucide:chevron-right" class="text-xs text-brand-500"></iconify-icon>
                            Enrolment
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center gap-1.5 hover:text-brand-600 transition-colors">
                            <iconify-icon icon="lucide:chevron-right" class="text-xs text-brand-500"></iconify-icon>
                            Student Portal
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center gap-1.5 hover:text-brand-600 transition-colors">
                            <iconify-icon icon="lucide:chevron-right" class="text-xs text-brand-500"></iconify-icon>
                            Our Salon
                        </a>
                    </li>
                    <li>
                        <a href="#" class="inline-flex items-center gap-1.5 hover:text-brand-600 transition-colors">
                            <iconify-icon icon="lucide:chevron-right" class="text-xs text-brand-500"></iconify-icon>
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Contact Information (Col 4) --}}
            <div class="lg:col-span-4">
                <div class="mb-5">
                    <h3 class="text-base font-extrabold text-brand-950 uppercase tracking-wide">
                        Melbourne Campus
                    </h3>
                    <div class="mt-2 h-1 w-10 rounded-full bg-brand-500"></div>
                </div>

                <ul class="space-y-3.5 text-sm font-medium text-brand-800">
                    <li class="flex items-start gap-3">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-accent-25 border border-secondary-200 text-brand-600 shadow-2xs mt-0.5">
                            <iconify-icon icon="lucide:map-pin" class="text-base"></iconify-icon>
                        </span>
                        <span>Level 2, 310 Bourke Street, Melbourne CBD, VIC 3000</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-accent-25 border border-secondary-200 text-brand-600 shadow-2xs">
                            <iconify-icon icon="lucide:phone" class="text-base"></iconify-icon>
                        </span>
                        <a href="tel:+61286773600" class="hover:text-brand-600 font-bold transition-colors">+61 2 8677 3600</a>
                    </li>
                    <li class="flex items-center gap-3">
                        <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-xl bg-accent-25 border border-secondary-200 text-brand-600 shadow-2xs">
                            <iconify-icon icon="lucide:mail" class="text-base"></iconify-icon>
                        </span>
                        <a href="mailto:info@nailsbeauty.edu.au" class="hover:text-brand-600 font-bold transition-colors">info@nailsbeauty.edu.au</a>
                    </li>
                </ul>
            </div>

        </div>

        {{-- =========================================================
            BOTTOM COPYRIGHT & LEGAL STRIP
        ========================================================= --}}
        <div class="flex flex-col gap-4 py-8 sm:flex-row sm:items-center sm:justify-between text-xs">
            
            <p class="font-medium text-brand-700">
                &copy; {{ date('Y') }} Nails &amp; Beauty Pty Ltd (RTO 45685). All rights reserved.
            </p>

            {{-- Legal Links --}}
            <div class="flex flex-wrap items-center gap-x-6 gap-y-2 font-semibold text-brand-700">
                @if(Route::has('privacy-policy'))
                    <a href="{{ route('privacy-policy') }}" class="transition-colors hover:text-brand-950">
                        Privacy Policy
                    </a>
                @else
                    <a href="#" class="transition-colors hover:text-brand-950">Privacy Policy</a>
                @endif

                @if(Route::has('terms-conditions'))
                    <a href="{{ route('terms-conditions') }}" class="transition-colors hover:text-brand-950">
                        Terms &amp; Conditions
                    </a>
                @else
                    <a href="#" class="transition-colors hover:text-brand-950">Terms &amp; Conditions</a>
                @endif

                <a href="#" class="transition-colors hover:text-brand-950">
                    Consumer Protection
                </a>
            </div>

        </div>

    </div>
</footer>