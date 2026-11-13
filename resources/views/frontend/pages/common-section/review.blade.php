{{-- =========================================================
    GOOGLE REVIEWS - INFINITE AUTO SLIDER
========================================================= --}}
@php
    $reviews = [
        [
            'initial' => 'S',
            'name' => 'Sarah Thompson',
            'color' => 'bg-emerald-600',
            'text' =>
                'The training experience was excellent. The learning materials were easy to understand, and the support team was always available whenever I needed assistance.',
            'time' => '2 weeks ago',
        ],
        [
            'initial' => 'M',
            'name' => 'Michael Anderson',
            'color' => 'bg-amber-600',
            'text' =>
                'I really enjoyed my Certificate III in Individual Support. The trainers were knowledgeable and explained everything in a practical way.',
            'time' => '3 weeks ago',
        ],
        [
            'initial' => 'J',
            'name' => 'Jessica Wilson',
            'color' => 'bg-indigo-600',
            'text' =>
                'A great learning experience from beginning to end. The flexible study options made it easier to manage my work and studies together.',
            'time' => '1 month ago',
        ],
        [
            'initial' => 'D',
            'name' => 'Daniel Roberts',
            'color' => 'bg-sky-600',
            'text' =>
                'The course provided useful knowledge and practical skills. I appreciated the clear guidance throughout my training.',
            'time' => '1 month ago',
        ],
        [
            'initial' => 'E',
            'name' => 'Emily Johnson',
            'color' => 'bg-rose-600',
            'text' =>
                'The staff were professional, friendly and supportive. I received helpful guidance whenever I had questions about my course.',
            'time' => '2 months ago',
        ],
        [
            'initial' => 'J',
            'name' => 'James Williams',
            'color' => 'bg-violet-600',
            'text' =>
                'I found the learning platform straightforward and easy to navigate. The training resources were well organised and informative.',
            'time' => '2 months ago',
        ],
        [
            'initial' => 'O',
            'name' => 'Olivia Brown',
            'color' => 'bg-teal-600',
            'text' =>
                'My experience with the training team was positive. They provided clear instructions and helped me understand the assessment requirements.',
            'time' => '2 months ago',
        ],
        [
            'initial' => 'W',
            'name' => 'William Davis',
            'color' => 'bg-orange-600',
            'text' =>
                'Excellent communication and helpful trainers. I would recommend the learning experience to anyone looking to develop their professional skills.',
            'time' => '3 months ago',
        ],
        [
            'initial' => 'S',
            'name' => 'Sophia Miller',
            'color' => 'bg-pink-600',
            'text' =>
                'The Diploma of Counselling gave me valuable knowledge about communication, counselling approaches and supporting individuals.',
            'time' => '3 months ago',
        ],
        [
            'initial' => 'B',
            'name' => 'Benjamin Wilson',
            'color' => 'bg-cyan-600',
            'text' => 'The course structure was easy to follow, and I appreciated being able to study at my own pace.',
            'time' => '3 months ago',
        ],
        [
            'initial' => 'C',
            'name' => 'Charlotte Taylor',
            'color' => 'bg-purple-600',
            'text' =>
                'The team was approachable and professional. They made the enrolment and training process much easier to understand.',
            'time' => '4 months ago',
        ],
        [
            'initial' => 'E',
            'name' => 'Ethan Thomas',
            'color' => 'bg-lime-600',
            'text' =>
                'I appreciated the practical focus of the training. The knowledge I gained is relevant to my professional development.',
            'time' => '4 months ago',
        ],
        [
            'initial' => 'A',
            'name' => 'Amelia Martin',
            'color' => 'bg-fuchsia-600',
            'text' =>
                'A positive experience overall. The learning materials were helpful, and the team provided timely responses to my enquiries.',
            'time' => '4 months ago',
        ],
        [
            'initial' => 'A',
            'name' => 'Alexander White',
            'color' => 'bg-blue-600',
            'text' =>
                'The Certificate IV in Building and Construction helped me develop a better understanding of construction practices and industry requirements.',
            'time' => '5 months ago',
        ],
        [
            'initial' => 'G',
            'name' => 'Grace Harris',
            'color' => 'bg-red-600',
            'text' =>
                'I liked the flexibility of the study arrangements. It allowed me to balance my personal commitments with professional learning.',
            'time' => '5 months ago',
        ],
        [
            'initial' => 'L',
            'name' => 'Lucas Clark',
            'color' => 'bg-indigo-500',
            'text' =>
                'Professional service and clear communication. The trainers were supportive and provided useful feedback during the learning process.',
            'time' => '5 months ago',
        ],
        [
            'initial' => 'M',
            'name' => 'Mia Lewis',
            'color' => 'bg-emerald-500',
            'text' =>
                'The Diploma of Mental Health was an informative learning experience. I found the course content relevant and interesting.',
            'time' => '6 months ago',
        ],
        [
            'initial' => 'H',
            'name' => 'Henry Walker',
            'color' => 'bg-amber-500',
            'text' =>
                'The team explained the course requirements clearly and helped me understand each stage of the training process.',
            'time' => '6 months ago',
        ],
        [
            'initial' => 'E',
            'name' => 'Ella Hall',
            'color' => 'bg-sky-500',
            'text' =>
                'Great support throughout my studies. I particularly appreciated the clear assessment instructions and helpful learning resources.',
            'time' => '6 months ago',
        ],
        [
            'initial' => 'J',
            'name' => 'Jack Allen',
            'color' => 'bg-rose-500',
            'text' =>
                'I had a good experience with the training team. Their communication was professional, and my questions were handled promptly.',
            'time' => '7 months ago',
        ],
        [
            'initial' => 'L',
            'name' => 'Lily Young',
            'color' => 'bg-violet-500',
            'text' =>
                'The Certificate IV in Accounting and Bookkeeping offered useful learning opportunities. The course materials were organised and easy to follow.',
            'time' => '7 months ago',
        ],
        [
            'initial' => 'S',
            'name' => 'Samuel King',
            'color' => 'bg-teal-500',
            'text' =>
                'I found the training environment welcoming and supportive. The team helped make the learning journey straightforward.',
            'time' => '8 months ago',
        ],
        [
            'initial' => 'Z',
            'name' => 'Zoe Wright',
            'color' => 'bg-orange-500',
            'text' =>
                'The course provided a good foundation of knowledge and helped me build confidence in my chosen field.',
            'time' => '8 months ago',
        ],
        [
            'initial' => 'N',
            'name' => 'Noah Scott',
            'color' => 'bg-pink-500',
            'text' =>
                'Good learning resources, helpful communication and flexible study arrangements. Overall, a positive training experience.',
            'time' => '9 months ago',
        ],
        [
            'initial' => 'C',
            'name' => 'Chloe Green',
            'color' => 'bg-cyan-500',
            'text' =>
                'I appreciated the professional approach of the administration team and the guidance provided during enrolment.',
            'time' => '9 months ago',
        ],
        [
            'initial' => 'M',
            'name' => 'Matthew Baker',
            'color' => 'bg-purple-500',
            'text' =>
                'The Certificate III in Light Vehicle Mechanical Technology provided valuable technical learning opportunities and industry-related knowledge.',
            'time' => '10 months ago',
        ],
        [
            'initial' => 'H',
            'name' => 'Hannah Adams',
            'color' => 'bg-lime-500',
            'text' =>
                'The support team was helpful and responsive. I appreciated having access to guidance throughout my learning journey.',
            'time' => '11 months ago',
        ],
        [
            'initial' => 'D',
            'name' => 'David Nelson',
            'color' => 'bg-blue-500',
            'text' =>
                'A worthwhile learning experience. The course information was clear, the resources were useful, and the staff were professional.',
            'time' => '1 year ago',
        ],
    ];
@endphp

<section aria-label="Google Customer Reviews" class="overflow-hidden bg-slate-50 py-14">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <!-- Pill Badge -->
            <div
                class="inline-flex items-center gap-2 bg-white border border-gray-200/80 rounded-full py-1.5 px-4 shadow-2xs mb-4">
                <span class="w-2 h-2 rounded-full bg-amber-600"></span>
                <span class="text-xs font-bold text-gray-800 tracking-wider uppercase">Graduate Testimonials</span>
            </div>

            <!-- Main Title -->
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight leading-[1.12] mb-4">
               Real experiences that inspire careers across Australia
            </h2>

            <!-- Subtitle Description -->
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
               Discover how MINB graduates turned their vocational training into thriving businesses and industry credentials.
            </p>
        </div>

        {{-- Reviews Slider --}}
        <div class="min-w-0 ">



            <div class="reviews-slider">

                {{-- Track --}}
                <div class="reviews-track">

                    {{-- First Set --}}
                    @foreach ($reviews as $review)
                        <div class="review-slide">

                            @include('frontend.pages.common-section.reviewCard')

                        </div>
                    @endforeach

                    {{-- Duplicate Set for Seamless Loop --}}
                    @foreach ($reviews as $review)
                        <div class="review-slide" aria-hidden="true">

                            @include('frontend.pages.common-section.reviewCard')

                        </div>
                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

{{-- =========================================================
    INFINITE SLIDER CSS
========================================================= --}}
<style>
    /* =========================================
   GOOGLE REVIEWS - SMOOTH INFINITE SLIDER
========================================= */

    .reviews-slider {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    /* Smooth continuous track */
    .reviews-track {
        display: flex;
        width: max-content;
        gap: 20px;

        animation: reviews-infinite-scroll 90s linear infinite;

        will-change: transform;
        transform: translate3d(0, 0, 0);
        backface-visibility: hidden;
    }

    /* Review card */
    .review-slide {
        flex: 0 0 280px;
        min-width: 280px;
    }

    /* Desktop */
    @media (min-width: 1024px) {
        .review-slide {
            flex-basis: 280px;
        }
    }

    /* Seamless infinite animation */
    @keyframes reviews-infinite-scroll {
        from {
            transform: translate3d(0, 0, 0);
        }

        to {
            transform: translate3d(calc(-50% - 10px), 0, 0);
        }
    }

    /* Pause on hover */
    .reviews-slider:hover .reviews-track {
        animation-play-state: paused;
    }

    /* Mobile adjustment */
    @media (max-width: 640px) {
        .reviews-track {
            gap: 14px;
            animation-duration: 110s;
        }

        .review-slide {
            flex-basis: 270px;
            min-width: 270px;
        }
    }

    /* Accessibility */
    @media (prefers-reduced-motion: reduce) {
        .reviews-track {
            animation: none;
        }
    }
</style>
