<div class="modal fade modal-flex" id="modal-pegawai" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    Tambah Pegawai
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form-pegawai" method="POST" enctype="multipart/form-data">
                <div class="modal-body">
                    @method("POST")
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="form-control form-control-sm" placeholder="Nama Lengkap" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nip">NIP</label>
                                <input id="nip" name="nip" class="form-control form-control-sm" type="text" placeholder="NIP" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input id="nik" name="nik" class="form-control form-control-sm" type="text" placeholder="NIK" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="gelar_depan">Gelar Depan</label>
                                <input id="gelar_depan" name="gelar_depan" class="form-control form-control-sm" type="text" placeholder="Gelar Depan" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="gelar_belakang">Gelar Belakang</label>
                                <input id="gelar_belakang" name="gelar_belakang" class="form-control form-control-sm" type="text" placeholder="Gelar Belakang" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control form-control-sm" placeholder="Tempat Lahir">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="text" name="tanggal_lahir" id="tanggal_lahir" class="form-control form-control-sm" placeholder="Tanggal Lahir" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select name="jk" id="jk" class="form-control form-control-sm">
                                    <option value="">-- Jenis Kelamin --</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="agama">Agama</label>
                                <select name="agama" id="agama" class="form-control form-control-sm">
                                    <option value="">-- Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Kristen Katolik">Kristen Katolik</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="is_menikah">Status Menikah</label>
                                <select name="is_menikah" id="is_menikah" class="form-control form-control-sm">
                                    <option value="">-- Status Menikah --</option>
                                    <option value="1">Menikah</option>
                                    <option value="0">Belum Menikah</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="alamat_tinggal">Alamat Tinggal</label>
                                <textarea name="alamat_tinggal" id="alamat_tinggal" cols="10" rows="3" class="form-control form-control-sm" placeholder="Alamat Tinggal"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <select name="provinsi_id" id="provinsi" class="form-control form-control-sm">
                                    <option value="">-- Provinsi --</option>
                                    @foreach($provinsis as $provinsi)
                                    <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kabupaten">Kabupaten / Kota</label>
                                <select name="kabupaten_id" id="kabupaten" class="form-control form-control-sm">
                                    <option value="">-- Kabupaten / Kota --</option>
                                    {{-- @foreach($kabupaten as $kab) --}}
                                    {{-- <option value="{{ $kab->id }}">{{ $kab->name }}</option> --}}
                                    {{-- @endforeach --}}
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan</label>
                                <select name="kecamatan_id" id="kecamatan" class="form-control form-control-sm">
                                    <option value="">-- Kecamatan --</option>
                                    {{-- @foreach($kecamatan as $kec) --}}
                                    {{-- <option value="{{ $kec->id }}">{{ $kec->name }}</option> --}}
                                    {{-- @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="dusun">Dusun</label>
                                <input type="text" name="dusun" id="dusun" class="form-control form-control-sm" placeholder="Dusun">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="rt">RT</label>
                                <input type="text" name="rt" id="rt" class="form-control form-control-sm" placeholder="RT">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="rw">RW</label>
                                <input type="text" name="rw" id="rw" class="form-control form-control-sm" placeholder="RW">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="kode_pos">Kode Pos</label>
                                <input type="text" name="kode_pos" id="kode_pos" class="form-control form-control-sm" placeholder="Kode Pos">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="no_telepon_rumah">No. Telp Rumah</label>
                                <input type="text" name="no_telepon_rumah" id="no_telepon_rumah" class="form-control form-control-sm" placeholder="No. Telp Rumah">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="no_telepon">No. Telp</label>
                                <input type="text" name="no_telepon" id="no_telepon" class="form-control form-control-sm" placeholder="No. Telp">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">E-Mail</label>
                                <input type="email" name="email" id="email" class="form-control form-control-sm" placeholder="E-Mail">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="foto">Foto Pegawai</label>
                                <input type="file" name="foto" id="foto" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5>Informasi Pekerjaan</h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tanggal_mulai">Tanggal Mulai:</label>
                                <input id="tanggal_mulai" name="tanggal_mulai" class="form-control form-control-sm" type="text" placeholder="Tanggal Mulai Tugas" readonly />
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="bagian_pegawai_id">Bagian Pegawai</label>
                                <select name="bagian_pegawai_id" id="bagian_pegawai_id" class="form-control form-control-sm" required>
                                    <option value="">-- Bagian Pegawai --</option>
                                    @foreach($bagian as $bagian)
                                    <option value="{{ $bagian->id }}">{{ $bagian->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="tahun_ajaran">Tahun Ajaran</label>
                                <select name="tahun_ajaran" id="tahun_ajaran" class="form-control form-control-sm">
                                    <option value="">-- Tahun Ajaran --</option>
                                    <option value="2017/2018">2017/2018</option>
                                    <option value="2018/2019">2018/2019</option>
                                    <option value="2019/2020">2019/2020</option>
                                    <option value="2020/2021">2020/2021</option>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="semester">Semester</label>
                                <select name="semester" id="semester" class="form-control form-control-sm">
                                    <option value="">-- Semester --</option>
                                    @foreach($semester as $sem)
                                    <option value="{{ $sem->semester }}">{{ $sem->semester }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <h5>Data Login</h5>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" id="username" class="form-control form-control-sm" placeholder="Username" required>
                            </div>
                        </div>
                        <div class="col" id="default-password-group">
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" id="password-lama-group">
                            <div class="form-group">
                                <label for="password">Password Lama:</label>
                                <input type="password" name="password_lama" id="password_lama" class="form-control form-control-sm" placeholder="Password">
                                <p class="form-text text-muted" id="old-password-message"></p>
                            </div>
                        </div>
                        <div class="col" id="password-baru-group">
                            <div class="form-group">
                                <label for="password">Password Baru:</label>
                                <input type="password" name="password_baru" id="password_baru" class="form-control form-control-sm" placeholder="Password">
                            </div>
                        </div>
                        <div class="col" id="password-konfirmasi-group">
                            <div class="form-group">
                                <label for="password">Konfirmasi Password:</label>
                                <input type="password" name="confirmation_password" id="password_konfirmasi" class="form-control form-control-sm" placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="hidden_id" id="hidden_id">
                    <input type="hidden" id="action">
                    <button type="submit" class="btn btn-sm btn-success" id="btn">Simpan</button>
                    <button type="button" class="btn btn-sm btn-outline-success" data-dismiss="modal" id="btn-cancel">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
