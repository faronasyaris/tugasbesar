@extends('Layout.app')
<?php $no=1 ?>
@section ("content")
<br>
<h3>Booking Data</h3>
    <a href="/playstation/create" class="btn btn-danger"> Add Booking</a><br>
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
            <th> Nama Penyewa</th>
            <th> Tanggal Sewa </th>
            <th> Durasi Peminjaman </th>
            <th> Tanggal Pengembalian </th>
            <th> Jaminan </th>
            <th> Status </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($playstations as $playstation)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $playstation->id_playstation }} </td>
            <td> {{ $playstation->name }} </td>
            <td> {{ $playstation->booking_date }} </td>
            <td> {{ $playstation->booking_duration }} </td>
            <td> {{ $playstation->return_time}} </td>
            <td> {{ $playstation->guarantee }} </td>
            <td> {{ $playstation->status}}
                <td>
                    <a href="/playstation/{{ $playstation->id_playstation }}/edit/" class="btn btn-info"> Edit</a>
                </td>
                <td>
                    <form action="/playstation/{{ $playstation->id_playstation }}" method="post">
                        @csrf
                        @method('DELETEs')
                        <button class="btn btn-dark" type="submit"> Delete</button>
                    </form>
                </td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop