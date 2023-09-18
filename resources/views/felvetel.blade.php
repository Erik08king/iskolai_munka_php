@extends('layouts.master')
@section('title','Lista')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="p-5 bg-light rounded">

                    <h1>Ató felvétel/módósítás</h1>

                    <form method="POST">

                        @if (session()->has('felvetelKesz'))
                            <div></div>
                        @endif
                            


                        @csrf

                        <label for="rendszam">Rendszám:</label>
                        <input type="text" name="rendszam" id="rendszam" class="form-control" value="{{ $auto->rendszam ?? old('rendszam')}}">

                        @error('rendszam')
                            <div class="alert">{{$message}}</div>
                        @enderror

                        <div class="mt-3">
                        <label for="motor_tipus">Motor típusa:</label>
                        <select name="motor_tipus" id="motor_tipus" class="form-control">
                            <option value="">Válassz!</option>
                            @foreach ($motorTipusok as $key => $mt)
                                <option value="{{$key}}" {{old('motor_tipus') == $key || isset($auto->motor_tipus) && $auto->motor_tipus == $key ? 'selected' : ''}}>{{$mt}}</option>
                            @endforeach
                        </select>
                        </div>
                        @error('rendszam')
                        <div class="alert bg">{{$message}}</div>
                        @enderror
                        

                        <div class="mt-3">
                            <label for="szin_tp">Szín:</label>
                            <select name="szin_tp" id="szin_tp" class="form-control">
                                <option value="">Válassz!</option>
                                @foreach ($szinek as $szin)
                                    <option value="{{$szin->szin_id}} {{old('szin_tp') == $szin_id  || isset($auto->motor_tipus) && $auto->szin_id == $szin_id ? 'selected' : ''}}">{{$szin->nev}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        @error('rendszam')
                        <div class="alert">{{$message}}</div>
                        @enderror
 
                        <div class="mt-3">
                            <label for="meghajtas_tipus">Meghajtás típusa:</label>
                            <select name="meghajtas_tipus" id="meghajtas_tipus" class="form-control">
                                <option value="" {{old('meghajtas_tipus') == $keyMh || isset($auto->motor_tipus) && $auto->motor_tipus == $keyMh? 'selected' : ''}}>Válassz!</option>
                                @foreach ($meghajtastip as $keyMh => $mh)
                                    <option value="{{$keyMh}}">{{$mh}}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('rendszam')
                        <div class="alert">{{$message}}</div>
                        @enderror

                        <div class="mt-2">
                            <button type="submit" class="btn btn-success w-100">Mentés</button>
                        </div>


                    </form>

            </div>
        </div>
    </div>
</div>

@endsection