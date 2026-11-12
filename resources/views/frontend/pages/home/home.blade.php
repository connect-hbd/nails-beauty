@extends('frontend.layouts.app')

@section('content')
<section class="py-20 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto flex flex-col items-center">
        
        <!-- Top Social Proof Pill -->
        <div class="inline-flex items-center gap-3 bg-white border border-gray-200/80 rounded-full py-1.5 px-4 shadow-2xs mb-8">
            <!-- Overlapping Avatar Initials -->
            <div class="flex -space-x-2">
                <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-[#FBC4B2] text-gray-900 text-xs font-bold ring-2 ring-white">
                    SL
                </span>
                <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-[#E5E7EB] text-gray-900 text-xs font-bold ring-2 ring-white">
                    MK
                </span>
                <span class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-[#D9F99D] text-gray-900 text-xs font-bold ring-2 ring-white">
                    EJ
                </span>
            </div>

            <!-- Rating Text -->
            <div class="flex items-center gap-1.5 text-sm">
                <!-- Star Icon -->
                <svg class="w-4 h-4 text-brand-500 fill-current" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                </svg>
                <span class="font-bold text-gray-900">4.9/5 Rating</span>
                <span class="text-gray-500 hidden sm:inline">(1,400+ Graduates &amp; Salon Placements)</span>
            </div>
        </div>

        <!-- Main Headline -->
        <h1 class="text-4xl sm:text-5xl md:text-[3.5rem] italic font-extrabold text-[#18181B] tracking-tight leading-[1.12] mb-6">
            Master your artistry. Launch your career in beauty &amp; nails.
        </h1>

        <!-- Subtitle -->
        <p class="max-w-2xl text-base sm:text-lg text-gray-600 leading-relaxed mb-10">
            Nationally accredited qualifications, hands-on clinical training in our state-of-the-art Melbourne CBD student salon, and guaranteed industry placements.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <!-- Primary Button -->
            <a href="" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-brand-500 hover:bg-brand-800 text-white font-semibold text-sm px-7 py-4 rounded-full shadow-md transition-all duration-200">
                <span>Enquire Now</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                </svg>
            </a>

            <!-- Secondary Button -->
            <a href="" class="w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-white hover:bg-gray-50 text-gray-900 font-semibold text-sm px-7 py-4 rounded-full border border-gray-200 shadow-2xs transition-all duration-200">
                <!-- Graduation Cap Icon -->
                <svg class="w-5 h-5 text-brand-800/80" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                </svg>
                <span>Explore All Qualifications</span>
            </a>
        </div>

    </div>
</section>

<section class="py-16 px-4 sm:px-6 lg:px-8 bg-[#FAFAFA]">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
        
        <!-- Left Image Card -->
        <div class="lg:col-span-7 relative rounded-3xl overflow-hidden shadow-lg h-[480px] sm:h-[520px] flex flex-col justify-between p-6 sm:p-8">
            <!-- Background Image -->
            <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('{{ asset('images/hero/bannar.jpg') }}');">
                <div class="absolute inset-0 bg-black/15"></div>
            </div>

            <!-- Top Badge -->
            <div class="relative z-10 self-start bg-[#D9F99D] text-gray-900 rounded-2xl px-5 py-3 shadow-sm">
                <span class="block text-[10px] sm:text-xs font-bold tracking-wider uppercase text-gray-800 mb-0.5">Earn Nationally Accredited Qualifications</span>
                <h3 class="text-xl sm:text-2xl font-extrabold text-gray-900">Popular 16 Qualifications</h3>
            </div>

            <!-- Bottom Floating Card -->
            <div class="relative z-10 bg-white/95 backdrop-blur-md rounded-2xl p-4 sm:p-5 shadow-md flex items-center gap-3">
                <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 shrink-0"></span>
                <p class="text-xs sm:text-sm text-gray-700 font-medium leading-relaxed">
                    Discover nationally recognised qualifications designed to develop practical skills and create new career opportunities.
                </p>
            </div>
        </div>

        <!-- Right Info Card -->
        <div class="lg:col-span-5 bg-white rounded-3xl p-6 sm:p-8 shadow-sm border border-gray-100/80 flex flex-col justify-between">
            <div>
                <!-- Card Header Top -->
                <div class="flex items-center justify-between mb-6">
                    <span class="text-[11px] font-bold tracking-wider uppercase text-gray-400">Training Provider In Australia</span>
                    <span class="inline-flex items-center gap-1.5 bg-emerald-50 text-emerald-700 text-xs font-semibold px-3 py-1 rounded-full border border-emerald-100">
                        <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20">
                            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                        </svg>
                        Authorised RTO
                    </span>
                </div>

                <!-- RTO Details Box -->
                <div class="flex items-start gap-4 mb-6">
                    <div class="w-12 h-12 rounded-2xl bg-[#FDE8E0] flex items-center justify-center text-amber-900 shrink-0 shadow-2xs">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xs font-bold text-gray-500 uppercase tracking-wider">RTO 21851</span>
                        <h2 class="text-lg sm:text-xl font-extrabold text-gray-900 leading-snug">Melbourne Institute of Nails &amp; Beauty Pty Ltd</h2>
                    </div>
                </div>

                <!-- Stats Grid -->
                <div class="grid grid-cols-2 gap-3 mb-6 bg-gray-50/80 p-4 rounded-2xl border border-gray-100">
                    <div>
                        <span class="block text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-1">Recognition</span>
                        <span class="text-sm font-bold text-gray-900 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 1.176-.303 2.308-.758 3.364-1.352"/></svg>
                            Nationally Recognised
                        </span>
                    </div>
                    <div>
                        <span class="block text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-1">Qualifications</span>
                        <span class="text-sm font-bold text-gray-900 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                            16 Qualifications
                        </span>
                    </div>
                    <div>
                        <span class="block text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-1">Units</span>
                        <span class="text-sm font-bold text-gray-900">412</span>
                    </div>
                    <div>
                        <span class="block text-[11px] font-semibold text-gray-400 uppercase tracking-wider mb-1">Accreditations</span>
                        <span class="text-sm font-bold text-gray-900 flex items-center gap-1.5">
                            <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                            NRT &amp; AQF
                        </span>
                    </div>
                </div>

                <!-- Description Note -->
                <p class="text-xs text-gray-500 mb-6">
                    We provide govt. approved qualifications which is recognized.
                </p>
            </div>

            <!-- CTA Actions -->
            <div class="flex items-center gap-3">
                <a href="" class="flex-1 inline-flex items-center justify-center bg-brand-500 hover:bg-brand-800 text-white font-semibold text-sm py-3.5 px-6 rounded-full shadow-md transition-all duration-200">
                    Enquire Now
                </a>
                <button type="button" class="w-12 h-12 rounded-full border border-gray-200 bg-white hover:bg-gray-50 flex items-center justify-center text-gray-700 transition-all duration-200 shadow-2xs shrink-0" aria-label="Bookmark">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0z"/>
                    </svg>
                </button>
            </div>
        </div>

    </div>
</section>

<section class="py-12 bg-surface border-y border-outline-variant/20 reveal-on-scroll is-visible">
        <div class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
            <p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest mb-8">Trusted by
                Accredited By</p>
            <div class="flex flex-wrap justify-center items-center gap-12  transition-all duration-500">
                <img class="h-16 object-contain" data-alt="clean geometric logo of a professional education authority in black and white" src="{{ asset('/patner_1.png') }}" alt="patner image">

                <img class="h-16 object-contain" data-alt="sleek corporate mark for a global vocational training federation" src="{{ asset('/patner_2.png') }}" alt="patner image">
            </div>
        </div>
    </section>

    @include('frontend.pages.home.section.qualifications')


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

<section class="py-16 sm:py-24 bg-[#FAFAFA] overflow-hidden" x-data="{ activeStep: 1 }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            {{-- Left Column: Content & Interactive Accordion Steps --}}
            <div class="lg:col-span-6">
                
                <!-- Section Header -->
                <div class="mb-8">
                    <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-brand-50 text-brand-700 text-xs font-bold uppercase tracking-wider mb-4 border border-brand-100 shadow-2xs">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary-500 animate-pulse"></span>
                        3 Simple Steps
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-4xl font-black text-slate-900 tracking-tight leading-[1.15] mb-4">
                        Start your learning journey with three simple steps
                    </h2>
                    <p class="text-base text-slate-600 leading-relaxed">
                        Follow our straightforward, supportive enrolment process to secure government subsidies, meet your mentor, and commence practical training.
                    </p>
                </div>

                <!-- Steps Accordion List -->
                <div class="space-y-4">
                    @foreach($steps as $index => $step)
                        @php $stepNum = $index + 1; @endphp
                        <div class="transition-all duration-300 rounded-2xl border"
                             :class="activeStep === {{ $stepNum }} ? 'bg-white border-brand-300 shadow-lg shadow-brand-900/5' : 'bg-white/60 hover:bg-white border-slate-200/80 shadow-2xs'">
                            
                            <!-- Step Header Button -->
                            <button @click="activeStep = activeStep === {{ $stepNum }} ? null : {{ $stepNum }}"
                                    class="w-full flex items-center justify-between p-5 text-left focus:outline-none cursor-pointer">
                                <div class="flex items-center gap-4">
                                    <span class="flex items-center justify-center w-10 h-10 rounded-xl font-bold text-sm transition-colors duration-200 shadow-xs"
                                          :class="activeStep === {{ $stepNum }} ? 'bg-brand-600 text-white' : 'bg-slate-100 text-slate-700'">
                                        {{ $step['number'] }}
                                    </span>
                                    <div>
                                        <h3 class="font-bold text-slate-900 text-base sm:text-lg">
                                            {{ $step['title'] }}
                                        </h3>
                                        <span class="text-xs font-semibold text-brand-600">
                                            {{ $step['subtitle'] }}
                                        </span>
                                    </div>
                                </div>
                                <div class="w-8 h-8 rounded-full flex items-center justify-center transition-transform duration-300 text-slate-400"
                                     :class="activeStep === {{ $stepNum }} ? 'rotate-180 text-brand-600 bg-brand-50' : ''">
                                    <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>
                                </div>
                            </button>

                            <!-- Step Expandable Content -->
                            <div x-show="activeStep === {{ $stepNum }}"
                                 x-transition:enter="transition ease-out duration-200"
                                 x-transition:enter-start="opacity-0 -translate-y-2"
                                 x-transition:enter-end="opacity-100 translate-y-0"
                                 x-transition:leave="transition ease-in duration-150"
                                 x-transition:leave-start="opacity-100 translate-y-0"
                                 x-transition:leave-end="opacity-0 -translate-y-2"
                                 class="px-5 pb-5 pt-0 text-sm text-slate-600 leading-relaxed border-t border-slate-100 mt-1 pt-4">
                                <p>{{ $step['description'] }}</p>
                                <div class="mt-4">
                                    <a href="" class="inline-flex items-center gap-1.5 text-xs font-bold text-brand-700 hover:text-brand-800 group">
                                        <span>Get started with this step</span>
                                        <iconify-icon icon="lucide:arrow-right" class="transition-transform group-hover:translate-x-1"></iconify-icon>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            {{-- Right Column: Modern Visual Card with Floating Action Widget --}}
            <div class="lg:col-span-6 relative">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl h-[500px] sm:h-[560px] group border-4 border-white">
                    
                    <!-- Background Image -->
                    <div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105"
                         style="background-image: url('{{ asset('images/hero/consultation-salon.jpg') }}');">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-slate-950/20 to-transparent"></div>
                    </div>

                    <!-- Top Floating Badge -->
                    <div class="absolute top-6 left-6 z-10">
                        <span class="inline-flex items-center gap-2 bg-white/90 backdrop-blur-md text-slate-900 text-xs font-bold px-4 py-2 rounded-full shadow-lg border border-white/20">
                            <span class="w-2 h-2 rounded-full bg-emerald-500"></span>
                            Melbourne CBD Student Salon
                        </span>
                    </div>

                    <!-- Bottom Floating Guidance Card -->
                    <div class="absolute bottom-6 left-6 right-6 z-10">
                        <div class="bg-white/95 backdrop-blur-xl rounded-2xl p-5 shadow-2xl border border-white/40 flex flex-col sm:flex-row items-center justify-between gap-4">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-2xl bg-brand-50 flex items-center justify-center text-brand-600 shrink-0 shadow-inner">
                                    <iconify-icon icon="lucide:headset" class="text-2xl"></iconify-icon>
                                </div>
                                <div>
                                    <span class="block text-[11px] font-bold text-brand-600 uppercase tracking-wider mb-0.5">Check eligibility within 2 minutes</span>
                                    <h4 class="text-sm sm:text-base font-extrabold text-slate-900 leading-snug">Our Expert Admission Officer will Guide You</h4>
                                </div>
                            </div>
                            <a href="" class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-brand-600 text-white font-bold text-xs sm:text-sm px-6 py-3 rounded-xl shadow-md transition-all duration-200 shrink-0">
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
  @include('frontend.pages.home.section.industries')

  <section class="py-12 sm:py-16 lg:py-20 px-4 sm:px-6 lg:px-8 bg-[#FAFAFA]">
    <div class="max-w-7xl mx-auto">
        <div class="relative rounded-3xl overflow-hidden shadow-2xl min-h-[520px] lg:min-h-[580px] flex flex-col justify-end p-8 sm:p-12 lg:p-16">
            
            <!-- Background Image with Gradient Overlay -->
            <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('{{ asset('images/hero/industry-experience.jpg') }}');">
                <!-- Multi-stop gradient for deep contrast on the left where text sits, letting the image show on the right -->
                <div class="absolute inset-0 bg-gradient-to-r from-slate-950/95 via-slate-950/75 to-slate-950/30 lg:to-transparent"></div>
            </div>

            <!-- Content Container -->
            <div class="relative z-10 max-w-2xl">
                
                <!-- Top Pill Badge -->
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 text-white text-xs font-semibold px-3.5 py-1.5 rounded-full mb-6 shadow-sm">
                    <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                    <span>Real Commercial Experience</span>
                </div>

                <!-- Main Heading -->
                <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-[3.5xl] font-black text-white tracking-tight leading-[1.1] mb-6">
                    Learn and connect in a real industry experience.
                </h2>

                <!-- Subtitle Description -->
                <p class="text-sm sm:text-base text-slate-300 leading-relaxed mb-8 max-w-xl">
                    Develop practical, industry-relevant skills in beauty and nails through flexible, career-focused training designed to build your knowledge, enhance your expertise, and prepare you for real-world opportunities.
                </p>

                <!-- Action Button -->
                <div>
                    <a href="" class="inline-flex items-center gap-2.5 bg-white hover:bg-slate-100 text-slate-900 font-bold text-sm px-7 py-4 rounded-full shadow-lg transition-all duration-200 group">
                        <span>Book an Appointment with Expert</span>
                        <svg class="w-4 h-4 text-slate-700 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round5" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                    </a>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="py-16 sm:py-20 lg:py-24 bg-[#FAFAFA]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <!-- Pill Badge -->
            <div class="inline-flex items-center gap-2 bg-white border border-gray-200/80 rounded-full py-1.5 px-4 shadow-2xs mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-600"></span>
                <span class="text-xs font-bold text-gray-800 tracking-wider uppercase">Institute Pillars</span>
            </div>

            <!-- Main Title -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-[1.12] mb-6">
                Your path to success through accredited excellence
            </h2>

            <!-- Subtitle Description -->
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                We combine government compliance standards with forward-thinking vocational techniques to ensure every graduate enters the workforce highly employable.
            </p>
        </div>

        <!-- 4 Columns Pillars Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Pillar 1: Nationally Recognised -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <!-- Icon Box -->
                    <div class="w-14 h-14 rounded-2xl bg-gray-50 group-hover:bg-brand-50 flex items-center justify-center text-slate-800 group-hover:text-brand-600 mb-6 transition-colors duration-300 shadow-inner">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 mb-3 leading-snug">
                        Nationally Recognised (ASQA)
                    </h3>

                    <!-- Description -->
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Qualifications benchmarked under the Australian Qualifications Framework (AQF RTO #21851), valid and respected across every Australian state.
                    </p>
                </div>

                <!-- Footer Tag -->
                <div class="pt-4 border-t border-gray-100">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-amber-900/70">
                        ASQA Regulated
                    </span>
                </div>
            </div>

            <!-- Pillar 2: Qualification Structure -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <!-- Icon Box -->
                    <div class="w-14 h-14 rounded-2xl bg-gray-50 group-hover:bg-brand-50 flex items-center justify-center text-slate-800 group-hover:text-brand-600 mb-6 transition-colors duration-300 shadow-inner">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 10.5V11.25m-15 0V19.5m16.5-9.75h-18"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 mb-3 leading-snug">
                        Qualification Structure Designed by AGF
                    </h3>

                    <!-- Description -->
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        AQF-aligned qualification structures, curriculum standards, and nationally benchmarked competency units tailored for industry compliance.
                    </p>
                </div>

                <!-- Footer Tag -->
                <div class="pt-4 border-t border-gray-100">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-amber-900/70">
                        AQF Aligned
                    </span>
                </div>
            </div>

            <!-- Pillar 3: Industry Placements -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <!-- Icon Box -->
                    <div class="w-14 h-14 rounded-2xl bg-gray-50 group-hover:bg-brand-50 flex items-center justify-center text-slate-800 group-hover:text-brand-600 mb-6 transition-colors duration-300 shadow-inner">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.715m12 0v-.953c0-1.02-.379-1.947-1.002-2.652M6 18.715v-.953c0-1.02.379-1.947 1.002-2.652m10.998-3.096a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0z"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 mb-3 leading-snug">
                        Industry Placements
                    </h3>

                    <!-- Description -->
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Practical workplace placements, real-world industry experience, and vocational network partnerships across Australia.
                    </p>
                </div>

                <!-- Footer Tag -->
                <div class="pt-4 border-t border-gray-100">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-amber-900/70">
                        Placement Support
                    </span>
                </div>
            </div>

            <!-- Pillar 4: Flexible Study Schedules -->
            <div class="bg-white rounded-3xl p-8 border border-gray-100 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex flex-col justify-between group">
                <div>
                    <!-- Icon Box -->
                    <div class="w-14 h-14 rounded-2xl bg-gray-50 group-hover:bg-brand-50 flex items-center justify-center text-slate-800 group-hover:text-brand-600 mb-6 transition-colors duration-300 shadow-inner">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.75" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 mb-3 leading-snug">
                        Flexible Study Schedules
                    </h3>

                    <!-- Description -->
                    <p class="text-sm text-slate-600 leading-relaxed mb-6">
                        Flexible options that let you upskill, complete RPL assessments, or transition careers without interrupting your current employment.
                    </p>
                </div>

                <!-- Footer Tag -->
                <div class="pt-4 border-t border-gray-100">
                    <span class="text-[11px] font-bold uppercase tracking-widest text-amber-900/70">
                        Online Self Paced
                    </span>
                </div>
            </div>

        </div>

    </div>
</section>

@php
    // Sample articles array - you can pass $articles from your controller
    $articleItems = $articles ?? [
        [
            'title' => 'Understanding AQF Pathways in Australian Industry',
            'slug' => 'understanding-aqf-pathways-in-australian-industry',
            'category' => 'Articles & Industry Guides',
            'date' => 'March 24, 2025',
            'read_time' => '5 min read',
            'image' => 'images/article_1.jpg',
            'description' => 'How national training packages deliver verified workplace competencies recognised by Australian employers.',
            'author' => 'MINB Academic Team',
        ],
        [
            'title' => 'Recognition of Prior Learning (RPL): Complete Guide',
            'slug' => 'recognition-of-prior-learning-rpl-complete-guide',
            'category' => 'Articles & Industry Guides',
            'date' => 'April 02, 2025',
            'read_time' => '7 min read',
            'image' => 'images/article_2.jpg',
            'description' => 'A simple breakdown of how to convert on-the-job experience into a formal qualification faster.',
            'author' => 'Admissions Office',
        ],
        [
            'title' => 'Career Advancement in Australian High-Demand Trades',
            'slug' => 'career-advancement-in-australian-high-demand-trades',
            'category' => 'Articles & Industry Guides',
            'date' => 'April 15, 2025',
            'read_time' => '4 min read',
            'image' => 'images/article_3.jpg',
            'description' => 'Step-by-step guidance on licensing, regulatory compliance, and expanding your vocational opportunities.',
            'author' => 'Sarah Jenkins • Career Advisor',
        ],
    ];
@endphp

<section class="py-16 sm:py-20 lg:py-24 bg-[#FAFAFA]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <!-- Pill Badge -->
            <div class="inline-flex items-center gap-2 bg-white border border-gray-200/80 rounded-full py-1.5 px-4 shadow-2xs mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-600"></span>
                <span class="text-xs font-bold text-gray-800 tracking-wider uppercase">Articles &amp; Industry Guides</span>
            </div>

            <!-- Main Title -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-[1.12] mb-4">
                Explore the latest learning insights and trends
            </h2>

            <!-- Subtitle Description -->
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                In-depth articles, career advice, and regulatory accreditation breakdowns from our faculty.
            </p>
        </div>

        <!-- Articles Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($articleItems as $article)
                <a href=""
                   class="bg-white rounded-3xl overflow-hidden border border-gray-100 shadow-sm hover:shadow-xl hover:border-brand-200 transition-all duration-300 flex flex-col justify-between group">
                    
                    <div>
                        <!-- Article Image -->
                        <div class="relative h-52 sm:h-56 overflow-hidden bg-gray-100">
                            <img src="{{ Str::startsWith($article['image'], ['http://', 'https://']) ? $article['image'] : asset($article['image']) }}"
                                 alt="{{ $article['title'] }}"
                                 loading="lazy"
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                        </div>

                        <!-- Card Content -->
                        <div class="p-6 sm:p-8">
                            <!-- Meta Info (Date & Read Time) -->
                            <div class="flex items-center gap-2 text-xs font-semibold text-slate-400 mb-3">
                                <span>{{ $article['date'] }}</span>
                                <span>•</span>
                                <span>{{ $article['read_time'] }}</span>
                            </div>

                            <!-- Article Title -->
                            <h3 class="text-lg sm:text-xl font-extrabold text-slate-900 mb-3 leading-snug group-hover:text-brand-600 transition-colors">
                                {{ $article['title'] }}
                            </h3>

                            <!-- Short Description -->
                            <p class="text-sm text-slate-600 leading-relaxed line-clamp-3">
                                {{ $article['description'] }}
                            </p>
                        </div>
                    </div>

                    <!-- Author Footer -->
                    <div class="px-6 sm:px-8 pb-6 sm:pb-8 pt-0">
                        <div class="pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-xs font-bold text-slate-800">
                                {{ $article['author'] }}
                            </span>
                            <span class="w-8 h-8 rounded-full bg-gray-50 group-hover:bg-brand-50 text-slate-600 group-hover:text-brand-600 flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </div>

                </a>
            @endforeach
        </div>

    </div>
</section>

@include('frontend.pages.home.section.faq')

@include('frontend.pages.home.section.cta')

    {{-- @include('frontend.pages.home.section.hero')   --}}

    {{-- @include('frontend.pages.home.section.review')
    @include('frontend.pages.home.section.qualifications')

    @include('frontend.pages.about.section')

    @include('frontend.pages.home.section.industries')
    
    @include('frontend.pages.home.section.cta')

    @include('frontend.pages.home.section.prospect-form', ['qualifications' => $qualifications]) --}}

@endsection
