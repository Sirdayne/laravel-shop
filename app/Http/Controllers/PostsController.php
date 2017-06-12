<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

use Session;

class PostsController extends Controller
{

    public function __construct(){
       $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){

        $posts = Post::orderBy('created_at','DESC')->paginate(6);

        return view('posts.index', compact('posts'));

    }

    public function show(Post $post){

        $prev = Post::where('id', '<', $post->id)->max('id');

        $next = Post::where('id', '>', $post->id)->min('id');

        $randoms = Post::InRandomOrder()->take(3)->get();

        return view('posts.show', compact('post'))->with('prev', $prev)->with('next', $next)->with('randoms', $randoms);

    }

    public function create(){

        return view('posts.create');

    }
    
    public function store(Request $request){

        $post = new Post();
        $this->validate($request, [
            'title' => 'required|min:3|max:45',
            'image' => 'required',
            'description' => 'required|max:130',
            'body' => 'required'
        ]);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->user_id = auth()->id();

		if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            //$name = $timestamp. '-' .$file->getClientOriginalName();
            $name = $timestamp. '-img.'.$file->getClientOriginalExtension();
            
            $post->image = $name;

            $file->move(public_path().'/images/', $name);
        }

        $post->save();
        //return $this->create()->with('success', 'Новость добавлена');

        Session::flash('message', "Новость добавлена");
        return redirect('/posts');
    }

    public function edit(Post $post){

        return view('posts.edit', compact('post'));

    }

    public function update(Request $request){

        $post = Post::findOrFail($request->id);

        $this->validate($request, [
            'title' => 'required|min:3|max:45',
            'description' => 'required|max:130',
            'body' => 'required'
        ]);

        $post->title = $request->title;
        $post->description = $request->description;
        $post->body = $request->body;
        $post->user_id = auth()->id();

		if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            //$name = $timestamp. '-' .$file->getClientOriginalName();
            $name = $timestamp. '-img.'.$file->getClientOriginalExtension();
            
            $post->image = $name;

            $file->move(public_path().'/images/', $name);
        }

        $post->update();
        //return redirect('/posts')->with('success', 'Новость обновлена');

        Session::flash('message', "Новость обновлена");
        return redirect('/posts');

    }

    public function destroy(Post $post){

        $post = Post::findOrFail($post->id);

        $post->delete();

        Session::flash('message', "Новость удалена");
        return redirect('/posts');
    }
}
