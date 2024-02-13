<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Simple Modal</title>
    <link rel="stylesheet" href="/css/build/top/index.css">
</head>

<style>
    #overlay {
    z-index: 1;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    }

    #content {
        z-index: 2;
        width: 50%;
        padding: 1em;
        background: #fff;
    }
    </style>

    <body>
    <div id="app">
        <button v-on:click="openModal">Click</button>

        <div id="overlay" v-show="showContent">
            <div id="content">
                <p>モーダルウィンドウ。</p>
                <button v-on:click="closeModal">close</button>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/vue@3"></script>  {{-- ←vueのjsを使用するために必須。忘れたら正常に動かない --}}
        <script>
        const { createApp, ref } = Vue;
        const app = createApp({
        setup() {
        const showContent = ref(false);

            const openModal = () => {
            console.log('click');
            showContent.value = true;
            };

            const closeModal = () => {
            showContent.value = false;
            };

            return {
            showContent,
            openModal,
            closeModal,
            };
        },
        });
        app.mount('#app');
    </script>
    </body>
</html>



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
