<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('messages.index', ['messages' => $messages]);
    }

    public function create()
    {
        return view('messages.create');
    }
    public function store(MessageRequest $request)
    {
        $message = new Message();

        $message->title = $request->title;
        $message->body = $request->body;

        $message->save();

        return redirect(route('messages.index'));
    }
    public function show($id)
    {
        $message = Message::find($id);
        return view('messages.show', ['message' => $message]);
    }
    public function edit($id)
    {
        $message = Message::find($id);
        return view('messages.edit', ['message' => $message]);
    }
    public function update(MessageRequest $request, $id)
    {
        $message = Message::find($id);
        $message->title = $request->title;
        $message->body = $request->body;
        $message->save();

        return redirect(route('messages.index'));
    }
    public function destroy($id)
    {
        $message = Message::find($id);
        $message->delete();

        return redirect(route('messages.index'));
    }
}
