<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\News;
use App\NewsTag;

class NewsroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::latest()->get();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image'=> 'required',
            'title'=> 'required|min:3|max:255',
            'content'=> 'required|min:3',
            'slug'=> 'required|min:3',
        ]);

        $image_name = $request->image;
        $image = $request->file('image');
        if($image != ''){
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $image_name);
        }

        $news = new News();
        $news->title = $request->title;
        $news->slug = $request->slug;
        $news->content = $request->content;
        $news->image = $image_name;
        $news->save();

        $tags = array_values(array_filter($request->tags));
        foreach ($tags as $key => $tag) {
            $newstag = new Newstag();
            $newstag->news_id = $news->id;
            $newstag->tag = $tag;
            $newstag->is_updated = 1;
            $newstag->save();
        }
        return redirect('/admin/newsroom')->with('success', 'Newsroom has been added.');
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
        $news = News::findOrFail($id);
        return view('admin.news.edit', compact('news'));
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
        $image_name = $request->hidden_image;
        $image = $request->file('image');
        if($image != ''){
            $request->validate([
                'image'=> 'required',
                'title'=> 'required|min:3|max:255',
                'content'=> 'required|min:3',
                'slug'=> 'required|min:3',
            ]);
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/news'), $image_name);
        } else{
            $request->validate([
                'title'=> 'required|min:3|max:255',
                'content'=> 'required|min:3',
                'slug'=> 'required|min:3',
            ]);
        }

        $form_data = array(
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->slug,
            'image' => $image_name
        );
        News::whereId($id)->update($form_data);

        $tags = array_values(array_filter($request->tags));
        NewsTag::where('news_id',$id)->update(['is_updated'=>0]);
        foreach($tags as $tag){
            $newstags = NewsTag::where([['news_id' , $id],['tag' , $tag]])->first();
            if($newstags){
                $newstags->update(['is_updated'=>1]);
            }else{
                $newstags = NewsTag::create([
                    'news_id' => $id,
                    'tag' => $tag,
                    'is_updated' => 1,
                ]);
            }
        }
        NewsTag::where([['news_id',$id],['is_updated',0]])->delete();        
        return redirect('/admin/newsroom')->with('success', 'Newsroom has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();
        return redirect('/admin/newsroom')->with('success', 'Newsroom has been deleted successfully.');
    }
}
