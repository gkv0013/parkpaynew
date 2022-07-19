@extends('frontend.welcome')

@section('css')
@vite(['resources/css/slotbrand.css'])
@endsection

@section('content')


@php
$Slot_brand= App\Models\SlotDetails::orderBy('brandname','ASC')->get();
@endphp

<h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Hi, {{ Auth::user()->name}}
</h2>

<ul class="cards">
    @foreach($Slot_brand as $brands)
    <li class="cards_item">
        <div class="card">
            <div class="card_image"><img src="{{ url($brands->brand_thumbnail) }}"></div>
            <div class="card_content">
                <h2 class="card_title">{{ $brands->brandname }}</h2>
                <p class="card_text">{{ $brands->address }}</p>
                <a href="{{ url('user/slots/'.$brands->id) }}">
                    <button class="btn card_btn">Book Now</button>
                </a>
            </div>
        </div>
    </li>
    @endforeach
</ul>







@endsection