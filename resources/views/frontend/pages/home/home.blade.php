@extends('frontend.layouts.app')

@section('content')
    @include('frontend.pages.home.section.hero')

    @include('frontend.pages.home.section.information')

    @include('frontend.pages.common-section.trusted-accredited')

    @include('frontend.pages.home.section.qualifications')

    @include('frontend.pages.home.section.simple-steps')

    @include('frontend.pages.home.section.industries')

    @include('frontend.pages.home.section.experience-cta')

    @include('frontend.pages.home.section.institute-pillars')

    @include('frontend.pages.common-section.articles')

    @include('frontend.pages.common-section.faq')

    @include('frontend.pages.common-section.cta')
@endsection
