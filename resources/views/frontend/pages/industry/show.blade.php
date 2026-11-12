@extends('frontend.layouts.app')


@section('title', 'Qualification Details')

@section('content')

    @php
        $course = [
            'code' => 'CPC40120',
            'name' => 'Certificate IV in Building and Construction',
            'category_name' => 'Building & Construction',

            'course_description' =>
                'Develop the practical knowledge and technical skills required to work in the building and construction industry. This qualification introduces construction planning, site supervision, building codes, safety requirements and project administration.',
            'important_information' => [
                'Training combines classroom learning, practical activities and online learning resources.',
                'Students develop skills through realistic construction scenarios and supervised practical tasks.',
            ],
            'limitations' => [
                'Licensing requirements vary by state and territory. Completing this qualification does not automatically guarantee a building licence.',
                'Students should confirm current licensing requirements with the relevant state or territory authority.',
            ],

            'key_information' => [
                'cricos' => '012345A',
                'duration' => '52 weeks',
                'total_units' => 19,
                'mode_of_study' => 'Classroom & Practical',
            ],

            'course_structure' => [
                'core_units' => [
                    'total' => 11,
                    'units' => [
                        [
                            'code' => 'CPCCBC4001',
                            'name' =>
                                'Apply building codes and standards to the construction process for Class 1 and 10 buildings',
                        ],
                        [
                            'code' => 'CPCCBC4002',
                            'name' => 'Manage work health and safety in the building and construction workplace',
                        ],
                        ['code' => 'CPCCBC4003', 'name' => 'Select, prepare and administer a construction contract'],
                        [
                            'code' => 'CPCCBC4004',
                            'name' => 'Identify and produce estimated costs for building and construction projects',
                        ],
                        ['code' => 'CPCCBC4005', 'name' => 'Produce labour and material schedules for ordering'],
                    ],
                ],
                'elective_units' => [
                    'total' => 8,
                    'units' => [
                        [
                            'code' => 'CPCCBC4006',
                            'name' =>
                                'Select, procure and store construction materials for building and construction projects',
                        ],
                        ['code' => 'CPCCBC4007', 'name' => 'Plan building or construction work'],
                        ['code' => 'CPCCBC4008', 'name' => 'Supervise site communication and administration processes'],
                        [
                            'code' => 'CPCCBC4010',
                            'name' => 'Apply structural principles to the construction of buildings',
                        ],
                    ],
                ],
            ],

            'entry_requirements' => [
                [
                    'label' => 'Age requirement',
                    'value' => 'Applicants should be at least 18 years of age.',
                ],
                [
                    'label' => 'English language',
                    'value' =>
                        'Applicants should have sufficient English language skills to participate in training and assessment.',
                ],
                [
                    'label' => 'Academic requirement',
                    'value' => 'Completion of Year 10 or an equivalent level of education is recommended.',
                    'link' => [
                        'url' => 'https://www.nubexcollege.edu.au/',
                        'text' => 'Contact admissions for guidance',
                    ],
                ],
            ],

            'licensing_regulatory_information' => [
                'description' =>
                    'This qualification may support pathways towards relevant building and construction roles. Licensing and registration requirements depend on the work performed and the state or territory in which you intend to work. Always check the current requirements with the relevant authority.',
            ],

            'work_placement' => [
                'title' => 'Practical Training',
                'hours' => 120,
                'description' =>
                    'Students participate in practical learning activities and simulated construction-site tasks designed to build confidence in applying workplace procedures, safety practices and construction knowledge.',
            ],

            'career_outcomes' => [
                'Building Supervisor',
                'Construction Site Coordinator',
                'Building Project Assistant',
                'Contract Administrator Assistant',
                'Construction Estimator Assistant',
                'Site Administration Officer',
            ],

            'education_pathways' => [
                'Continue to an advanced diploma-level qualification in building and construction.',
                'Pursue further study in construction management or a related discipline.',
            ],

            'exit_point_award' => [
                'completion_requirement' =>
                    'Students who successfully complete all required units may be awarded the CPC40120 Certificate IV in Building and Construction.',
                'partial_completion' =>
                    'Students who complete individual units may be eligible for a Statement of Attainment.',
            ],

            'rpl_credit_transfer' => [
                'description' =>
                    'Recognition of Prior Learning (RPL) may be available for applicants who can demonstrate relevant existing skills, knowledge and work experience. Credit transfer may also be considered for equivalent completed units.',
                'recognition_statement' =>
                    'All RPL and credit transfer applications are assessed in accordance with the college policies and applicable training requirements.',
            ],

            'additional_information' => [
                'student_handbook_url' => 'https://www.nubexcollege.edu.au/',
            ],
        ];

        $imageSection = [
            'image' => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?auto=format&fit=crop&w=1600&q=85',
            'alt' => 'Construction professionals working at a building site',
            'badges' => ['Practical Site Labs & Online Portals', '19 Nationally Recognised Units'],
            'title' => 'Led by Registered Building Practitioners',
            'description' => 'Assessed under Victorian VBA & NSW Fair Trading licensing benchmarks',
        ];

        // Use real qualification values when supplied; otherwise use the dummy data above.
        $courseCode = data_get($qualification ?? null, 'code', $course['code']);
        $courseTitle = data_get($qualification ?? null, 'name', $course['name']);
        $courseLevel = data_get($qualification ?? null, 'level', 'AQF Level 4');
        $courseStream = data_get($qualification ?? null, 'stream', $course['category_name']);
        $courseDescription = data_get($qualification ?? null, 'short_description', $course['course_description']);
        $rating = data_get($qualification ?? null, 'rating', '4.9');
        $reviewCount = data_get($qualification ?? null, 'review_count', '280+');
        $graduateCount = data_get($qualification ?? null, 'graduate_count', '1,250+');
    @endphp

    <section class="relative overflow-hidden bg-white py-12 antialiased sm:py-16 lg:py-20">
        {{-- Subtle Ambient Warm Glow --}}
        <div aria-hidden="true"
            class="pointer-events-none absolute -top-32 right-0 h-96 w-96 rounded-full bg-neutral-100/70 blur-3xl"></div>
        <div aria-hidden="true"
            class="pointer-events-none absolute bottom-0 -left-24 h-72 w-72 rounded-full bg-neutral-100/50 blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">

                {{-- LEFT COLUMN: Editorial Course Header & Proof (7 Cols) --}}
                <div class="lg:col-span-7">

                    {{-- Top Status & Accreditation Badges --}}
                    <div class="flex flex-wrap items-center gap-2 sm:gap-2.5 mb-6">


                        {{-- Nationally Recognised Training Pill --}}
                        <span
                            class="inline-flex items-center gap-1.5 rounded-full bg-white border border-neutral-200 px-3.5 py-1.5 text-xs font-semibold text-neutral-800 shadow-2xs">
                            <iconify-icon icon="lucide:badge-check" class="text-sm text-brand-600"></iconify-icon>
                            Nationally Recognised Training - <span class="text-[13px] font-extrabold">RTO - 5401</span>
                        </span>

                        {{-- AQF Level Pill --}}
                        @if (filled($courseLevel))
                            <span
                                class="inline-flex items-center gap-1.5 rounded-full bg-white border border-neutral-200 px-3.5 py-1.5 text-xs font-semibold text-neutral-800">
                                <iconify-icon icon="lucide:graduation-cap" class="text-sm text-brand-600"></iconify-icon>
                                {{ $courseLevel }}
                            </span>
                        @endif
                    </div>

                    {{-- Main Course Title --}}
                    <h1
                        class="text-3xl sm:text-4xl lg:text-[2.85rem] font-extrabold text-neutral-900 tracking-tight leading-[1.12] mb-5">
                        {{ $courseCode }} {{ $courseTitle }}
                    </h1>

                    {{-- Course Summary Description --}}
                    <p class="max-w-2xl text-base sm:text-lg text-neutral-600 leading-relaxed mb-8">
                        {{ $courseDescription }}
                    </p>

                    {{-- Refined Editorial Metrics Strip --}}
                    <div class="pt-6 border-t border-neutral-200 grid grid-cols-1 sm:grid-cols-3 gap-5 sm:gap-4">

                        {{-- 1. Rating --}}
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-xl bg-white border border-neutral-200 flex items-center justify-center text-warning-500 shrink-0 shadow-2xs">
                                <iconify-icon icon="lucide:star" class="text-lg fill-current"></iconify-icon>
                            </div>
                            <div>
                                <div class="flex items-baseline gap-1">
                                    <span class="text-base font-extrabold text-neutral-900">{{ $rating }}</span>
                                    <span class="text-xs font-semibold text-brand-600">/ 5.0</span>
                                </div>
                                <p class="text-xs text-neutral-600 font-medium">{{ $reviewCount }} Student Reviews</p>
                            </div>
                        </div>

                        {{-- 2. Graduates --}}
                        <div class="flex items-center gap-3 sm:border-l sm:border-neutral-200 sm:pl-4">
                            <div
                                class="w-10 h-10 rounded-xl bg-white border border-neutral-200 flex items-center justify-center text-brand-600 shrink-0 shadow-2xs">
                                <iconify-icon icon="lucide:users" class="text-lg"></iconify-icon>
                            </div>
                            <div>
                                <span class="block text-base font-extrabold text-neutral-900">{{ $graduateCount }}</span>
                                <p class="text-xs text-neutral-600 font-medium">Enrolled &amp; Graduates</p>
                            </div>
                        </div>

                        {{-- 3. Accreditation --}}
                        <div class="flex items-center gap-3 sm:border-l sm:border-neutral-200 sm:pl-4">
                            <div
                                class="w-10 h-10 rounded-xl bg-white border border-neutral-200 flex items-center justify-center text-success-600 shrink-0 shadow-2xs">
                                <iconify-icon icon="lucide:shield-check" class="text-lg"></iconify-icon>
                            </div>
                            <div>
                                <span class="block text-sm font-extrabold text-neutral-900">ASQA Regulated</span>
                                <p class="text-xs text-neutral-600 font-medium">Nationally Recognised</p>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- RIGHT COLUMN: Luxury Enrolment & Key Highlights Card (5 Cols) --}}
                <div class="lg:col-span-5">
                    <div
                        class="bg-white rounded-3xl border border-neutral-200 shadow-lg shadow-black/5 overflow-hidden">

                        {{-- Top Espresso Accent Header --}}
                        <div class="bg-neutral-900 px-6 py-4 flex items-center justify-between">
                            <span
                                class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-accent-25">
                                <iconify-icon icon="lucide:badge-check" class="text-base text-neutral-300"></iconify-icon>
                                NRT &amp; AQF Accredited
                            </span>
                            {{-- Enroll Open Live Pill --}}
                            <span
                                class="inline-flex items-center gap-2 rounded-full bg-success-50 border border-success-200/90 px-3.5 py-1.5 text-xs font-bold text-success-700 shadow-2xs">
                                <span class="relative flex h-2 w-2">
                                    <span
                                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-success-500 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-success-600"></span>
                                </span>
                                Enroll Open
                            </span>
                        </div>

                        {{-- Card Body --}}
                        <div class="p-6 sm:p-7">
                            <h2 class="text-lg font-extrabold text-neutral-900 mb-1">
                                Fast-Track Check
                            </h2>
                            <p class="text-xs sm:text-sm text-neutral-600 mb-5">
                                Select your background to view your recommended study or RPL mode
                            </p>

                            {{-- Key Highlights List --}}
                            <ul class="space-y-3 mb-6 text-xs sm:text-sm text-neutral-800">
                                <li class="flex items-center gap-2.5">
                                    <span
                                        class="w-5 h-5 rounded-full bg-neutral-100 text-neutral-600 flex items-center justify-center shrink-0">
                                        <iconify-icon icon="lucide:check" class="text-xs"></iconify-icon>
                                    </span>
                                    <span>Licensed Trade (3+ yrs on site) → RPL</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span
                                        class="w-5 h-5 rounded-full bg-neutral-100 text-neutral-600 flex items-center justify-center shrink-0">
                                        <iconify-icon icon="lucide:check" class="text-xs"></iconify-icon>
                                    </span>
                                    <span>Apprentice / Builder's Labourer → Blended</span>
                                </li>
                                <li class="flex items-center gap-2.5">
                                    <span
                                        class="w-5 h-5 rounded-full bg-neutral-100 text-neutral-600 flex items-center justify-center shrink-0">
                                        <iconify-icon icon="lucide:check" class="text-xs"></iconify-icon>
                                    </span>
                                    <span>Career Changer / New Entrant → Structured</span>
                                </li>
                            </ul>

                            {{-- Primary & Secondary CTAs --}}
                            <div class="space-y-4">
                                {{-- <a href="#enquire"
                                    class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-brand-600 hover:bg-neutral-800 active:bg-neutral-800 px-6 py-3.5 text-sm font-bold text-accent-25 shadow-sm transition-all duration-200">
                                    <span>Enquire Now</span>
                                    <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                                </a> --}}

                                <a href="#course-units"
                                    class="w-full inline-flex items-center justify-center gap-2 rounded-full bg-neutral-50 hover:bg-neutral-100 border border-neutral-200 px-6 py-3 text-xs sm:text-sm font-bold text-neutral-800 transition-all duration-200">
                                    <iconify-icon icon="lucide:book-open" class="text-base text-brand-600"></iconify-icon>
                                    <span>View Course Units &amp; Structure</span>
                                    <iconify-icon icon="lucide:arrow-down" class="text-base text-brand-600"></iconify-icon>

                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>



    <main class="mx-auto max-w-7xl flex-1 px-4 py-10 sm:px-6 sm:py-12 lg:px-8 lg:py-16">

        <div class="grid grid-cols-1 items-start gap-8 lg:grid-cols-12 lg:gap-10">

            <!-- LEFT CONTENT -->
            <div class="space-y-6 sm:space-y-8 lg:col-span-8">

                <article >
                    @if (!empty($imageSection['image']))
                        <figure
                            class="group relative isolate h-[300px] overflow-hidden rounded-2xl bg-neutral-900 shadow-lg sm:h-[340px] lg:h-[385px]">

                            {{-- Background image --}}
                            <img src="{{ $imageSection['image'] }}"
                                alt="{{ $imageSection['alt'] ?? 'Course practical training' }}"
                                class="absolute inset-0 h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy">

                            {{-- Dark gradient overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/35 to-black/5"></div>

                            {{-- Image caption --}}
                            <figcaption class="absolute inset-x-0 bottom-0 p-5 sm:p-7 lg:p-8">

                                {{-- Badges --}}
                                @if (!empty($imageSection['badges']))
                                    <div class="mb-4 flex flex-wrap items-center gap-2">
                                        @foreach ($imageSection['badges'] as $index => $badge)
                                            <span
                                                class="inline-flex items-center rounded-full px-3.5 py-1.5 text-[11px] font-semibold shadow-sm backdrop-blur-sm sm:text-xs
                                {{ $index === 0 ? 'bg-white/90 text-neutral-900' : 'bg-neutral-950/90 text-white' }}">
                                                @if ($index === 1)
                                                    <svg class="mr-1.5 h-3.5 w-3.5 text-green-400" fill="currentColor"
                                                        viewBox="0 0 20 20" aria-hidden="true">
                                                        <path fill-rule="evenodd"
                                                            d="M16.707 5.293a1 1 0 010 1.414l-7.25 7.25a1 1 0 01-1.414 0l-3.75-3.75a1 1 0 011.414-1.414l3.043 3.043 6.543-6.543a1 1 0 011.414 0z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                @endif
                                                {{ $badge }}
                                            </span>
                                        @endforeach
                                    </div>
                                @endif

                                {{-- Icon and caption text --}}
                                <div class="flex items-center gap-3">
                                    <div
                                        class="flex h-11 w-11 shrink-0 items-center justify-center rounded-full bg-white text-neutral-900 shadow-md sm:h-12 sm:w-12">
                                        <svg class="h-5 w-5 sm:h-6 sm:w-6" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                d="M3 7.5L12 3l9 4.5-9 4.5-9-4.5zm3.5 2.1V15c3.4 2.5 7.6 2.5 11 0V9.6M21 7.5V14" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                                d="M21 14v3" />
                                        </svg>
                                    </div>

                                    <div class="min-w-0">
                                        @if (!empty($imageSection['title']))
                                            <h2
                                                class="text-lg font-bold leading-snug tracking-tight text-white sm:text-xl lg:text-2xl">
                                                {{ $imageSection['title'] }}
                                            </h2>
                                        @endif

                                        @if (!empty($imageSection['description']))
                                            <p class="mt-1 text-xs leading-5 text-neutral-200 sm:text-sm">
                                                {{ $imageSection['description'] }}
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    @endif
                </article>
                <!-- COURSE DESCRIPTION -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="course-description">

                    <div class="mb-6 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-neutral-200 bg-neutral-50 text-brand-600 transition-colors duration-300 group-hover:bg-neutral-100">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <span class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                01.0 Qualification Scope
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                Course Description
                            </h2>
                        </div>

                    </div>


                    <div class="space-y-4 text-sm leading-7 text-neutral-600 sm:text-base">

                        <p>
                            {{ $course['course_description'] }}
                        </p>

                        @if (!empty($course['important_information']))
                            <div class="space-y-2">
                                @foreach ($course['important_information'] as $information)
                                    <p class="mb-2 last:mb-0">
                                        {{ $information }}
                                    </p>
                                @endforeach
                            </div>
                        @endif

                        @php
                            // Dynamic learning outcomes with fallback defaults matching your design
                            $outcomes = collect(
                                $learningOutcomes ?? [
                                    [
                                        'title' => 'Structural Principles',
                                        'description' =>
                                            'Apply NCC structural principles, footing design, and framing tolerances to residential and low-rise buildings.',
                                    ],
                                    [
                                        'title' => 'Plans & Specifications',
                                        'description' =>
                                            'Read, interpret, and cross-reference architectural working drawings, engineering notes, and NCC codes.',
                                    ],
                                    [
                                        'title' => 'Site Operations & Subcontractors',
                                        'description' =>
                                            'Plan, schedule, and supervise trade contractors, deliveries, and critical path milestones.',
                                    ],
                                    [
                                        'title' => 'WHS & Risk Systems',
                                        'description' =>
                                            'Implement active site safety systems, hazardous material handling, and Safe Work Method Statements (SWMS).',
                                    ],
                                    [
                                        'title' => 'Estimating & Contracts',
                                        'description' =>
                                            'Prepare competitive project tenders, material schedules, client building contracts, and variation agreements.',
                                    ],
                                    [
                                        'title' => 'Compliance & Quality Audit',
                                        'description' =>
                                            'Execute staged structural inspections, defect rectification records, and handover sign-offs.',
                                    ],
                                ],
                            );
                        @endphp

                        @if ($outcomes->isNotEmpty())

                            {{-- Outer Container Card --}}
                            <div class="">

                                {{-- Section Header --}}
                                <div class="flex items-center gap-3 mb-6 sm:mb-8">
                                    <div
                                        class="w-10 h-10 rounded-xl bg-neutral-100 border border-neutral-200 flex items-center justify-center text-neutral-600 shrink-0">
                                        <iconify-icon icon="lucide:list-checks" class="text-xl"></iconify-icon>
                                    </div>
                                    <h2
                                        class="text-xl sm:text-2xl lg:text-[1.75rem] font-extrabold text-neutral-900 tracking-tight">
                                        What You'll Learn &amp; Master
                                    </h2>
                                </div>

                                {{-- 2-Column Learning Outcomes Grid --}}
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5">
                                    @foreach ($outcomes as $item)
                                        <div
                                            class="group flex items-start gap-3.5 rounded-2xl bg-neutral-50 hover:bg-neutral-100 border border-neutral-200 hover:border-neutral-300 p-5 sm:p-6 transition-all duration-200 shadow-2xs">

                                            {{-- Check Circle Icon --}}
                                            <span
                                                class="mt-0.5 flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-success-50 border border-success-200 text-success-600 transition-transform duration-200 group-hover:scale-105">
                                                <iconify-icon icon="lucide:check" class="text-sm"></iconify-icon>
                                            </span>

                                            {{-- Outcome Text --}}
                                            <p class="text-sm sm:text-[15px] leading-relaxed text-neutral-600">
                                                <strong
                                                    class="font-extrabold text-neutral-900">{{ data_get($item, 'title') }}:</strong>
                                                {{ data_get($item, 'description') }}
                                            </p>

                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        @endif

                    </div>

                </article>


                <!-- ENTRY REQUIREMENTS -->
                <article
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="entry-requirements">

                    <div class="mb-6 flex items-center gap-3 border-b border-neutral-200 pb-4">

                        <div
                            class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-neutral-200 bg-neutral-50 text-brand-600">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 00-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>

                        <div>
                            <span class="block text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                02.0 Prerequisites &amp; Eligibility
                            </span>

                            <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                Entry Requirements
                            </h2>
                        </div>

                    </div>


                    @php
                        // Dynamic entry requirements with fallback defaults matching your design
                        $requirements = collect(
                            $entryRequirements ?? [
                                [
                                    'icon' => 'lucide:id-card',
                                    'title' => 'Age & Residency',
                                    'description' =>
                                        'Must be 18 years of age or older. Australian Citizens, Permanent Residents, and holders of eligible non-student temporary working visas.',
                                ],
                                [
                                    'icon' => 'lucide:languages',
                                    'title' => 'LLN Assessment',
                                    'description' =>
                                        'Satisfactory completion of an online Language, Literacy, and Numeracy (LLN) evaluation (Australian Core Skills Framework ACSF Level 3).',
                                ],
                                [
                                    'icon' => 'lucide:wrench',
                                    'title' => 'Industry Exposure',
                                    'description' =>
                                        'Prior trade qualification (e.g. Carpentry, Bricklaying, Plumbing) OR at least 2 years documented construction or trade site experience.',
                                ],
                                [
                                    'icon' => 'lucide:laptop',
                                    'title' => 'Digital & Tool Access',
                                    'description' =>
                                        'Reliable laptop or tablet with broadband internet access, PDF viewer, plus standard White Card (CPCWHS1001) and personal safety boots/PPE.',
                                ],
                            ],
                        );
                    @endphp
                    <p class="mb-6 text-sm leading-6 text-neutral-600">Our admission officers review each applicant
                        holistically, balancing formal trade background with real site-based experience</p>
                    {{-- 2x2 Requirements Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                        @foreach ($requirements as $req)
                            <div
                                class="group rounded-2xl bg-neutral-50 hover:bg-neutral-100 border border-neutral-200 hover:border-neutral-300 p-6 transition-all duration-200 shadow-2xs flex flex-col justify-between">

                                <div>
                                    {{-- Requirement Title & Icon Header --}}
                                    <div class="flex items-center gap-3 mb-3.5">
                                        <div
                                            class="w-10 h-10 rounded-xl bg-neutral-100 border border-neutral-200 text-neutral-700 flex items-center justify-center shrink-0 transition-transform duration-200 group-hover:scale-105">
                                            <iconify-icon icon="{{ data_get($req, 'icon', 'lucide:check-circle') }}"
                                                class="text-xl"></iconify-icon>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-extrabold text-neutral-900">
                                            {{ data_get($req, 'title') }}
                                        </h3>
                                    </div>

                                    {{-- Description --}}
                                    <p class="text-sm sm:text-[15px] leading-relaxed text-neutral-600">
                                        {{ data_get($req, 'description') }}
                                    </p>
                                </div>

                            </div>
                        @endforeach
                    </div>

                </article>

                @php
                    // Dynamic or default RPL steps matching your reference design
                    $rplSteps = [
                        [
                            'number' => '01',
                            'title' => 'Free Skills Audit',
                            'description' =>
                                'Complete our 2-minute pre-assessment to verify if your existing experience aligns with the required units.',
                        ],
                        [
                            'number' => '02',
                            'title' => 'Evidence Review',
                            'description' =>
                                'Upload site photos, trade licenses, payslips, supervisor third-party references, and plans managed.',
                        ],
                        [
                            'number' => '03',
                            'title' => 'Certification',
                            'description' =>
                                'Participate in a practical competency conversation with our licensed assessor and receive your parchment.',
                        ],
                    ];
                @endphp



                {{-- Outer Luxury Dark Container Card --}}
                <div
                    class="relative overflow-hidden rounded-3xl bg-neutral-900 text-accent-25 p-8 sm:p-10 lg:p-14 shadow-xl border border-neutral-800">

                    {{-- Top Header Row --}}
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-8">
                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-success-300 text-success-950 px-4 py-1.5 text-xs font-bold tracking-wide uppercase shadow-sm self-start">
                            <span class="w-2 h-2 rounded-full bg-success-700"></span>
                            Fast-Track Pathway
                        </span>
                        <span class="text-xs font-bold uppercase tracking-[0.2em] text-neutral-300">
                            National Skills Recognition
                        </span>
                    </div>

                    {{-- Main Headline & Subtitle --}}
                    <div class="max-w-3xl mb-10">
                        <h2
                            class="text-3xl sm:text-4xl lg:text-[2.75rem] font-extrabold tracking-tight leading-[1.12] mb-5 text-accent-25">
                            Convert Your Trade Years into an <span class="text-success-300">Accredited Qualification</span>
                            via RPL
                        </h2>
                        <p class="text-sm sm:text-base lg:text-lg text-neutral-300 leading-relaxed">
                            Have you been managing jobsites, working as a leading hand, or running trade subcontracts? Don't
                            repeat modules you've mastered. Melbourne Institute of Nails &amp; Beauty Pty Ltd evaluates your
                            practical portfolio to fast-track competency sign-offs under ASQA Standards.
                        </p>
                    </div>

                    {{-- 3-Column RPL Steps Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-6 mb-10">
                        @foreach ($rplSteps as $step)
                            <div
                                class="rounded-2xl bg-neutral-900/60 border border-neutral-700 p-6 sm:p-7 flex flex-col justify-between shadow-2xs transition-all duration-300 hover:border-neutral-600">
                                <div>
                                    <span class="inline-block text-base font-black text-success-300 tracking-wider mb-2">
                                        {{ data_get($step, 'number') }}.
                                    </span>
                                    <h3 class="text-lg font-extrabold text-accent-25 mb-3">
                                        {{ data_get($step, 'title') }}
                                    </h3>
                                    <p class="text-xs sm:text-sm leading-relaxed text-neutral-400">
                                        {{ data_get($step, 'description') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Bottom CTA & Turnaround Info --}}
                    <div
                        class="flex flex-col sm:flex-row sm:items-center justify-between gap-5 pt-6 border-t border-neutral-800">
                        <a href="#enquire"
                            class="inline-flex items-center justify-center gap-2 rounded-full bg-success-300 hover:bg-success-400 active:bg-success-500 px-8 py-4 text-sm font-bold text-success-950 shadow-md transition-all duration-200">
                            <span>Check Your RPL Eligibility Now</span>
                            <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                        </a>

                        <div class="inline-flex items-center gap-2.5 text-xs sm:text-sm font-medium text-neutral-300">
                            <iconify-icon icon="lucide:clock" class="text-lg text-success-300"></iconify-icon>
                            <span>Average RPL Assessment Turnaround: <strong class="text-accent-25 font-bold">6-8
                                    Weeks</strong></span>
                        </div>
                    </div>

                </div>

                <!-- COURSE STRUCTURE-->
                <article id="syllabus"
                    class="rounded-2xl border border-neutral-200/80 bg-white p-6 shadow-theme-xs transition-shadow duration-300 hover:shadow-theme-sm sm:p-8"
                    data-purpose="course-structure">

                    <div class="mb-6 flex items-center justify-between gap-4 border-b border-neutral-200 pb-4">

                        <div class="flex min-w-0 items-center gap-3">

                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-neutral-200 bg-neutral-50 text-brand-600 transition-colors duration-300 group-hover:bg-neutral-100">
                                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                            </div>

                            <div class="min-w-0">
                                <span
                                    class="block  text-[10px] font-semibold uppercase tracking-[0.14em] text-neutral-500">
                                    04.0 Curriculum Architecture
                                </span>

                                <h2 class="font-heading text-xl font-bold tracking-tight text-neutral-900 sm:text-2xl">
                                    Course Structure
                                </h2>
                            </div>

                        </div>
                        <span
                            class="hidden shrink-0 border border-neutral-200 bg-neutral-50 px-3 py-1  text-[10px] font-semibold uppercase tracking-wider text-neutral-600 sm:inline-flex">
                            Total {{ $course['key_information']['total_units'] }} Units
                        </span>

                    </div>
                    <p class="mb-6 text-sm leading-6 text-neutral-600">
                        To achieve the {{ $course['code'] }} {{ $course['name'] }},
                        <strong class="font-semibold text-neutral-900">{{ $course['key_information']['total_units'] }}
                            competency units</strong>
                        must be successfully completed: comprising
                        <strong
                            class="font-semibold text-neutral-900">{{ $course['course_structure']['core_units']['total'] }}
                            core units</strong>
                        and
                        <strong
                            class="font-semibold text-neutral-900">{{ $course['course_structure']['elective_units']['total'] }}
                            elective units</strong>.
                    </p>


                    <!-- CORE UNITS -->
                    <div class="mb-8">

                        <div class="mb-3 flex flex-wrap items-center justify-between gap-2">

                            <h3
                                class="flex items-center gap-2 font-heading text-sm font-bold uppercase tracking-wide text-neutral-600 sm:text-base">
                                <span class="h-2 w-2 bg-neutral-500"></span>

                                Core Units
                                ({{ $course['course_structure']['core_units']['total'] }} Required)
                            </h3>

                            <span class="text-[10px] font-semibold uppercase tracking-wider text-neutral-500">
                                Mandatory Units
                            </span>

                        </div>

                        <div class="space-y-2.5">

                            @foreach ($course['course_structure']['core_units']['units'] as $unit)
                                <div
                                    class="group flex items-start gap-3 rounded-xl border border-neutral-200/80 bg-neutral-50 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-neutral-200 hover:bg-neutral-50 hover:shadow-theme-xs">

                                    <div class="mt-0.5 shrink-0 text-success-600">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path clip-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <div class="mb-1 flex flex-wrap items-center justify-between gap-2">

                                            <span class="text-[11px] font-semibold text-neutral-600">
                                                {{ $unit['code'] }}
                                            </span>

                                            <span
                                                class="rounded-full border border-neutral-200 bg-white px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wide text-neutral-600">
                                                Core
                                            </span>

                                        </div>

                                        <p class="text-sm font-semibold leading-6 text-neutral-900">
                                            {{ $unit['name'] }}
                                        </p>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>


                    <!-- ELECTIVE UNITS -->
                    <div>

                        <div class="mb-3 flex flex-wrap items-center justify-between gap-2">

                            <h3
                                class="flex items-center gap-2 font-heading text-sm font-bold uppercase tracking-wide text-neutral-600 sm:text-base">

                                <span class="h-2 w-2 bg-neutral-1000"></span>

                                Elective Units
                                ({{ $course['course_structure']['elective_units']['total'] }} Required)

                            </h3>

                            <span class="text-[10px] font-semibold uppercase tracking-wider text-neutral-500">
                                Elective Units
                            </span>

                        </div>

                        <div class="space-y-2.5">

                            @foreach ($course['course_structure']['elective_units']['units'] as $unit)
                                <div
                                    class="group flex items-start gap-3 rounded-xl border border-neutral-200 bg-neutral-50 p-4 transition-all duration-300 hover:-translate-y-0.5 hover:border-neutral-200 hover:bg-neutral-100 hover:shadow-theme-xs">

                                    <div class="mt-0.5 shrink-0 text-secondary-600">
                                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                            <path clip-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                fill-rule="evenodd" />
                                        </svg>
                                    </div>

                                    <div class="min-w-0 flex-1">

                                        <div class="mb-1 flex flex-wrap items-center justify-between gap-2">

                                            <span class="text-[11px] font-semibold text-secondary-700">
                                                {{ $unit['code'] }}
                                            </span>

                                            <span
                                                class="rounded-full border border-neutral-200 bg-white px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wide text-secondary-700">
                                                Elective
                                            </span>

                                        </div>

                                        <p class="text-sm font-semibold leading-6 text-neutral-900">
                                            {{ $unit['name'] }}
                                        </p>

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>

                </article>





                @php
                    // Dynamic or default licensing pathways matching your reference design
                    $pathways = [
                        [
                            'icon' => 'lucide:home',
                            'title' => 'Domestic Builder (DB-U)',
                            'description' =>
                                'Register to legally quote, manage, and construct residential developments valued over $10,000.',
                        ],
                        [
                            'icon' => 'lucide:user-check',
                            'title' => 'Site Supervisor / Foreperson',
                            'description' =>
                                'Oversee daily on-site trades, enforce QA checklists, and ensure structural compliance with engineering.',
                        ],
                        [
                            'icon' => 'lucide:file-spreadsheet',
                            'title' => 'Construction Estimator',
                            'description' =>
                                'Quantify architectural scopes of work, formulate trade tenders, and administer project cost margins.',
                        ],
                        [
                            'icon' => 'lucide:building-2',
                            'title' => 'Project Coordinator',
                            'description' =>
                                'Manage council permits, surveyor staging approvals, and project variation timelines.',
                        ],
                    ];
                @endphp



                {{-- Outer Container Card --}}
                <div class="rounded-3xl bg-white border border-neutral-200 p-6 sm:p-8 lg:p-12 shadow-xs">

                    {{-- Section Header --}}
                    <div class="max-w-3xl mb-8 sm:mb-10">
                        <span
                            class="inline-flex items-center gap-2 rounded-full bg-neutral-50 border border-neutral-200 px-3.5 py-1.5 text-xs font-bold text-neutral-700 tracking-wider uppercase shadow-2xs mb-4">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-600"></span>
                            Career Progression
                        </span>
                        <h2
                            class="text-2xl sm:text-3xl lg:text-[2.25rem] font-extrabold text-neutral-900 tracking-tight leading-[1.15] mb-4">
                            Licensing Pathways &amp; Industry Outcomes
                        </h2>
                        <p class="text-sm sm:text-base leading-relaxed text-neutral-600">
                            Holding CPC40120 is the premier recognized qualification benchmark prescribed by Australian
                            regulatory bodies (such as VBA, NSW Fair Trading, QBCC) when applying for building practitioner
                            registration.
                        </p>
                    </div>

                    {{-- 2x2 Career Roles Grid --}}
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-5 mb-6">
                        @foreach ($pathways as $item)
                            <div
                                class="group rounded-2xl bg-neutral-50 hover:bg-neutral-100 border border-neutral-200 hover:border-neutral-300 p-6 transition-all duration-200 shadow-2xs flex flex-col justify-between">
                                <div>
                                    {{-- Role Title & Icon Header --}}
                                    <div class="flex items-center gap-3.5 mb-3">
                                        <div
                                            class="w-11 h-11 rounded-xl bg-neutral-100 border border-neutral-200 text-neutral-700 flex items-center justify-center shrink-0 transition-transform duration-200 group-hover:scale-105">
                                            <iconify-icon icon="{{ data_get($item, 'icon') }}"
                                                class="text-xl"></iconify-icon>
                                        </div>
                                        <h3 class="text-base sm:text-lg font-extrabold text-neutral-900">
                                            {{ data_get($item, 'title') }}
                                        </h3>
                                    </div>

                                    {{-- Description --}}
                                    <p class="text-xs sm:text-sm leading-relaxed text-neutral-600">
                                        {{ data_get($item, 'description') }}
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Bottom Stats Strip Bar --}}
                    <div
                        class="rounded-2xl bg-neutral-50 border border-neutral-200 p-6 sm:p-8 grid grid-cols-1 sm:grid-cols-3 gap-6 sm:gap-4 text-left">

                        {{-- Stat 1 --}}
                        <div>
                            <span class="block text-2xl sm:text-3xl font-black text-neutral-900 tracking-tight mb-1">
                                $125,000+
                            </span>
                            <span class="text-xs sm:text-sm font-semibold text-neutral-600">
                                Average Licensed Builder Salary (AU)
                            </span>
                        </div>

                        {{-- Stat 2 --}}
                        <div class="sm:border-l sm:border-neutral-200 sm:pl-6">
                            <span class="block text-2xl sm:text-3xl font-black text-neutral-900 tracking-tight mb-1">
                                +9.8%
                            </span>
                            <span class="text-xs sm:text-sm font-semibold text-neutral-600">
                                5-Year Industry Job Demand Growth
                            </span>
                        </div>

                        {{-- Stat 3 --}}
                        <div class="sm:border-l sm:border-neutral-200 sm:pl-6">
                            <span class="block text-2xl sm:text-3xl font-black text-neutral-900 tracking-tight mb-1">
                                100%
                            </span>
                            <span class="text-xs sm:text-sm font-semibold text-neutral-600">
                                VBA / Interstate Board Alignment
                            </span>
                        </div>

                    </div>

                </div>




            </div>


            <!-- RIGHT SIDEBAR -->
            <aside class="space-y-6 lg:sticky lg:top-24 lg:col-span-4">

                <!-- COURSE AT A GLANCE / QUALIFICATION INFO CARD -->
                <div class="rounded-3xl border border-neutral-200 bg-white p-6 sm:p-7 shadow-lg shadow-black/5 transition-all duration-300"
                    data-purpose="at-a-glance-summary">

                    <!-- Card Header Top -->
                    <div class="mb-5">
                        <span class="block text-[11px] font-bold uppercase tracking-[0.18em] text-brand-600 mb-1.5">
                            Pathway to be a Qualified Builder
                        </span>
                        <h3
                            class="font-heading text-2xl sm:text-[1.75rem] font-black tracking-tight text-neutral-900 leading-tight">
                            Qualification Info.
                        </h3>
                    </div>

                    <!-- Subsidy / Eligibility Callout Box -->
                    <div
                        class="mb-6 flex items-start gap-2.5 rounded-2xl bg-success-50 border border-success-200 p-3.5 text-xs font-bold text-success-800">
                        <iconify-icon icon="lucide:check-circle-2"
                            class="text-base text-success-600 shrink-0 mt-0.5"></iconify-icon>
                        <span>Skills First &amp; RPL Subsidies Available for Eligible Candidates</span>
                    </div>

                    <!-- Primary CTA Button -->
                    <div class="mb-6">
                        <a href="#enquire"
                            class="w-full inline-flex items-center justify-center gap-2.5 rounded-full bg-neutral-900 hover:bg-neutral-800 active:bg-neutral-800 px-6 py-4 text-sm font-bold text-accent-25 shadow-md transition-all duration-200">
                            <span>Enquire &amp; Check Eligibility</span>
                            <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>
                        </a>
                    </div>

                    <!-- Divider Line -->
                    <div class="h-px w-full bg-secondary-200 mb-6"></div>

                    <!-- Course Specifications Title -->
                    <h4 class="font-heading text-base font-extrabold text-neutral-900 mb-4">
                        Course Specifications
                    </h4>

                    <!-- Specifications List (dl) -->
                    <dl class="space-y-4 text-xs sm:text-sm">

                        <!-- National Code -->
                        <div class="flex items-center justify-between gap-4">
                            <dt class="inline-flex items-center gap-2 text-neutral-600 font-medium">
                                <iconify-icon icon="lucide:hash" class="text-sm text-brand-600"></iconify-icon>
                                National Code
                            </dt>
                            <dd class="font-bold text-neutral-900 text-right">
                                {{ $course['code'] ?? 'CPC40120' }}
                            </dd>
                        </div>

                        <!-- Recognition -->
                        <div class="flex items-center justify-between gap-4">
                            <dt class="inline-flex items-center gap-2 text-neutral-600 font-medium">
                                <iconify-icon icon="lucide:shield-check" class="text-sm text-brand-600"></iconify-icon>
                                Recognition
                            </dt>
                            <dd class="font-bold text-neutral-900 text-right">
                                National (ASQA Regulated)
                            </dd>
                        </div>

                        <!-- Delivery Mode -->
                        <div class="flex items-center justify-between gap-4">
                            <dt class="inline-flex items-center gap-2 text-neutral-600 font-medium">
                                <iconify-icon icon="lucide:laptop" class="text-sm text-brand-600"></iconify-icon>
                                Delivery Mode
                            </dt>
                            <dd class="font-bold text-neutral-900 text-right">
                                {{ $course['key_information']['mode_of_study'] ?? 'Blended (Online & Practical)' }}
                            </dd>
                        </div>

                        <!-- Duration -->
                        <div class="flex items-center justify-between gap-4">
                            <dt class="inline-flex items-center gap-2 text-neutral-600 font-medium">
                                <iconify-icon icon="lucide:clock" class="text-sm text-brand-600"></iconify-icon>
                                Duration
                            </dt>
                            <dd class="font-bold text-neutral-900 text-right max-w-[180px] leading-tight">
                                {{ $course['key_information']['duration'] ?? 'Depends on Course Outline (RPL: 4-6 wks)' }}
                            </dd>
                        </div>

                        <!-- Total Units -->
                        <div class="flex items-center justify-between gap-4">
                            <dt class="inline-flex items-center gap-2 text-neutral-600 font-medium">
                                <iconify-icon icon="lucide:list-tree" class="text-sm text-brand-600"></iconify-icon>
                                Total Units
                            </dt>
                            <dd class="font-bold text-neutral-900 text-right">
                                {{ $course['key_information']['total_units'] ?? '19 Competency Units' }}
                            </dd>
                        </div>

                        <!-- Assessments -->
                        <div class="flex items-center justify-between gap-4">
                            <dt class="inline-flex items-center gap-2 text-neutral-600 font-medium">
                                <iconify-icon icon="lucide:file-text" class="text-sm text-brand-600"></iconify-icon>
                                Assessments
                            </dt>
                            <dd class="font-bold text-neutral-900 text-right">
                                Projects, Portfolios &amp; RPL
                            </dd>
                        </div>

                        <!-- Next Intake -->
                        <div class="flex items-center justify-between gap-4">
                            <dt class="inline-flex items-center gap-2 text-neutral-600 font-medium">
                                <iconify-icon icon="lucide:calendar" class="text-sm text-brand-600"></iconify-icon>
                                Next Intake
                            </dt>
                            <dd class="font-bold text-neutral-600 text-right">
                                Open for Enrolment
                            </dd>
                        </div>

                    </dl>

                    <!-- Bottom Enrolment Advice Widget -->
                    <div class="mt-6 rounded-2xl bg-neutral-50 border border-neutral-200 p-4 flex items-center gap-3.5">
                        <div
                            class="w-10 h-10 rounded-xl bg-neutral-100 border border-neutral-200 text-neutral-700 flex items-center justify-center shrink-0">
                            <iconify-icon icon="lucide:headset" class="text-xl"></iconify-icon>
                        </div>
                        <div>
                            <p class="text-xs font-bold text-neutral-900">Need Enrolment Advice?</p>
                            <p class="text-[11px] text-neutral-600 leading-relaxed mt-0.5">
                                Speak with our Melbourne Admissions Team at <a href="tel:040684444"
                                    class="font-bold text-neutral-800 underline hover:text-brand-600">0406 844 44</a>
                            </p>
                        </div>
                    </div>

                </div>

            </aside>

        </div>

    </main>


@endsection
