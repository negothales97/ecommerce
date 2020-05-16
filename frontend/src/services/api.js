import axios from 'axios';

const api = axios.create({baseURL: 'http://localhost/imax/backend/public/api'});
export default api; 