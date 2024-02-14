    <template>
        <div id="app">
            <button @click="openModal">Click</button>

            <div id="overlay" v-show="show">
            <div id="content">
                <p>モーダルウィンドウ。</p>
                <button @click="closeModal">close</button>
            </div>
            </div>
        </div>
    </template>

    <script setup>
        import { ref } from "vue";
        const show = ref(false);

        const openModal = () => {
        console.log('click');
        show.value = true;
        };

        const closeModal = () => {
        show.value = false;
        };
    </script>

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
