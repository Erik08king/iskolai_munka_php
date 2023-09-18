@extends('layouts.master')
@section('title','Lista')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Felvett gépjármüvek listája</h1>

                <table class="table table-info table-striped table-hover">
                    <tr>
                        <th>#id</th>
                        <th>Rendszám</th>
                        <th>Motor típus</th>
                        <th>Szín</th>
                        <th>Meghajtás</th>
                        <th>Módósítás</th>
                        <th>Törlés</th>
                    </tr>

                    @foreach ($autok as $auto)
                        <tr>
                            <td>{{$auto->a_id}}</td>
                            <td>{{$auto->rendszam}}</td>
                            <td>{{ $motorTipusok[$auto->motor_tipus]}}</td>
                            <td>{{$auto->szin_id}}</td>
                            <td>{{$meghajtastip[$auto->meghajtas]}}</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-dark">módósítás</button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-sm btn-danger">törlés</button>
                            </td>
                        </tr>
                    @endforeach

                </table>

            </div>
        </div>
    </div>


@endsection