<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>sakelabo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #E6FFE9;
                //color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            /*.links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }*/

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .head {
                color:   #444444;
                //text-align: right;
                
            }
            
            .head-left{
                display: inline-block;
            }
            
            .head-right{
                display: inline-block;
                padding-left: 70%;
            }
            
            .header{
                color #111111;
                border-top: solid;
                border-bottom: solid;
            }
            
            .header div{
                display: inline-block;
                padding-top: 5px;
                padding-bottom: 5px;
            }
            
            .homeurl{
                padding-left: 3%;
            }
            .posturl{
                padding-left: 65%;
            }
            
            .profileurl{
                padding-left: 5%;
            }
            
            .posts{
                margin-top: 20px;
            }
            
            .blog-category{
                display: inline-block;
                background-color: #99FF00;
                padding-top: 3px;
                padding-bottom: 3px
            }
            
            .blog-category h3{
                display: inline-block;
                padding-left: 40px;
                padding-right: 40px;
                color: #FFFFFF;
            }
            
        </style>
    </head>
    <body>
        <div class="head">
            <h1 class="head-left">SakeLabo</h1>
            <p class="head-right"><a href="/">ユーザー登録</a></p>
        </div> 
        <div class="header">
            <div class="homeurl"><a href="/">HomeLabo</a></div>
            <div class="posturl"><a href="/posts/create">投稿</a></div>
            <div class="profileurl"><a href="/">プロフィール</a></div>
        </div>
        <div class="posts">
                    <div class='post'>
                        <div class="blog-category">
                            <h3>気になるお酒</h3>
                            <h3>種類</h3>
                        </div>
                        @foreach ($posts as $post)
                        <h2 class="sake-name"><a href="/">{{ $post->sake_name }}</a></h2>
                        <div class="sake-category">
                            <p>{{ $post->category->name }}</p>
                        </div>
                        @endforeach
                    </div>
        </div>
    </body>
</html>
