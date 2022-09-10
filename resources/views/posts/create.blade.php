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
            
            .creates{
                display: inline-block;
            }
            
            .creates-image{
                float: right;
                margin-right: 20%;
                padding-top: 5%;
            }
            
            .create-category p{
                display: inline-block;
                padding-top: 30px;
                padding-left: 25px;
                padding-right: 40px;
            }
            
            .input {
                display: inline-block;
            }
            
            .input input{
                padding-left: 20px;
                padding-right: 20px;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            
            .input textarea{
                padding-left: 30px;
                padding-right: 30px;
            }
            
            ::placeholder {
                text-align: center;
            }
            
            .creates-image input{
                margin-top: 150px;
            }
            
            .creates-image p{
                margin-left: 100px;
            }
            
            .post-submit input{
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 20px;
                padding-right: 20px;
                margin-left: 100px;
            }
        </style>
    </head>
    <body>
        <div class="head">
            <h1 class="head-left">お酒投稿</h1>
        </div> 
        <div class="header">
            <div class="homeurl"><a href="/">HomeLabo</a></div>
            <div class="posturl"><a href="/">投稿</a></div>
            <div class="profileurl"><a href="/">プロフィール</a></div>
        </div>
        <form action="/posts" method="POST">
            @csrf
            <div class="creates">
                <div class="create-category">
                    <p>酒名　　</p>
                    <div class="input"><input type="text" name="post[sake_name]" placeholder="お酒を入力"/></div>
                </div>
                
                 <div class="create-category">
                    <p>種類　　</p>
                    <div class="input"><input type="text" name="category[name]" placeholder="ウイスキーなど"/></div>
                </div>
                
                 <div class="create-category">
                    <p>緯度　　</p>
                    <div class="input"><input type="text" name="spot[lat]" placeholder="大体の緯度を数字で入力"/></div>
                </div>
                
                <div class="create-category">
                    <p>経度　　</p>
                    <div class="input"><input type="text" name="spot[lon]" placeholder="大体の経度を数字で入力"/></div>
                </div>
                
                <div class="create-category">
                    <p>販売店　</p>
                    <div class="input"><input type="text" name="post[sellstore]" placeholder="販売店を入力"/></div>
                </div>
                
                <div class="create-category">
                    <p>レビュー</p>
                    <div class="input"><textarea name="post[body]" placeholder="自由にお書きください"></textarea></div>
                </div>
            </div>
            
            <div class="creates-image">
                <p>イメージ画像</p>
                <input accept="image/jpeg,image/png,image/gif" name="post[image]" type="file">
                <br>
                <div class="post-submit"><input type="submit" value="投稿する"></div>
            </div>
        </form>
    </body>
</html>
