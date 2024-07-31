@extends('layout.master')
@section('content')
<div class="container">
    <h1>Edit data Warga</h1>
    <form action="/warga/{{$warga -> id}}" method="POST">
        @method('put')
        @csrf
        <br>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Nama</label>
            <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga -> nama}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >NIK</label>
            <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga -> nik}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >No KK</label>
            <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$warga -> no_kk}}">
        </div>
        <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
            <option selected>Pilih Jenis Kelamin</option>
            <option value="L"  @if($warga -> jenis_kelamin == "L") selected @endif>Laki-laki</option>
            <option value="P"  @if($warga -> jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select><br>
        <textarea name="alamat" id=""  class="form-control" cols="30" rows="10" placeholder="Alamat">{{$warga -> alamat}}</textarea><br>

        <input type="submit" name="submit" value="save" class="btn btn-info">
    </form>
</div>

@endsection
