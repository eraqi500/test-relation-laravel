<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
//        $post = Post::all();
        $posts = Post::latest();
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function store(Request $request)
    {
//        return $request->all();

//        return $request->get('title');

//        Post::create($request->all());
//        $input = $request->all();

        $post = new Post;
        $post -> name = 'Khaild';
        $post->title = 'this a title' ;
        $post->body = 'this first body ';
        $post->name = 'this a name';
        $post->save();

$file =  $request->file('file');

 echo '<br>';

        $input = $request->all();

        $file = $request->file('file');

        if($file){
            $name = $file->getClientOriginalName();

            $file->move('images', $name);

            $input['path'] = $name ;

        }

        Post::create($input);


//  echo $file->getClientOriginalExtension();
//        echo '<br>';
//   echo $file->getClientOriginalName();
//        echo '<br>';
//   echo $file ->getSize();
//        echo '<br>';
//    echo $file -> getMimeType();
//        echo '<br>';










    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
