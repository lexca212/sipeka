@extends('layouts.admin')

@section('title', 'Data Client')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Data Client</h3>
            <a href="{{ route('client.create') }}" class="btn btn-primary">Tambah Client</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @elseif (session('danger'))
                 <div class="alert alert-danger">{{ session('danger') }}</div>
            @endif

            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Jenis Client</th>
                        <th>NIK/Identitas</th>
                        <th>Nama Client</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Tgl Lahir</th>
                        <th width="130">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clients as $item)
                        <tr>
                            <td>{{ $item->jenis_client }}</td>
                            <td>{{ $item->nik_client }}</td>
                            <td>{{ $item->nama_client }}</td>
                            <td>{{ $item->alamat_client }}</td>
                            <td>{{ $item->no_hp_client }}</td>
                            <td>{{ $item->tgl_lahir_client ?: '-' }}</td>
                            <td>
                                <a href="{{ route('client.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('client.destroy', $item->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Hapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada data client</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>

    <script>
        $(function() {
            $("#example1").DataTable({
                responsive: true,
                autoWidth: false,
            });
        });
    </script>
@endpush
