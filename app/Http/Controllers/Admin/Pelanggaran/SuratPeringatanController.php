<?php

namespace App\Http\Controllers\Admin\Pelanggaran;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Admin\SuratPeringatan;
use App\User;
use App\Models\Superadmin\Addons;

class SuratPeringatanController extends Controller
{ 
    public function index(Request $request) {
        $addons = Addons::where('user_id', auth()->user()->id)->first();
        if ($request->ajax()) {
            $data = SuratPeringatan::where('sekolah_id', auth()->user()->id_sekolah)->latest()->get();
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
        
        return view('admin.pelanggaran.surat-peringatan', ['mySekolah' => User::sekolah(), 'addons' => $addons]);
    }

    public function store(Request $request) {
        // validasi
        $rules = [
            'name'  => 'required|max:50',
        ];

        $message = [
            'name.required' => 'Kolom ini gaboleh kosong',
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }

        $status = SuratPeringatan::create([
            'name'  => $request->input('name'),
            'poin'  => $request->input('poin'),
            'sekolah_id'  => auth()->user()->id_sekolah,
        ]);

        return response()
            ->json([
                'success' => 'Data Added.',
            ]);
    }

    public function edit($id) {
        $name = SuratPeringatan::find($id);
        $poin = SuratPeringatan::find($id);

        return response()
            ->json([
                'name'  => $name,
                'poin'      => $poin
            ]);
    }

    public function update(Request $request) {
        // validasi
        $rules = [
            'name'  => 'required|max:50',
            'poin' => 'required|max:50'
        ];

        $message = [
            'name.required' => 'Kolom ini gaboleh kosong',
            'poin.required' => 'Kolom ini gaboleh kosong'
        ];

        $validator = Validator::make($request->all(), $rules, $message);

        if ($validator->fails()) {
            return response()
                ->json([
                    'errors' => $validator->errors()->all()
                ]);
        }
<<<<<<< HEAD

        $sueratPerin

        $status = SuratPeringatan::whereId($request->input('hidden_id'))->update([
            'name'  => $request->input('name'),
            'poin'  => $request->input('poin'),
        ]);
=======
        
    
        $surat_peringatan = SuratPeringatan::findOrFail($request->hidden_id);
        
        $surat_peringatan->update($request->all());
>>>>>>> 79f44726f6e6c6565ed914dd1265fd6a1b426be6

        return response()
            ->json([
                'success' => 'Data Updated.',
            ]);
    }

    public function destroy($id) {
        $name = SuratPeringatan::find($id);
        $name->delete();
    }
}
