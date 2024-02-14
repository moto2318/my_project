import { createApp } from 'vue';
import Modal from './Modal.vue';

const app = createApp({})
    .component('modal', Modal)
    .mount('#app')
