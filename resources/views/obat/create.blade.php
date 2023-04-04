@extends('layout.main')


@section('container')

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="p-5">
            <form class="user" action="{{Route('tambahObat')}}" method="POST">
               @csrf
                    <div class="row">
                        <div class="col">
                        <div class="form-group row">
                                <input type="text" value="{{old('kode_obat')}}" class="form-control @error('kode_obat') is-invalid @enderror" name="kode_obat" id="kode_obat" placeholder="kode_obat *">
                                @error('kode_obat')
                                <div id="kode_obat" class="invalid-feedback mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <input type="text" value="{{old('nama_obat')}}" class="form-control @error('nama_obat') is-invalid @enderror" name="nama_obat" id="nama_obat" placeholder="nama_obat *">
                            @error('nama_obat')
                            <div id="nama_obat" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" id="merk" placeholder="merk *">
                            @error('merk')
                            <div id="merk" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control @error('jenis') is-invalid @enderror" name="jenis" id="jenis" placeholder="jenis *">
                            @error('jenis')
                            <div id="jenis" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok" id="stok" placeholder="stok *">
                            @error('stok')
                            <div id="stok" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        </div>
                        <div class="col">
                        <div class="form-group row">
                            <input type="text" value="{{old('satuan')}}" class="form-control @error('satuan') is-invalid @enderror" name="satuan" id="satuan" placeholder="satuan *">
                                @error('satuan')
                                <div id="satuan" class="invalid-feedback mb-3">
                                    {{$message}}
                                </div>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <input type="text" value="{{old('golongan')}}" class="form-control @error('golongan') is-invalid @enderror" name="golongan" id="golongan" placeholder="golongan *">
                            @error('golongan')
                            <div id="golongan" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="text" class="form-control @error('kemasan') is-invalid @enderror" name="kemasan" id="kemasan" placeholder="kemasan *">
                            @error('kemasan')
                            <div id="kemasan" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <input type="number" class="form-control @error('harga_jual') is-invalid @enderror" name="harga_jual" id="harga_jual" placeholder="harga_jual *">
                            @error('harga_jual')
                            <div id="harga_jual" class="invalid-feedback mb-3">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        </div>
                    </div>
                <hr>
                <button type="submit" class="btn btn-primary btn-block">
                    Create Obat
                </button>
            </form>
           
            
        </div>
    </div>
</div>

@endsection