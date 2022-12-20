
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
                   <th>Company</th>
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
                    @if ($train->on_schedule === 0)
                   <td>Delayed</td> 
                   @else
                   <td>No Delays</td> 
                   @endif
                   @if ($train->canceled === 0)
                   <td>No</td> 
                   @else
                   <td>Yes</td> 
                   @endif
                   <td>{{$train->coaches_nr}}</td>
                   <td>{{$train->company}}</td>

               </tr>
                   
               @endforeach
           </tbody>
        </table>

    </div>
    @endsection
