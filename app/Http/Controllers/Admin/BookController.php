<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\ScientistBook;
use App\Models\Skientist;

class BookController extends Controller
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
        return view('admin.book.index',[
            'data'=>Book::orderBy('title', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *посмотрела ? не поняла
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        return view('admin.book.create',[
            'authors' => Skientist::orderBy("name")->get(),
            //вот это нам нужно и категорию и ученых нужна добавить? не только  учённых не поняла там только учённые нужны нам хорошо
            'categories'=>Category::orderBy('title')->get(),
        ]);
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
            "categoryId" => "",
            "isbn" => "required",
            "yearOfIssue" => "",
            "pageCount" => "",
            "file" => "",
            "authors" => "",
        ]);
        $validated['image']  = $this->uploadFile($request,'image', null);
        $validated['file']  = $this->uploadFile($request,'file', null);

       
        
        $validated['description'] = $this->saveSummernote($request->description);
        $validated['isActive'] =($request->input('isActive')=='on')?true:false;

        //dd($validated);
        $book = Book::create($validated);
       
      
        foreach ($request->all()['authors'] as $item) {
           $bookAuthor = new ScientistBook();
           $bookAuthor->scientistId =$item;
           $bookAuthor->bookId =$book->id;
           $bookAuthor->save();
        }

        return redirect("/admin/book");
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
        return view('admin.book.edit', [
            'data'=>Book::findOrFail($id),
            'authors' => Skientist::orderBy("name")->get(),
            'categories'=>Category::orderBy('title')->get(),
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
        $data = Book::findOrFail($id);

        
        $validated = $this->validate($request, [
            "title" => "required",
            "categoryId" => "",
            "isbn" => "required",
            "yearOfIssue" => "",
            "pageCount" => "",
            "file" => ""
        ]);
       
        if ($request->file('image')) {
            if ($data && $data->image) {
                $data->image  = $this->uploadFile($request,'image', $data->image);
            }else{
                $data->image  = $this->uploadFile($request,'image');
            }
        }
       
        if ($request->file('file')) {
            if ($data && $data->file) {
                $data->file  = $this->uploadFile($request,'file', $data->file);
            }else{
                $data->file  = $this->uploadFile($request,'file');
            }
        }
       
        
        $data->description = $this->saveSummernote($request->description);
      
        $data->isActive =($request->input('isActive')=='true')?true:false;

        $data->title = $validated['title'];
        $data->categoryId = $validated['categoryId'];
        $data->isbn = $validated['isbn'];
        $data->yearOfIssue = $validated['yearOfIssue'];
        $data->pageCount = $validated['pageCount'];
       
        $data->update();

        $data->bookAuthors()->delete();
        /* foreach ($data->bookAuthors() as $item) {
            $item->delete();
        } */

        foreach ($request->all()['authors'] as $item) {
            $bookAuthor = new ScientistBook();
            $bookAuthor->scientistId =$item;
            $bookAuthor->bookId =$data->id;
            $bookAuthor->save();
         }


        return redirect('/admin/book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Book::findOrFail($id);
        if($data ){
            if($data->image){
            if(file_exists(public_path('uploads/book/').$data->image)){
                unlink(public_path('uploads/').$data->image);
            }
            }
            $data->delete();
        }
        return back();
    }

}
