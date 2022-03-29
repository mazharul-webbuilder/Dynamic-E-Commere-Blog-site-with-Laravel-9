<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\Products;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $products;
    private $result;

    private $blogs;
    private $blog;

    public function home()
    {
        $this->products = Products::getAllProduct();
        return view('home',['products' => $this->products]);
    }

    public function products()
    {
        $this->products = Products::getAllProduct();
        return view('products', ['products' => $this->products]);
    }
    public  function detail($id)
    {
        $this->products = Products::getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id'] == $id)
            {
                $this->result = $product;
            }
        }
        return view('detail', ['product' => $this->result]);
    }
    public function blogs()
    {
        $this->blogs = Blogs::getAllBlogs();
        return view('blogs',['blogs' => $this->blogs]);
    }
    public function blogDetails($id)
    {
        $this->blogs = Blogs::getAllBlogs();
        foreach ($this->blogs as $blog)
        {
            if ($blog['id'] == $id)
            {
                $this->blog = $blog;
            }
        }
        return view('blogDetails',['blog' => $this->blog]);
    }
    public function registration()
    {
        return view('registration');
    }
    public function login()
    {
        return view('login');
    }

}
