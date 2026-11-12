<section class="py-14 sm:py-18 lg:py-24 bg-accent-50 border-b border-secondary-200 antialiased">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mb-10 sm:mb-12 max-w-2xl">
            <span class="inline-flex items-center gap-2 rounded-full bg-accent-25 border border-secondary-200 px-3.5 py-1.5 text-[11px] sm:text-xs font-bold uppercase tracking-wider text-brand-700 shadow-2xs mb-4">
                <span class="h-1.5 w-1.5 rounded-full bg-brand-600"></span>
                Explore Industries
            </span>

            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold tracking-tight text-brand-950 leading-[1.15]">
                Nationally Recognised Training Pathways
            </h2>

            <p class="mt-3 text-sm sm:text-base leading-relaxed text-brand-800/90">
                Choose your industry to discover professional qualifications and RPL assessment pathways tailored for your career.
            </p>
        </div>

        {{-- Categories Grid --}}
        <div class="grid grid-cols-1 gap-4 sm:gap-5 md:grid-cols-2 lg:grid-cols-3 lg:gap-6">
            @foreach ($industries as $category)
                <a href="{{ route('industry', ['industrySlug' => $category['slug']]) }}"
                   class="group relative flex flex-col justify-between rounded-2xl sm:rounded-3xl border border-secondary-200 bg-accent-25 p-5 sm:p-7 shadow-2xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-400 hover:shadow-lg hover:shadow-brand-950/5">

                    <div>
                        {{-- Top Bar: Icon & Hover Accent --}}
                        <div class="mb-5 flex items-center justify-between">
                            <div class="flex h-11 w-11 sm:h-12 sm:w-12 items-center justify-center rounded-2xl bg-brand-100 border border-brand-200/70 text-brand-800 transition-all duration-300 group-hover:bg-brand-600 group-hover:border-brand-600 group-hover:text-accent-25">
                                <iconify-icon 
                                    icon="lucide:{{ $category['icon'] }}" 
                                    class="text-xl sm:text-2xl">
                                </iconify-icon>
                            </div>

                            <div class="flex h-9 w-9 items-center justify-center rounded-full bg-accent-50 border border-secondary-200 text-brand-700 transition-all duration-300 group-hover:bg-brand-600 group-hover:border-brand-600 group-hover:text-accent-25">
                                <iconify-icon 
                                    icon="lucide:arrow-up-right" 
                                    class="text-base sm:text-lg transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5">
                                </iconify-icon>
                            </div>
                        </div>

                        {{-- Card Title & Body --}}
                        <h3 class="text-base sm:text-lg font-extrabold text-brand-950 transition-colors duration-200 group-hover:text-brand-600 leading-snug">
                            {{ $category['name'] }}
                        </h3>

                        <p class="mt-2 line-clamp-2 text-xs sm:text-sm leading-relaxed text-brand-700">
                            {{ $category['short_description'] ?? ($category['description'] ?? '') }}
                        </p>
                    </div>

                    {{-- Footer Status Bar --}}
                    <div class="mt-6 flex items-center justify-between border-t border-secondary-200 pt-4 text-xs font-medium">
                        <span class="inline-flex items-center gap-2 text-brand-700">
                            <span class="h-2 w-2 rounded-full bg-success-600 ring-2 ring-success-100"></span>
                            RPL &amp; Courses Available
                        </span>

                        <span class="inline-flex items-center gap-1 font-bold text-brand-800 transition-colors group-hover:text-brand-600">
                            Explore
                            <iconify-icon icon="lucide:chevron-right" class="text-sm transition-transform duration-200 group-hover:translate-x-0.5"></iconify-icon>
                        </span>
                    </div>

                </a>
            @endforeach
        </div>

    </div>
</section>