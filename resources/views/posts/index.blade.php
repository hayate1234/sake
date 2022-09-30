<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/index.css">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>sakelabo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
            
            
        </style>
    </head>
    <body>
        <!--<div class="head">
            <h1 class="head-left">SakeLabo</h1>
            <p class="head-right"><a href="/login">ユーザー登録</a></p>
        </div> -->
        <div class="header">
            <div class="homeurl"><a href="/user">プロフィール</a></div>
            <div class="posturl"><a href="/posts/create">投稿</a></div>
            <div class="profileurl"><a href="/login">ユーザー登録</a></div>
        </div>
        <div class="posts">
                    <div class="blog-category">
                        <h3>気になるお酒</h3>
                        <h3>種類</h3>
                    </div>
                    <div class="post">
                        @foreach ($posts as $post)
                        <h2 class="sake-name"><a href="/posts/{{ $post->id }}">{{ $post->sake_name }}</a></h2>
                        <div class="sake-category">
                            <p>{{ $post->category->name }}</p>
                            <image src="/storage/{{ $post->image }}" width=100px height=100px>
                        </div>
                        @endforeach
                    </div>
        </div>
        <div class="posts-right">
            <div class="searchclass">
                <h3>検索</h3>
                <div class="search">
                    <p>酒名</p>
                    <div class="input"><input type="text" name="post[sake_name]" placeholder="お酒を入力"/></div>
                </div>
                <div class="search">
                    <p>種類</p>
                    <div class="input"><input type="text" name="post[sake_name]" placeholder="お酒を入力"/></div>
                </div>
            </div>
            <div class="good-rank">
                
            </div>
        </div>
    </body>
</html>
@endsection
