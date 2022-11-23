@extends('layouts.main')

@section('cssnya')

<br>
<form action="{{ url('pegawai/'.$model->id) }}" method="POST">
@csrf
  <p><h1 class="text-center text-info">Ubah Pegawai</h1></p> 
<table align='center'>
    <input type="hidden" name="_method" value="PATCH">
    <tr>
        <td><label for="nama">Nama</label></td>
        <td><input type="text" id="nama" name="name" value="{{ $model->name }}" class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="email">Email</label></td>
        <td><input type="email" id="email" name="email" value="{{ $model->email }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="gelar">Gelar</label></td>
        <td><input type="text" id="gelar" name="gelar" value="{{ $model->gelar }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="jurusan">Jurusan</label></td>
        <td><input type="text" id="jurusan" name="jurusan" value="{{ $model->jurusan }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="nip">Nip</label></td>
        <td><input type="text" id="nip" name="nip" value="{{ $model->nip }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td><label for="tnggal_lahir">Tanggal Lahir</label></td>
        <td><input type="date" id="tnggal_lahir" name="tnggal_lahir" value="{{ $model->tnggal_lahir }}"  class="form-control form-control-lg" required></td>
    </tr>
    <tr>
        <td></td>
        <td><button type="submit" class="btn btn-info">Simpan</button></td>
    </tr>
</table>
</form>
    
@endsection