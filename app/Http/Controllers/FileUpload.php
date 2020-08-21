<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileUpload extends Controller
{
  public function createForm(){
    return view('file-upload');
  }

  public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf,jpeg,png|max:2048'
        ]);

        $fileModel = new File;

        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');

            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;

            $fileModel->extension = $req->file->getClientOriginalExtension();
            $fileModel->size = $req->file->getSize();
            $fileModel->getMimeType = $req->file->getMimeType();
            $fileModel->save();

            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
   }

}