<div class="modal fade modal-flex" id="modal-slider" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Tambah Slider
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="form-slider" method="POST" enctype="multipart/form-data">
                    @csrf @method("POST")
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="judul">Judul</label>
                                <input type="text" name="judul" id="judul" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="posisi">Kabupaten / Kota</label>
                                <select name="kabupaten_kota" id="kabupaten_kota" class="form-control form-control-sm">
                                    <option value="">Pilih</option>
                                    <?php 
                                        foreach($cities as $city){
                                    ?>
                                        <option value="<?= $city->id ?>"><?= $city->name ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="sekolah">Sekolah</label>
                                <select name="sekolah[]" id="sekolah" class="form-control form-control-sm" multiple>
                                    <option value="">-- Pilih Kabupaten Dahulu --</option>
                                    <!-- @foreach($ck as $cakan)
                                    <option value="{{ $cakan->name }}">{{ $cakan->name }}</option>
                                    @endforeach -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="start_date">Start Date</label>
                                <input id="start_date" name="start_date" class="form-control form-control-sm" type="text" placeholder="Start Date" readonly />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="end_date">End Date</label>
                                <input id="end_date" name="end_date" class="form-control form-control-sm" type="text" placeholder="End Date" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <textarea name="keterangan" id="keterangan" cols="10" rows="3" class="form-control form-control-sm" placeholder="Keterangan"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <input type="file" name="foto" id="foto" accept="image/*" value="" autocomplete="off">
                                <label for="foto" class="mt-1">
                                    Foto:
                                    <small class="text-muted">max. 3MB</small>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="hidden_id" id="hidden_id">
                        <input type="hidden" id="action" value="add">
                        <input type="submit" class="btn btn-sm btn-success" value="Simpan" id="btn">
                        <button type="button" class="btn btn-sm btn-outline-success" data-dismiss="modal" id="btn-cancel">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>