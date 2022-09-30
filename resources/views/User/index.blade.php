<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/index.css">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="own_posts">
            @foreach($own_posts as $post)
                <div>
                    <h4><a href="/posts/{{ $post->id }}">{{ $post->sake_name }}</a></h4>
                    <small>{{ $post->user->name }}</small>
                    <p>{{ $post->body }}</p>
                    <image src="/storage/{{ $post->image }}" width=100px height=100px>
                </div>
                <p class="edit">[<a href="/posts/{{$post->id}}/edit">編集</a>]</p>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <!--<input type="submit" style="display:none"> -->
                    <button onclick="deletePost({{$post->id}});">投稿削除</button>
                </form>
            @endforeach
       
            <div class='paginate'>
                {{ $own_posts->links() }}
            </div>
        </div>
        <script>
            function deletePost(id)
            {
                'use strict'
                if(confirm('削除すると復元できません。\n本当に削除しますか？'))
                {
                    document.getElementById('form_{$id}').submit();
                }
            }
        </script>
    </body>

@endsection