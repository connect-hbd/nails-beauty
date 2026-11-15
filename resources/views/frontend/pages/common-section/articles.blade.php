@php
    // Sample articles array - you can pass $articles from your controller
    $articleItems = $articles ?? [
        [
            'title' => 'Understanding AQF Pathways in Australian Industry',
            'slug' => 'understanding-aqf-pathways-in-australian-industry',
            'category' => 'AQF Pathways',
            'date' => 'March 24, 2025',
            'read_time' => '5 min read',
            'image' => 'images/article_1.jpg',
            'description' => 'How national training packages deliver verified workplace competencies recognised by Australian employers.',
            'author' => 'MINB Academic Team',
        ],
        [
            'title' => 'Recognition of Prior Learning (RPL): Complete Guide',
            'slug' => 'recognition-of-prior-learning-rpl-complete-guide',
            'category' => 'RPL Guide',
            'date' => 'April 02, 2025',
            'read_time' => '7 min read',
            'image' => 'images/article_2.jpg',
            'description' => 'A simple breakdown of how to convert on-the-job experience into a formal qualification faster.',
            'author' => 'Admissions Office',
        ],
        [
            'title' => 'Career Advancement in Australian High-Demand Trades',
            'slug' => 'career-advancement-in-australian-high-demand-trades',
            'category' => 'Career Advice',
            'date' => 'April 15, 2025',
            'read_time' => '4 min read',
            'image' => 'images/article_3.jpg',
            'description' => 'Step-by-step guidance on licensing, regulatory compliance, and expanding your vocational opportunities.',
            'author' => 'Sarah Jenkins • Career Advisor',
        ],
    ];
@endphp

@if(collect($articleItems)->isNotEmpty())
<section class="py-16 sm:py-20 lg:py-24 bg-accent-50 border-b border-secondary-200 antialiased">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="mb-10 sm:mb-14 flex flex-col gap-5 md:flex-row md:items-end md:justify-between">
            <div class="max-w-2xl">
                {{-- Pill Badge --}}
                <div class="inline-flex items-center gap-2 bg-accent-25 border border-secondary-200 rounded-full py-1.5 px-4 shadow-2xs mb-4">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-600"></span>
                    <span class="text-[11px] sm:text-xs font-bold text-brand-800 tracking-[0.16em] uppercase">
                        Articles &amp; Industry Guides
                    </span>
                </div>

                {{-- Main Title --}}
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-brand-950 tracking-tight leading-[1.15]">
                    Explore the latest <span class="font-serif italic font-semibold text-brand-600">learning insights</span> and trends
                </h2>

                {{-- Subtitle Description --}}
                <p class="mt-3 text-sm sm:text-base text-brand-800/85 leading-relaxed">
                    In-depth articles, career advice, and regulatory accreditation breakdowns from our faculty.
                </p>
            </div>

            {{-- View All Pill CTA --}}
            @if(Route::has('articles.index'))
                <a href="{{ route('articles.index') }}"
                   class="group inline-flex shrink-0 items-center gap-2 self-start rounded-full border border-secondary-300 bg-accent-25 px-5 py-2.5 text-xs sm:text-sm font-semibold text-brand-950 shadow-2xs transition-all duration-200 hover:border-brand-400 hover:bg-secondary-100/80 md:self-auto">
                    <span>View All Articles</span>
                    <iconify-icon
                        icon="lucide:arrow-up-right"
                        class="text-base text-brand-600 transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5">
                    </iconify-icon>
                </a>
            @endif
        </div>

        {{-- Articles Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-7">
            @foreach($articleItems as $article)
                @php
                    $title = data_get($article, 'title');
                    $slug = data_get($article, 'slug');
                    $category = data_get($article, 'category');
                    $date = data_get($article, 'date');
                    $readTime = data_get($article, 'read_time');
                    $image = data_get($article, 'image');
                    $description = data_get($article, 'description');
                    $author = data_get($article, 'author', 'MINB Team');
                @endphp

                <a href="{{ Route::has('articles.show') && filled($slug) ? route('articles.show', $slug) : '#' }}"
                   class="group bg-accent-25 rounded-3xl overflow-hidden border border-secondary-200 shadow-2xs hover:-translate-y-1 hover:border-brand-300 hover:shadow-xl hover:shadow-brand-950/5 transition-all duration-300 flex flex-col justify-between">
                    
                    <div>
                        {{-- Inset Article Image --}}
                        <div class="relative h-52 sm:h-56 overflow-hidden bg-brand-100 m-2.5 rounded-2xl">
                            @if(filled($image))
                                <img src="{{ \Illuminate\Support\Str::startsWith($image, ['http://', 'https://']) ? $image : asset(ltrim($image, '/')) }}"
                                     alt="{{ $title }}"
                                     loading="lazy"
                                     class="w-full h-full object-cover transition-transform duration-700 ease-out group-hover:scale-105">
                            @else
                                <div class="flex h-full items-center justify-center bg-gradient-to-br from-brand-100 to-secondary-200/70">
                                    <iconify-icon icon="lucide:book-open-text" class="text-5xl text-brand-500"></iconify-icon>
                                </div>
                            @endif
                            
                            {{-- Subtle Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-950/40 via-transparent to-transparent"></div>

                            {{-- Category Badge --}}
                            @if(filled($category))
                                <span class="absolute top-3 left-3 rounded-full bg-accent-25/95 backdrop-blur-md border border-secondary-200/80 px-3 py-1 text-[11px] font-bold tracking-wide text-brand-950 shadow-xs">
                                    {{ $category }}
                                </span>
                            @endif
                        </div>

                        {{-- Card Content --}}
                        <div class="px-6 pt-3 pb-5 sm:px-7">
                            {{-- Meta Info (Date & Read Time) --}}
                            <div class="flex flex-wrap items-center gap-2.5 text-xs font-semibold text-brand-600 mb-3">
                                @if(filled($date))
                                    <span class="inline-flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:calendar" class="text-sm text-brand-500 shrink-0"></iconify-icon>
                                        {{ $date }}
                                    </span>
                                @endif
                                @if(filled($date) && filled($readTime))
                                    <span class="text-secondary-400">•</span>
                                @endif
                                @if(filled($readTime))
                                    <span class="inline-flex items-center gap-1.5">
                                        <iconify-icon icon="lucide:clock" class="text-sm text-brand-500 shrink-0"></iconify-icon>
                                        {{ $readTime }}
                                    </span>
                                @endif
                            </div>

                            {{-- Article Title --}}
                            <h3 class="text-lg sm:text-xl font-extrabold text-brand-950 mb-2.5 leading-snug group-hover:text-brand-600 transition-colors duration-200 line-clamp-2">
                                {{ $title }}
                            </h3>

                            {{-- Short Description --}}
                            @if(filled($description))
                                <p class="text-xs sm:text-sm text-brand-800/85 leading-relaxed line-clamp-3">
                                    {{ $description }}
                                </p>
                            @endif
                        </div>
                    </div>

                    {{-- Author Footer --}}
                    <div class="px-6 pb-6 sm:px-7 sm:pb-7 pt-0">
                        <div class="pt-4 border-t border-secondary-200/80 flex items-center justify-between gap-3">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <span class="w-7 h-7 rounded-full bg-brand-100/80 border border-brand-200 text-brand-800 flex items-center justify-center text-[11px] font-bold shrink-0">
                                    {{ strtoupper(substr($author, 0, 2)) }}
                                </span>
                                <span class="text-xs font-bold text-brand-900 truncate">
                                    {{ $author }}
                                </span>
                            </div>

                            <span class="w-9 h-9 rounded-full bg-accent-50 border border-secondary-200 group-hover:bg-brand-600 group-hover:border-brand-600 text-brand-700 group-hover:text-accent-25 flex items-center justify-center transition-all duration-300 shrink-0">
                                <iconify-icon icon="lucide:arrow-up-right" class="text-base transition-transform duration-200 group-hover:-translate-y-0.5 group-hover:translate-x-0.5"></iconify-icon>
                            </span>
                        </div>
                    </div>

                </a>
            @endforeach
        </div>

    </div>
</section>
@endif