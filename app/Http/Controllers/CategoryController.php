<?php
use App\Category;

class Controller extends BaseController
{
public function index(Category $category)
{
    return view('categories.index')->with(['posts' => $category->getByCategory()]);
}
}