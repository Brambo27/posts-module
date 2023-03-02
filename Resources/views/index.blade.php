@extends('posts::layouts.master')

@section('content')
    <h1>Posts</h1>
    @each('posts::partials.post', $posts, 'post')
@endsection
