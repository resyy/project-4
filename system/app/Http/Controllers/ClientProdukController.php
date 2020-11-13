<?php 


namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\ClientProduk;

/**
 * 
 */
class ClientProdukController extends Controller
{
	
	function index()
	{
		$data['list_produk'] = Produk::all();
		return view('user/index', $data);
	}
	
	function create(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('user/keranjang', $data);
	}
	
	function store()
	{
		$check = new ClientProduk;
		$check->nama = request('nama');
		$check->harga = request('harga');
		$check->jumlah = request('jumlah');
		$check->save();

		return redirect('keranjang')->with('success', 'Barang Berhasil di Masukan ke Keranjang');
	}
	
	function show(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('user/show', $data);
	}
	
	function edit(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('user/edit', $data);
		
	}
	
	function update(ClientProduk $produk)
	{
		$check->nama = request('nama');
		$check->produk = request('produk');
		$check->harga = request('harga');
		$check->jumlah = request('jumlah');
		$check->save();

		return redirect('keranjang')->with('success', 'Barang Berhasil di Ubah pada Keranjang');
	}
	
	function destory(ClientProduk $produk)
	{
		$produk->delete();

		return redirect('admin/produk')->with('danger', 'Data Berhasil di Hapus');
	}
}