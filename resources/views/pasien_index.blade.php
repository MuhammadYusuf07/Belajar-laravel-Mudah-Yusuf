@extends('mylayout', ['title' => 'Data Pasien '])
@section('content')
    <div class="card">
        <div class="card-body">
            <h3>Data pasien</h3>
            <a href="/pasien/create" class="btn btn-primary">Tambah Data</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>No Pasien</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Jenis Kelamin</th>
                        <th>Tgl Buat</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pasien as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->no_pasien }}</td>
                            <td>
                                @if ($item->foto)
                                    <a href="{{ Storage::url($item->foto) }}" target="blank">
                                        <img src="{{ Storage::url($item->foto) }}" width="50">
                                    </a>
                                @endif
                                {{ $item->nama }}
                            </td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $pasien->links() !!}
        </div>
    </div>
@endsection
