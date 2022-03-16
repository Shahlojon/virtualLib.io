<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DOMDocument;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function saveSummernote($description){

        if($description){
            $path = public_path('uploads/');
            if (!is_dir($path)) {mkdir($path, 0777, true); }
        $dom = new DomDocument();
        $dom->loadHtml(mb_convert_encoding($description, 'HTML-ENTITIES', "UTF-8"), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NOERROR | LIBXML_SCHEMA_CREATE);
        $images = $dom->getElementsByTagName('img');
       
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');
            //dd($data);
            if( mb_substr($data, 0, 4) != 'http' && mb_substr($data, 0, 1) != "/") {
                list($type, $data) = explode(';', $data);
                list(, $data) = explode(',', $data);
                $data = base64_decode($data);
                $image_name = time() . $k . '.png';
                $pathf = $path  . $image_name;
                file_put_contents($pathf, $data);
                $img->removeAttribute('src');
                $img->setAttribute('src', '/public/uploads/' . $image_name);
            }
        }
        $description = $dom->saveHTML();
        return $description;
        }
        return '';
    }


    public function uploadFile(Request $request, $key, $oldFile=null){
        
        $path =public_path('uploads' );
        if ($file = $request->file($key)) {
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $myfile = $request->file($key);
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '_' . uniqid() . '.' . $extension;
            $myfile->move($path, $fileName);
           
            if($oldFile){
                if(file_exists(public_path('uploads/').$oldFile)){
                    unlink(public_path('uploads/').$oldFile);
                }
            }
            return $fileName;
        }
        return '';
    }

} 
