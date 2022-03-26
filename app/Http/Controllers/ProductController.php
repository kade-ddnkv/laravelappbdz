<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Client\Events\RequestSending;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rootCategories = Category::whereNull('parent_id')->get();
        return view('products.index')->with(['rootCategories' => $rootCategories]);
    }

    public function getAllProductsCards(Request $request) {
        $category_id = $request->query('category_id', 'no');
        if ($category_id === 'no') {
            $products = Product::paginate(12);
        } else {
            $products = Product::whereCategoryId($category_id)->paginate(12);
        }
        return view('products.all_products_cards')->with(['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['max:500'],
            'price' => ['required', 'numeric', 'min:1', 'max:1000000'],
            'image_src' => ['required', 'active_url'],
            'category_id' => Rule::exists('categories', 'id'),
        ]);

        Product::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image_src' => $request['image_src'],
            'category_id' => $request['category_id'],
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show')->with(['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', ['categories' => $categories, 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['max:500'],
            'price' => ['required', 'numeric', 'min:1', 'max:1000000'],
            'image_src' => ['required', 'active_url'],
            'category_id' => Rule::exists('categories', 'id'),
        ]);

        $product->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image_src' => $request['image_src'],
            'category_id' => $request['category_id'],
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return $this->index();
    }
}
