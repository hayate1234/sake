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
        <div class="head">
            <h1 class="head-left">SakeLabo</h1>
            <p class="head-right"><a href="/login">ユーザー登録</a></p>
        </div> 
        <div class="header">
            <div class="homeurl"><a href="/">HomeLabo</a></div>
            <div class="posturl"><a href="/posts/create">投稿</a></div>
            <div class="profileurl"><a href="/user">プロフィール</a></div>
        </div>
        <h1>Blog Name</h1>
            <p class='edit'>[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            <div class='post'>
                <h2 class='title'>{{ $post->sake_name  }}</h2>
                 <p class='body'>{{ $post->body }}</p>
                 <p class='updated_at'>{{ $post->updated_at }}</p>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
            <div class='back'>[<a href='/'>back</a>]</div>
        
        <div id="myMap"
        style='position:relative;width:600px;height:400px;'>
        </div>
        
        <script
            src='https://www.bing.com/api/maps/mapcontrol?key=AhSDoOgEGXe5GIHhqO8USOVg0T8-wU6flUMORG2y5Ayyu5M2bl6SFduKx05b231G&callback=GetMap'
                async defer>
        </script>
        
        <script>
            function GetMap()
            {
               const map = new Microsoft.Maps.Map('#myMap', {
                   center: new Microsoft.Maps.Location(36.6149,90.1941),
                   mapTypeId: Microsoft.Maps.MapTypeId. load,
                   zoom: 10
               });
            }
        </script>
    </body>
</html>
@endsection
