<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     *
     */
    public function __construct(){
        $this->beforeFilter('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::Orderby('id', 'desc')->paginate(8);
        return view('admin.warehouse.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Redirector $redirect
     * @return \Illuminate\Http\Response
     */
    public function create(Redirector $redirect)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param Redirector $redirect
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Redirector $redirect)
    {
        /*Validacion de campos
        $rules = array(
          'name' => 'required|max:50',
        );
        $validation = Validator::make(Input::all(), $rules);
        if($validation->fails()){
            return $redirect->back()->withInput()->withErrors($validation);
        }
        /*Sitodo esta bien guardamos*/

        $category = new Category($request->all());
        $category->save();
        return $redirect->route('category.index')->with('status', 'ok_create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id_category = Input::get($id=5);
        $category = Category::find($id_category);
        dd($category);
        $data = array(
            'success' => true,
            'id' => $category->id,
            'description' => $category->description,
        );
        return Response::json($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        Category::destroy($id);

        return redirect()->route('category.index')->with('status', 'ok_delete');
    }

    private function beforeFilter($string)
    {
    }
}
