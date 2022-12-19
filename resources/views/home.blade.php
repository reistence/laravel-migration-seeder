
    @extends('layouts.app')
    @section('title', 'All Trains')
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
               @foreach ($trains as $train)
               <tr>
                   <td>{{$train->departures_schedule->format('H:i d/m/y')}}</td>
                   <td>{{$train->arrivals_schedule->format('H:i d/m/y')}}</td>
                   <td>{{$train->departure_station}}</td>
                   <td>{{$train->arrival_station}}</td>
                   <td>{{$train->train_code}}</td>
                   <td>{{$train->on_schedule}}</td>
                   <td>{{$train->canceled }}</td>
                   <td>{{$train->coaches_nr}}</td>
               </tr>
                   
               @endforeach
           </tbody>
        </table>

    </div>
    @endsection
