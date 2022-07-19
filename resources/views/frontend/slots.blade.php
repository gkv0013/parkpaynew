@extends('frontend.welcome')
@section('css')
@vite(['resources/css/slot.css'])
@endsection
@section('content')
<h1>{{ $slots->brandname }}</h1>
<link href='https://fonts.googleapis.com/css?family=Oldenburg' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Fenix' rel='stylesheet' type='text/css'>

<div class="box login">
    <label>Select a date:<br /> <input type='date' id='dateInput' /></label><br />
    <label>Check in time:<br /><input type='time' id='timeInput' /></label><br />
    <label>Check out time:<br /><input type='time' id='timeInput' /></label><br />
    <button>Check Availability</button>
    <label>Choose Vehicle<br /><input type='time' id='timeInput' /></label><br />
</div>

<span></span>

<div class="boxed">
    <form id="reservation" method="post" action="test.php">

        @for($i=1;$i<=$slots->slot_numbers;$i++)
            <section id="seats">
                <input id="seat[{{$i}}]" class="seat-select" type="checkbox" value=$i name="seat[{{$i}}]" />
                <label for="seat[{{$i}}]" class="seat">
                    <h2>{{$i}}</h2>
                </label>
            </section>
            @endfor
            
    </form>

</div>
<button>Continue</button>
<br>

@endsection