import { createApp } from 'vue'
import { createPinia } from 'pinia'
import feather from 'feather-icons'
import './style.css'

import App from './App.vue'
import router from './router'

const app = createApp(App)

window.feather = feather

app.use(createPinia())
app.use(router)

app.mount('#app')
