<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Crypt;

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
        $post = Produk::create([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'tanpastok' => $request->tanpastok,
            'jenis_barang' => $request->jenis_barang,
            'foto' => $request->foto,
            'status' => $request->status,
            'letak_rak' => $request->letak_rak,
            'merk' => $request->merk,
            'jenis_barang' => $request->jenis_barang,
            'keterangan' => $request->keterangan,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'kode_user' => Crypt::encryptString($request->user()->id)
        ]);
        $post->update([
            'kode_barang' => Crypt::encryptString($post->id)
        ]);
        if ($post) {
            return redirect()
                ->route('produk.stock-produk')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
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
        $post = Produk::find($id)->update([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'tanpastok' => $request->tanpastok,
            'jenis_barang' => $request->jenis_barang,
            'foto' => $request->foto,
            'status' => $request->status,
            'letak_rak' => $request->letak_rak,
            'merk' => $request->merk,
            'jenis_barang' => $request->jenis_barang,
            'keterangan' => $request->keterangan,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'kode_user' => Crypt::encryptString($request->user()->id),
            'kode_barang' => Crypt::encryptString($id),
            'stokmenipis' => $request->stokmenipis
        ]);

        if ($post) {
            return redirect()
                ->route('produk.stock-produk')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
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
