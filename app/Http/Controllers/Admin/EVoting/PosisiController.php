<?php

namespace App\Http\Controllers\Admin\EVoting;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Admin\Posisi;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Superadmin\Addons;

class PosisiController extends Controller
{ 
    public function index(Request $request) {
        $addons = Addons::where('user_id', auth()->user()->id)->first();
        if ($request->ajax()) {
            $data = Posisi::latest()->get();
            return DataTables::of($data)
                ->addColumn('action', function ($data) {
                    $button = '<button type="button" id="'.$data->id.'" class="edit btn btn-mini btn-info shadow-sm"><i class="fa fa-pencil-alt"></i></button>';
                    $button .= '&nbsp;&nbsp;&nbsp;<button type="button" id="'.$data->id.'" class="delete btn btn-mini btn-danger shadow-sm"><i class="fa fa-trash"></i></button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->addIndexColumn()
                ->make(true);
        }
        $sekolahId = User::get('id_sekolah');
        return view('admin.e-voting.posisi', ['sekolah_id' => $sekolahId ,'mySekolah' => User::sekolah(), 'addons' => $addons]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
            'nama_posisi'  => 'required|max:50',
        ];

        $message = [
            'nama_posisi.required' => 'Kolom ini tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = Posisi::create([
            'name'  => $request->input('nama_posisi'),
            'sekolah_id' => $request->input('sekolah_id')
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $nama_posisi = Posisi::find($id);

        return response()
            ->json([
                'nama_posisi'  => $nama_posisi
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
            'nama_posisi'  => 'required|max:50',
        ];

        $message = [
            'nama_posisi.required' => 'Kolom ini tidak boleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = Posisi::whereId($request->input('hidden_id'))->update([
            'name'  => $request->input('nama_posisi'),
            'sekolah_id'  => $request->input('sekolah_id'),
        ]);

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $tingkat = Posisi::find($id);
        $tingkat->delete();
    }

}
