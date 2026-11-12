
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