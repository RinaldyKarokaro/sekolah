<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            @if ($mySekolah)
                @if ($mySekolah->logo)
                    <a href="/admin" class="d-flex" style="justify-content: center;">
                        <img class="img-fluid" src="{{ Storage::url($mySekolah->logo) }}" alt="logo sekolah" width="180" />
                    </a>
                @endif
                @if ($mySekolah->name)
                    <h3 style="color: white;" class="text-center mt-2">{{ $mySekolah->name ?? ''}}</h3>
                @endif
            @endif
            <div class="pcoded-navigation-label">Navigation</div>
            
            <ul class="pcoded-item pcoded-left-item">
                <li class="{{ request()->is('admin') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                @if ($addons != null && $addons->referensi)
                <li class="@if (request()->is('admin/referensi/bagian-pegawai') || request()->is('admin/referensi/status-guru') || request()->is('admin/referensi/jenjang-pegawai') || request()->is('admin/referensi/pengaturan-hak-akses') || request()->is('admin/referensi/tingkatan-kelas')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-list-alt"></i></span>
                        <span class="pcoded-mtext">Referensi</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/referensi/bagian-pegawai') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.bagian-pegawai') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Bagian Pegawai</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/status-guru') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.status-guru') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Status Guru</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/jenjang-pegawai') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.jenjang-pegawai') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jenjang Pegawai</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/tingkatan-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.tingkatan-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tingkatan Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/referensi/pengaturan-hak-akses') ? 'active' : '' }}">
                            <a href="{{ route('admin.referensi.pengaturan-hak-akses') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pengaturan Hak Akses</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->sekolah)
                <li class="@if (request()->is('admin/sekolah/tahun-ajaran') || request()->is('admin/sekolah/semester') || request()->is('admin/sekolah/jam') || request()->is('admin/sekolah/jurusan') || request()->is('admin/sekolah/kelas')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-school"></i></span>
                        <span class="pcoded-mtext">Sekolah</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/sekolah/tahun-ajaran') ? 'active' : '' }}">
                            <a href="{{ route('admin.sekolah.tahun-ajaran') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tahun Ajaran</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/sekolah/semester') ? 'active' : '' }}">
                            <a href="{{ route('admin.sekolah.semester') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Semester</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/sekolah/jurusan') ? 'active' : '' }}">
                            <a href="{{ route('admin.sekolah.jurusan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jurusan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/sekolah/kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.sekolah.kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/sekolah/jam') ? 'active' : '' }}">
                            <a href="{{ route('admin.sekolah.jam') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jam Pelajaran</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->fungsionaris)
                <li class="@if (request()->is('admin/fungsionaris/pegawai') || request()->is('admin/fungsionaris/guru')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-user-tie"></i></span>
                        <span class="pcoded-mtext">Fungsionaris</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/fungsionaris/pegawai') ? 'active' : '' }}">
                            <a href="{{ route('admin.fungsionaris.pegawai') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pegawai</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/fungsionaris/guru') ? 'active' : '' }}">
                            <a href="{{ route('admin.fungsionaris.guru') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Guru</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->pelajaran)
                <li class="@if (request()->is('admin/pelajaran/mata-pelajaran') || request()->is('admin/pelajaran/jadwal-pelajaran')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                        <span class="pcoded-mtext">Pelajaran</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/pelajaran/mata-pelajaran') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelajaran.mata-pelajaran') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Mata Pelajaran</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/pelajaran/jadwal-pelajaran') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelajaran.jadwal-pelajaran') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Jadwal Pelajaran</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->peserta_didik)
                <li class="@if (request()->is('admin/peserta-didik/siswa') || request()->is('admin/peserta-didik/alumni') || request()->is('admin/peserta-didik/pindah-kelas') || request()->is('admin/peserta-didik/tidak-naik-kelas') || request()->is('admin/peserta-didik/siswa-pindahan') || request()->is('admin/peserta-didik/pengaturan-siswa-per-kelas')) pcoded-hasmenu pcoded-trigger active @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-graduation-cap"></i></span>
                        <span class="pcoded-mtext">Peserta Didik</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/peserta-didik/siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.siswa.index') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/alumni') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.alumni') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Alumni</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/pindah-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.pindah-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pindah Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/tidak-naik-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.tidak-naik-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Tidak Naik Kelas</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/siswa-pindahan') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.siswa-pindahan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa Pindahan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/peserta-didik/pengaturan-siswa-per-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.pesertadidik.pengaturan-siswa-per-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pengaturan Siswa Per Kelas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->absensi)
                <li class="@if (request()->is('admin/absensi/siswa') || request()->is('admin/absensi/rekap-siswa')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-clipboard-list"></i></span>
                        <span class="pcoded-mtext">Absensi</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/absensi/siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.absensi.siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/absensi/rekap-siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.absensi.rekap-siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Rekap Siswa</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->e_learning)
                <li class="@if (request()->is('admin/e-learning/materi') || request()->is('admin/e-learning/kuis') || request()->is('admin/e-learning/soal') || request()->is('admin/e-learning/butir-soal')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-swatchbook"></i></span>
                        <span class="pcoded-mtext">E-Learning</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/e-learning/materi') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-learning.materi') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Materi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-learning/soal') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-learning.soal') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Soal</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-learning/butir-soal') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-learning.butir-soal') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Butir Soal</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-learning/kuis') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-learning.kuis') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kuis</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                
                <li class="@if (request()->is('admin/cbt/kuis') || request()->is('admin/cbt/soal') || request()->is('admin/cbt/butir-soal')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-swatchbook"></i></span>
                        <span class="pcoded-mtext">Computer Based Test</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/cbt/soal') ? 'active' : '' }}">
                            <a href="{{ route('admin.cbt.soal') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Soal</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/cbt/butir-soal') ? 'active' : '' }}">
                            <a href="{{ route('admin.cbt.butir-soal') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Butir Soal</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/cbt/kuis') ? 'active' : '' }}">
                            <a href="{{ route('admin.cbt.kuis') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kuis</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/cbt/penilaian') ? 'active' : '' }}">
                            <a href="{{ route('admin.cbt.penilaian') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Penilaian</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/cbt/ranking') ? 'active' : '' }}">
                            <a href="{{ route('admin.cbt.ranking') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Ranking</span>
                            </a>
                        </li>
                    </ul>
                </li>
             

                <li class="@if (request()->is('admin/banksoal/soal'))pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-square-root-alt"></i></span>
                        <span class="pcoded-mtext">Bank Soal</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/banksoal/soal') ? 'active' : '' }}">
                            <a href="{{ route('admin.banksoal.soal') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Soal</span>
                            </a>
                        </li>                        
                    </ul>
                </li>

                @if ($addons != null && $addons->daftar_nilai)
                <li class="{{ request()->is('admin/daftar-nilai') ? 'active' : '' }}">
                     <a href="{{ route('admin.daftar-nilai') }}" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa fa-medal"></i>
                        </span>
                        <span class="pcoded-mtext">Daftar Nilai</span>
                    </a>
                </li>
                @endif

                @if ($addons != null && $addons->e_rapor)
                <li class="@if (request()->is('admin/e-rapor/kenaikan-kelas')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-file-alt"></i></span>
                        <span class="pcoded-mtext">E-Rapor</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/e-rapor/kenaikan-kelas') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-rapor.kenaikan-kelas') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kenaikan Kelas</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->pelanggaran)
                <li class="@if (request()->is('admin/pelanggaran/siswa') || request()->is('admin/pelanggaran/sanksi') || request()->is('admin/pelanggaran/kategori-pelanggaran') || request()->is('admin/pelanggaran/surat-peringatan')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-exclamation-triangle"></i></span>
                        <span class="pcoded-mtext">Pelanggaran</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/pelanggaran/siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelanggaran.siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/pelanggaran/sanksi') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelanggaran.sanksi') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Sanksi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/pelanggaran/kategori-pelanggaran') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelanggaran.kategori-pelanggaran') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kategori Pelanggaran</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/pelanggaran/surat-peringatan') ? 'active' : '' }}">
                            <a href="{{ route('admin.pelanggaran.surat-peringatan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Surat Peringatan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->e_voting)
                <li class="@if (request()->is('admin/e-voting/calon') || request()->is('admin/e-voting/posisi') || request()->is('admin/e-voting/pemilihan') || request()->is('admin/e-voting/vote')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fas fa-vote-yea"></i></span>
                        <span class="pcoded-mtext">E-Voting</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/e-voting/calon') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-voting.calon') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Calon</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-voting/posisi') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-voting.posisi') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Posisi</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-voting/pemilihan') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-voting.pemilihan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pemilihan</span>
                            </a>
                        </li>
                        <li class="{{ request()->is('admin/e-voting/vote') ? 'active' : '' }}">
                            <a href="{{ route('admin.e-voting.vote') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Hasil Vote</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->kalender)
                <li class="@if (request()->is('admin/kalender/kalender-akademik')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-calendar"></i></span>
                        <span class="pcoded-mtext">Kalender</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/kalender/kalender-akademik') ? 'active' : '' }}">
                            <a href="{{ route('admin.kalender.kalender-akademik') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Kalender Akademik</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                <li class="@if (request()->is('admin/pengumuman/pesan')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-bell"></i></span>
                        <span class="pcoded-mtext">Pengumuman</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/pengumuman/pesan') ? 'active' : '' }}">
                            <a href="{{ route('admin.pengumuman.pesan') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Pesan</span>
                            </a>
                        </li>
                    </ul>
                </li>
                
                @if ($addons != null && $addons->leaderboard)
                <li class="@if (request()->is('admin/leaderboard/leaderboard') || request()->is('admin/leaderboard/aktifitas')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-trophy"></i></span>
                        <span class="pcoded-mtext">Leaderboard</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/leaderboard/leaderboard') ? 'active' : '' }}">
                            <a href="{{ route('admin.leaderboard.leaderboard') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Leaderboard</span>
                            </a>
                        </li>                        
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->forum)
                <li class="@if (request()->is('admin/forum/forum') || request()->is('admin/forum/aktifitas')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-comments"></i></span>
                        <span class="pcoded-mtext">Forum</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/forum/forum') ? 'active' : '' }}">
                            <a href="{{ route('admin.forum.forum') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Forum Diskusi</span>
                            </a>
                        </li>                        
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->import)
                <li class="@if (request()->is('admin/import/import-siswa')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                    <a href="javascript:void(0);" class="waves-effect waves-dark">
                        <span class="pcoded-micon"><i class="fa fa-file"></i></span>
                        <span class="pcoded-mtext">Import</span>
                    </a>
                    <ul class="pcoded-submenu">
                        <li class="{{ request()->is('admin/import/import-siswa') ? 'active' : '' }}">
                            <a href="{{ route('admin.import.import-siswa') }}" class="waves-effect waves-dark">
                                <span class="pcoded-mtext">Siswa</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endif

                @if ($addons != null && $addons->perpustakaan)
                <li class="@if (request()->is('admin/perpustakaan/peminjaman')) pcoded-hasmenu active pcoded-trigger @else pcoded-hasmenu @endif">
                <a href="javascript:void(0);" class="waves-effect waves-dark">
                    <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                    <span class="pcoded-mtext">Perpustakaan</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="{{ request()->is('admin/perpustakaan/peminjaman') ? 'active' : '' }}">
                        <a href="{{ route('admin.perpustakaan.list-peminjam') }}" class="waves-effect waves-dark">
                            <span class="pcoded-mtext">Peminjaman</span>
                        </a>
                    </li>
                </ul>
                @endif
            </li>
            </ul>
        </div>
    </div>
</nav>
<!--  -->