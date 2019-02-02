@extends('layouts.app')

@section('content')
            <h1>{{ $mainboard["title"] }}</h1>
            <div class="chat-display col-12 bg-white border border-light overflow-auto">
                @foreach ($mainboard->comments as $comment)
                    <p>{{ $comment['comment_text'] }} - {{ $comment->user['name'] }}</p>
                @endforeach
            </div>
            <div class="chat-form mt-3">
                <form method="POST">
                    <textarea class="col-12 border border-light rounded"></textarea>
                    @csrf
                </form>
            </div>
@endsection
