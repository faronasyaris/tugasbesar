@extends('Layout.app')
<?php $no=1 ?>
@section ("content")
<br>
<h3>Playstation Data</h3>
    <a href="/Playstation/create" class="btn btn-danger"> Add Playstation</a><br>
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
        @foreach ($Playstation as $Playstations)
        <tr>
            <td> {{ $no++ }} </td>
            <td> {{ $Playstations->id_playstation }} </td>
            <td> {{ $Playstations->name }} </td>
            <td> {{ $Playstations->foto }} </td>
            <td> {{ $Playstations->status }} </td>
            <td> {{ $Playstations->serial_number}} </td>
                    <a href="/Playstation/{{ $Playstations->id_playstation}}/edit/" class="btn btn-info"> Edit</a>
                </td>
                <td>
                    <form action="/Playstation/{{ $Playstations->id_playstation }}" method="post">
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