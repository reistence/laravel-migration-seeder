
@extends('layouts.app')
    @section('title', "Next Trains")

@section('content')
  <div class="container">
        <h1>Next available trains:</h1>
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
                   <th>Company</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($next_trains as $next_train)
               <tr>
                   <td>{{$next_train->departures_schedule->format('H:i d/m/y')}}</td>
                   <td>{{$next_train->arrivals_schedule->format('H:i d/m/y')}}</td>
                   <td>{{$next_train->departure_station}}</td>
                   <td>{{$next_train->arrival_station}}</td>
                   <td>{{$next_train->train_code}}</td>
                   @if ($next_train->on_schedule === 0)
                   <td>Delayed</td> 
                   @else
                   <td>No Delays</td> 
                   @endif
                   @if ($next_train->canceled === 0)
                   <td>No</td> 
                   @else
                   <td>Yes</td> 
                   @endif
                   <td>{{$next_train->coaches_nr}}</td>
                   <td>{{$next_train->company}}</td>
               </tr>
                   
               @endforeach
           </tbody>
        </table>
    </div>
    @endsection
