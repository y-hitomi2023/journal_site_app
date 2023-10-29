<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>論文詳細</title>
</head>

<body>
    <a href="{{ route('messages.index') }}">戻る</a>
    <h1>{{ $message->title }}</h1>
    <p>{!! nl2br(e($message->body)) !!}</p>

    <div class="button-group">
        <button onclick='location.href="{{ route('messages.index') }}"'>一覧へ戻る</button>
        <button onclick='location.href="{{ route('messages.edit', $message) }}"'>編集する</button>
        <form action="{{ route('messages.destroy', $message) }}"method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>

</body>

</html>
