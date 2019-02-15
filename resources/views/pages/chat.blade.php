@extends('layouts.app')

@section('content')
            <h1>{{ $mainboard["title"] }}</h1>
            <div class="chat-display col-12 bg-white border border-light overflow-auto">
                @foreach ($mainboard->comments as $comment)
                    <p>{{ $comment['comment_text'] }} <span class="name">- {{ $comment->user['name'] }}</span></p>
                @endforeach
            </div>
            <div class="chat-form mt-3">
                <form method="POST" action="/comment">
                    <textarea class="col-12 border border-light rounded" id="text" name="text"></textarea>
                    <input type="hidden" id="board" name="board" value="{{$mainboard->id}}"></input>
                    @csrf
                </form>
            </div>
@endsection
