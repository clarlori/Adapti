<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Http\Requests\PostRequest;

class PostsAdmimController extends Controller
{
    private $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
    
    public function index()
    
    {
        $posts = $this->post->paginate(5);
        return view('admim.posts.index', compact('posts'));
    }
    
    public function create()
    {
        return view('admim.posts.create');
    }

    public function store(PostRequest $request)
    {
        //$tags = array_filter(array_map('trim', explode(',', $request->tags)));
       // $tagsIDs = [];

        //foreach($tags as $tagName)
        //{
           // $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id;
            
        //}
    
        
        $post = $this->post->create($request->all());
        $post->tags()->sync($this->getTagsIds($request->tags));

        return redirect(route('admim.posts.index'));
    }

    public function edit($id)
    {
        
        $post = $this->post->find($id);
        
        return view('admim.posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request)
    {
        
        $post = $this->post->find($id)->update($request->all());
        $post = $this->post->find($id);
        $post->tags()->sync($this->getTagsIds($request->tags));
        return redirect()->route('admim.posts.index');
    }

    public function destroy($id)
    {
        
        $this->post->find($id)->delete();
        return redirect()->route('admim.posts.index');
    }

    private function getTagsIds($tags)
    {

        $tagList = array_filter(array_map('trim', explode(',', $tags)));
        $tagsIDs = [];

        foreach($tagList as $tagName)
        {
            $tagsIDs[] = Tag::firstOrCreate(['name' => $tagName])->id;
            
        }
        return $tagsIDs;
    

    }


}
