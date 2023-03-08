<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Comment;
use App\Models\Webinar;

class MainPageController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }   

    public function getWebinar()
    {
        $webinars = Webinar::all();
        return $webinars;
    }

    public function getComment()
    {
        $comment = Comment::all();
        return $comment;
    }
}
