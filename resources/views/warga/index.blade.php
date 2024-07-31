@extends('layout.master')
@section('content')
<div class="container">
    <br>
    <a  class="btn btn-outline-dark" href="/warga/create">Add warga</a>
    <table class="table table-hover">
        <tr>
            <th>NAMA</th>
            <th>NIK</th>
            <th>No.KK</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>AKSI</th>
        </tr>
        @foreach ($warga as $w)
        <tr>
            <td>{{$w->id}}</td>
            <td>{{$w->nama}}</td>
            <td>{{$w->nik}}</td>
            <td>{{$w->no_kk}} </td>
            <td>{{$w->alamat}}</td>
            <td>
                <a href="/warga/{{$w -> id}}/edit" class="btn btn-warning">Edit</a>
                <form action="/warga/{{$w->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="submit" name="submit" value="Delete" class="btn btn-outline-dark">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection




