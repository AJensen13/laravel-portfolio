@extends('layouts.app')

@section('content')
    <h1>Chat Page</h1>
    <div class="chat-display"></div>
    <div class="chat-form">
        <form>
        <textarea></textarea>
        @csrf
        <button type="submit">Submit</button>
        </form>
    </div>
@endsection
