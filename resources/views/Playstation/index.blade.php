@extends('Layout.app')
<?php $no=1 ?>
@section ("content")
<br>
<h3>Playstation Data</h3>
    <a href="/playstation/create" class="btn btn-danger"> Add Playstation</a><br>
    <div class="col-sm-12"> <br>

        @if (session()->get('success'))
            <div class="alert alert-sucess">
                {{ session()->get('sucess') }}
            </div>
        @endif
    </div>
<table class="table table-striped">
    <thead>
        <tr>
            <th> Nomor </th>
            <th> ID Playstation </th>
            <th> Nama Unit </th>
            <th> Foto </th>
            <th> Status </th>
            <th> Serial Number </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($playstation as $playstation)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $playstation->id_playstation }} </td>
            <td> {{ $playstation->name }} </td>
            <td> {{ $playstation->foto }} </td>
            <td> {{ $playstation->status }} </td>
            <td> {{ $playstation->serial_number}} </td>
            <td>
                    <a href="/playstation/{{ $playstation->id_playstation}}/edit/" class="btn btn-info"> Edit</a>
                </td>
                <td>
                    <form action="/playstation/{{ $playstation->id_playstation }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit"> Delete</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop