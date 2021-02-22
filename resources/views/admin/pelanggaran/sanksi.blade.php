@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Pelanggaran | Sanksi')
@section('title-2', 'Sanksi')
@section('title-3', 'Sanksi')

@section('describ')
    Ini adalah halaman sanksi untuk admin
@endsection

@section('icon-l', 'icon-info')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.pesertadidik.siswa-pindahan') }}
@endsection

{{-- main content --}}
@section('content')
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="card-block">
                    <form action="">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <input type="text" name="kategori" id="kategori" class="form-control form-control-sm" placeholder="Kategori">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-sm btn-outline-success">Simpan</button>
                                <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12">
        <div class="card shadow-sm">
            <div class="card-body">
                <div class="card-block">
                    <div class="dt-responsive table-responsive">
                        <table id="order-table" class="table table-striped table-bordered nowrap shadow-sm">
                            <thead class="text-left">
                                <tr>
                                    <th>No</th>
                                    <th>Sanksi Pelanggaran</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-left">
                                <tr>
                                    <td>1</td>
                                    <td>Rajam</td>
                                    <td>
                                        <button type="button" class="btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>
                                        &nbsp;&nbsp;
                                        <button type="button" class="btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>
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
</style>
@endpush

{{-- addons js --}}
@push('js')
<script src="{{ asset('bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#order-table').DataTable();
    });
</script>
@endpush