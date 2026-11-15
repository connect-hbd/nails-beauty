@extends('frontend.layouts.app')

@section('title', ($qualification['code'] ?? '') . ' ' . ($qualification['name'] ?? 'Qualification Details'))

@section('content')

    {{-- Qualification Hero --}}
    <section class="relative overflow-hidden bg-accent-50 py-12 antialiased sm:py-16 lg:py-20 border-b border-secondary-200">
        <div aria-hidden="true" class="pointer-events-none absolute -top-32 right-0 h-96 w-96 rounded-full bg-brand-100/40 blur-3xl"></div>
        <div aria-hidden="true" class="pointer-events-none absolute bottom-0 -left-24 h-72 w-72 rounded-full bg-secondary-100/50 blur-3xl"></div>

        <div class="relative mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-12 lg:gap-12">
                
                {{-- Left Hero Info --}}
                <div class="lg:col-span-7">
                    <div class="mb-6 flex flex-wrap items-center gap-2.5">
                        <span class="inline-flex items-center gap-1.5 rounded-full border border-secondary-200 bg-accent-25 px-4 py-1.5 text-xs font-bold text-brand-900 shadow-2xs">
                            <iconify-icon icon="lucide:badge-check" class="text-sm text-brand-600"></iconify-icon>
                            Nationally Recognised Training — <span class="font-extrabold text-brand-950">RTO 45685</span>
                        </span>

                        @if (!empty($qualification['aqf_level']))
                            <span class="inline-flex items-center gap-1.5 rounded-full border border-secondary-200 bg-accent-25 px-4 py-1.5 text-xs font-bold text-brand-900 shadow-2xs">
                                <iconify-icon icon="lucide:graduation-cap" class="text-sm text-brand-600"></iconify-icon>
                                {{ $qualification['aqf_level'] }}
                            </span>
                        @endif
                    </div>

                    <h1 class="mb-5 text-3xl font-extrabold leading-[1.12] tracking-tight text-brand-950 sm:text-4xl lg:text-[2.75rem]">
                        {{ $qualification['code'] ?? '' }} <span class="font-serif italic font-semibold text-brand-600">{{ $qualification['name'] ?? '' }}</span>
                    </h1>

                    @if (!empty($qualification['hero_description']))
                        <p class="mb-8 max-w-2xl text-base leading-relaxed text-brand-800/85 sm:text-lg">
                            {{ $qualification['hero_description'] }}
                        </p>
                    @elseif (!empty($qualification['short_description']))
                        <p class="mb-8 max-w-2xl text-base leading-relaxed text-brand-800/85 sm:text-lg">
                            {{ $qualification['short_description'] }}
                        </p>
                    @endif

                    {{-- Key Course Meta Info --}}
                    <div class="grid grid-cols-1 gap-5 border-t border-secondary-200 pt-6 sm:grid-cols-3 sm:gap-4">
                        @if (!empty($qualification['key_information']['duration']))
                            <div class="flex items-center gap-3">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-25 text-brand-600 shadow-2xs">
                                    <iconify-icon icon="lucide:clock" class="text-lg"></iconify-icon>
                                </div>
                                <div>
                                    <span class="block text-base font-extrabold text-brand-950">{{ $qualification['key_information']['duration'] }}</span>
                                    <p class="text-xs font-semibold text-brand-700/80">Course Duration</p>
                                </div>
                            </div>
                        @endif

                        @if (!empty($qualification['key_information']['total_units']))
                            <div class="flex items-center gap-3 sm:border-l sm:border-secondary-200 sm:pl-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-25 text-brand-600 shadow-2xs">
                                    <iconify-icon icon="lucide:book-open" class="text-lg"></iconify-icon>
                                </div>
                                <div>
                                    <span class="block text-base font-extrabold text-brand-950">{{ $qualification['key_information']['total_units'] }}</span>
                                    <p class="text-xs font-semibold text-brand-700/80">Total Units</p>
                                </div>
                            </div>
                        @endif

                        {{-- Accreditation --}}
                        <div class="flex items-center gap-3 sm:border-l sm:border-secondary-200 sm:pl-4">
                            <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-25 text-brand-600 shadow-2xs">
                                <iconify-icon icon="lucide:shield-check" class="text-lg"></iconify-icon>
                            </div>
                            <div>
                                <span class="block text-sm font-extrabold text-brand-950">ASQA Regulated</span>
                                <p class="text-xs font-semibold text-brand-700/80">Nationally Recognised</p>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Right Enrolment / Fast Track Card --}}
                <div class="lg:col-span-5">
                    <div class="overflow-hidden rounded-3xl border border-secondary-200 bg-accent-25 shadow-xl shadow-brand-950/5">
                        <div class="flex items-center justify-between gap-3 bg-brand-900 px-6 py-4">
                            <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-accent-25">
                                <iconify-icon icon="lucide:badge-check" class="text-base text-secondary-300"></iconify-icon>
                                NRT &amp; AQF Accredited
                            </span>
                        </div>

                        <div class="p-6 sm:p-7 lg:p-8">
                            <h2 class="mb-1 text-lg font-extrabold text-brand-950">
                                {{ $qualification['fast_track_check']['title'] ?? 'Eligibility & RPL Pathways' }}
                            </h2>
                            <p class="mb-5 text-xs text-brand-800/80 sm:text-sm">
                                {{ $qualification['fast_track_check']['description'] ?? 'Find out if your prior experience qualifies you for fast-track assessment.' }}
                            </p>

                            @if(!empty($qualification['fast_track_check']['recommendations']))
                                <ul class="mb-6 space-y-3 text-xs text-brand-900 sm:text-sm">
                                    @foreach ($qualification['fast_track_check']['recommendations'] as $recommendation)
                                        <li class="flex items-start gap-3">
                                            <iconify-icon icon="lucide:check-circle-2" class="mt-0.5 text-base text-brand-600 shrink-0"></iconify-icon>
                                            <span>{{ $recommendation }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <a href="#course-structure"
                                class="inline-flex w-full items-center justify-center gap-2 rounded-full bg-brand-600 hover:bg-brand-700 active:bg-brand-800 px-6 py-3.5 text-xs font-bold text-accent-25 shadow-xs hover:shadow-md transition-all duration-200">
                                <iconify-icon icon="lucide:book-open" class="text-base"></iconify-icon>
                                <span>View Course Units &amp; Structure</span>
                                <iconify-icon icon="lucide:arrow-down" class="text-base"></iconify-icon>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Main Content Body --}}
    <main class="mx-auto max-w-7xl flex-1 px-4 py-12 sm:px-6 sm:py-16 lg:px-8 lg:py-20 bg-accent-50">
        <div class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-12">
            
            <div class="space-y-8 sm:space-y-10 lg:col-span-7">

                {{-- Image Feature --}}
                @if (!empty($qualification['image_section']['image']))
                    <article>
                        <figure class="group relative isolate h-[280px] overflow-hidden rounded-3xl border border-secondary-200 bg-brand-950 shadow-xl sm:h-[340px] lg:h-[385px]">
                            <img src="{{ $qualification['image_section']['image'] }}"
                                alt="{{ $qualification['image_section']['alt'] ?? ($qualification['name'] ?? 'Qualification') }}"
                                class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy">
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-950/90 via-brand-950/40 to-transparent"></div>
                            
                            <figcaption class="absolute inset-x-0 bottom-0 p-6 sm:p-8">
                                @if (!empty($qualification['image_section']['badges']))
                                    <div class="mb-4 flex flex-wrap items-center gap-2">
                                        @foreach ($qualification['image_section']['badges'] as $badge)
                                            <span class="inline-flex items-center rounded-full bg-accent-25/90 border border-secondary-200 px-3.5 py-1 text-[11px] font-bold text-brand-900 backdrop-blur-sm sm:text-xs">
                                                {{ $badge }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="flex items-center gap-3.5">
                                    <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-accent-25 text-brand-900 shadow-md">
                                        <iconify-icon icon="lucide:graduation-cap" class="text-2xl"></iconify-icon>
                                    </div>
                                    <div class="min-w-0">
                                        @if (!empty($qualification['image_section']['title']))
                                            <h2 class="text-lg font-extrabold leading-snug tracking-tight text-accent-25 sm:text-xl">
                                                {{ $qualification['image_section']['title'] }}
                                            </h2>
                                        @endif
                                        @if (!empty($qualification['image_section']['description']))
                                            <p class="mt-0.5 text-xs leading-relaxed text-brand-100/80 sm:text-sm">
                                                {{ $qualification['image_section']['description'] }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                @endif

                {{-- Course Overview & Learning Outcomes --}}
                @if (!empty($qualification['overview']) || !empty($qualification['short_description']) || !empty($qualification['important_information']) || !empty($qualification['learning_outcomes']))
                    <article class="rounded-3xl border border-secondary-200 bg-accent-25 p-6 sm:p-8 lg:p-10 shadow-xl shadow-brand-950/5">
                        <div class="mb-6 flex items-center gap-4 border-b border-secondary-200 pb-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-50 text-brand-600">
                                <iconify-icon icon="lucide:book-open" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase tracking-[0.16em] text-brand-600">01.0 Qualification Scope</span>
                                <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-brand-950">
                                    Course Description
                                </h2>
                            </div>
                        </div>

                        <div class="space-y-4 text-sm leading-relaxed text-brand-800/90 sm:text-base">
                            @if (!empty($qualification['overview']))
                                <p>{{ $qualification['overview'] }}</p>
                            @elseif (!empty($qualification['short_description']))
                                <p>{{ $qualification['short_description'] }}</p>
                            @endif

                            @if (!empty($qualification['important_information']))
                                <div class="space-y-2 pt-2">
                                    @foreach ($qualification['important_information'] as $information)
                                        <p>{{ $information }}</p>
                                    @endforeach
                                </div>
                            @endif

                            @if (!empty($qualification['learning_outcomes']))
                                <div class="pt-6">
                                    <div class="mb-5 flex items-center gap-3">
                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-secondary-200 bg-accent-50 text-brand-700">
                                            <iconify-icon icon="lucide:list-checks" class="text-lg"></iconify-icon>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-extrabold text-brand-950">
                                            What You’ll Learn &amp; Master
                                        </h3>
                                    </div>

                                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                        @foreach ($qualification['learning_outcomes'] as $item)
                                            <div class="group flex items-start gap-3.5 rounded-2xl border border-secondary-200 bg-accent-50 p-5 transition-all duration-200 hover:border-brand-300">
                                                <span class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-100 text-brand-700">
                                                    <iconify-icon icon="lucide:check" class="text-xs"></iconify-icon>
                                                </span>
                                                <p class="text-xs sm:text-sm leading-relaxed text-brand-800/90">
                                                    @if (!empty($item['title']))
                                                        <strong class="font-extrabold text-brand-950">{{ $item['title'] }}:</strong>
                                                    @endif
                                                    {{ $item['description'] ?? '' }}
                                                </p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        </div>
                    </article>
                @endif

                {{-- Entry Requirements --}}
                @if (!empty($qualification['entry_requirements']['requirements']))
                    <article class="rounded-3xl border border-secondary-200 bg-accent-25 p-6 sm:p-8 lg:p-10 shadow-xl shadow-brand-950/5">
                        <div class="mb-6 flex items-center gap-4 border-b border-secondary-200 pb-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-50 text-brand-600">
                                <iconify-icon icon="lucide:shield-check" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase tracking-[0.16em] text-brand-600">02.0 Prerequisites &amp; Eligibility</span>
                                <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-brand-950">
                                    Entry Requirements
                                </h2>
                            </div>
                        </div>

                        @if (!empty($qualification['entry_requirements']['introduction']))
                            <p class="mb-6 text-sm leading-relaxed text-brand-800/85">
                                {{ $qualification['entry_requirements']['introduction'] }}
                            </p>
                        @endif

                        <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                            @foreach ($qualification['entry_requirements']['requirements'] as $requirement)
                                <div class="rounded-2xl border border-secondary-200 bg-accent-50 p-6 transition-all duration-200 hover:border-brand-300">
                                    <div class="mb-3.5 flex items-center gap-3">
                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-secondary-200 bg-accent-25 text-brand-700">
                                            <iconify-icon icon="lucide:check-circle" class="text-xl"></iconify-icon>
                                        </div>
                                        <h3 class="text-base font-extrabold text-brand-950">
                                            {{ $requirement['label'] ?? '' }}
                                        </h3>
                                    </div>
                                    @if (!empty($requirement['value']))
                                        <p class="text-xs sm:text-sm leading-relaxed text-brand-800/85">
                                            {{ $requirement['value'] }}
                                        </p>
                                    @endif
                                    @if (!empty($requirement['link']['url']))
                                        <a href="{{ $requirement['link']['url'] }}" target="_blank" rel="noopener noreferrer"
                                            class="mt-3 inline-flex items-center gap-1 text-xs font-bold text-brand-600 hover:text-brand-800 underline">
                                            <span>{{ $requirement['link']['text'] ?? 'More information' }}</span>
                                            <iconify-icon icon="lucide:external-link" class="text-xs"></iconify-icon>
                                        </a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </article>
                @endif

                {{-- Important Limitations --}}
                @if (!empty($qualification['limitations']))
                    <article class="rounded-3xl border border-amber-200 bg-amber-50/70 p-6 sm:p-8">
                        <div class="mb-4 flex items-center gap-3">
                            <iconify-icon icon="lucide:alert-triangle" class="text-xl text-amber-700"></iconify-icon>
                            <h2 class="text-base sm:text-lg font-extrabold text-amber-950">Important Information &amp; Limitations</h2>
                        </div>
                        <ul class="list-disc space-y-2 pl-5 text-xs sm:text-sm leading-relaxed text-amber-900/90">
                            @foreach ($qualification['limitations'] as $limitation)
                                <li>{{ $limitation }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endif

                {{-- Licensing and Regulatory Information --}}
                @if (!empty($qualification['licensing_regulatory_information']['description']))
                    <article class="rounded-3xl border border-secondary-200 bg-accent-25 p-6 sm:p-8 shadow-xl shadow-brand-950/5">
                        <div class="mb-5 flex items-center gap-4">
                            <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-secondary-200 bg-accent-50 text-brand-600">
                                <iconify-icon icon="lucide:scale" class="text-xl"></iconify-icon>
                            </div>
                            <h2 class="text-lg sm:text-xl font-extrabold text-brand-950">Licensing &amp; Regulatory Information</h2>
                        </div>
                        <p class="text-xs sm:text-sm leading-relaxed text-brand-800/85">
                            {{ $qualification['licensing_regulatory_information']['description'] }}
                        </p>
                    </article>
                @endif

                {{-- RPL Section (Dark Luxury Card) --}}
                @if (!empty($qualification['rpl_steps']) || !empty($qualification['rpl_credit_transfer']))
                    <article class="relative overflow-hidden rounded-3xl border border-brand-700 bg-brand-900 p-6 sm:p-8 lg:p-10 shadow-xl text-accent-25">
                        <div aria-hidden="true" class="pointer-events-none absolute -right-20 -bottom-20 h-72 w-72 rounded-full bg-brand-600/20 blur-3xl"></div>

                        <div class="relative z-10">
                            <div class="mb-8 flex flex-col justify-between gap-4 sm:flex-row sm:items-center">
                                <span class="inline-flex items-center gap-2 self-start rounded-full bg-secondary-200 px-4 py-1 text-xs font-bold uppercase tracking-wide text-brand-950">
                                    <span class="h-2 w-2 rounded-full bg-brand-600"></span>
                                    Recognition of Prior Learning
                                </span>
                                <span class="text-[11px] font-bold uppercase tracking-[0.2em] text-secondary-300">Skills Recognition</span>
                            </div>

                            <div class="mb-8">
                                <h2 class="mb-4 text-2xl font-extrabold leading-tight tracking-tight text-accent-25 sm:text-3xl">
                                    Recognition of Prior Learning <span class="font-serif italic font-semibold text-secondary-200">(RPL)</span>
                                </h2>
                                @if (!empty($qualification['rpl_credit_transfer']['description']))
                                    <p class="text-sm leading-relaxed text-brand-100/90">
                                        {{ $qualification['rpl_credit_transfer']['description'] }}
                                    </p>
                                @endif
                                @if (!empty($qualification['rpl_credit_transfer']['recognition_statement']))
                                    <p class="mt-3 text-sm leading-relaxed text-brand-200/80">
                                        {{ $qualification['rpl_credit_transfer']['recognition_statement'] }}
                                    </p>
                                @endif
                            </div>

                            @if (!empty($qualification['rpl_steps']))
                                <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                                    @foreach ($qualification['rpl_steps'] as $step)
                                        <div class="rounded-2xl border border-brand-700/80 bg-brand-950/70 p-6">
                                            <span class="mb-2 inline-block text-base font-black tracking-wider text-secondary-300">
                                                {{ $step['number'] ?? '' }}.
                                            </span>
                                            <h3 class="mb-2 text-base font-extrabold text-accent-25">{{ $step['title'] ?? '' }}</h3>
                                            <p class="text-xs leading-relaxed text-brand-100/80">
                                                {{ $step['description'] ?? '' }}
                                            </p>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </article>
                @endif

                {{-- Course Structure & Units --}}
                @if (!empty($qualification['course_structure']))
                    <article id="course-structure" class="rounded-3xl border border-secondary-200 bg-accent-25 p-6 sm:p-8 lg:p-10 shadow-xl shadow-brand-950/5">
                        <div class="mb-6 flex items-center justify-between gap-4 border-b border-secondary-200 pb-5">
                            <div class="flex min-w-0 items-center gap-4">
                                <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-50 text-brand-600">
                                    <iconify-icon icon="lucide:book-copy" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <span class="block text-[10px] font-bold uppercase tracking-[0.16em] text-brand-600">Curriculum Architecture</span>
                                    <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-brand-950">
                                        Course Structure
                                    </h2>
                                </div>
                            </div>
                            @if (!empty($qualification['course_structure']['total_units']))
                                <span class="hidden shrink-0 rounded-full border border-secondary-200 bg-accent-50 px-4 py-1.5 text-[11px] font-bold uppercase tracking-wider text-brand-800 sm:inline-flex">
                                    Total {{ $qualification['course_structure']['total_units'] }} Units
                                </span>
                            @endif
                        </div>

                        <p class="mb-6 text-sm leading-relaxed text-brand-800/85">
                            To achieve the <strong class="font-extrabold text-brand-950">{{ $qualification['code'] ?? '' }} {{ $qualification['name'] ?? '' }}</strong>,
                            @if (!empty($qualification['course_structure']['total_units']))
                                <strong class="font-extrabold text-brand-950">{{ $qualification['course_structure']['total_units'] }} competency units</strong>
                            @endif
                            are required. The curriculum structure is outlined below.
                        </p>

                        @foreach (['core_units' => 'Core Units', 'elective_units' => 'Elective Units'] as $unitType => $unitLabel)
                            @if (!empty($qualification['course_structure'][$unitType]['units']))
                                <div class="{{ $unitType === 'core_units' ? 'mb-8' : '' }}">
                                    <div class="mb-3.5 flex flex-wrap items-center justify-between gap-2">
                                        <h3 class="flex items-center gap-2.5 text-sm sm:text-base font-extrabold uppercase tracking-wide text-brand-900">
                                            <span class="h-2 w-2 rounded-full {{ $unitType === 'core_units' ? 'bg-brand-600' : 'bg-secondary-500' }}"></span>
                                            {{ $unitLabel }}
                                            @if (isset($qualification['course_structure'][$unitType]['total']))
                                                <span class="text-xs font-semibold text-brand-700/80">({{ $qualification['course_structure'][$unitType]['total'] }} Required)</span>
                                            @endif
                                        </h3>
                                        <span class="text-[10px] font-bold uppercase tracking-wider text-brand-600">
                                            {{ $unitType === 'core_units' ? 'Mandatory Units' : 'Elective Units' }}
                                        </span>
                                    </div>

                                    <div class="space-y-3">
                                        @foreach ($qualification['course_structure'][$unitType]['units'] as $unit)
                                            <div class="group flex items-start gap-3.5 rounded-2xl border border-secondary-200 bg-accent-50 p-4 sm:p-5 transition-all duration-200 hover:border-brand-300">
                                                <div class="mt-0.5 shrink-0 text-brand-600">
                                                    <iconify-icon icon="lucide:check-circle-2" class="text-xl"></iconify-icon>
                                                </div>
                                                <div class="min-w-0 flex-1">
                                                    <div class="mb-1 flex flex-wrap items-center justify-between gap-2">
                                                        @if (!empty($unit['code']))
                                                            <span class="text-xs font-bold text-brand-700">{{ $unit['code'] }}</span>
                                                        @endif
                                                        <span class="rounded-full border border-secondary-200 bg-accent-25 px-2.5 py-0.5 text-[10px] font-bold uppercase tracking-wide text-brand-800">
                                                            {{ $unitType === 'core_units' ? 'Core' : 'Elective' }}
                                                        </span>
                                                    </div>
                                                    <p class="text-xs sm:text-sm font-extrabold leading-snug text-brand-950">
                                                        {{ $unit['name'] ?? '' }}
                                                    </p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </article>
                @endif

              {{-- Career outcomes --}}
                @if (!empty($qualification['career_outcomes']))
                    <article class="rounded-3xl border border-secondary-200 bg-accent-25 p-6 sm:p-8 lg:p-10 shadow-xl shadow-brand-950/5">
                        <div class="mb-6 flex items-center gap-4 border-b border-secondary-200 pb-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-50 text-brand-600">
                                <iconify-icon icon="lucide:briefcase-business" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase tracking-[0.16em] text-brand-600">
                                    Career Opportunities
                                </span>
                                <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-brand-950">
                                    Career Outcomes
                                </h2>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-3.5 sm:grid-cols-2">
                            @foreach ($qualification['career_outcomes'] as $career)
                                <div class="flex items-center gap-3.5 rounded-2xl border border-secondary-200 bg-accent-50 p-4 transition-all duration-200 hover:border-brand-300">
                                    <span class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-brand-100 text-brand-700">
                                        <iconify-icon icon="lucide:check" class="text-xs"></iconify-icon>
                                    </span>
                                    <span class="text-xs sm:text-sm font-bold text-brand-950">{{ $career }}</span>
                                </div>
                            @endforeach
                        </div>
                    </article>
                @endif

                {{-- Career pathways --}}
                @if (!empty($qualification['career_pathways']))
                    <article class="rounded-3xl border border-secondary-200 bg-accent-25 p-6 sm:p-8 lg:p-10 shadow-xl shadow-brand-950/5">
                        <div class="mb-6 flex items-center gap-4 border-b border-secondary-200 pb-5">
                            <div class="flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl border border-secondary-200 bg-accent-50 text-brand-600">
                                <iconify-icon icon="lucide:route" class="text-xl"></iconify-icon>
                            </div>
                            <div>
                                <span class="block text-[10px] font-bold uppercase tracking-[0.16em] text-brand-600">
                                    Professional Opportunities
                                </span>
                                <h2 class="text-xl sm:text-2xl font-extrabold tracking-tight text-brand-950">
                                    Career Pathways &amp; <span class="font-serif italic font-semibold text-brand-600">Industry Outcomes</span>
                                </h2>
                            </div>
                        </div>

                        @if (!empty($qualification['industry_outcomes']['introduction']))
                            <p class="mb-6 text-sm leading-relaxed text-brand-800/85">
                                {{ $qualification['industry_outcomes']['introduction'] }}
                            </p>
                        @endif

                        <div class="grid grid-cols-1 gap-4 md:grid-cols-2 sm:gap-5">
                            @foreach ($qualification['career_pathways'] as $pathway)
                                <div class="rounded-2xl border border-secondary-200 bg-accent-50 p-6 transition-all duration-200 hover:border-brand-300">
                                    <div class="mb-3.5 flex items-center gap-3">
                                        <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl border border-secondary-200 bg-accent-25 text-brand-600 shadow-2xs">
                                            <iconify-icon icon="lucide:briefcase" class="text-lg"></iconify-icon>
                                        </div>
                                        <h3 class="text-sm sm:text-base font-extrabold text-brand-950">
                                            {{ $pathway['title'] ?? '' }}
                                        </h3>
                                    </div>
                                    <p class="text-xs leading-relaxed text-brand-800/85 sm:text-sm">
                                        {{ $pathway['description'] ?? '' }}
                                    </p>
                                </div>
                            @endforeach
                        </div>

                        @if (!empty($qualification['industry_outcomes']['statistics']))
                            <div class="mt-6 grid grid-cols-1 gap-6 rounded-2xl border border-secondary-200 bg-secondary-100/60 p-6 text-left sm:grid-cols-3 sm:gap-4 sm:p-8">
                                @foreach ($qualification['industry_outcomes']['statistics'] as $statistic)
                                    <div class="sm:border-l sm:border-secondary-300/80 sm:pl-5 first:sm:border-0 first:sm:pl-0">
                                        <span class="mb-1 block font-serif italic text-2xl sm:text-3xl font-bold tracking-tight text-brand-700">
                                            {{ $statistic['value'] ?? '' }}
                                        </span>
                                        <span class="text-xs font-bold text-brand-900 sm:text-sm">
                                            {{ $statistic['label'] ?? '' }}
                                        </span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </article>
                @endif

            </div>

            {{-- Right Sticky Sidebar --}}
            <aside class="space-y-6 lg:sticky lg:top-24 lg:col-span-5">
                <div class="overflow-hidden rounded-3xl border border-secondary-200 bg-accent-25 shadow-xl shadow-brand-950/5">

                    {{-- Top Espresso Header Strip --}}
                    <div class="bg-brand-900 px-6 py-4 sm:px-7">
                        <span class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-[0.18em] text-secondary-200">
                            <span class="h-2 w-2 rounded-full bg-secondary-300"></span>
                            Qualification Overview
                        </span>
                    </div>

                    <div class="p-6 sm:p-7">
                        <div class="mb-5">
                            <span class="mb-1.5 block text-[11px] font-bold uppercase tracking-[0.18em] text-brand-600">
                                Pathway to Accredited Qualification
                            </span>
                            <h3 class="text-2xl font-extrabold leading-tight tracking-tight text-brand-950 sm:text-[1.75rem]">
                                Qualification <span class="font-serif italic font-semibold text-brand-600">Information</span>
                            </h3>
                        </div>

                        @if (!empty($qualification['qualification_information']['subsidy_information']))
                            <div class="mb-6 flex items-start gap-3 rounded-2xl border border-brand-200 bg-brand-100/70 p-4 text-xs font-bold text-brand-900">
                                <iconify-icon icon="lucide:badge-dollar-sign" class="mt-0.5 shrink-0 text-lg text-brand-600"></iconify-icon>
                                <span class="leading-relaxed">{{ $qualification['qualification_information']['subsidy_information'] }}</span>
                            </div>
                        @endif

                        {{-- Primary Enquire CTA --}}
                        <div class="mb-6">
                            <a href="#enquire"
                                class="group inline-flex w-full items-center justify-center gap-2.5 rounded-full bg-brand-600 hover:bg-brand-700 active:bg-brand-800 px-6 py-4 text-sm font-bold text-accent-25 shadow-sm hover:shadow-md transition-all duration-200">
                                <span>Enquire &amp; Check Eligibility</span>
                                <iconify-icon icon="lucide:arrow-right" class="text-base transition-transform duration-200 group-hover:translate-x-1"></iconify-icon>
                            </a>
                        </div>

                        <div class="mb-6 h-px w-full bg-secondary-200"></div>

                        <h4 class="mb-4 text-sm font-extrabold uppercase tracking-wider text-brand-950">
                            Course Specifications
                        </h4>

                        <dl class="divide-y divide-secondary-200/70 text-xs sm:text-[13px]">
                            @if (!empty($qualification['code']))
                                <div class="flex items-center justify-between gap-4 py-3 first:pt-0">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:hash" class="text-sm text-brand-600"></iconify-icon>
                                        National Code
                                    </dt>
                                    <dd class="text-right font-extrabold text-brand-950">{{ $qualification['code'] }}</dd>
                                </div>
                            @endif

                            @if (!empty($qualification['level']))
                                <div class="flex items-center justify-between gap-4 py-3">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:graduation-cap" class="text-sm text-brand-600"></iconify-icon>
                                        Qualification Level
                                    </dt>
                                    <dd class="text-right font-extrabold text-brand-950">{{ $qualification['level'] }}</dd>
                                </div>
                            @endif

                            @if (!empty($qualification['qualification_information']['recognition']))
                                <div class="flex items-center justify-between gap-4 py-3">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:shield-check" class="text-sm text-brand-600"></iconify-icon>
                                        Recognition
                                    </dt>
                                    <dd class="text-right font-extrabold text-brand-950">
                                        {{ $qualification['qualification_information']['recognition'] }}
                                    </dd>
                                </div>
                            @endif

                            @if (!empty($qualification['key_information']['cricos']))
                                <div class="flex items-center justify-between gap-4 py-3">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:badge-check" class="text-sm text-brand-600"></iconify-icon>
                                        CRICOS
                                    </dt>
                                    <dd class="text-right font-extrabold text-brand-950">
                                        {{ $qualification['key_information']['cricos'] }}
                                    </dd>
                                </div>
                            @endif

                            @if (!empty($qualification['key_information']['mode_of_study']))
                                <div class="flex items-center justify-between gap-4 py-3">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:laptop" class="text-sm text-brand-600"></iconify-icon>
                                        Delivery Mode
                                    </dt>
                                    <dd class="max-w-[190px] text-right font-extrabold text-brand-950">
                                        {{ $qualification['key_information']['mode_of_study'] }}
                                    </dd>
                                </div>
                            @endif

                            @if (!empty($qualification['key_information']['duration']))
                                <div class="flex items-center justify-between gap-4 py-3">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:clock" class="text-sm text-brand-600"></iconify-icon>
                                        Duration
                                    </dt>
                                    <dd class="max-w-[190px] text-right font-extrabold leading-tight text-brand-950">
                                        {{ $qualification['key_information']['duration'] }}
                                    </dd>
                                </div>
                            @endif

                            @if (!empty($qualification['key_information']['total_units']))
                                <div class="flex items-center justify-between gap-4 py-3">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:list-tree" class="text-sm text-brand-600"></iconify-icon>
                                        Total Units
                                    </dt>
                                    <dd class="text-right font-extrabold text-brand-950">
                                        {{ $qualification['key_information']['total_units'] }}
                                    </dd>
                                </div>
                            @endif

                            @if (!empty($qualification['qualification_information']['assessments']))
                                <div class="flex items-center justify-between gap-4 py-3">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:file-text" class="text-sm text-brand-600"></iconify-icon>
                                        Assessments
                                    </dt>
                                    <dd class="max-w-[190px] text-right font-extrabold text-brand-950">
                                        {{ $qualification['qualification_information']['assessments'] }}
                                    </dd>
                                </div>
                            @endif

                            @if (!empty($qualification['qualification_information']['next_intake']))
                                <div class="flex items-center justify-between gap-4 py-3 last:pb-0">
                                    <dt class="inline-flex items-center gap-2 font-semibold text-brand-700">
                                        <iconify-icon icon="lucide:calendar" class="text-sm text-brand-600"></iconify-icon>
                                        Next Intake
                                    </dt>
                                    <dd class="text-right font-extrabold text-brand-950">
                                        {{ $qualification['qualification_information']['next_intake'] }}
                                    </dd>
                                </div>
                            @endif
                        </dl>

                        @if (!empty($qualification['qualification_information']['support']))
                            <div class="mt-6 flex items-center gap-3.5 rounded-2xl border border-secondary-200 bg-accent-50 p-4">
                                <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-secondary-200 bg-accent-25 text-brand-600 shadow-2xs">
                                    <iconify-icon icon="lucide:headset" class="text-xl"></iconify-icon>
                                </div>
                                <div>
                                    <p class="text-xs font-extrabold text-brand-950">Need Enrolment Advice?</p>
                                    <p class="mt-0.5 text-[11px] font-medium text-brand-700">
                                        Melbourne Admissions Team
                                    </p>
                                    <a href="tel:040684444"
                                        class="mt-0.5 inline-block text-xs font-extrabold text-brand-600 hover:text-brand-800 underline">
                                        0406 844 44
                                    </a>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>
            </aside>

        </div>
    </main>

@endsection
