@extends('mahasiswa.layout')

@section('content')
<div class="container">
        <h3 class="text-center mb-5">JURUSAN TEKNOLOGI INFORMASI - POLITEKNIK NEGERI MALANG</h3>
        <h2 class="text-center mb-4">KARTU HASIL STUDI (KHS)</h2>

`       <a style="float: right"class="btn btn-success mt-3" href="/mahasiswa/nilai/{{ $mahasiswa->mahasiswa->nim }}/pdf">Cetak KHS</a>
        <b>Nama:</b> {{ $mahasiswa->mahasiswa->nama }}<br>
        <b>NIM: </b>{{ $mahasiswa->mahasiswa->nim }}<br>
        <b>Kelas: </b> {{ $mahasiswa->mahasiswa->kelas->nama_kelas }}<br>

        <br>
        <table class="table table-bordered">
            <tr>
            
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            @foreach ($mahasiswa as $nm)
                <tr>
                <td>{{ $nm->matakuliah->nama_matkul }}</td>
                    <td>{{ $nm->matakuliah->sks}}</td>
                    <td>{{ $nm->matakuliah->semester }}</td>
                    <td>{{ $nm->nilai }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
 