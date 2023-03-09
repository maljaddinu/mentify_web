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
        $webinarCategory = Webinar::select('webinars_category')->groupBy('webinars_category')->get();
        return Inertia::render('Home',['webinarCategory' => $webinarCategory]);
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

    public function searchWebinar(Request $request)
    {
        $string = $request->input('string');
        $webinarCategory = Webinar::where('webinars_name','like','%'.$string.'%')->get();
        return $webinarCategory;
    }

    public function searcCategoryhWebinar(Request $request)
    {
        $category = $request->input('category');
        $webinarCategory = Webinar::where('webinars_category',$category)->get();
        return $webinarCategory;
    }
}
