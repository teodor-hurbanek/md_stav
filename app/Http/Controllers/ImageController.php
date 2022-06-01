<?php

namespace App\Http\Controllers;

use App\Models\Image;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('file');
        $filepath = storage_path($request->filePath);
        $extension = $file->getClientOriginalExtension();
        $filename = str_replace(
            ".$extension",
            "-". rand(11111, 99999) .".$extension",
            $file->getClientOriginalName()
        );
        
        $file->move($filepath, $filename);
        
        Image::create([
            'fileName' => $filename,
            'filePath' => $request->filePath,
            'service_id' => $request->service_id,
            'file' => $file
        ]);

        return redirect('/admin');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
