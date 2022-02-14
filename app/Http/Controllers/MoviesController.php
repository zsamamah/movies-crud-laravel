<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=movies::all();
        return view('view',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $geners = category::select('id','gener')->get();
        return view('create',compact('geners'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        movies::create($request->all());
        $movies = movies::all();
        return view('view',compact('movies'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function show(movies $movies,Request $request)
    {
        $movie = movies::where('movies.id',$request['movie'])->join('categories','categories.id','=','movies.gener_id')->get();
        // dd($movie);
        return view('movie',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,movies $movies)
    {
        // $request->segment(2)
        // dd($request);
        $movie = movies::where('movies.id',$request->segment(2))->join('categories','categories.id','=','movies.gener_id')->get();
        $geners = category::all();
        $id=$request->segment(2);
        return view('edit',compact('movie','geners','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, movies $movies)
    {
        // dd($request['movie'],$request->all(),$movies);
        // dd($request->segment(2));
        // dd($request->all());
        $movies->where('id',$request->segment(2))->update([
            'name'=>$request['name'],
            'image'=>$request['image'],
            'description'=>$request['description'],
            'gener_id'=>$request['gener']
        ]);
        return redirect('/movies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\movies  $movies
     * @return \Illuminate\Http\Response
     */
    public function destroy(movies $movies,Request $request)
    {
        movies::where('id',$request['movie'])->delete();
        return redirect('/movies');
    }
}
