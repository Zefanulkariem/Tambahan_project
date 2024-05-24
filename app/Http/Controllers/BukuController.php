<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use App\Models\Penulis;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buku = new Buku;
        $buku->judul_buku = $request->judul_buku;
        $buku->deskripsi = $request->deskripsi;
        $buku->kategori = $request->kategori;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        $buku->id_penulis = $request->id_penulis;

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/penulis', $name);
            $buku->cover= $name;
        }

        $buku->save();
        return redirect()->route('buku.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku/show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
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
        $buku = Buku::findOrFail($id);
        $buku->judul_buku = $request->judul_buku;
        $buku->deskripsi = $request->deskripsi;
        $buku->kategori = $request->kategori;
        $buku->tanggal_terbit = $request->tanggal_terbit;
        // $buku->id_penulis = $request->id_penulis;

        if($request->hasFile('cover')){
            $img = $request->file('cover');
            $name = rand(1000,9000) . $img->getClientOriginalName();
            $img->move('image/penulis', $name);
            $buku->cover= $name;
        }
        
        $buku->save();
        return redirect()->route('buku.index')->with('success', 'Data berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Data berhasil dihapus');
    }
}
