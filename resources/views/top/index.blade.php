<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>

    <link rel="stylesheet" href="/css/build/top/index.css">
</head>

<body>
    <header>
        <title>Simple Modal</title>
        <style>
        .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        }
        .modal-content {
        background-color: #fefefe;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        }

        .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
        }

        .close:hover,
        .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
        }
        </style>
        </head>
        <body>

        <button id="openModal">Open Modal</button>

        <div id="myModal" class="modal">

        <div class="modal-content">
            <span class="close">&times;</span>
            <h2 class="title">ログイン</h2>
            <form ref="loginForm" method="post" action="/login/sign_in">
                @csrf
                <div>
                    ID : <input type="text" v-model="id" name="id">
                </div>
                <div>
                    PW : <input type="password" v-model="password" name="password">
                </div>
                <div>
                    <button type="button" v-on:click="loginSubmit">送信</button>
                </div>
            </form>
        </div>

        </div>

        <script>
        var modal = document.getElementById("myModal");

        var btn = document.getElementById("openModal");

        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
        modal.style.display = "block";
        }

        span.onclick = function() {
        modal.style.display = "none";
        }

        window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
        }
        </script>

</body>
</html>

    </header>

    <main>
        <h2 v-html="title"></h2>
        <button v-on:click="buttonClick">変更</button>

        <form action="">
            <p v-html="validateResult"></p>
            <input type="text" name="name" v-model="name">
            <button type="button" v-on:click="validate">ひらがな確認</button>
        </form>

        <sample-component tab-name1="A" tab-name2="B" tab-name3="C" tab-body1="<?= $phpValue ?>" tab-body2="tabBody2-B" tab-body3="tabBody3-C"></sample-component>
        <sample-component tab-name1="D" tab-name2="E" tab-name3="F" tab-body1="tabBody1-D" tab-body2="tabBody2-E" tab-body3="tabBody3-F"></sample-component>
    </main>

    <script src="/js/build/top/index.js"></script>
</body>

</html>
