@extends('Layout.app')

@section('content')
    <div class="col-md-8 offset-md-2">
        <h3> Add Playstation </h3>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }}</li>
                    @endforeach
                </ul>
            </div> <br />
        @endif
        <form method="post" action="/playstation">
            @csrf
            <div class="form-group">
                <label for="id_playstation"> ID Playstation </label>
                <input type="text" class="form-control" name="id_playstation" required>
            </div>
            <div class="form-group">
                <label for="name"> Nama </label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="foto"> Foto</label>
                <input type="string" class="form-control" name="foto" required>
            </div>
            <div class="form-group">
                <label for="status"> Status</label>
                <input type="text" class="form-control" name="status" required>
            </div>
            <div class="form-group">
                <label for="serial_number"> Serial Number </label>
                <input type="date" class="form-control" name="serial_number" required>
            </div>
            <button type="submit" class="btn btn-primary"> Save Playstation </button>
        </form>
    </div>
@endsection