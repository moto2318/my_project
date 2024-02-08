<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
</head>

<body>
    <main>
        <?php if ($variables["isLoginActive"]) { ?>
            <h2 class="title">ログイン状態</h2>
            <a href="/login/unregister">ログアウト</a>
            <?php } else { ?>
            <h2 class="title">新規登録</h2>
            <form ref="registrForm" method="post" action="/login/register">
                @csrf
                <div>
                    ID : <input type="text" v-model="id" name="id">
                </div>
                <div>
                    PW : <input type="password" v-model="password" name="password">
                </div>
                <div>
                    <input type="submit" v-on:click="registerSubmit" value="送信">
                </div>
            </form>

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
                    <input type="submit" v-on:click="loginSubmit" value="送信">
                </div>
            </form>
            <?php } ?>
        </main>
        <script src="/js/build/login/index.js"></script>
</body>

</html>
