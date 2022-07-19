@extends('frontend.welcome')

@section('css')


@vite(['resources/css/vechicle.css'])



@endsection


@section('content')
<div class="container">
            <div class="input_form">
                <form class="form" method="GET" action="{{ route('user.save') }} " enctype="multipart/form-data">
                    <h3>Enter Your Vechicle Details</h3>
                    <label>Vechicle name </label><input type="vname" name="vname" class="user_name" />
                    <br/><br/>
                    <label>Vehicle number </label><input type="vnumber" name="vnumber" class="mbl_num" />
                    <br/><br/>
                    <label>RC number </label><input type="rcnumber" name="rcnumber" class="email_id" />
                    <br/><br/>
                    <button  button class="add_item" type="submit">Add</button>

                </form>
            </div>
            <div class="display_area">
                <table>
                    <thead>
                    <tr>
                            <th>Vehicle name</th>
                            <th>Vehicle number</th>
                            <th>RC number</th>
                            <th>Edit</th>
                        </tr>
                        
                    @foreach($vechicle as $items)
                    @if (Auth::user()->id == $items->user_Id)
                        <tr>
                            <th>{{$items->vehicle_name}}</th>
                            <th>{{$items->vehicle_number}}</th>
                            <th>{{$items->RC_number}}</th>
                            <th> <a href="{{ route('vehicle.delete',$items->id) }}" class="add_item" id="delete">Delete</a></th>    
                            
                        </tr>
                        @endif
                        @endforeach
                    </thead>
                    <tbody>
                        <!--Tr will append dinamically-->
                    </tbody>
                </table>
            </div>
        </div>
@endsection