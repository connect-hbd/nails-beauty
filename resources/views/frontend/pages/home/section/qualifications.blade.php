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

<section class="overflow-hidden py-12 sm:py-16 lg:py-20">
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

                <p class="mt-3 text-sm leading-relaxed text-slate-600 sm:text-base sm:leading-7">
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

        {{-- Qualifications Grid --}}
        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach($qualificationItems as $qualification)
                <a href="{{ route('qualification.show', ['qualificationSlug' => $qualification['slug']]) }}"
                    class="group flex w-full flex-col overflow-hidden rounded-2xl border border-brand-200 bg-white shadow-sm transition-all duration-300 hover:border-brand-400 hover:shadow-xl hover:shadow-brand-900/10">

                    {{-- Image Container --}}
                    <div class="relative h-44 overflow-hidden bg-brand-100 sm:h-48">
                        @if(filled($qualification['image']))
                            <img
                                src="{{ \Illuminate\Support\Str::startsWith($qualification['image'], ['http://', 'https://']) ? $qualification['image'] : asset(ltrim($qualification['image'], '/')) }}"
                                alt="{{ $qualification['name'] }}"
                                loading="lazy"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-110">
                        @else
                            <div class="flex h-full items-center justify-center bg-gradient-to-br from-brand-100 to-secondary-100">
                                <iconify-icon
                                    icon="lucide:graduation-cap"
                                    class="text-6xl text-brand-400">
                                </iconify-icon>
                            </div>
                        @endif

                        {{-- Image Overlay --}}
                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/70 via-transparent to-transparent"></div>

                        {{-- Level Badge --}}
                        @if(filled($qualification['level']))
                            <span class="absolute bottom-3 left-3 rounded-lg border border-white/20 bg-brand-950/85 px-3 py-1.5 text-[11px] font-bold text-white shadow-lg backdrop-blur-md">
                                {{ $qualification['level'] }}
                            </span>
                        @endif
                    </div>

                    {{-- Card Content --}}
                    <div class="flex flex-1 flex-col p-5">
                        {{-- Qualification Code --}}
                        @if(filled($qualification['code']))
                            <span class="text-[10px] font-bold uppercase tracking-widest text-brand-600">
                                {{ $qualification['code'] }}
                            </span>
                        @endif

                        {{-- Qualification Name --}}
                        <h3 class="mt-2 line-clamp-2 text-base font-extrabold leading-snug text-slate-900 transition-colors group-hover:text-brand-600">
                            {{ $qualification['name'] }}
                        </h3>

                        {{-- Description --}}
                        @if(filled($qualification['short_description']))
                            <p class="mt-3 line-clamp-3 text-xs leading-6 text-slate-500">
                                {{ $qualification['short_description'] }}
                            </p>
                        @endif

                        {{-- Footer --}}
                        <div class="mt-auto flex items-center justify-between border-t border-slate-100 pt-4 mt-5">
                            <span class="text-xs font-bold text-brand-700">
                                View Details
                            </span>

                            <span class="flex h-8 w-8 items-center justify-center rounded-full bg-brand-50 text-brand-600 transition-all duration-300 group-hover:bg-brand-500 group-hover:text-white">
                                <iconify-icon
                                    icon="lucide:arrow-up-right"
                                    class="text-base">
                                </iconify-icon>
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</section>

@endif