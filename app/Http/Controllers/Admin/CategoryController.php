<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use Exception;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        // Fetch all posts for display using the service
        // $posts = $this->categoryService->getAll();
        return view('admin.categories.index', ['categories' => $this->categoryService->getAll()]);
    }


    public function edit($post)
    {

        // Show form to edit an existing post
        return view('admin.categories.create', ['categoryId' => $post]);
    }

    public function create()
    {
        return view('admin.categories.create',['categoryId' => Null]);
    }



}
