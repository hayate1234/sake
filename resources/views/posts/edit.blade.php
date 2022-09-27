<!DOCTYPE html>
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="/css/create.css">
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
        <div class="head">
            <h1 class="head-left">ブログ更新</h1>
        </div> 
        <div class="header">
            <div class="homeurl"><a href="/">HomeLabo</a></div>
            <div class="posturl"><a href="/">投稿</a></div>
            <div class="profileurl"><a href="/">プロフィール</a></div>
        </div>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="creates">
                <div class="create-category">
                    <p>酒名　　</p>
                    <div class="input"><input type="text" name="post[sake_name]" placeholder="{{$post->sake_name}}"/></div>
                </div>
                
                 <div class="create-category">
                    <p>種類　　</p>
                    <select name="post[category_id]">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    </select>
                </div>
                
                 <div class="create-category">
                    <p>緯度　　</p>
                    <div class="input"><input type="text" name="spot[lat]" placeholder="{{$spot->lat}}"/></div>
                </div>
                
                <div class="create-category">
                    <p>経度　　</p>
                    <div class="input"><input type="text" name="spot[lon]" placeholder="{{$spot->lon}}"/></div>
                </div>
                
                <div class="create-category">
                    <p>販売店　</p>
                    <div class="input"><input type="text" name="post[sellstore]" placeholder="{{$post->sellstore}}"/></div>
                </div>
                
                <div class="create-category">
                    <p>レビュー</p>
                    <div class="input"><textarea name="post[body]" placeholder="{{$post->body}}"></textarea></div>
                </div>
            </div>
            
            <div class="creates-image">
                <p>イメージ画像</p>
                <input accept="image/jpeg,image/png,image/gif" name="post[image]" type="file">
                <br>
                <div class="post-submit"><input type="submit" value="更新する"></div>
            </div>
        </form>
    </body>
</html>
@endsection
