<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(Request $request){
        $search_query = $request->query('search');

        $products = Product::where('name', 'LIKE', "%$search_query%")->paginate(10)->appends(['search' => $search_query]);
        return view('home', compact('products'));
    }

    // public function index(Request $request){
    //     $search_query = $request->query('search');

    //     $products = Product::where('name', 'LIKE', "%$search_query%")->paginate(1)->appends(['search' => $search_query]);
    //     return view('home', compact('products'));
    // }

    public function showAddPage(){
        $categories = Category::all();
        return view('add')->with(compact('categories'));
    }

    public function showUpdatePage($id){
        $product = DB::table('products')->where('id', $id)->first();
        return view('update', compact('product'));
    }

    // public function showProfilePage($id){
    //     $user = DB::table('users')->where('id', $id)->first();
    //     return view('profile', compact('user'));
    // }

    public function showProfilePage(){
        return view('profile');
    }

    public function showLoginPage(){
        return view('login');
    }

    // public function showCategory(){
    //     return view('category');
    // }

    public function showCategory(Request $request){
        $search_query = $request->query('search');
        $products = Product::where('name', 'LIKE', "%$search_query%")->paginate(10)->appends(['search' => $search_query]);

        $sort = $products->sortBy('name');
        // $sorted->values()->all();
        return view('home', compact('products'));


    }

    public function showRegisterPage(){
        return view('register');
    }

    public function showDetailPage($id){
        $product = DB::table('products')->where('id', $id)->first();
        return view('detail', compact('product'));
    }
}
