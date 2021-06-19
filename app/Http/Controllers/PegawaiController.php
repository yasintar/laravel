<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pegawai;
use PDF;
use Dompdf\Dompdf;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pegawai = Pegawai::all();

        $pegawai = Pegawai::paginate(10);

        return view('home', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'p_nip' => 'required|unique:pegawais|size:11',
            'p_nama' => 'required', 
            'p_tplahir' => 'required', 
            'p_alamat' => 'required', 
            'p_tglahir' => 'required|date|date_format:Y-m-d', 
            'p_gender' => 'required|size:1', 
            'p_golongan' => 'required', 
            'p_eselon' => 'required', 
            'p_jabatan' => 'required', 
            'p_tptugas' => 'required', 
            'p_agama' => 'required', 
            'p_ukerja' => 'required', 
            'p_nohp' => 'required', 
            'p_npwp' => 'required' 
          ]);

        $input = $request->all();
        $pegawai = Pegawai::create($input);

        return redirect('home')->with('status', 'Data Pegawai Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawais.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawais.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'p_nip' => 'required|size:11',
            'p_nama' => 'required', 
            'p_tplahir' => 'required', 
            'p_alamat' => 'required', 
            'p_tglahir' => 'required|date|date_format:Y-m-d', 
            'p_gender' => 'required|size:1', 
            'p_golongan' => 'required', 
            'p_eselon' => 'required', 
            'p_jabatan' => 'required', 
            'p_tptugas' => 'required', 
            'p_agama' => 'required', 
            'p_ukerja' => 'required', 
            'p_nohp' => 'required', 
            'p_npwp' => 'required' 
          ]); 
        
        Pegawai::where('p_id', $pegawai->p_id)->update([
            'p_nip' => $request->p_nip,
            'p_nama' => $request->p_nama, 
            'p_tplahir' => $request->p_tplahir,
            'p_alamat' => $request->p_alamat, 
            'p_tglahir' => $request->p_tglahir, 
            'p_gender' => $request->p_gender, 
            'p_golongan' => $request->p_golongan, 
            'p_eselon' => $request->p_eselon, 
            'p_jabatan' => $request->p_jabatan, 
            'p_tptugas' => $request->p_tptugas, 
            'p_agama' => $request->p_agama, 
            'p_ukerja' => $request->p_ukerja, 
            'p_nohp' => $request->p_nohp, 
            'p_npwp' => $request->p_npwp
         ]);

         return redirect('home')->with('status', 'Data Pegawai Berhasil Diubah.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {

        Pegawai::destroy($pegawai->p_id);
        return redirect('home')->with('status', 'Data Pegawai Berhasil Dihapus.');

    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $pegawai = Pegawai::where('p_nama', 'like', "%" . $keyword . "%")
                        ->orWhere('p_nip', 'LIKE', '%'.$keyword.'%')                        
                        ->orWhere('p_alamat', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_tplahir', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_tglahir', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_gender', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_golongan', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_jabatan', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_tptugas', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_agama', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_ukerja', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_eselon', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_nohp', 'LIKE', '%'.$keyword.'%')
                        ->orWhere('p_npwp', 'LIKE', '%'.$keyword.'%')      
                        ->paginate(10);
        // dd($pegawai);
		
        return view('home', compact('pegawai'));
    }

    public function print()
    {
        
        $pegawai = Pegawai::all();
        $pdf = PDF::loadView('pegawais.print', compact('pegawai'))->setPaper('A4', 'landscape');
        
        return $pdf->download('daftar pegawai.pdf');
        
    }
}
