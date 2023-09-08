<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{
    User,
    Product,
};
use App\Mail\WelcomeNewUSer;

use Illuminate\Support\Facades\Mail;
use App\PasswordGenerator;
class DashboardController extends Controller
{
    public function index()
    {
        $user = User::count();
        $user_active = User::where('active', 1)->count();
        $product = Product::count();
        $item_product = Product::take(10)->get();
        $product_active = Product::where('show', 1)->count();
        return view('admin.admin',compact('user', 'user_active', 'product', 'product_active', 'item_product'));
    }
    public function user()
    {
        $user = User::all();
        return view('admin.user', compact('user'));
    }
    public function adduser(Request $request)
    {
        if($request->all()){
            $request->validate([
                'name'=> 'required',
                'email'=> 'required|email|max:255',
                'notelp' => 'required'
            ]);
           
            if($request){
                $password = PasswordGenerator::generate(16);
                
                $newUser = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'notelp' => $request->notelp, 
                    'password'=> bcrypt($password),
                    'role' => 'user',
                    'active'=> 0,
                ]);
              
                Mail::to($newUser->email)->send(new WelcomeNewUser($password, $newUser));
                $request->session()->flash('sukses');
                return redirect('/dashboard/manajemen-user');
            }
        }else{
            return view('admin.adduser');
        }
    }

    public function edituser(Request $request, $id)
    {
        if($request->all()){
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->notelp = $request->notelp;
            $user->save();
            $request->session()->flash('sukses-edit');
            return redirect()->back();
        }else{
            $user = User::find($id);
            return view('admin.edituser', compact('user'));
        }
    }
    public function hapususer(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();
        $request->session()->flash('sukses-hapus');
        return redirect('/dashboard/manajemen-user');
    }
    public function status(Request $request, $slug, $id)
    {
        if($slug == 'aktif'){
            $user = User::find($id);
            $user->active = 1;
            $user->save();
            $request->session()->flash('aktif-status');
            return redirect()->back();
        }else{
            $user = User::find($id);
            $user->active = 0;
            $user->save();
            $request->session()->flash('nonaktif-status');
            return redirect()->back();
        }
    }
    public function product()
    {
        $product = Product::all();
        return view('admin.product', compact('product'));
    }
    public function addproduct(Request $request)
    {
        if($request->all()){
           
            $request->validate([
                'name_product'=> 'required',
                'gambar_product'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'price' => 'required'
            ]);
            if($request){
                if ($request->hasFile('gambar_product')) {
                    $image = $request->file('gambar_product');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $imageName); // Menyimpan gambar di folder public/uploads
                    $product = new Product;
                    $product->name_product = $request->name_product;
                    $product->gambar_product = $imageName;
                    $product->price = $request->price;
                    $product->save();
                    $request->session()->flash('sukses-product');
                    return redirect('/dashboard/manajemen-product');
                }
            }
        }else{
            return view('admin.addproduct');
        }
    }
    public function editproduct(Request $request, $id)
    {
        if($request->all()){
            $product = Product::find($id);
            $request->validate([
                'name_product'=> 'required',
                'gambar_product'=> 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'price' => 'required'
            ]);
            if ($request->hasFile('gambar_product')) {
                $image = $request->file('gambar_product');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName); // Menyimpan gambar di folder public/uploads
                unlink('images/'.$product->gambar_product);
            }else{
                $imageName = $product->gambar_product;
            }
            $product->name_product = $request->name_product;
            $product->gambar_product = $imageName;
            $product->price = $request->price;
            $product->save();
            $request->session()->flash('sukses-editproduct');
            return redirect()->back();
            
        }else{
            $product = Product::find($id);
            return view('admin.editproduct', compact('product'));
        }
    }
    public function hapusproduct(Request $request, $id)
    {
        $product = Product::find($id);
        unlink('images/'.$product->gambar_product);
        $product->delete();
        $request->session()->flash('sukses-hapusproduct');
        return redirect('/dashboard/manajemen-product');
    }
    public function statusproduct(Request $request, $slug, $id)
    {
        if($slug == 'aktif'){
            $product = Product::find($id);
            $product->show = 1;
            $product->save();
            $request->session()->flash('aktif-status');
            return redirect()->back();
        }else{
            $product = Product::find($id);
            $product->show = 0;
            $product->save();
            $request->session()->flash('nonaktif-status');
            return redirect()->back();
        }
    }
}
