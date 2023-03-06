import './bootstrap';

import { createApp } from 'vue';
import FileUploadComponent from './components/FileUploadComponent.vue';
import { createRouter,createWebHashHistory } from 'vue-router';

const app = createApp({});

const Home = { template: '<div>Home</div>' }
const About = { template: '<div>About</div>' }

app.component('file-upload-component', FileUploadComponent);

const routes = [
    { path: '/', component: Home },
    { path: '/about', component: FileUploadComponent },
  ]


const router = createRouter({
    history: createWebHashHistory(),
    routes, 
  });

  app.use(router)


app.mount('#app');
