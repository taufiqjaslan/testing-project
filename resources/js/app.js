import { createApp } from 'vue';
import './bootstrap.js';
import QuotesComponent from './components/QuotesComponent.vue';

const app = createApp({});
app.component('quotes-component', QuotesComponent);
app.mount('#app');
