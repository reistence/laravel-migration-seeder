
@extends('layouts.app')
    @section('title', "Today's Trains")

@section('content')
  <div class="container">
        <h1>Our Trains</h1>
        <table>
           <thead>
               <tr>
                   <th>Departures</th>
                   <th>Arrival</th>
                   <th>From</th>
                   <th>To</th>
                   <th>Train Code</th>
                   <th>On Time</th>
                   <th>Canceled</th>
                   <th>Coaches</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($today_trains as $todays_train)
               <tr>
                   <td>{{$todays_train->departures_schedule->format('H:i d/m/y')}}</td>
                   <td>{{$todays_train->arrivals_schedule->format('H:i d/m/y')}}</td>
                   <td>{{$todays_train->departure_station}}</td>
                   <td>{{$todays_train->arrival_station}}</td>
                   <td>{{$todays_train->train_code}}</td>
                   <td>{{$todays_train->on_schedule}}</td>
                   <td>{{$todays_train->canceled}}</td>
                   <td>{{$todays_train->coaches_nr}}</td>
               </tr>
                   
               @endforeach
           </tbody>
        </table>
    </div>
    @endsection
