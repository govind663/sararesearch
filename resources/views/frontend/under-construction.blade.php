@extends('frontend.layouts.master')

@section('title')
    SARA Research & Development Center Pvt. Ltd. | Under Construction
@endsection

@push('styles')
@endpush

@section('content')
    <div class="under-const-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="under-const-content-sec">
                        <img src="{{ asset('frontend/assets/images/home/under-const-img.png') }}" alt="">
                        <h1>Page Under Construction</h1>
                        <p>This page is currently being worked on. Please check back soon!</p>
                        <div class="button" id="button-2">
                            <div id="slide"></div>
                            <a class="gt-btn style1" href="{{ route('frontend.home') }}">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
