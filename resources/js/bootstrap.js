import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.csrf_token;

axios.defaults.withCredentials = true;
axios.defaults.withXSRFToken = true;