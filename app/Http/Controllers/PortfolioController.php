<?php

namespace App\Http\Controllers;

use App\Portfolio;

use Illuminate\Http\Request;

use Carbon\Carbon;

use Illuminate\Support\Facades\Input;

use Session;

class PortfolioController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index']);
    }

    public function index(){

        $photos = Portfolio::all();
       
        return view('portfolio.index', compact('photos'));
    }

    public function create(){

        return view('portfolio.create');

    }

    public function store(Request $request){

        $photo = new Portfolio();
        $this->validate($request, [
            'category' => 'required|numeric|min:1|max:4',
            'image' => 'required'
        ]);

        $photo->category = $request->category;

        if($request->hasFile('image')) {
            $file = Input::file('image');
            //getting timestamp
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            
            //$name = $timestamp. '-' .$file->getClientOriginalName();
            $name = $timestamp. '-img.'.$file->getClientOriginalExtension();
            
            $photo->image = $name;

            $file->move(public_path().'/images/', $name);
        }

        $photo->save();
        //return $this->create()->with('success', 'Картинка добавлена');

        Session::flash('message', "Картинка добавлена");
        return redirect('/portfolio');
    }

    public function destroy(Portfolio $portfolio){

        $portfolio = Portfolio::findOrFail($portfolio->id);

        $portfolio->delete();

        Session::flash('message', "Картинка удалена");
        return redirect('/portfolio');
    }


}
