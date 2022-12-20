@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Welcome to Shop trenitalia</h1>
        <p class="fs-4">Buy the tickets Now</p>
    </div>
</div>
<div class="content">
    <div class="container my-5">
        <h1>Tickets in 20/12/2022</h1>

        <div class="row row-cols-md-3 g-4">
            @forelse($tickets as $ticket)
            <div class="col p-4">
                <div class="card">
                    <div class="card-body">
                        <h2>Numero di referenza: {{$ticket->reference_number}}</h2>
                        <p>Numero di carrozze: {{$ticket->carriages}}</p>
                        <h5>Stazione di partenza: {{$ticket->departure_station}}</h5>
                        <p>Stazione di arrivo: {{$ticket->arrival_station}}</p>
                        <p>Orario di partenza: {{$ticket->departure_time}} PM</p>
                        <p>Orario di arrivo: {{$ticket->arrival_time}} PM</p>
                    </div>
                </div>
            </div>
            @empty
            <div class="col">
                <p>Sorry, no movies in the store yet.</p>
            </div>
            @endforelse
        </div>
    </div>
</div>
@endsection