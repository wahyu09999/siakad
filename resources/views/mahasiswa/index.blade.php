@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>
 
 @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-error">
        <p>{{ $message }}</p>
    </div>
@endif

<div class="row">
    <form class="form-inline">

            <div class="form-group mx-sm-3 mb-2">
            <form action="{{ route('mahasiswa.index') }}">
                 <label for="" class="sr-only"></label>
                 <input type="text" class="form-control" placeholder="cari disini" name="search" value="{{ request('search')}}">
                </div>
             <button type="submit" class="btn btn-primary mb-2">Search</button>
                </form>
</div>

    <!-- <p>Cari Data Mahasiswa :</p>
	<form action="{{ route('mahasiswa.index') }}">
		<input type="text" name="cari" placeholder="Cari Mahasiswa .." value="{{ request('cari')}}">
		<input type="submit" value="CARI" >
	</form> -->

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Foto</th>



            
            <!-- <th>JenisKelamin</th>
            <th>E-mail</th>
            <th>Alamat</th>
            <th>TanggalLahir</th> -->

            <th width="300px">Action</th>
        </tr>
        @foreach ($paginate as $mhs)
        <tr>
 
            <td>{{ $mhs ->nim }}</td>
            <td>{{ $mhs ->nama }}</td>
            <td>{{ $mhs ->kelas->nama_kelas }}</td>
            <td>{{ $mhs ->jurusan }}</td>
            <td><img style="width: 80px; height: 80px; overflow: hidden" class="rounded-circle" src="{{ asset('./storage/'. $mhs->foto) }}" alt=""></td>
            <!-- <td>{{ $mhs ->jenisKelamin }}</td>
            <td>{{ $mhs ->email }}</td>
            <td>{{ $mhs ->alamat }}</td>
            <td>{{ $mhs ->tanggalLahir }}</td> -->

            <td>
            <form action="{{ route('mahasiswa.destroy',['mahasiswa'=>$mhs->nim]) }}" method="POST">
                
                <a class="btn btn-info" href="{{ route('mahasiswa.show',$mhs->nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mhs->nim) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
                <a class="btn btn-warning" href="{{ route('mahasiswa.nilai',$mhs->id_mahasiswa) }}">Nilai</a>
            </form>
            </td>
        </tr>
        @endforeach
    </table>
    {{$paginate-> links()}}
    @endsection
