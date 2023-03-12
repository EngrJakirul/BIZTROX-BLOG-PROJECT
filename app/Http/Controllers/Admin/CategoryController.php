<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $category, $categories;

    public function addCategory()
    {
        return view('admin.category.add_category.index');
    }
    public function newCategory(Request $request)
    {
        Category::newCategory($request);
        return redirect()->back()->with('success', 'Category added successfully');
    }
    public function manageCategory()
    {
        $this->categories = Category::orderBy('id', 'DESC')->get();
        return view('admin.category.manage_category.index', ['categories' => $this->categories]);
    }
    public function editCategory($id)
    {
        $this->category = Category::find($id);
        return view('admin.category.edit_category.index', [
            'category' => $this->category,
            ]);
    }
    public function updateCategory(Request $request, $id)
    {
        Category::updateCategory($request, $id);
        return redirect()->back()->with('info', 'Category Update successfully');
    }
    public function deleteCategory($id)
    {
        Category::deleteCategory($id);
        return redirect()->back()->with('error', 'Category Delete successfully');
    }
}
