import { createApp } from 'vue';
import Modal from './Modal.vue';

const app = createApp({});
app.component('modal', Modal);
app.mount('#app');
