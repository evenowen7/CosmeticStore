<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function addMovie(Request $request){
        //Insert Movie ke Database

        $productName = $request->product_name;
        $productCategory = Category::where('name', $request->product_category)->first();
        $productPrice = $request->product_price;
        $productImage = $request->file('product_image');

        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_category' => 'required',
            'product_image' => 'required|mimes:png,jpg'

        ]);

        Storage::putFileAs('/public/image/', $productImage, $productImage->getClientOriginalName());
        DB::table('products')->insert([
            'name' => $productName,
            'price' => $productPrice,
            'category_id' => $productCategory->id,
            'image' => $productImage->getClientOriginalName(),
        ]);

        return redirect('/');
    }

    public function deleteProduct($id){
        DB::table('products')->where('id', $id)->delete();
        return redirect('/');
    }

    public function updateProduct(Request $request){
        $name = $request->product_name;
        $price = $request->product_price;
        $this->validate($request,[
            'product_name' => 'required | min:3',
            'product_price' => 'required', 'max:3',
            'product_image' => 'mimes:png,jpg'
        ]);
        $img = $request->file('product_image');

        if($img!=null){
            Storage::putFileAs('/public/Image', $img, $img->getClientOriginalName());
            DB::table('products')->where('id',$request->route('id'))->update([
                'name' => $name,
                'price' => $price,
                'image'=> $img->getClientOriginalName(),
            ]);

        }else{
            DB::table('products')->where('id',$request->route('id'))->update([
                'name' => $name,
                'price' => $price,
            ]);
        }


        return redirect('/');

    }

    public function updateProfile(Request $request){
        $name = $request->user_name;
        $email = $request->user_email;
        $role = $request->user_role;
        $password = $request->user_password;
        $this->validate($request,[
            'user_name' => 'required | min:3',
            'user_email' => 'required',
            'user_role' => 'required',
            'user_password' => 'required'
        ]);
            DB::table('user')->where('id',$request->route('id'))->update([
                'name' => $name,
                'email' => $email,
                'role' => $role,
                'password' => $password
            ]);
            return redirect('/');
        }

        public function cart(Request $request){
            $search_query = $request->query('search');
            $products = Product::where('name', 'LIKE', "%$search_query%")->paginate(10)->appends(['search' => $search_query]);
            return view('cart', compact('products'));
        }

        public function history(){

            return view('history');
        }

    }


