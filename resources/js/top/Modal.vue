<template>
    <button @click="openModal">Click</button>

    <div id="overlay" v-show="isShow">
        <div id="content">
            <p>モーダルウィンドウ。</p>
            <button @click="closeModal">close</button>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
const isShow = ref(false);

const openModal = () => {
    isShow.value = true;
};

const closeModal = () => {
    isShow.value = false;
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
    display: flex;
    align-items: center;
    justify-content: center;
}

#content {
    z-index: 2;
    width: 50%;
    padding: 1em;
    background: #fff;
}
</style>
