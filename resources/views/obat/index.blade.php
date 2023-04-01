@extends('layout.main')

@section('container')
<div class="d-flex flex-row-reverse p-2">
  <a href="/createObat" class="btn btn-primary">
  Tambah Obat
</a >
</div>

<table class="table">
  <thead>
    <tr>
    <th scope="col">Kode Obat</th>
      <th scope="col">Nama Obat</th>
      <th scope="col">Merk</th>
      <th scope="col">Jenis</th>
      <th scope="col">Satuan</th>
      <th scope="col">Golongan</th>
      <th scope="col">Kemasan</th>
      <th scope="col">Harga Jual</th>
      <th scope="col">Stok</th>
      <th scope="col" class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $obat)
    <tr>
      <td>{{$obat->kode_obat}}</td>
      <td>{{$obat->nama_obat}}</td>
      <td>{{$obat->merk}}</td>
      <td>{{$obat->jenis}}</td>
      <td>{{$obat->satuan}}</td>
      <td>{{$obat->golongan}}</td>
      <td>{{$obat->kemasan}}</td>
      <td>{{$obat->harga_jual}}</td>
      <td>{{$obat->stok}}</td>
      <td><div class="d-flex gap-2">
      <a href='{{Route("updateObat", $obat->id)}}' class="btn btn-primary mx-2">
      Edit
    </a >
    <form action="{{Route('deleteObat', $obat->id)}}" method="post">
      @method('delete')
      @csrf
      <button type="submit" class="btn btn-danger mx-2">
        Hapus
      </button >
    </form>
</div></td>
    </tr>
    @endforeach()
  </tbody>
</table>
@endsection