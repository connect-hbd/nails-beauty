@extends('frontend.layouts.app')

@section('content')

    @include('frontend.pages.industry.hero')

    {{-- MAIN QUALIFICATIONS SECTION --}}
    <section id="courses">

        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{-- FILTER + QUALIFICATIONS --}}
            @include('frontend.pages.industry.industry-filter')

        </div>

    </section>

@endsection