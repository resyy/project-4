<?php 


namespace App\Http\Controllers;
use App\Models\Produk;

/**
 * 
 */
class ProdukController extends Controller
{
	
	function index()
	{
		$data['list_produk'] = Produk::all();
		return view('admin/produk/index', $data);
	}
	
	function create()
	{
		return view('admin/produk/create');
	}
	
	function store()
	{
		$produk = new Produk;
		$produk->brand = request('brand');
		$produk->nama = request('nama');
		$produk->harga = request('harga');
		$produk->stok = request('stok');
		$produk->kategori = request('kategori');
		$produk->deskripsi = request('deskripsi');
		$produk->save();

		return redirect('admin/produk');
	}
	
	function show($produk)
	{
		$data['produk'] = Produk::find($produk);
		return view('admin/produk/show', $data);
	}
	
	function edit()
	{
		
	}
	
	function update()
	{
		
	}
	
	function destory()
	{
		
	}
}