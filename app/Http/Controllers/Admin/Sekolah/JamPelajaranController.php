<?php

namespace App\Http\Controllers\Admin\Sekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Guru;
use App\Models\MataPelajaran;
use App\Models\JamPelajaran;
use App\User;
use App\Models\Superadmin\Addons;

class JamPelajaranController extends Controller
{ //
    public function index(Request $request) {
        $addons = Addons::where('user_id', auth()->user()->id)->first();

        if($request->req == 'single') {
            return response()->json(JamPelajaran::findOrFail($request->id));
        }

        $data = JamPelajaran::where('sekolah_id', $request->user()->id_sekolah)
                            ->orderBy('jam_mulai')
                            ->get();

        $data = $data->groupBy('hari');

        return view('admin.sekolah.jam-pelajaran', compact('data', 'addons'), ['mySekolah' => User::sekolah()]);
    }

    public function write(Request $request) {
        if($request->req == 'write') {
            $this->validate($request, [
                'hari' => 'required',
                'jam_ke' => "required",
                'jam_mulai' => 'required',
                'jam_selesai' => "required"
            ]);

            $obj = JamPelajaran::find($request->id);

            if(!$obj){
                $obj = new JamPelajaran();
            }

            $obj->sekolah_id = $request->user()->id_sekolah;
            $obj->hari = $request->hari;
            $obj->jam_ke = $request->jam_ke;
            $obj->jam_mulai = $request->jam_mulai;
            $obj->jam_selesai = $request->jam_selesai;
            $obj->istirahat = $request->istirahat ?? false;
            $obj->editor_id = $request->user()->id;
            $obj->save();
            return response()->json($obj);


        }
        elseif($request->req == 'delete') {
            JamPelajaran::find($request->id)->delete();
        }
    }
}
