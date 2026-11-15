
@php
    $steps = [
        [
            'number' => '01',
            'title' => 'Check Eligibility',
            'subtitle' => '2 Minutes',
            'description' => 'Quickly verify your eligibility for government subsidies, funding options, and course prerequisites with our streamlined questionnaire.',
        ],
        [
            'number' => '02',
            'title' => 'Documents Submission & Enroll',
            'subtitle' => 'Secure Process',
            'description' => 'Submit your required identification and previous transcripts safely through our digital portal with guidance from your mentor.',
        ],
        [
            'number' => '03',
            'title' => 'Get Qualification',
            'subtitle' => 'Launch Career',
            'description' => 'Begin your hands-on clinical training in our state-of-the-art Melbourne student salon and graduate with a nationally recognized qualification.',
        ],
    ];
@endphp

<section class="py-16 sm:py-24 bg-accent-50 overflow-hidden"
    x-data="{ activeStep: 1 }">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- FIX: items-start instead of items-stretch --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">

            {{-- Left Column --}}
            <div class="lg:col-span-6 min-w-0">

                {{-- Section Header --}}
                <div class="mb-6 sm:mb-8">

                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-accent-25 text-brand-700 text-xs font-bold uppercase tracking-[0.16em] mb-4 border border-secondary-200 shadow-2xs">

                        <span class="w-1.5 h-1.5 rounded-full bg-brand-600"></span>

                        3 Simple Steps

                    </span>

                    <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-950 tracking-tight leading-[1.15] mb-4">

                        Start your learning journey in

                        <span class="font-serif italic font-semibold text-brand-600">
                            three simple steps
                        </span>

                    </h2>

                    <p class="text-base text-brand-800/85 leading-relaxed">
                        Follow our straightforward, supportive enrolment process to secure government subsidies, meet your mentor, and commence practical training.
                    </p>

                </div>

                {{-- Steps Accordion --}}
                <div class="space-y-3.5">

                    @foreach($steps as $index => $step)

                        @php
                            $stepNum = $index + 1;
                        @endphp

                        <div
                            class="rounded-2xl border overflow-hidden"
                            :class="activeStep === {{ $stepNum }}
                                ? 'bg-accent-25 border-brand-300 shadow-md shadow-brand-950/5'
                                : 'bg-accent-25/60 border-secondary-200 shadow-2xs'">

                            {{-- Step Header --}}
                            <button
                                type="button"
                                @click="activeStep = activeStep === {{ $stepNum }} ? null : {{ $stepNum }}"
                                :aria-expanded="activeStep === {{ $stepNum }}"
                                class="w-full flex items-center justify-between gap-3 p-4 sm:p-5 text-left focus:outline-none cursor-pointer">

                                <div class="flex items-center gap-3.5 min-w-0">

                                    <span
                                        class="flex items-center justify-center w-9 h-9 sm:w-10 sm:h-10 shrink-0 rounded-xl font-bold text-sm shadow-2xs"
                                        :class="activeStep === {{ $stepNum }}
                                            ? 'bg-brand-600 text-accent-25'
                                            : 'bg-secondary-100 text-brand-800'">

                                        {{ $step['number'] }}

                                    </span>

                                    <div class="min-w-0">

                                        <h3 class="font-bold text-brand-950 text-base sm:text-lg">
                                            {{ $step['title'] }}
                                        </h3>

                                        <span class="text-xs font-semibold text-brand-600">
                                            {{ $step['subtitle'] }}
                                        </span>

                                    </div>

                                </div>

                                <div
                                    class="w-8 h-8 shrink-0 rounded-full flex items-center justify-center text-brand-700 transition-transform duration-200"
                                    :class="activeStep === {{ $stepNum }}
                                        ? 'rotate-180 text-brand-600 bg-brand-100'
                                        : 'bg-secondary-100/50'">

                                    <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                </div>

                            </button>

                            {{-- Accordion Content --}}
                            <div
                                x-show="activeStep === {{ $stepNum }}"
                                x-cloak
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0"
                                x-transition:enter-end="opacity-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0"
                                class="px-4 sm:px-5 pb-4 sm:pb-5 pt-3 border-t border-secondary-200">

                                <p class="text-sm text-brand-800/85 leading-relaxed">
                                    {{ $step['description'] }}
                                </p>

                                <div class="mt-3">

                                    <a href="#enquire"
                                        class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-700 hover:text-brand-950 group">

                                        <span>Get started with this step</span>

                                        <iconify-icon
                                            icon="lucide:arrow-right"
                                            class="transition-transform group-hover:translate-x-1">
                                        </iconify-icon>

                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

            {{-- Right Column: Independent Fixed Height --}}
            <div class="lg:col-span-6 min-w-0">

                {{-- IMPORTANT: No h-full, no min-h, no items-stretch --}}
                <div class="relative rounded-3xl overflow-hidden shadow-xl w-full
                    h-[420px] sm:h-[500px] lg:h-[580px]
                    group border-4 border-accent-25 flex flex-col justify-between">

                    {{-- Background Image --}}
                    <div
                        class="absolute inset-0 bg-cover bg-center transition-transform duration-700 ease-out group-hover:scale-105"
                        style="background-image: url('{{ asset('images/hero/consultation-salon.jpg') }}');">

                        <div class="absolute inset-0 bg-gradient-to-t from-brand-950/80 via-brand-950/20 to-transparent"></div>

                    </div>

                    {{-- Top Floating Badge --}}
                    <div class="relative z-10 m-5 sm:m-6 self-start">

                        <span class="inline-flex items-center gap-2 bg-accent-25/90 backdrop-blur-md text-brand-950 text-xs font-bold px-4 py-2 rounded-full shadow-md border border-secondary-200">

                            <span class="w-2 h-2 rounded-full bg-brand-600"></span>

                            Melbourne CBD Student Salon

                        </span>

                    </div>

                    {{-- Bottom Floating Guidance Card --}}
                    <div class="relative z-10 m-4 sm:m-6">

                        <div class="bg-accent-25/95 backdrop-blur-xl rounded-2xl p-4 sm:p-5 shadow-xl border border-secondary-200 flex flex-col sm:flex-row items-center justify-between gap-4">

                            <div class="flex items-center gap-3.5 min-w-0">

                                <div class="w-11 h-11 sm:w-12 sm:h-12 rounded-2xl bg-brand-100 flex items-center justify-center text-brand-700 shrink-0 shadow-2xs">

                                    <iconify-icon icon="lucide:headset" class="text-xl sm:text-2xl"></iconify-icon>

                                </div>

                                <div>

                                    <span class="block text-[11px] font-bold text-brand-600 uppercase tracking-wider mb-0.5">
                                        Check eligibility within 2 minutes
                                    </span>

                                    <h4 class="text-xs sm:text-sm font-extrabold text-brand-950 leading-snug">
                                        Our Expert Admission Officer will Guide You
                                    </h4>

                                </div>

                            </div>

                            <a href="#enquire"
                                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-brand-600 hover:bg-brand-700 active:bg-brand-800 text-accent-25 font-bold text-xs sm:text-sm px-5 py-3 rounded-xl shadow-xs transition-colors duration-200 shrink-0">

                                <span>Enquire Now</span>

                                <iconify-icon icon="lucide:arrow-right" class="text-sm"></iconify-icon>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
