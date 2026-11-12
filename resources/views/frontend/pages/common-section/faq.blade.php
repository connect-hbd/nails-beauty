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

<section id="faq" class="bg-slate-50 py-16 sm:py-20 lg:py-24">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        {{-- HEADER --}}
        <div class="mx-auto max-w-3xl text-center">

            <span class="text-xs font-black uppercase tracking-[0.18em] text-brand-600">
                Frequently Asked Questions
            </span>

            <h2 class="mt-5 text-3xl font-black leading-tight tracking-tight text-brand-950 sm:text-4xl">
                Everything You Need
                <span class="text-secondary-600">To Know</span>
            </h2>

            <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-base">
                Find answers to the most common questions about Recognition of Prior Learning,
                eligibility, evidence and the qualification process.
            </p>

        </div>


        {{-- CONTENT --}}
        <div class="mt-12 max-w-5xl mx-auto">          


            {{-- FAQ LIST --}}
            <div
                class=""
                x-data="{ active: 0 }">

                <div class="space-y-3">

                    @foreach ($faqs as $index => $faq)

                        <div
                            class="overflow-hidden rounded-2xl border bg-white transition duration-200"
                            :class="active === {{ $index }}
                                ? 'border-secondary-300 shadow-sm'
                                : 'border-slate-200 hover:border-brand-200'">

                            {{-- QUESTION --}}
                            <button
                                type="button"
                                @click="active = active === {{ $index }} ? null : {{ $index }}"
                                :aria-expanded="active === {{ $index }}"
                                class="flex w-full items-center gap-4 p-5 text-left sm:p-6">

                                {{-- ICON --}}
                                <div
                                    class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl transition"
                                    :class="active === {{ $index }}
                                        ? 'bg-secondary-500 text-white'
                                        : 'bg-brand-50 text-brand-500'">

                                    <iconify-icon icon="lucide:help-circle" class="text-xl"></iconify-icon>

                                </div>


                                {{-- QUESTION TEXT --}}
                                <div class="min-w-0 flex-1">

                                    <span
                                        class="mb-1 block text-[10px] font-black uppercase tracking-[0.16em]"
                                        :class="active === {{ $index }}
                                            ? 'text-secondary-600'
                                            : 'text-slate-400'">

                                        Question {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}

                                    </span>

                                    <span class="block text-sm font-semibold leading-6 text-brand-950 sm:text-base">
                                        {{ $faq['question'] }}
                                    </span>

                                </div>


                                {{-- TOGGLE ICON --}}
                                <span
                                    class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border transition duration-200"
                                    :class="active === {{ $index }}
                                        ? 'rotate-180 border-secondary-300 bg-secondary-50 text-secondary-600'
                                        : 'border-slate-200 bg-white text-slate-500'">

                                    <iconify-icon icon="lucide:chevron-down" class="text-lg"></iconify-icon>

                                </span>

                            </button>


                            {{-- ANSWER --}}
                            <div
                                x-cloak
                                x-show="active === {{ $index }}"
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 -translate-y-1"
                                x-transition:enter-end="opacity-100 translate-y-0"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100"
                                x-transition:leave-end="opacity-0">

                                <div class="border-t border-slate-100 px-5 pb-6 pt-5 sm:px-6">

                                    <div class="flex gap-4">

                                        <div class="hidden h-8 w-1 shrink-0 rounded-full bg-secondary-400 sm:block"></div>

                                        <div class="min-w-0 flex-1">

                                            {{-- DESCRIPTION --}}
                                            @if (!empty($faq['answer']))
                                                <p class="text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    {{ $faq['answer'] }}
                                                </p>
                                            @endif


                                            {{-- ANSWER LIST --}}
                                            @if (!empty($faq['items']))
                                                <ul class="mt-4 space-y-3">

                                                    @foreach ($faq['items'] as $item)

                                                        <li class="flex items-start gap-3 text-sm leading-6 text-slate-600 sm:text-[15px]">

                                                            <iconify-icon
                                                                icon="lucide:check-circle-2"
                                                                class="mt-1 shrink-0 text-base text-secondary-500">
                                                            </iconify-icon>

                                                            <span>{{ $item }}</span>

                                                        </li>

                                                    @endforeach

                                                </ul>
                                            @endif


                                            {{-- ADDITIONAL DESCRIPTION --}}
                                            @if (!empty($faq['additional']))
                                                <p class="mt-4 text-sm leading-7 text-slate-600 sm:text-[15px]">
                                                    {{ $faq['additional'] }}
                                                </p>
                                            @endif

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>


                {{-- BOTTOM CTA --}}
                <div class="mt-6 flex flex-col gap-4 rounded-2xl border border-brand-100 bg-white p-5 sm:flex-row sm:items-center sm:justify-between sm:p-6">

                    <div>
                        <h3 class="text-base font-bold text-brand-950">
                            Still have questions?
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Our team is ready to help you get started.
                        </p>
                    </div>

                    <a
                        href="#assessment-form"
                        class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-brand-900 px-5 py-3 text-sm font-bold text-white transition hover:bg-brand-800">

                        Talk to Our Team

                        <iconify-icon icon="lucide:arrow-right" class="text-base"></iconify-icon>

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>