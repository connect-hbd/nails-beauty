@php
    $faqs = [
        [
            'question' => 'How does the Recognition of Prior Learning (RPL) assessment process work?',
            'answer' => 'Our consultant will discuss the process with you. Once your eligibility is established, you will need to provide evidence of your existing skills and experience.',
            'items' => [
                'Video or photographic evidence of workplace tasks.',
                'Answers to questions about your experience and skills.',
                'Practical demonstrations of your knowledge and abilities.',
                'Resume, workplace documents, references and job descriptions.',
            ],
            'additional' => 'Your evidence should demonstrate that you have sufficient industry experience and can perform the relevant tasks to the required competency standard.',
        ],
        [
            'question' => 'What if I do not have proof of my previous qualifications?',
            'answer' => 'You can contact the institution where you completed your previous studies and request a replacement certificate or academic record. If this is not possible, our consultant can discuss alternative ways to demonstrate your competency.',
            'items' => [],
            'additional' => null,
        ],
        [
            'question' => 'Is it cheaper and easier to simply enrol in the course?',
            'answer' => 'RPL may save you time and money if you already have the relevant skills and experience. A free pre-assessment can help determine whether RPL is a suitable option before you enrol.',
            'items' => [],
            'additional' => null,
        ],
    ];
@endphp

<section id="faq" class="bg-accent-50 py-16 sm:py-20 lg:py-24 border-b border-secondary-200 antialiased">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- Section Header --}}
        <div class="mx-auto max-w-3xl text-center">
            <div class="inline-flex items-center gap-2 bg-accent-25 border border-secondary-200 rounded-full py-1.5 px-4 shadow-2xs mb-4">
                <span class="w-1.5 h-1.5 rounded-full bg-brand-600"></span>
                <span class="text-[11px] sm:text-xs font-bold uppercase tracking-[0.16em] text-brand-800">
                    Frequently Asked Questions
                </span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold leading-[1.12] tracking-tight text-brand-950">
                Everything You Need <span class="font-serif italic font-semibold text-brand-600">To Know</span>
            </h2>

            <p class="mt-4 text-sm sm:text-base lg:text-lg leading-relaxed text-brand-800/85">
                Find answers to the most common questions about Recognition of Prior Learning,
                eligibility, evidence and the qualification process.
            </p>
        </div>

        {{-- FAQ Content Container --}}
        <div class="mt-12 sm:mt-14 max-w-4xl mx-auto" x-data="{ active: 0 }">

            {{-- Accordion List --}}
            <div class="space-y-3.5">
                @foreach ($faqs as $index => $faq)
                    <div
                        class="overflow-hidden rounded-3xl border bg-accent-25 transition-all duration-300"
                        :class="active === {{ $index }}
                            ? 'border-brand-300 shadow-md shadow-brand-950/5'
                            : 'border-secondary-200 hover:border-brand-300/70 shadow-2xs'">

                        {{-- Question Trigger --}}
                        <button
                            type="button"
                            @click="active = active === {{ $index }} ? null : {{ $index }}"
                            :aria-expanded="active === {{ $index }}"
                            class="flex w-full items-center gap-4 p-5 text-left sm:p-6 cursor-pointer focus:outline-none">

                            {{-- Leading Icon Box --}}
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-2xl border transition-colors duration-200"
                                :class="active === {{ $index }}
                                    ? 'bg-brand-600 border-brand-600 text-accent-25'
                                    : 'bg-brand-100/80 border-brand-200 text-brand-700'">
                                <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>
                            </div>

                            {{-- Question Label & Title --}}
                            <div class="min-w-0 flex-1">
                                <span
                                    class="mb-1 block text-[10px] font-bold uppercase tracking-[0.16em] transition-colors duration-200"
                                    :class="active === {{ $index }}
                                        ? 'text-brand-600'
                                        : 'text-secondary-600'">
                                    Question {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>

                                <span class="block text-sm sm:text-base font-extrabold leading-snug text-brand-950">
                                    {{ $faq['question'] }}
                                </span>
                            </div>

                            {{-- Chevron Toggle Pill --}}
                            <span
                                class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition-all duration-300"
                                :class="active === {{ $index }}
                                    ? 'rotate-180 border-brand-200 bg-brand-100 text-brand-700'
                                    : 'border-secondary-200 bg-accent-50 text-brand-700'">
                                <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>
                            </span>

                        </button>

                        {{-- Expandable Answer --}}
                        <div
                            x-cloak
                            x-show="active === {{ $index }}"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-1">

                            <div class="border-t border-secondary-200/80 px-5 pb-6 pt-5 sm:px-6">
                                <div class="flex gap-4">

                                    {{-- Warm Accent Vertical Bar --}}
                                    <div class="hidden w-1 shrink-0 rounded-full bg-brand-400/70 sm:block"></div>

                                    <div class="min-w-0 flex-1">

                                        {{-- Main Answer Copy --}}
                                        @if (!empty($faq['answer']))
                                            <p class="text-sm leading-7 text-brand-800/90 sm:text-[15px]">
                                                {{ $faq['answer'] }}
                                            </p>
                                        @endif

                                        {{-- Bullet Checklist --}}
                                        @if (!empty($faq['items']))
                                            <ul class="mt-4 space-y-2.5">
                                                @foreach ($faq['items'] as $item)
                                                    <li class="flex items-start gap-3 text-sm leading-6 text-brand-800/90 sm:text-[15px]">
                                                        <iconify-icon
                                                            icon="lucide:check-circle-2"
                                                            class="mt-1 shrink-0 text-base text-brand-600">
                                                        </iconify-icon>
                                                        <span>{{ $item }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif

                                        {{-- Additional Note --}}
                                        @if (!empty($faq['additional']))
                                            <div class="mt-4 rounded-2xl bg-accent-50 border border-secondary-200/80 px-4 py-3">
                                                <p class="text-xs sm:text-sm leading-relaxed text-brand-800">
                                                    {{ $faq['additional'] }}
                                                </p>
                                            </div>
                                        @endif

                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>

            {{-- Bottom Support CTA Card --}}
            <div class="mt-8 flex flex-col gap-4 rounded-3xl border border-secondary-200 bg-secondary-100/70 p-6 sm:flex-row sm:items-center sm:justify-between sm:p-7 shadow-2xs">
                <div class="flex items-start sm:items-center gap-4">
                    <div class="hidden sm:flex h-12 w-12 shrink-0 items-center justify-center rounded-2xl bg-accent-25 border border-secondary-200 text-brand-700 shadow-2xs">
                        <iconify-icon icon="lucide:message-circle-question" class="text-2xl"></iconify-icon>
                    </div>
                    <div>
                        <h3 class="text-base sm:text-lg font-extrabold text-brand-950">
                            Still have questions?
                        </h3>
                        <p class="mt-0.5 text-xs sm:text-sm text-brand-800/85">
                            Our admissions team is ready to guide you through eligibility and enrolment.
                        </p>
                    </div>
                </div>

                <a
                    href="#assessment-form"
                    class="group inline-flex shrink-0 items-center justify-center gap-2 rounded-full bg-brand-600 hover:bg-brand-700 active:bg-brand-800 px-6 py-3.5 text-xs sm:text-sm font-semibold text-accent-25 shadow-xs hover:shadow-md transition-all duration-200">
                    <span>Talk to Our Team</span>
                    <iconify-icon icon="lucide:arrow-right" class="text-base transition-transform duration-200 group-hover:translate-x-1"></iconify-icon>
                </a>
            </div>

        </div>

    </div>
</section>