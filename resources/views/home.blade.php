@extends('layouts.app')

@section("title","Train Info | Home")
@section("main")
<h1 class="text-center text-primary">Train Infos</h1>
{{-- {{dd($trains)}} --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">Train Company</th>
        <th scope="col">Train Code</th>
        <th scope="col">Departure</th>
        <th scope="col">Arrival</th>
        <th scope="col">Depature Time</th>
        <th scope="col">Arrivel Time</th>
        <th scope="col">Delay</th>
      </tr>
    </thead>

    <tbody>
        @foreach ($trains as $train )
        <tr>

            <td>{{$train->company}}</td>
            <td class="text-uppercase">{{$train->train_code}}</td>
            <td>{{$train->departure_station}}</td>
            <td>{{$train->arrival_station}}</td>
            <td>{{\Carbon\Carbon::parse($train->departure_time)->format('H:i')}}</td>
            <td>{{\Carbon\Carbon::parse($train->arrival_time)->format('H:i')}}</td>
            @if ($train->on_time == true)
            <td class="bg-success-subtle">No</td>
            @else
            <td class="bg-danger-subtle">Yes</td>
            @endif

        </tr>
        @endforeach


    </tbody>
  </table>
@endsection
