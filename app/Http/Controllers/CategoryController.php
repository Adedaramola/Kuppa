<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request)
    {
        Category::create(['name' => $request->name]);

        return response()->json([
            'message' => 'Category created successfully'
        ], 201);
    }
}
