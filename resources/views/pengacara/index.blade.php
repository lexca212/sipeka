@extends('layouts.admin')

@section('title', 'Data Pengacara')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Pengacara</h3>
        </div>
        <div class="card-header">
            <input type="button" class="btn btn-primary" value="Tambah">
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Pengacara</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Spesialisasi</th>
                        <th>Terdaftar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pengacara as $item)
                        <tr>
                            <td>{{ $item->nama_pengacara }}</td>
                            <td>{{ $item->alamat_pengacara }}</td>
                            <td>{{ $item->no_hp_pengacara }}</td>
                            <td>{{ $item->spesialisasi_pengacara ?? '-' }}</td>
                            <td>{{ $item->created_at ? $item->created_at->format('d-m-Y') : '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">Belum ada data pengacara</td>
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
