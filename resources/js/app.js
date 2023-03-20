import './bootstrap';
import { createApp } from 'vue';
import { createPopper } from '@popperjs/core';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

app.config.globalProperties.$createPopper = createPopper;

app.mount('#app');
