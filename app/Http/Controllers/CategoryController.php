<?php

namespace App\Http\Controllers;

use App\Category;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\Http\Requests;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('category.index', ['categories' => $category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->parent_id = $request->input('parent_id');
        $category->name = $request->input('name');

        $category->save();

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        return view('category.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('category.edit', ['category' => $category]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->parent_id = $request->input('parent_id');
        $category->name = $request->input('name');
//        $category->user_id = auth()->user()->id;

        $category->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('home');
    }

    public function processForm()
    {
        $category = Input::get('category');

        return Redirect::to('showMessages/' . $category);
    }

    public function showMessages(Category $category)
    {
        if ($category->parent_id && $category->id != $category->parent_id) {
            $id_parent = $category->parent_id;
            $query = 'SELECT * FROM categories WHERE parent_id = "' . $id_parent . '"';
            $sub_categories = DB::select($query);
        }
        $id_category = $category->id;
        $qry = 'SELECT * FROM messages WHERE category_id = "' . $id_category . '"';
        $message = DB::select($qry);

        return view('category.show', ['message' => $message], ['category' => $category], ['sub_categories' => $sub_categories]);
    }

}


