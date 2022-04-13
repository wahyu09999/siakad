@extends('mahasiswa.layout')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Tambah Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswa.store') }}" id="myForm">
                @csrf
                    <div class="form-group">
                        <label for="Nim">Nim</label>
                        <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim" >
                    </div>
                    
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="Nama" name="Nama" class="form-control" id="Nama" ariadescribedby="Nama" >
                </div>

                <!-- <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <input type="Kelas" name="Kelas" class="form-control" id="Kelas" ariadescribedby="password" >
                </div> -->


                <div class="form-group">
                        <label for="Kelas">Kelas</label>
                        <select name="Kelas"class="form-control">
                            @foreach($kelas as $kls)
                                <option value="{{$kls->id}}" >{{$kls->nama_kelas}} </option>
                            @endforeach
                        </select>
                    </div>




                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" ariadescribedby="Jurusan" >
                </div>


                <!-- <div class="form-group">
                    <label for="jeniskelamin">jeniskelamin</label>
                    <input type="jeniskelamin" name="jeniskelamin" class="form-control" id="jeniskelamin" ariadescribedby="jeniskelamin" >
                </div> -->
                


                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection