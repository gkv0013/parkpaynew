@extends('frontend.welcome')

@section('css')
@vite(['resources/css/home.css'])

@endsection


@section('content')


<div class="pimg1">
    <div class="ptext">
        <span class="border">
            PARK-PAY
        </span>
    </div>
</div>

<section class="section section-light">
    <h2>Parking Spaces at Your Fingertips</h2>
    <p>Park-Pay is the ultimate online booking and parking management system for car park operators or owners of parking spaces. We connect your parking spaces with over 1 million drivers in Kerala. For drivers, Park-Pay.com removes the hassle of find spaces to park and allows the user to book and guaranteed their parking space.
        

    </p>
</section>

<div class="pimg2">
</div>
<section class="section section-dark">
    <h2>Choose a car park, book and start saving!</h2>
    <p>To help address the problem of parking in the city more effectively, in turn reducing environmental concerns and congestion.
        The built-in parking reservation system allows you to manage bookings, customer details, park space types and extra services on your car parking website.</p>
</section>

<div class="pimg3">
</div>
<section class="section section-dark">
    <h2>Key Benefits for Drivers</h2>
    <p>Find you parking space using our smartphone app or online.
        Book the parking space that best suits you. Pay for your space through our online payment. portal.
        Just drive in…your parking space awaits you. You will automatically receive an email with your booking confirmation and the parking space details.
    </p>
</section>
<footer class="footer">
    <p>Park-Pay &copy; 2022</p>
</footer>


@endsection