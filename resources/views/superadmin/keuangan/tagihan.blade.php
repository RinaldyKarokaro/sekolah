@extends('layouts.superadmin')

{{-- config 1 --}}
@section('title', 'Keuangan')
@section('title-2', 'Keuangan')
@section('title-3', 'Keuangan')

@section('describ')
Ini adalah halaman keuangan untuk superadmin
@endsection

@section('icon-l', 'fa fa-images')
@section('icon-r', 'icon-home')

@section('link')
{{ route('superadmin.keuangan.tagihan') }}
@endsection

{{-- main content --}}
@section('content')
<div class="row">
    <div class="col-xl-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="card-block">
                    <button id="add" class="btn btn-outline-primary shadow-sm"><i class="fa fa-plus"></i></button>
                    <div class="dt-responsive table-responsive mt-3">
                        <table id="slider-table" class="table table-striped table-bordered nowrap shadow-sm">
                            <thead class="text-left">
                                <tr>
                                    <th>Nama Sekolah</th>
                                    <th>Biaya</th>
                                    <th>PPN 10%</th>
                                    <th>PPH 1.5%</th>
                                    <th>Siplah 2.5%</th>
                                    <th>Total Penerimaan</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>
                                    <td>SMK Negeri 2 Tebing Tinggi</td>
                                    <td>50000000</td>
                                    <td>5000000</td>
                                    <td>75000</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></button>
                                        <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <h5 align="center" id="confirm">Apakah anda yakin ingin menghapus data ini?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" name="ok_button" id="ok_button" class="btn btn-sm btn-outline-danger">Hapus</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

{{-- Modal --}}
@include('superadmin.keuangan.modals._tambah-tagihan')
@endsection

{{-- addons css --}}
@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
<style>
    .btn i {
        margin-right: 0px;
    }

    .select2-container {
        width: 100% !important;
        padding: 0;
    }
</style>
@endpush

{{-- addons js --}}
@push('js')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/sweetalert2.min.js') }}"></script> 
<script>
    $(document).ready(function() {
        $('#slider-table').DataTable();

        $('#add').on('click', function() {
            $('.modal-title').html('Tambah Tagihan');
            $('#btn')
                .removeClass('btn-info')
                .addClass('btn-success')
                .val('Simpan');
            $('#btn-cancel')
                .removeClass('btn-outline-info')
                .addClass('btn-outline-success')
                .val('Batal');
            $('#modal-tagihan').modal('show');
        });
    });
</script>
<script type="text/javascript">
    function calculate() {
        var biaya = document.getElementById('biaya').value;
        var ppn = 1.1;
        var pph = 1.015;
        // ].var siplah = 1.025;

        var ppn_result = parseFloat(biaya) / ppn;
        if (!isNaN(ppn_result)) {
           document.getElementById('ppn').value = ppn_result.toFixed(2);
        }

        var pph_result =  ppn_result / pph;
         if (!isNaN(pph_result)) {
           document.getElementById('pph').value = pph_result.toFixed(2);
        }
    }
</script>
@endpush