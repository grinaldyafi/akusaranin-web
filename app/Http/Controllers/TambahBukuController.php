<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Http\Request;

class TambahBukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahbuku = User::get();
        return view('tambah-buku' , compact('tambahbuku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form-tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'judul_buku' => $request -> inputJudul,
            'genre' => $request->inputGenre,
            'tahun_terbit' => $request->inputTahun,
        ]);
        return redirect()->route('tambah-buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tambahbuku = User::where('id', $id)->first();
        return view('detail-buku', compact('tambahbuku'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tambahbuku = User::where('id', $id)->first();
        return view('form-ubah', compact('tambahbuku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tambahbuku = User::find($id);
        $tambahbuku->judul_buku = $request->inputJudul;
        $tambahbuku->genre = $request->inputGenre;
        $tambahbuku->tahun_terbit = $request->inputTahun;
        $tambahbuku->save();

        return redirect()->route('tambah-buku.index');
    }
        
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tambahbuku = User::find($id);
        $tambahbuku->delete();

        return redirect()->route('tambah-buku.index');
    }
}
