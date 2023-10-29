<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>論文一覧</h1>
    <ul>
        @foreach ($articles as $article)
            <!-- // リンク先をidで取得し名前で出力 -->
            <p><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></p>
        @endforeach
    </ul>
    <!-- 新規登録画面へジャンプする -->
    {{-- <button class="btn_05" onclick="location.href='{{ route('articles.create') }}'">投稿する</button> --}}
    <button onclick="location.href='{{ route('articles.create') }}'">新規論文投稿</button>
</body>

</html>
