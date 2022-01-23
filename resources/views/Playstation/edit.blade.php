@extends('Layout.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Edit Playstation </h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif
        <form method="post" enctype="multipart/form-data" action="/playstation/{{$playstation->id_playstation}}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name"> Nama </label>
                <input type="text" class="form-control" name="name" required value="{{$playstation->name}}">
            </div>
            <div class="form-group">
                <label for="foto"> Foto</label>
                <input type="file" class="form-control" name="foto"  accept="image/png, image/gif, image/jpeg">
            </div> 
            <div class="form-group">
                <label for="serial_number"> Serial Number </label>
                <input type="text" class="form-control" name="serial_number" required value="{{$playstation->serial_number}}">
            </div>
            <button type="submit" class="btn btn-primary"> Save Booking </button>
        </form>
    </div>
@endsection