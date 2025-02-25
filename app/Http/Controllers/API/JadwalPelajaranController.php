<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JadwalPelajaran;
use App\Helpers\ResponseFormatter;

class JadwalPelajaranController extends Controller
{
    public function read(Request $request)
    {
        if ($request->req == 'table') {
            $data = JadwalPelajaran::join('mata_pelajarans', 'jadwal_pelajarans.mata_pelajaran_id', 'mata_pelajarans.id')->where('tahun_ajaran', $request->tahun_ajaran)
                ->join('jam_pelajarans', 'jam_pelajarans.id', 'jadwal_pelajarans.jam_pelajaran')
                ->where('kelas_id', $request->kelas_id)
                ->where('semester', $request->semester)
                ->orderBy('jam_pelajaran')
                ->get()
                ->groupBy('hari');

            return ResponseFormatter::success([
                'senin'  => $data['senin'] ?? [],
                'selasa' => $data['selasa'] ?? [],
                'rabu'   => $data['rabu'] ?? [],
                'kamis'  => $data['kamis'] ?? [],
                'jumat'  => $data['jumat'] ?? [],
                'sabtu'  => $data['sabtu'] ?? []
            ]);
        }
    }
}




// INI YANG LAMA YA OK?
// class JadwalPelajaranController extends Controller
// {
//     public function read(Request $request) {
//         if($request->req == 'table') {
//             $data = JadwalPelajaran::with('mataPelajaran', 'kelas')->where('tahun_ajaran', $request->tahun_ajaran)
//                                   ->where('kelas_id', $request->kelas_id)
//                                   ->where('semester', $request->semester)
//                                   ->orderBy('jam_pelajaran')
//                                   ->get();

//                                   $data = $data->groupBy('hari');

//                                   return ResponseFormatter::success([
//                                       'senin'  => $data['senin'] ?? [],
//                                       'selasa' => $data['selasa'] ?? [],
//                                       'rabu'   => $data['rabu'] ?? [],
//                                       'kamis'  => $data['kamis'] ?? [],
//                                       'jumat'  => $data['jumat'] ?? [],
//                                       'sabtu'  => $data['sabtu'] ?? [],
//                                   ]);
//         }
//     }
// }