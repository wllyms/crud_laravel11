@extends('layout')

@section('konten')
    <div class="d-flex">
        <h4>Daftar Siswa</h4>
        <div class="ms-auto">
            <a href="{{ route('siswa.tambah') }}" class="btn btn-success">Tambah Siswa</a>
        </div>
    </div>

    <table class="table" container>
        <tr>
            <td>No</td>
            <td>NIS</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>No HP</td>
            <td>Jenis Kelamin</td>
            <td>Hobi</td>
            <td>Aksi</td>
        </tr>
        @foreach ($siswa as $no => $data)
            <tr>
                <td>{{ $no + 1 }}</td>
                <td>{{ $data->nis }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->hobi }}</td>
                <td>
                    <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning mb-2">Edit</a>
                    <form action="{{ route('siswa.delete', $data->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
