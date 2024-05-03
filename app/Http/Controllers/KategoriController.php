<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable){
        return $dataTable->render('kategori.index');
    }


    // public function index(Request $request){
    //     $kategories = KategoriModel::all(); // Replace 'Kategori' with your category model name
    //     if ($request->ajax()) {
    //         return response()->json($kategories);
    //     }
    //      return view('kategori.index', compact('kategories'));

    //     DB::table('m_kategori')->where('kategori_kode')->delete();
    // }

    // public function index(Request $request) {
    //     $dtKategori = KategoriModel::with('barang');
    //     if ($request->ajax()) {
    //         return response()->json($dtkategori);
    //     }
    //     return view('kategori.index', compact('dtKategori'));
    // }

    public function create() {
        return view('kategori.create');
    }

    public function store(Request $request){
        KategoriModel::create([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);
        return redirect('/kategori');
    }

    public function edit($id)
    {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function ubah($id)
    {
        $kategori = KategoriModel::find($id);
        return view('kategori.ubah', ['data' => $kategori]);
    }

    public function ubah_simpan($id, Request $request)
    {
        $kategori = KategoriModel::find($id);

        $kategori->kategori_kode = $request->kodeKategori;
        $kategori->kategori_nama = $request->namaKategori;


        $kategori->save();

        return redirect('/kategori');
    }

    public function hapus($id)
    {
        $kategori = KategoriModel::find($id);
        $kategori->delete();
        return redirect('/kategori');
    }
    // public function edit() {
    //     return view('kategori.edit');
        // return view('kategori.edit');
        // $kategori = KategoriModel::find($id);
        // return view('kategori.edit', compact($kategori));
        // return view('edit')->with('kategori', $kategori);
        // return view('kategori_edit', ['kategori', => $kategori]);
        // return view('edit', compact($kategori));
    // }

    // public function index2(){
    //     $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //     return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row. ' baris';
    // }

    // public function delete() {
    //     DB::table('m_kategori')->where('kategori_kode', '$id')->delete(); 
    //     return view('kategori.delete');
    // }

    // public function delete(Request $request, KategoriModel $kategori) {
    //     $kategori = KategoriModel::findOrFail($kategori->id);
    //     $this->authorize('delete', $kategori);

    //     $kategori->delete();

    //     // Optional: Flash message for success
    //     // $request->session()->flash('success', 'Kategori berhasil dihapus!');

    //     // return redirect()->route('kategori.index');
    // }
    
}
    // public function index(){
    //     /*$data =
    //     [
    //         'kategori_kode' => 'SNK',
    //         'kategori_nama' => 'Snack / Makanan Ringan',
    //         'created_at' => now(),
    //     ];
    //     DB::table('m_kategori')->insert($data);
    //     return 'Insert data baru berhasil';*/

    //     //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'camilan']);
    //     //return 'Update data berhasil, Jumlah data yang di update :' . $row.' baris';

    //     //$row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    //    // return 'Delete data berhasil. Jumlah data yang dihapus: ' .$row. ' baris';

    //    $data = DB::select('select * from m_kategori');
    //    return view('kategori', ['data' => $data]);
    // }
