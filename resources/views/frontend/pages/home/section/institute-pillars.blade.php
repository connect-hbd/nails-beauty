@php
    $pillars = [
        [
            'number' => '01',
            'icon' => 'lucide:shield-check',
            'title' => 'Nationally Recognised (ASQA)',
            'description' => 'Qualifications benchmarked under the Australian Qualifications Framework (AQF RTO #21851), valid and respected across every Australian state.',
            'tag' => 'ASQA Regulated',
        ],
        [
            'number' => '02',
            'icon' => 'lucide:landmark',
            'title' => 'Qualification Structure Designed by AQF',
            'description' => 'AQF-aligned qualification structures, curriculum standards, and nationally benchmarked competency units tailored for industry compliance.',
            'tag' => 'AQF Aligned',
        ],
        [
            'number' => '03',
            'icon' => 'lucide:briefcase-business',
            'title' => 'Industry Placements',
            'description' => 'Practical workplace placements, real-world industry experience, and vocational network partnerships across Australia.',
            'tag' => 'Placement Support',
        ],
        [
            'number' => '04',
            'icon' => 'lucide:clock',
            'title' => 'Flexible Study Schedules',
            'description' => 'Flexible options that let you upskill, complete RPL assessments, or transition careers without interrupting your current employment.',
            'tag' => 'Online & Self-Paced',
        ],
    ];
@endphp

<section class="py-16 sm:py-20 lg:py-24 bg-accent-50 border-b border-secondary-200 antialiased">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            {{-- Pill Badge --}}
            <div class="inline-flex items-center gap-2 bg-accent-25 border border-secondary-200 rounded-full py-1.5 px-4 shadow-2xs mb-4">
                <span class="w-2 h-2 rounded-full bg-brand-600"></span>
                <span class="text-[11px] sm:text-xs font-bold text-brand-800 tracking-wider uppercase">
                    Institute Pillars
                </span>
            </div>

            {{-- Main Title --}}
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-950 tracking-tight leading-[1.12] mb-5">
                Your path to success through accredited excellence
            </h2>

            {{-- Subtitle Description --}}
            <p class="text-sm sm:text-base lg:text-lg text-brand-800/90 leading-relaxed">
                We combine government compliance standards with forward-thinking vocational techniques to ensure every graduate enters the workforce highly employable.
            </p>
        </div>

        {{-- 4 Columns Pillars Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-6">
            @foreach ($pillars as $pillar)
                <div class="group bg-accent-25 rounded-3xl p-6 sm:p-7 border border-secondary-200 shadow-2xs hover:-translate-y-1 hover:border-brand-400 hover:shadow-xl hover:shadow-brand-950/5 transition-all duration-300 flex flex-col justify-between">
                    
                    <div>
                        {{-- Top Bar: Icon Box & Subtle Pillar Index --}}
                        <div class="flex items-start justify-between mb-6">
                            <div class="w-13 h-13 sm:w-14 sm:h-14 rounded-2xl bg-brand-100 border border-brand-200/70 group-hover:bg-brand-600 group-hover:border-brand-600 flex items-center justify-center text-brand-800 group-hover:text-accent-25 transition-colors duration-300">
                                <iconify-icon icon="{{ $pillar['icon'] }}" class="text-2xl"></iconify-icon>
                            </div>

                            <span class="text-xs font-extrabold tracking-widest text-secondary-500 group-hover:text-brand-600 transition-colors duration-300">
                                {{ $pillar['number'] }}
                            </span>
                        </div>

                        {{-- Title --}}
                        <h3 class="text-lg sm:text-xl font-extrabold text-brand-950 mb-3 leading-snug group-hover:text-brand-700 transition-colors duration-200">
                            {{ $pillar['title'] }}
                        </h3>

                        {{-- Description --}}
                        <p class="text-sm text-brand-700 leading-relaxed mb-6">
                            {{ $pillar['description'] }}
                        </p>
                    </div>

                    {{-- Footer Tag --}}
                    <div class="pt-4 border-t border-secondary-200 flex items-center justify-between">
                        <span class="inline-flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-brand-700">
                            <span class="w-1.5 h-1.5 rounded-full bg-brand-500"></span>
                            {{ $pillar['tag'] }}
                        </span>
                    </div>

                </div>
            @endforeach
        </div>

    </div>
</section>