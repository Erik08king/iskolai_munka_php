@extends('layouts.master')
@section('title','Lista')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="">

                    <h1>Ató felvétel/módósítás</h1>

                    <form method="POST">

                        <label for="rendszam">Rendszám:</label>
                        <input type="text" name="rendszam" id="rendszam" class="form-control">

                        <label for="motor_tipus">Motor típusa:</label>
                        <select name="motor_tipus" id="motor_tipus">
                            <option value="0">Válassz!</option>
                            @foreach ($motorTipusok as $key => $mt)
                                <option value="{{$key}}">{{$mt}}</option>
                            @endforeach
                        </select>

                        <label for="meghajtas_tipus">Meghajtás típusa:</label>
                        <select name="meghajtas_tipus" id="meghajtas_tipus">
                            <option value="0">Válassz!</option>
                            @foreach ($meghajtastip as $key => $mh)
                                <option value="{{$key}}">{{$mh}}</option>
                            @endforeach
                        </select>

                    </form>

            </div>
        </div>
    </div>
</div>

@endsection