@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/welkommen_style.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="parallax-window vh-100 d-flex align-items-end text-dark text-center"
         data-parallax="scroll" data-image-src="{{ asset('img/molaka/molaka_1_3.png') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 overflow-hidden overlay-content mx-auto">
                    <h5 class="text-uppercase text-dark fw-bold mb-2 letter-spacing-5">brand new</h5>
                    <h1 class="mb-4 display-1 fw-bold text-uppercase">MOLAKA MILK</h1>
                    <p><a class="btn btn-dark" href="{{ route('products.index') }}">See diary products</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-window vh-100 d-flex align-items-end text-dark text-end" data-parallax="scroll" data-image-src="{{ asset('img/molaka/molaka_2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 overflow-hidden overlay-content mx-auto">
{{--                    <h5 class="text-uppercase text-dark fw-normal mb-2 letter-spacing-5">just arrived</h5>--}}
                    <p class="h3 fw-normal mb-3">Arrived Right From</p>
                    <h1 class="mb-4 display-1 fw-bold text-uppercase">CHILDHOOD</h1>
                    <p><a class="btn btn-outline-dark" href="{{ route('products.index') }}">See diary products</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax-window vh-100 d-flex align-items-end text-dark text-start" data-parallax="scroll" data-image-src="{{ asset('img/molaka/molaka_3.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-12 py-5 overflow-hidden overlay-content mx-auto">
                    <h1 class="mb-4 display-1 fw-bold text-uppercase">properly <br/>done</h1>
                    <p class="h3 fw-normal mb-5">Just. For. Your baby. </p>
                    <p><a class="btn btn-outline-dark" href="{{ route('products.index') }}">See diary products</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection
