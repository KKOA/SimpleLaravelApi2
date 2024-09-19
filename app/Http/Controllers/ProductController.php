<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
	//
	public function index()
	{
		$products = Products::all();
		return response()->json($products);
	}

	public function store(Request $request)
	{
		$product = new Products();
		$product->name = $request->name;
		$product->author = $request->author;
		$product->published_date = $request->published_date;
		$product->save();

		return response()->json([
			"message" => "Product Added.",
		], 201);
	}

	public function show($id)
	{
		$product = Products::find($id);
		if (empty($product)) {
			return response()->json([
				"message" => "Product not found"
			], 404);
		}
		return response()->json($product);
	}

	public function update(Request $request, $id)
	{
		if (!Products::where('id', $id)->exists()) {
			return response()->json([
				"message" => "product not found"
			], 404);
		}
		$product = Products::find($id);
		$product->name = $request->name ?? $product->name;
		$product->author =  $request->author ?? $product->author;
		$product->published_date = $request->published_date ?? $product->published_date;
		$product->save();

		return response()->json([
			"message" => "Product Updated"
		], 204);
	}

	public function destroy($id)
	{
		if (!Products::where('id', $id)->exists()) {
			return response()->json([
				"message" => "Product not found"
			], 404);
		}

		$product = Products::find($id);
		$deletedProductName = $product->title;
		$product->delete();

		return response()->json([
			"message" => "$$deletedProductName  product deleted"
		], 202);
	}
}
