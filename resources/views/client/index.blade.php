@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Client</h3>
        </div>
        <div class="card-header">
            <input type="button" class ="btn btn-primary" value="Tambah">
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama Client</th>
                        <th>Alamat Client</th>
                        <th>No Hp Client</th>
                        <th>Tanggal Registrasi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Lexca helga</td>
                        <td>Pokoh kidul</td>
                        <td>082134665410</td>
                        <td>ini sementara</td>
                        <td>U</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>CSS grade</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
@push('js')
    <!-- DataTables & Plugins -->
    <script src="{{ asset('adminlte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <script>
        $(function() {
            $("#example1").DataTable({
                responsive: true,
                autoWidth: false,
                order: [
                    [0, "desc"]
                ],
                dom: "<'row mb-2'" +
                    "<'col-sm-6'l>" +
                    "<'col-sm-6 text-right'f>" +
                    ">" +
                    "<'row'" +
                    "<'col-sm-12'tr>" +
                    ">" +
                    "<'row mt-2'" +
                    "<'col-sm-5'i>" +
                    "<'col-sm-7'p>" +
                    ">"
            });
        });
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    </script>
    {{-- <script>
$(document).on('click', '.btn-disposisi', function () {
    let nomorSurat = $(this).data('nomor');
    let idSurat = $(this).data('id');
    $('#nomor_surat_modal').val(nomorSurat);
    $('#surat_id_modal').val(idSurat);
});
</script> --}}
@endpush
