<?php

namespace App\Http\Controllers\product;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdatePostRequest;
use App\services\Media;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('chiled');
    }
    public function create()
    {
        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->orderBy('name_en')
            ->orderBy('id')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->orderBy('name_en')
            ->orderBy('id')->get();
        return view('products.create', compact('brands', 'subcategories'));
    }

    public function all()
    {
        $products = DB::table('products')
            ->select()
            ->get();
        return view('products.allproduct', compact('products'));
    }

    public function edit($id)
    {
        $product = DB::table('products')->where('id', '=', $id)->first();
        $brands = DB::table('brands')->select('id', 'name_en', 'name_ar')->orderBy('name_en')
            ->orderBy('id')->get();
        $subcategories = DB::table('subcategories')->select('id', 'name_en', 'name_ar')->orderBy('name_en')
            ->orderBy('id')->get();
        return view('products.edit', compact('product', 'brands', 'subcategories'));
    }
    public function store(StoreProductRequest $request)
    {
        $data = $request->except('_token', 'image');
       
        // upload image
       
        $data['image'] = Media::upload($request->image , 'product');
        // insert into db
        DB::table('products')->insert($data);
        // redirect back with success message
        return redirect()->back()->with('success', 'Product Created Successfully');
    }

    public function update(UpdatePostRequest $request, $id)
    {

        $data = $request->except('_token', '_method', 'image');
       
        // upload image
        if ($request->has('image')) {
            $product = DB::table('products')->select('image')->where('id', $id)->first();
            $photoPath = public_path('img\product');
            $oldimage=$photoPath.'\\'. $product->image;
            Media::delete($oldimage); 
           $data['image'] = Media::upload($request->image , 'product');
        }

        // insert into db
        DB::table('products')->where('id',$id)->update($data);
        // redirect back with success message
        return redirect()->back()->with('success', 'Product Updated  Successfully');
    }

    public function destroy($id){
        
            $product = DB::table('products')->select('image')->where('id', $id)->first();
            $photoPath = public_path('img\product');
            $oldimage=$photoPath.'\\'. $product->image;
            if(file_exists($oldimage)){
                unlink($oldimage);
            }

            DB::table('products')->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Product Deleted  Successfully');
    }
    
}
