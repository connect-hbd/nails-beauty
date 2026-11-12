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

<section class="py-16 sm:py-20 lg:py-24 bg-accent-50 border-b border-secondary-200 antialiased">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        {{-- Section Header --}}
        <div class="text-center max-w-3xl mx-auto mb-12 sm:mb-16">
            {{-- Pill Badge --}}
            <div class="inline-flex items-center gap-2 bg-accent-25 border border-secondary-200 rounded-full py-1.5 px-4 shadow-2xs mb-4">
                <span class="w-2 h-2 rounded-full bg-brand-600"></span>
                <span class="text-[11px] sm:text-xs font-bold text-brand-800 tracking-wider uppercase">
                    Articles &amp; Industry Guides
                </span>
            </div>

            {{-- Main Title --}}
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-brand-950 tracking-tight leading-[1.12] mb-4">
                Explore the latest learning insights and trends
            </h2>

            {{-- Subtitle Description --}}
            <p class="text-sm sm:text-base lg:text-lg text-brand-800/90 leading-relaxed">
                In-depth articles, career advice, and regulatory accreditation breakdowns from our faculty.
            </p>
        </div>

        {{-- Articles Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
            @foreach($articleItems as $article)
                <a href="{{ Route::has('articles.show') ? route('articles.show', $article['slug']) : '#' }}"
                   class="group bg-accent-25 rounded-3xl overflow-hidden border border-secondary-200 shadow-2xs hover:-translate-y-1 hover:border-brand-400 hover:shadow-xl hover:shadow-brand-950/5 transition-all duration-300 flex flex-col justify-between">
                    
                    <div>
                        {{-- Inset Article Image --}}
                        <div class="relative h-52 sm:h-56 overflow-hidden bg-brand-100 m-2.5 rounded-2xl">
                            <img src="{{ \Illuminate\Support\Str::startsWith($article['image'], ['http://', 'https://']) ? $article['image'] : asset($article['image']) }}"
                                 alt="{{ $article['title'] }}"
                                 loading="lazy"
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            
                            {{-- Subtle Gradient Overlay --}}
                            <div class="absolute inset-0 bg-gradient-to-t from-brand-950/35 via-transparent to-transparent"></div>

                            {{-- Category Badge --}}
                            @if(filled($article['category'] ?? null))
                                <span class="absolute top-3 left-3 rounded-full bg-accent-25/90 backdrop-blur-md border border-secondary-200/70 px-3 py-1 text-[11px] font-bold text-brand-950 shadow-xs">
                                    {{ $article['category'] }}
                                </span>
                            @endif
                        </div>

                        {{-- Card Content --}}
                        <div class="px-6 pt-3 pb-5 sm:px-7">
                            {{-- Meta Info (Date & Read Time) --}}
                            <div class="flex flex-wrap items-center gap-3 text-xs font-semibold text-brand-600 mb-3">
                                <span class="inline-flex items-center gap-1.5">
                                    <iconify-icon icon="lucide:calendar" class="text-sm text-brand-500"></iconify-icon>
                                    {{ $article['date'] }}
                                </span>
                                <span class="text-secondary-400">•</span>
                                <span class="inline-flex items-center gap-1.5">
                                    <iconify-icon icon="lucide:clock" class="text-sm text-brand-500"></iconify-icon>
                                    {{ $article['read_time'] }}
                                </span>
                            </div>

                            {{-- Article Title --}}
                            <h3 class="text-lg sm:text-xl font-extrabold text-brand-950 mb-2.5 leading-snug group-hover:text-brand-600 transition-colors duration-200 line-clamp-2">
                                {{ $article['title'] }}
                            </h3>

                            {{-- Short Description --}}
                            <p class="text-sm text-brand-700 leading-relaxed line-clamp-3">
                                {{ $article['description'] }}
                            </p>
                        </div>
                    </div>

                    {{-- Author Footer --}}
                    <div class="px-6 pb-6 sm:px-7 sm:pb-7 pt-0">
                        <div class="pt-4 border-t border-secondary-200 flex items-center justify-between gap-3">
                            <div class="flex items-center gap-2.5 min-w-0">
                                <span class="w-7 h-7 rounded-full bg-brand-100 border border-brand-200 text-brand-800 flex items-center justify-center text-[11px] font-bold shrink-0">
                                    {{ strtoupper(substr($article['author'], 0, 2)) }}
                                </span>
                                <span class="text-xs font-bold text-brand-900 truncate">
                                    {{ $article['author'] }}
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