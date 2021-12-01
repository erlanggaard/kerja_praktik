<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dataProduk = Produk::paginate(24);
        return view('produk.produk', compact('dataProduk'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Produk::create([
            'nama' => $request->nama_barang,
            'stok' => $request->stok,
            'tanpa stok' => $request->tanpastok,
            'jenis barang' => $request->jenis_barang,
            'foto' => $request->foto,
            'status' => $request->status,
            'letak rak' => $request->letak_rak,
            'merk' => $request->merk,
            'jenis barang' => $request->jenis_barang,
            'keterangan' => $request->keterangan,
            'harga beli' => $request->harga_beli,
            'harga jual' => $request->harga_jual,
        ]);

        return redirect('produk')->with('success', 'Task Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataProduk = Produk::find($id);
        return view('produk.detail', compact('dataProduk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Produk::findOrFail($id);
        return view('produk.edit', compact('prod'));
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
        Produk::find($id)->update([
            'nama' => $request->nama_barang,
            'stok' => $request->stok,
            'tanpa stok' => $request->tanpastok,
            'jenis barang' => $request->jenis_barang,
            'foto' => $request->foto,
            'status' => $request->status,
            'letak rak' => $request->letak_rak,
            'merk' => $request->merk,
            'jenis barang' => $request->jenis_barang,
            'keterangan' => $request->keterangan,
            'stok menipis' => $request->stokmenipis,
            'harga beli' => $request->harga_beli,
            'harga jual' => $request->harga_jual,
        ]);

        return redirect('produk')->with('success', 'Task Created Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produk::find($id)->delete();
        return back()->with('success', 'produk deleted successfully');
    }
}
