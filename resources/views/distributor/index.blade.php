@extends('layout.main')


@section('container')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama Distributor</th>
      <th scope="col">Alamat</th>
      <th scope="col">No Telepon</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $distributor)
    <tr>
      <td>{{$distributor->nama_distributor}}</td>
      <td>{{$distributor->alamat}}</td>
      <td>{{$distributor->notelepon}}</td>
    </tr>
    @endforeach()
  </tbody>
</table>
@endsection