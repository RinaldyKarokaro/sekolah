@extends('layouts.admin')

{{-- config 1 --}}
@section('title', 'Pelajaran | Mata Pelajaran')
@section('title-2', 'Mata Pelajaran')
@section('title-3', 'Mata Pelajaran')

@section('describ')
    Ini adalah halaman mata pelajaran untuk admin
@endsection

@section('icon-l', 'fa fa-list-alt')
@section('icon-r', 'icon-home')

@section('link')
    {{ route('admin.pelajaran.mata-pelajaran') }}
@endsection

{{-- main content --}}
@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <div class="card-block">
                        <form id="form-pelajaran">
                            @csrf
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="nama_pelajaran">Nama Pelajaran</label>
                                        <input type="text" name="nama_pelajaran" id="nama_pelajaran" class="form-control form-control-sm" placeholder="Nama Pelajaran" required>
                                        <span id="form_result" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="kode_pelajaran">Kode Pelajaran</label>
                                        <input type="text" name="kode_pelajaran" id="kode_pelajaran" class="form-control form-control-sm" placeholder="Kode Pelajaran" required>
                                        <span id="form_result" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="guru_id">Guru Bidang Studi/Pengajar</label>
                                        <!-- <input type="text" name="pelajaran" id="pelajaran" class="form-control form-control-sm" placeholder="Nama Pelajaran"> -->
                                        <select name="guru_id" id="guru" class="form-control form-control-sm" required>
                                            <option value="">-- Guru Bidang Studi/Pengajar --</option>
                                            @foreach($guru as $obj)
                                            <option value="{{$obj->id}}">{{$obj->nama_guru}}</option>
                                            @endforeach
                                        </select>
                                        <span id="form_result" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" name="keterangan" id="keterangan" class="form-control form-control-sm" placeholder="Keterangan">
                                        <span id="form_result" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="aktif" id="aktif" checked>
                                        <label class="custom-control-label" for="aktif">Aktif</label>
                                        <span id="form_result" class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <input type="hidden" name="id" id="id">
                                    <input type="submit" class="btn btn-sm btn-success" value="Simpan" id="btn">
                                    <button type="reset" class="btn btn-sm btn-outline-success" id="reset">Batal</button>
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
                                        <th>No.</th>
                                        <th>Nama Pelajaran</th>
                                        <th>Guru</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="text-left">

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
@endsection

{{-- addons css --}}
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.css') }}">
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
    <script src="{{ asset('js/sweetalert2.min.js') }}"></script>
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var resetForm = () => {
                $('input[name=id]').val('');
                $('input[name=nama_pelajaran]').val('');
                $('input[name=kode_pelajaran]').val('');
                $('select[name=guru_id]').val('');
                $('input[name=keterangan]').val('');
                $('input[name=aktif]').prop('checked', true);
                $('#btn').val('Simpan');
            }

            var form = $('#form-pelajaran');

            var table = $('#order-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.pelajaran.mata-pelajaran') }}?req=table",
                columns: [
                {
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'nama_pelajaran',
                },
                {
                    data: 'nama_guru',
                    name: 'nama_guru'
                },
                {
                    data: 'aktif',
                    render: (data) =>  data == 1 ? `<label class="badge badge-success">Aktif</label>` : `<label class="badge badge-danger">Nonaktif</label>`
                },
                {
                    data: 'id',
                    render: (id) => {
                        return `<button data-id="${id}" type="button" class="btn btn-edit btn-mini btn-info shadow-sm">
                                    <i class="fa fa-pencil-alt"></i>
                                </button>&nbsp;&nbsp;
                                <button data-id="${id}" type="button" class="btn btn-delete btn-mini btn-danger shadow-sm delete" data-toggle="modal" data-target="#confirmDeleteModal">
                                    <i class="fa fa-trash"></i>
                                </button>`;
                    }
                }
                ]
            });

            $('#form-pelajaran').on('submit', function (event) {
                event.preventDefault();
                var url = "{{ route('admin.pelajaran.mata-pelajaran.write') }}?req=write";
                var text = "Data sukses ditambahkan";

                $.ajax({
                    url: url,
                    method: 'POST',
                    dataType: 'JSON',
                    data: $(this).serialize(),
                    success: function (data) {
                        Swal.fire("Berhasil", text, "success");
                        $('#btn')
                            .removeClass('btn-info')
                            .addClass('btn-success')
                            .val('Simpan');
                        $('#reset')
                            .removeClass('btn-outline-info')
                            .addClass('btn-outline-success')
                            .val('Batal');
                        resetForm();
                        table.ajax.reload();
                    },
                    error: function(data) {
                        if(typeof data.responseJSON.message == 'string')
                            return Swal.fire('Error', data.responseJSON.message, 'error');
                        else if(typeof data.responseJSON == 'string')
                            return Swal.fire('Error', data.responseJSON, 'error');
                    }
                });
            });

            $('#order-table').on('click', '.btn-edit', function (ev, data) {
                var id = ev.currentTarget.getAttribute('data-id');
                $.get("{{route('admin.pelajaran.mata-pelajaran')}}?req=single&id=" + id, function (data, status){
                    $('input[name=id]').val(data.id);
                    $('input[name=nama_pelajaran]').val(data.nama_pelajaran);
                    $('input[name=kode_pelajaran]').val(data.kode_pelajaran);
                    $('input[name=keterangan]').val(data.keterangan);
                    $('input[name=aktif]').prop('checked', data.aktif == 1);
                    $('select[name=guru_id]').val(data.guru_id);
                    $('#btn')
                        .removeClass('btn-success')
                        .addClass('btn-info')
                        .val('Update');
                    $('#reset')
                        .removeClass('btn-outline-success')
                        .addClass('btn-outline-info')
                        .val('Batal');
                });
            });

            $('#reset').click(() => {
                resetForm();
            });

            var user_id;
            $(document).on('click', '.delete', function () {
                user_id = $(this).attr('data-id');
                $('#ok_button').text('Hapus');
                $('#confirmModal').modal('show');
            });

            $('#ok_button').click(function () {
                $.ajax({
                    url: "{{ route('admin.pelajaran.mata-pelajaran.write') }}?req=delete&id=" + user_id,
                    cache: false,
                    method: "POST",
                    processData: false,
                    contentType: false,
                    beforeSend: function () {
                        $('#ok_button').text('Menghapus...');
                    }, 
                    success: function (data) {
                        $('#confirmModal').modal('hide');
                        Swal.fire("Berhasil", "Data dihapus!", "success");
                        table.ajax.reload();
                    }
                });
            });

            // $("#order-table").on('click', '.btn-delete', function(ev, data) {
            //     var id = ev.currentTarget.getAttribute('data-id');
            //     Swal.fire({
            //         title: 'Konfirmasi Hapus',
            //         text: "Apa anda yakin untuk menghapus data?",
            //         icon: 'warning',
            //         showCancelButton: true,
            //         confirmButtonColor: '#3085d6',
            //         cancelButtonColor: '#d33',
            //         confirmButtonText: 'Delete'
            //         }).then((result) => {
            //         if (result.isConfirmed) {
            //             $.ajax({
            //                 url: "{{ route('admin.pelajaran.mata-pelajaran.write') }}?req=delete&id=" + id,
            //                 cache: false,
            //                 method: "POST",
            //                 processData: false,
            //                 contentType: false,
            //                 success: function (data) {
            //                     Swal.fire("Berhasil", "Data dihapus!", "success");
            //                     table.ajax.reload();
            //                 },
            //                 error: function(data) {
            //                     if(typeof data.responseJSON.message == 'string')
            //                         return Swal.fire('Error', data.responseJSON.message, 'error');
            //                     else if(typeof data.responseJSON == 'string')
            //                         return Swal.fire('Error', data.responseJSON, 'error');
            //                 }
            //             });
            //         }
            //         })
            // }); //
        });
    </script>
@endpush
