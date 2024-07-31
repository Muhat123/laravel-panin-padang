@extends('layout.master')
@section('content')
    <div class="container">
        <h1>Create Warga</h1>
        <form action="/warga/store" method="POST">

           @csrf
           <br>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">No KK</label>
                <input type="text" name="no_kk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                <option selected>Pilih Jenis Kelamin</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select><br>
            <textarea name="alamat" id=""  class="form-control" cols="30" rows="10" placeholder="Alamat"></textarea><br>

            <input type="submit" name="submit" value="save" class="btn btn-info">
        </form>
    </div>
@endsection
