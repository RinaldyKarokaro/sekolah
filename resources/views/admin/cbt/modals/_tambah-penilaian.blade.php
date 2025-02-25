<div class="modal fade modal-flex p-0" id="modal-soal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Tambah penilaian
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-soal">
                    @csrf @method("POST")
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="judul">Nama Penilaian</label>
                                <input type="text" name="nama_penilaian" id="nama_penilaian" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="poin_jika_benar">Poin jika benar</label>
                                <input type="number" name="poin_jika_benar" id="poin_jika_benar" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pengali_jika_benar">pengali jika benar</label>
                                <input type="number" name="pengali_jika_benar" id="pengali_jika_benar" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="poin_jika_salah">Poin jika salah</label>
                                <input type="number" name="poin_jika_salah" id="poin_jika_salah" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pengali_jika_salah">pengali jika salah</label>
                                <input type="number" name="pengali_jika_salah" id="pengali_jika_salah" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="poin_jika_tidak_dijawab">Poin jika tidak dijawab</label>
                                <input type="number" name="poin_jika_tidak_dijawab" id="poin_jika_tidak_dijawab" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="pengali_jika_tidak_dijawab">pengali jika tidak dijawab</label>
                                <input type="number" name="pengali_jika_tidak_dijawab" id="pengali_jika_tidak_dijawab" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    

                    <div class="modal-footer mt-3">
                        <input type="hidden" name="poin_lama" id="poin_lama">
                        <input type="hidden" name="hidden_id" id="hidden_id">
                        <input type="hidden" id="action" val="add">
                        <input type="submit" class="btn btn-sm btn-success" value="Simpan" id="btn">
                        <button type="button" class="btn btn-sm btn-outline-success" data-dismiss="modal" id="btn-cancel">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  -->