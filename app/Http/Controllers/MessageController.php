<?php

namespace App\Http\Controllers;

use App\Category;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use DB ;
use App\Http\Requests ;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all();

        return view('message.index', ['messages' => $messages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('message.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new Message();
        $message->title = $request->input('title');
        $message->text = $request->input('text');
        if($request->file('file')) {
	        $message->file = $request->file('file')->store('public');
        } else {
        	$message->file = null;
        }
//        $message->user_id = $request->input('user_id');
        $message->user_id = auth()->user()->id;
        $message->category_id = $request->input('category_id');

        $message->save();

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        return view('message.show', ['message' => $message]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        $this->authorize('show',$message);

        return view('message.edit', ['message' => $message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message)
    {
        $this->authorize('show',$message);

        $message->title = $request->input('title');
        $message->text = $request->input('text');
        $message->file = $request->file('file')->store('public');
        $message->category_id = $request->input('category_id');
//        $message->user_id = $request->input('user_id');

        $message->save();

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        $this->authorize('show',$message);

        $message->delete();
        return redirect()->route('messages.index');
    }


}
