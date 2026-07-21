<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index(){
        $posts = Post::where('featured', false)
                    ->with('user', 'categories')
                    ->get();
        $categories = Category::all();
        $featured = Post::featured()->take(3)->get();
        // dd($featured);
        return view('front.index', [
            'posts' => $posts,
            'featured' => $featured,
            'categories' => $categories
        ]);
    }

    public function whoWeAre(){
        $categories = Category::all();
        return view('front.who-we-are', compact('categories'));
    }

    public function whatWeDo(){
        $categories = Category::all();
        return view('front.what-we-do', compact('categories'));
    }

    public function insights(){
        $posts = Post::with('user', 'categories')->latest()->paginate(9);
        $categories = Category::all();
        return view('front.insights', compact('posts', 'categories'));
    }

    public function about(){
        $categories = Category::all();
        return view('front.about', compact('categories'));
    }

    public function contact(){
        $categories = Category::all();
        return view('front.contact', compact('categories'));
    }

    public function sendContact(\Illuminate\Http\Request $request){
        // Honeypot: real users leave this blank; bots fill it
        if (!empty($request->input('hp_fullname'))) {
            return redirect()->route('contact')->with('success', 'Thank you! We will get back to you within 24 hours.');
        }

        // Time check: reject submissions faster than 4 seconds (bots are instant)
        $formTs = (int) $request->input('form_ts', 0);
        if ($formTs === 0 || (time() - $formTs) < 4) {
            return redirect()->route('contact')->with('success', 'Thank you! We will get back to you within 24 hours.');
        }

        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'email'   => 'required|email|max:255',
            'company' => 'nullable|string|max:150',
            'phone'   => 'nullable|string|max:30',
            'service' => 'nullable|string|max:100',
            'message' => 'required|string|max:2000',
        ]);

        Mail::to('hello@cherubapps.africa')->send(new ContactFormMail($validated));

        return redirect()->route('contact')->with('success', 'Thank you! We will get back to you within 24 hours.');
    }

    public function privacy(){
        return view('front.privacy');
    }

    public function terms(){
        return view('front.terms');
    }

    public function posts(){
        return view('posts.index');
    }
    
    public function showPost(Post $post){
        $post = $post->load('user','categories');
        $categories = Category::all();
        return view('front.posts.show', compact('post', 'categories'));
    }

    public function showCategory(Category $category){
        $posts = $category->posts()->with('user', 'categories')->get();
        $categories = Category::all();
        return view('front.categories.show', compact('category', 'posts', 'categories'));
    }

    public function sitemap(){
        $posts = Post::latest()->get();
        $categories = Category::all();
        return response()->view('front.sitemap', compact('posts', 'categories'))
            ->header('Content-Type', 'application/xml');
    }

    public function robots(){
        $content = "User-agent: *\nAllow: /\nDisallow: /admin\nDisallow: /dashboard\n\nSitemap: " . config('app.url') . "/sitemap.xml\n";
        return response($content, 200)->header('Content-Type', 'text/plain');
    }
}
