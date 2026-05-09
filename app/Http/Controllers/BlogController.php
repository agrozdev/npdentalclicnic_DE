<?php

namespace App\Http\Controllers;

use App\Support\BlogRepository;
use Illuminate\Contracts\View\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function index(): View
    {
        return view('blog.index', [
            'posts' => BlogRepository::all(),
        ]);
    }

    public function show(string $slug): View
    {
        $post = BlogRepository::find($slug);

        if (! $post) {
            throw new NotFoundHttpException();
        }

        return view('blog.show', [
            'post' => $post,
            'related' => BlogRepository::related($slug),
        ]);
    }
}
