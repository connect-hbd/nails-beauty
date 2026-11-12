
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