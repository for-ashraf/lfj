<?php

namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class TagController extends Controller
{

    public function loadCategories()
    {
        return Categories::all();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->loadCategories();
        $tags = Tag::paginate(10);

        return view('tags.index', compact('tags','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Tag::create(['title' => $request->title]);

        return redirect('admin/tags')->with('message','Tag created successfully');
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
    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, ['title' => 'required']);

        $tag->update($request->all());

        return redirect()->route('admin/tags')->with('message','Tag updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Tag $tag)
    {
        if (!DB::table('blog_tag')->where('tag_id', $tag->id)->exists()){
            $tag->delete();
            return redirect()->back()->with('message', 'Tag deleted successfully.');
        }

        return redirect()->back()->with('error', "Tag is used on post, you can't delete it!");
    }
}
