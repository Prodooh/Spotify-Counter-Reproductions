@extends('layouts.app')

@section('content')

    @if(Session::has('status'))
        <div class="alert alert-info">
            <ul>
                <li>{{Session::get('status')}}</li>
            </ul>
        </div>
    @endif
    <div class="card text-left" style="margin-left: 30%; margin-right: 30%;">
        <div class="card-header">
            Registro/Actualización de playlist
        </div>
        <div class="card-body">
            <form method="post" action="{{route('update.playlist')}}">
                <div class="form-group mb-4">
                    <label for="reproductions">Reproducciones</label>
                    <input type="number" name="reproductions" class="form-control" id="reproductions"
                           placeholder="Reproducciones">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
