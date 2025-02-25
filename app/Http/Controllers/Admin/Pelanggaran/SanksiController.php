<?php

namespace App\Http\Controllers\Admin\Pelanggaran;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Admin\Sanksi;
use App\User;
use App\Models\Superadmin\Addons;

class SanksiController extends Controller
{ 
    public function index(Request $request) {
        $addons = Addons::where('user_id', auth()->user()->id)->first();
        if ($request->ajax()) {
            $data = Sanksi::where('sekolah_id', auth()->user()->id_sekolah)->get();
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
        
        return view('admin.pelanggaran.sanksi', ['mySekolah' => User::sekolah(), 'addons' => $addons]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
            'sanksi'  => 'required|max:50',
        ];

        $message = [
            'sanksi.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = Sanksi::create([
            'name'  => $request->input('sanksi'),
            'sekolah_id' => auth()->user()->id_sekolah
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $sanksi = Sanksi::find($id);

        return response()
            ->json([
                'sanksi'  => $sanksi
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
            'sanksi'  => 'required|max:50',
        ];

        $message = [
            'sanksi.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = Sanksi::whereId($request->input('hidden_id'))->update([
            'name'  => $request->input('sanksi'),
            'sekolah_id' => auth()->user()->id_sekolah
        ]);

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $sanksi = Sanksi::find($id);
        $sanksi->delete();
    }
}
