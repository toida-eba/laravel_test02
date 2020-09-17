<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

    <h1>画像登録画面</h1>
    <form action="{{ url('create') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" class="form-control" name="image_file">
        <hr>
        <button class="btn btn-success">登録</button>
    </form>

	{{-- <form method="POST" action="/upload" enctype="multipart/form-data">
        {{-- <a href="/storage/Emmet.png">アップロードファイル</a> --}}
        <img src="/storage/Emmet.png">
		{{ csrf_field() }}

	<input type="file" id="file" name="file" class="form-control">

	<button type="submit">アップロード</button>

	</form> --}}

</body>
</html>
