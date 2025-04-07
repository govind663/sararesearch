@extends('frontend.layouts.master')

@section('title')
    SARA Research & Development Center Pvt. Ltd. | Thank You
@endsection

@push('styles')
@endpush

@section('content')
<div class="thank-you-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-8">
                <div class="thank-you-content-sec text-center">
                    <img src="{{ asset('frontend/assets/images/home/thank-you-img.png') }}" alt="Thank You" loading="lazy" style="width: 300px; height: 250px;">
                    <h1>Thank You!</h1>
                    <p>Your submission has been received successfully. We will get back to you shortly.</p>
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
