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

	function checkout()
	{
		$data['list_belanja'] = ClientProduk::all();
		return view('user/checkout', $data);
	}
	
	function create(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('user/keranjang', $data);
	}
	
	function store(Produk $produk)
	{
		$data['produk'] = $produk;
		$check = new ClientProduk;
		$check->nama = request('nama');
		$check->harga = request('harga');
		$check->jumlah = request('jumlah');
		$check->save();

		return redirect('/')->with('success', 'Barang Berhasil di Masukan ke Keranjang');
	}
	
	function show(Produk $produk)
	{
		$data['produk'] = $produk;
		return view('user/detail', $data);
	}
	
	function edit(ClientProduk $produk)
	{
		$data['produk'] = $produk;
		return view('user/edit', $data);
		
	}
	
	function update(ClientProduk $produk)
	{
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->jumlah = request('jumlah');
		$produk->save();

		return redirect('checkout')->with('success', 'Barang Berhasil di Ubah pada Keranjang');
	}
	
	function destroy(ClientProduk $produk)
	{
		$produk->delete();

		return redirect('checkout')->with('danger', 'Barang Berhasil di Hapus dari Keranjang');
	}
}