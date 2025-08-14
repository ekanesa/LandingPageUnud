<?php

namespace App\Http\Controllers;

use App\Models\ArticleNews;
use App\Models\BannerAdvertisemenet;
use Illuminate\Http\Request;

class ArticleNewsController extends Controller
{
    /**
     * Display a listing of the articles.
     */
    public function index()
    {
        // Get ALL articles for the list page
        $articles = ArticleNews::latest()->get(); // Using latest()->get() is common
        $banners = BannerAdvertisemenet::all(); 

        // Return the INDEX view (the list of articles)
        return view('article_news.index', compact('articles', 'banners'));
    }
    
    /**
     * Display the specified article.
     */
    public function show($slug)
    {
        // Get ONE article for the detail page
        $article = ArticleNews::where('slug', $slug)->firstOrFail();

        // Return the SHOW view (the single article page)
        return view('article_news.show', compact('article'));
    }
}