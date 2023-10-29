<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>論文の編集</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <a href="{{ route('messages.index') }}">戻る</a>
    <h1>更新</h1>
    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </p>
        </div>

    @endif
    <form action="{{ route('messages.update', $message) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title" value="{{ old('title', $message->title) }}">
        </p>
        <p>
            <label for="body">本文</label><br>
            <textarea name="body" class="body" id="body">{{ old('body', $message->body) }}</textarea>
        </p>

        <input type="submit" value="更新">
    </form>
</body>

</html>
