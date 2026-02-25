@extends('layouts.admin')

@section('title', 'Laporan Perkara')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title mb-0">Data Perkara</h3>
            <a href="{{ route('laporanperkara.create') }}" class="btn btn-primary">Tambah Perkara</a>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Tanggal Laporan</th>
                        <th>Data Perkara</th>
                        <th>Uraian Laporan</th>
                        <th>Keterangan</th>
                        <th width="130">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($laporanperkara as $item)
                        <tr>
                            <td>{{ $item->tanggal_laporan }}</td>
                            <td>{{ $item->perkara->no_perkara_internal ?: '-' }}</td>
                            <td>{{ $item->uraian_laporan}}</td>
                            <td>{{ $item->keterangan}}</td>
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
