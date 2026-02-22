@extends('layouts.admin')

@section('title', 'Data Perkara')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Data Perkara</h3>
            <a href="{{ route('perkara.create') }}" class="btn btn-primary">Tambah Perkara</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Perkara</th>
                        <th>Client</th>
                        <th>Jenis</th>
                        <th>No Internal</th>
                        <th>No External</th>
                        <th>PJ Perkara</th>
                        <th>Status</th>
                        <th width="130">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($perkara as $item)
                        <tr>
                            <td>{{ $item->judul_perkara }}</td>
                            <td>{{ optional($item->client)->nama_client ?: '-' }}</td>
                            <td>{{ optional($item->jenisPerkara)->nama_jenis_perkara ?: $item->jenis_perkara }}</td>
                            <td>{{ $item->no_perkara_internal }}</td>
                            <td>{{ $item->nomor_perkara_external ?: '-' }}</td>
                            <td>{{ $item->penanggung_jawab_perkara ?: '-' }}</td>
                            <td>{{ $item->status_perkara }}</td>
                            <td>
                                <a href="{{ route('perkara.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('perkara.destroy', $item->id) }}" method="POST" class="d-inline"
                                    onsubmit="return confirm('Hapus data perkara ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center">Belum ada data perkara</td>
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
