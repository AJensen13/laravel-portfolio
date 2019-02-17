@extends('layouts.app')

@section('content')
            <h1>{{ $mainboard["title"] }}</h1>
            <div class="chat-display col-12 bg-white border border-light overflow-auto">
                {{-- @foreach($collection as $date => ) --}}
                    @foreach ($mainboard->comments as $comment)
                        <p>{{ $comment['comment_text'] }} <span class="name">- {{ $comment->user['name'] }}</span></p>
                    @endforeach
                {{-- @endforeach --}}
            </div>
            <div class="chat-form mt-3">
                <form method="POST" action="/comment" id="comment">
                    <input type="text" class="col-12 border border-light rounded" id="text" name="text" placeholder="Start typing here..."></input>
                    <input type="hidden" id="board" name="board" value="{{$mainboard->id}}"></input>
                    <input type="hidden" id="user" name="user" value="{{ Auth::id() }}"></input>
                    @csrf
                </form>
            </div>
            <script src={{ asset("js/manifest.js")}}></script>
            <script src={{ asset("js/vendor.js")}}></script>
            <script src={{ asset('js/comment_submit.js')}}></script>
@endsection
