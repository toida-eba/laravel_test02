<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<form method="POST" action="/upload" enctype="multipart/form-data">
        {{-- <a href="/storage/Emmet.png">アップロードファイル</a> --}}
        <img src="/storage/Emmet.png">
		{{ csrf_field() }}

	<input type="file" id="file" name="file" class="form-control">

	<button type="submit">アップロード</button>

	</form>

</body>
</html>
