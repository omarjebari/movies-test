import axios from "axios";

const Api = axios.create({
    baseURL: 'http://movies-test.test/api',
});

export default Api;
