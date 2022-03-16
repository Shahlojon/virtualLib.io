<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\ScientistArticle;
use App\Models\Skientist;
class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.article.index',[
            'data'=>Article::orderBy('title', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     * можеш писать тут ? почему тут просто  ты тут или нет знать мне хорошо 
     */
    public function create()
    {        
        return view('admin.article.create',[
            'authors' => Skientist::orderBy("name")->get(),
        ]);//пиши что тут надо исправить ? не знаю там нету ученых 
        //нужно их отправить как сделать посмотри в контроллер бука что
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            "title" => "required",
            "shortDescription"=>"required",
            "file" => "",
            "publishedAt" => "required",
            "authors" => "",
        ]);
        
        $validated['description'] = $this->saveSummernote($request->description);
        $validated['isActive'] =($request->input ('isActive')=='on')?true:false;

        //dd($validated);
        $article = Article::create($validated);
        /* 
        здес вед просто зоздаеть данные в базе и возврашаеть только что созданный элементь
        экато что не понятно ? это понятно а остальное 

        $request->all()['authors'] = это получаеть из запроса массив данных из того  селекта с таким нейм
        мы отправляем вед его получаеть как массив  и проходить по массиву 
        Это понятно ? нет щас
        а так ? там же нету поля authors как это там есть там мы отправим 

        */


        //foreach ($request->all()['authors'] as $item) {
        foreach ($validated['authors'] as $item) {
            $bookAuthor = new ScientistArticle();
            $bookAuthor->scientistId =$item;
            $bookAuthor->articleId =$article->id;
            $bookAuthor->save();
         }
         /* 
         ты понимаеш что мы делаем ? не очень
         вот это цикл что делаеть понимаеш 7я весь этот код не понимаю почему :) не понятно ведь
         что тут не понятно ? все кроме остальное не понятно
         кроме чего ? этого это тоесть понятно да ?да вроде
         */

        return redirect("/admin/article");
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
        return view('admin.article.edit', [
            'data'=>Article::findOrFail($id),
            'authors' => Skientist::orderBy("name")->get(),
        ]);
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
        $data = Article::findOrFail($id);

        
        $validated = $this->validate($request, [
            "title" => "required",
            "file" => "",
            "publishedAt" => "required",
            'isActive'=>"",
            'authors'=>"",
            'shortDescription'=>"",
        ]);

        //dd($validated);
      
        $data->description = $this->saveSummernote($request->description);
    
        $data->isActive =($validated['isActive']=='true')?true:false;

        $data->title = $validated['title'];
        $data->shortDescription = $validated['shortDescription'];
        $data->file = $validated['file'];
        $data->publishedAt = $validated['publishedAt'];

        //dd($data);
        $data->update();
        
        $data->articleAuthors()->delete();


        foreach ($validated['authors'] as $item) {
            $bookAuthor = new ScientistArticle();
            $bookAuthor->scientistId =$item;
            $bookAuthor->articleId =$data->id;
            $bookAuthor->save();
         }
        return redirect('/admin/article');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Article::findOrFail($id);
        if($data ){
            $data->articleAuthors()->delete();
            $data->delete();
        }
        return back();
    }
  
}
