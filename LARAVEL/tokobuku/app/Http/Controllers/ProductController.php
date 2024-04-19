<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  public function index()
  {
    return view('product.index', [
      'products' => Product::get(),
    ]);
  }

  public function create()
  {
    return view('product.create');
  }
  public function store(Request $request)
  {
    $validated = $request->validate([
      'id' => ['required', 'unique:products,id'],
      'nama_produk' => ['required', 'min:3'],
      'harga_satuan' => ['required', 'numeric',],
      'stok_jual' => ['required', 'numeric'],
      'stok_pinjam' => ['required', 'numeric'],
    ]);

    $product = new Product();
    $product->id = $request->id;
    $product->nama_produk = $request->nama_produk;
    $product->harga_satuan = $request->harga_satuan;
    $product->stok_jual = $request->stok_jual;
    $product->stok_pinjam = $request->stok_pinjam;
    $product->save();

    session()->flash('success', 'Data berhasil di tambahkan');

    return redirect('/product');
  }

  public function edit($id)
  {
    $product = Product::find($id);
    return view('product.edit', [
      'product' => $product
    ]);
  }

  public function update(Request $request, $id)
  {
    $validated = $request->validate([
      'nama_produk' => ['required', 'min:3'],
      'harga_satuan' => ['required', 'numeric',],
      'stok_jual' => ['required', 'numeric'],
      'stok_pinjam' => ['required', 'numeric'],
    ]);

    $product = Product::find($id);
    $product->id = $request->id;
    $product->nama_produk = $request->nama_produk;
    $product->harga_satuan = $request->harga_satuan;
    $product->stok_jual = $request->stok_jual;
    $product->stok_pinjam = $request->stok_pinjam;
    $product->save();

    session()->flash('info', 'Data berhasil di perbarui');

    return redirect('/product');
  }

  public function destroy($id)
  {
    $product = Product::find($id);
    $product->delete();
    session()->flash('danger', 'Data berhasil di hapus');
    return redirect('/product');
  }
}
