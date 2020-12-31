<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Components\Recusive;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function create()
    {
        //get data from Category $category
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->CategoryRecusive();
       
        return view('category.add', compact('htmlOption'));
    }

    public function index()
    {
        return view('category.index');
    }

    public function store(Request $request)
    {
        $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' =>  Str::slug($request->name)
        ]);
        return Redirect()->route('category.index');
    }
}
