<?php

namespace App\Http\Controllers\Admin;

use App\Shop\Categories\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Yajra\Datatables\Datatables;

class CategoryController extends Controller
{
    /**
     * @var Category
     */
    private $category;

    /**
     * CategoryController constructor.
     *
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Find the category via the slug
     *
     * @param string $slug
     *
     * @return Category
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.category.index');
    }

    public function categoryData()
    {
        return Datatables::of(Category::query())
            ->addColumn('action', function ($category) {
                return '<a href="category/'.$category->id.'/edit" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>'.'<span data-id="'.$category->id.'" href="category/'.$category->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-remove""></i> Delete</span>';
            })
            ->editColumn('imgPath', function($category){
                return !empty($category->imgPath) ?  $category->imgPath : '/images/nopic.jpg';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = new Category(); // 70
        $title = 'Добавление категории'; // 70
        return view('admin.category.edit', compact('category', 'title')); // 70
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category(); // 72
        $category->name = $request->name; // 72
        $category->slug = $request->slug; // 72
        $category->description = $request->description; // 72
        $images = explode(',', $request->imgPath); //82 - админ может выбрать 2 картинки но в БД записываем одну!
        $category->imgPath = $images[0]; // 82 - берем из этого массивка 0 елемент - 1я картинка
        $category->save(); // 72
        return redirect('/admin/category'); // 72
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = new Category(); // СДЕЛАТЬ ДОМА
        $title = 'Редактирование категории'; // 
        return view('admin.category.edit', compact('category', 'title'));
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();
    }
}
