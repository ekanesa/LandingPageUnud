<?php

namespace App\Http\Controllers;

use App\Models\Roadmap;
use App\Models\Slider;
use App\Models\ArticleNews;
use App\Models\BannerAdvertisemenet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch Roadmap data
        $roadmapItems = Roadmap::orderBy('display_order')->get()->groupBy('year_range');
        
        // Fetch Slider data
        $sliders = Slider::where('is_active', true)->get();
        
        // Fetch Banners
        $banners = BannerAdvertisemenet::all(); 
        
        // Fetch all articles to display on the home page (e.g., the 6 latest)
        $articles = ArticleNews::latest()->take(6)->get();

        // Set title
        $title = 'PT Integrasi Jasa Nusantara';
        
        // Pass all data to the home view
        return view('home', compact('roadmapItems', 'sliders', 'title', 'articles', 'banners'));
    }
}