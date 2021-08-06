<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\ProdukTerjual;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\produkTidakterjualModel;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$barang = DB::table('barang')->get();
        $kontak = Supplier::all();
        $produkCount = Produk::get()->count();
        $terjualCount = ProdukTerjual::get()->count();
        $best_seller = DB::table('detail_penjualan')
            ->select(DB::raw('COUNT(detail_penjualan.qty) AS total_penjualan, detail_penjualan.kode_barang'), 'nama_barang')
            ->join('barang', 'barang.kode_barang', '=', 'detail_penjualan.kode_barang')
            ->groupBy('detail_penjualan.kode_barang')
            ->groupBy('barang.nama_barang')
            ->orderBy('total_penjualan', 'desc')
            ->paginate(15);
        $grafikstok = DB::select('SELECT nama_barang,stok FROM barang ORDER by stok DESC LIMIT 5');
        $label = [];
        $jumlah = [];
        foreach ($grafikstok as $item) {
            $label[] = $item->nama_barang;
            $jumlah[] = $item->stok;
        }
        $tidakTerjualCount = produkTidakterjualModel::get()->count();
        $data = [
            'kontakAll' => $kontak,
            'produkCount' => $produkCount,
            'best_seller' => $best_seller,
            'terjualCount' => $terjualCount,
            'tidakTerjualCount' => $tidakTerjualCount,
            'label' => $label,
            'jumlah' => $jumlah
        ];
        return view('halaman_admin.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
