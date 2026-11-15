@php
    // Normalize qualification data (supports Array and Object)
    $qualificationItems = collect($qualifications ?? [])
        ->map(function ($item) {
            return [
                'name' => data_get($item, 'name'),
                'slug' => data_get($item, 'slug'),
                'code' => data_get($item, 'code'),
                'level' => data_get($item, 'level'),
                'image' => data_get($item, 'image'),
                'short_description' => data_get($item, 'short_description'),
            ];
        })
        ->filter(function ($item) {
            return filled($item['slug']) && filled($item['name']);
        })
        ->values();
@endphp

@if($qualificationItems->isNotEmpty())

<section id="qualifications" class="overflow-hidden py-16 sm:py-20 lg:py-24 bg-accent-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mb-10 flex flex-col gap-5 sm:mb-12 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 text-[11px] sm:text-xs font-bold uppercase tracking-[0.16em] text-brand-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-brand-500"></span>
                    Explore Qualifications
                </span>

                <h2 class="mt-3 text-2xl font-extrabold tracking-tight text-brand-950 sm:text-3xl md:text-4xl">
                    Nationally <span class="font-serif italic font-semibold text-brand-600">Recognised</span> Training
                </h2>

                <p class="mt-3 text-sm leading-relaxed text-brand-800/85 sm:text-base sm:leading-7">
                    Discover nationally recognised qualifications designed to develop
                    practical clinical skills and create new career opportunities.
                </p>
            </div>

            {{-- View All Pill Button --}}
            <a href="{{ route('qualifications.index') }}"
                class="group inline-flex shrink-0 items-center gap-2 self-start rounded-full border border-secondary-300 bg-accent-25 px-5 py-2.5 text-xs sm:text-sm font-semibold text-brand-950 shadow-2xs transition-all duration-200 hover:border-brand-400 hover:bg-secondary-100/80 md:self-auto">
                <span>View All Qualifications</span>
                <iconify-icon
                    icon="lucide:arrow-up-right"
                    class="text-base text-brand-600 transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5">
                </iconify-icon>
            </a>
        </div>

        {{-- Qualifications Grid --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 lg:gap-7">
            @foreach($qualificationItems as $qualification)
                @include('frontend.pages.industry.qualificationCard', ['qualification' => $qualification])
            @endforeach
        </div>

    </div>
</section>

@endif