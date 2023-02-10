@extends('layouts.app')

@section('main')
<section id="train">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Trains</h1>
            </div>
            @forelse ($trains as $key => $train)
            <div class="col-4">
                <div class="card">
                    <p>Id: {{$train->id}} </p>
                    <p>Company: {{$train->company_name}}</p>
                    <p>Departure time: {{$train->departure_time}}</p>
                    <p>Departure station: {{$train->departure_station}}</p>
                    <p>Train code: {{$train->train_code}}</p>

                </div>
            </div>
            @empty
            <div class="col-12">
                <p>No trains</p>
            </div>
                    
            @endforelse
        </div>
    </div>
</section>

    
@endsection