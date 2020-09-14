<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
class UploadController extends Controller
{
    //
    public function index()
    {
        $photo = Photo::latest('created_at')->paginate(10);
        return View('photos.create')->with('photos',$photo);
    }

    public function store(Request $request)
    {

        $input = $request->all();

        $fileName = $input['fileName']->getClientOriginalName();
        $fileName = time()."@".$fileName;
        $image = Image::make($input['fileName']->getRealPath());

        //画像リサイズ ※追加
        $image->resize(100, null, function ($constraint) {
        $constraint->aspectRatio();
        });

        $image->save(public_path() . '/images/' . $fileName);
        $path = '/images/' . $fileName;

        //↓ 追加 ↓
        $photo = new Photo();
        $photo->path = 'images/' . $fileName;
        $photo->save();

        return redirect('/photos/')->with('status', 'ファイルアップロードの処理完了！');
      }
}
