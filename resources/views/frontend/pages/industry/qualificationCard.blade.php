<article
    class="group relative flex w-full flex-col justify-between overflow-hidden rounded-3xl border border-secondary-200 bg-accent-25 shadow-xs transition-all duration-300 hover:-translate-y-1 hover:border-brand-300 hover:shadow-xl hover:shadow-brand-950/5">

    <div>

        {{-- IMAGE CONTAINER --}}
        <div class="relative m-2.5 h-48 overflow-hidden rounded-2xl bg-brand-100 sm:h-52">

            @if (filled($qualification['image'] ?? null))

                <img
                    src="{{ \Illuminate\Support\Str::startsWith($qualification['image'], ['http://', 'https://'])
                        ? $qualification['image']
                        : asset(ltrim($qualification['image'], '/')) }}"
                    alt="{{ $qualification['name'] ?? 'Qualification' }}"
                    loading="lazy"
                    class="h-full w-full object-cover transition-transform duration-700 ease-out group-hover:scale-105"
                >

            @else

                <div class="flex h-full items-center justify-center bg-gradient-to-br from-brand-100 to-secondary-200/70">
                    <iconify-icon icon="lucide:graduation-cap" class="text-5xl text-brand-500"></iconify-icon>
                </div>

            @endif

            {{-- IMAGE OVERLAY --}}
            <div class="absolute inset-0 bg-gradient-to-t from-brand-950/45 via-transparent to-transparent"></div>


            {{-- QUALIFICATION CODE --}}
            @if (filled($qualification['code'] ?? null))

                <span class="absolute top-3 left-3 rounded-full border border-secondary-200/80 bg-accent-25/95 px-3 py-1 text-[11px] font-bold tracking-wide text-brand-950 shadow-xs backdrop-blur-md">
                    {{ $qualification['code'] }}
                </span>

            @endif


            {{-- QUALIFICATION LEVEL --}}
            @if (filled($qualification['level'] ?? null))

                <span class="absolute top-3 right-3 rounded-full border border-secondary-300/80 bg-secondary-100/95 px-3 py-1 text-[11px] font-bold text-brand-900 shadow-xs backdrop-blur-md">
                    {{ $qualification['level'] }}
                </span>

            @endif

        </div>


        {{-- CARD CONTENT --}}
        <div class="flex flex-col px-6 pt-3 pb-4">

            {{-- ACCREDITATION --}}
            <div class="mb-2.5 flex items-center gap-1.5">
                <iconify-icon icon="lucide:badge-check" class="text-base text-brand-600 shrink-0"></iconify-icon>

                <span class="text-xs font-bold tracking-wide text-brand-700">
                    Nationally Recognised Qualification
                </span>
            </div>


            {{-- QUALIFICATION NAME --}}
            <h3 class="line-clamp-2 text-lg font-extrabold leading-snug text-brand-950 transition-colors duration-200 group-hover:text-brand-600">

                <a href="{{ route('qualification.show', ['qualificationSlug' => $qualification['slug']]) }}">

                    <span class="absolute inset-0" aria-hidden="true"></span>

                    {{ $qualification['name'] ?? '' }}

                </a>

            </h3>


            {{-- DESCRIPTION --}}
            @if (filled($qualification['short_description'] ?? null))

                <p class="mt-2.5 line-clamp-3 text-xs sm:text-sm leading-relaxed text-brand-800/85">
                    {{ $qualification['short_description'] }}
                </p>

            @endif

        </div>

    </div>


    {{-- CARD FOOTER --}}
    <div class="px-6 pt-2 pb-6">

        <div class="border-t border-secondary-200/80 pt-4">

            <a
                href="{{ route('qualification.show', ['qualificationSlug' => $qualification['slug']]) }}"
                class="relative z-10 inline-flex w-full items-center justify-center gap-2 rounded-full bg-brand-600 hover:bg-brand-700 active:bg-brand-800 py-3.5 px-6 text-sm font-semibold text-accent-25 shadow-xs hover:shadow-md transition-all duration-200"
            >

                <span>Enquire Now</span>

                <iconify-icon
                    icon="lucide:arrow-right"
                    class="text-base transition-transform duration-200 group-hover:translate-x-1"
                ></iconify-icon>

            </a>

        </div>

    </div>

</article>