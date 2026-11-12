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

<section class="overflow-hidden py-12 sm:py-16 lg:py-20 bg-accent-50/50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mb-8 flex flex-col gap-5 sm:mb-10 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                <span class="inline-flex items-center gap-2 text-[10px] sm:text-xs font-bold uppercase tracking-wider text-brand-600">
                    <span class="h-1.5 w-1.5 rounded-full bg-secondary-500"></span>
                    Explore Qualifications
                </span>

                <h2 class="mt-3 text-xl font-black tracking-tight text-brand-950 sm:mt-4 sm:text-2xl md:text-3xl lg:text-4xl">
                    Nationally Recognised Training
                </h2>

                <p class="mt-3 text-sm leading-relaxed text-brand-700 sm:text-base sm:leading-7">
                    Discover nationally recognised qualifications designed to develop
                    practical skills and create new career opportunities.
                </p>
            </div>

            {{-- View All --}}
            <a href="{{ route('qualifications.index') }}"
                class="group inline-flex shrink-0 items-center gap-2 self-start text-[13px] sm:text-sm font-bold text-brand-700 transition-colors hover:text-brand-500 md:self-auto">
                View All Qualifications
                <iconify-icon
                    icon="lucide:arrow-up-right"
                    class="text-lg transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5">
                </iconify-icon>
            </a>
        </div>

        {{-- Qualifications Grid (Matched to Image UI) --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($qualificationItems as $qualification)
                <div class="group flex w-full flex-col justify-between overflow-hidden rounded-3xl border border-secondary-200 bg-accent-25 shadow-xs transition-all duration-300 hover:border-brand-300 hover:shadow-xl hover:shadow-brand-950/5">

                    <div>
                        {{-- Image Container with Floating Badges --}}
                        <div class="relative h-48 overflow-hidden bg-brand-100 sm:h-52 m-2.5 rounded-2xl">
                            @if(filled($qualification['image']))
                                <img
                                    src="{{ \Illuminate\Support\Str::startsWith($qualification['image'], ['http://', 'https://']) ? $qualification['image'] : asset(ltrim($qualification['image'], '/')) }}"
                                    alt="{{ $qualification['name'] }}"
                                    loading="lazy"
                                    class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105">
                            @else
                                <div class="flex h-full items-center justify-center bg-gradient-to-br from-brand-100 to-secondary-100">
                                    <iconify-icon
                                        icon="lucide:graduation-cap"
                                        class="text-6xl text-brand-400">
                                    </iconify-icon>
                                </div>
                            @endif

                            {{-- Image Overlay Gradient --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-950/40 via-transparent to-transparent"></div>

                            {{-- Top-Left Qualification Code Badge --}}
                            @if(filled($qualification['code']))
                                <span class="absolute top-3 left-3 rounded-full border border-secondary-200/60 bg-accent-25/90 px-3 py-1 text-[11px] font-bold text-brand-950 shadow-sm backdrop-blur-md">
                                    {{ $qualification['code'] }}
                                </span>
                            @endif

                            {{-- Top-Right Level / Status Badge --}}
                            @if(filled($qualification['level']))
                                <span class="absolute top-3 right-3 rounded-full bg-success-200/95 px-3 py-1 text-[11px] font-bold text-success-950 shadow-sm backdrop-blur-md">
                                    {{ $qualification['level'] }}
                                </span>
                            @endif
                        </div>

                        {{-- Card Content --}}
                        <div class="flex flex-col px-6 pt-2 pb-4">
                            {{-- Accreditation Header line --}}
                            <div class="flex items-center justify-between gap-2 mb-2.5">
                                <span class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-950">
                                    <iconify-icon icon="lucide:badge-check" class="text-base text-warning-500"></iconify-icon>
                                    NRT &amp; AQF Accredited
                                </span>
                                @if(filled($qualification['level']) && !isset($qualification['badge_override']))
                                    <span class="text-[11px] font-semibold text-brand-600">
                                        {{ $qualification['level'] }}
                                    </span>
                                @endif
                            </div>

                            {{-- Qualification Name --}}
                            <h3 class="line-clamp-2 text-lg font-extrabold leading-snug text-brand-950 transition-colors group-hover:text-brand-600">
                                <a href="{{ route('qualification.show', ['qualificationSlug' => $qualification['slug']]) }}">
                                    <span class="absolute inset-0"></span>
                                    {{ $qualification['name'] }}
                                </a>
                            </h3>

                            {{-- Description --}}
                            @if(filled($qualification['short_description']))
                                <p class="mt-2.5 line-clamp-3 text-xs sm:text-sm leading-relaxed text-brand-700">
                                    {{ $qualification['short_description'] }}
                                </p>
                            @endif
                        </div>
                    </div>

                    {{-- Card Footer CTA Button --}}
                    <div class="p-6 pt-2">
                        <div class="border-t border-secondary-200 pt-4">
                            <a href="{{ route('qualification.show', ['qualificationSlug' => $qualification['slug']]) }}" 
                                class="relative z-10 inline-flex w-full items-center justify-center rounded-full bg-brand-950 hover:bg-brand-800 active:bg-brand-900 py-3.5 px-6 text-sm font-semibold text-accent-25 shadow-xs transition-all duration-200">
                                Enquire Now
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>

@endif