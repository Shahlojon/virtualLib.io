<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skientist;

class ScientistController extends Controller
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
        return view('admin.scientist.index',[
            'data'=>Skientist::orderBy('name', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       
        return view('admin.scientist.create');
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
            "name" => "required",
            "birthplace" => "",
            "birthday" => "",
            "country" => "",
            "scientificSphere" => "",
            "academicDegree" => "",
            "academicTitle" => "",
            "placeOfWork" => "",
            "awardsAndPrizes" => "",
            "dateOfDeath" => "",
            "shortDescription" => "",
            "placeOfDeath" => "",
        ]);
        $validated['image'] = $this->uploadFile($request,'image', null);
        
        $validated['description'] = $this->saveSummernote($request->description);
        $validated['isActive'] =($request->input('isActive')=='on')?true:false;

        //dd($validated);
        Skientist::create($validated);

        return redirect("/admin/scientist");
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
        return view('admin.scientist.edit', [
            'data'=>Skientist::findOrFail($id),
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
        $data = Skientist::findOrFail($id);

        
        $validated = $this->validate($request, [
            "name" => "required",
            "birthplace" => "",
            "birthday" => "",
            "country" => "",
            "scientificSphere" => "",
            "academicDegree" => "",
            "academicTitle" => "",
            "placeOfWork" => "",
            "awardsAndPrizes" => "",
            "dateOfDeath" => "",
            "placeOfDeath" => "",
            "shortDescription" => "",
            'isActive'=>""
        ]);

        $img='';
        if($data && $data->image){
            $img = $this->uploadFile($request,'image', $data->image);
        }else{
            $img = $this->uploadFile($request,'image', null);
        }
        if (mb_strlen($img)>0) {
            $data->image=$img;
        }
       
        $data->description = $this->saveSummernote($request->description);
        
        $data->isActive =($validated['isActive']=='true')?true:false;

        $data->name = $validated['name'];
        $data->birthplace = $validated['birthplace'];
        $data->country = $validated['country'];
        $data->birthday = $validated['birthday'];
        $data->scientificSphere = $validated['scientificSphere'];
        $data->academicDegree = $validated['academicDegree'];
        $data->academicTitle = $validated['academicTitle'];
        $data->placeOfWork = $validated['placeOfWork'];
        $data->awardsAndPrizes = $validated['awardsAndPrizes'];
        $data->dateOfDeath = $validated['dateOfDeath'];
        $data->placeOfDeath = $validated['placeOfDeath'];
        $data->shortDescription = $validated['shortDescription'];
       

        $data->update();
        return redirect('/admin/scientist');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Skientist::findOrFail($id);
        if($data ){
            if($data->image){
            if(file_exists(public_path('uploads/').$data->image)){
                unlink(public_path('uploads/').$data->image);
            }
            }
            $data->delete();
        }
        return back();
    }

}
