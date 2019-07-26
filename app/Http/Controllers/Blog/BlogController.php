<?php

namespace DemoLaravel\Http\Controllers\Blog;

use Illuminate\Http\Request;
use DemoLaravel\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index() {
        return view('blog');
    }
}
