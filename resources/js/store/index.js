import { createStore } from 'vuex';
const api_url = import.meta.env.VITE_API_URL;
import axios from 'axios';

const store = createStore({
  state: {
    errors: {},
    user:[]
  },
  mutations: {
    setErrors(state,data){
        state.errors = data
    },
    setUserData(state,data){
        state.user = data
    }
  },
  actions: {
    async login({ commit },data){
            return await axios.post(api_url + '/auth/signin',data)
            .then((res) => {
                if(res && res.data.error == null){
                    commit('setErrors',{});
                    commit('setUserData',res.data.user);
                    localStorage.setItem("swc_token", res.data.access_token);
                    return 1;
                }
            }).catch((e) => {
                if (e.response && e.response.status === 422) {
                    commit('setErrors',e.response.data.data);
                }
                if (e.response && e.response.status === 401) {
                    commit('setErrors',{'user':['Unauthorized']});
                }
            })

    },
    async register({ commit },data){
        return await axios.post(api_url + '/auth/signup',data)
        .then((res) => {
            if(res && res.data.error == null){
                commit('setErrors',{});
                return 1;
            }
        }).catch((e) => {
            if (e.response && e.response.status === 422) {
                commit('setErrors',e.response.data.data);
            }
            if (e.response && e.response.status === 401) {
                commit('setErrors',{'user':['Unauthorized']});
            }
        })
},
async me({ commit },data){
        return await axios.post(api_url + '/auth/me',{},{
            headers:{
                Authorization: `Bearer ${localStorage.getItem("swc_token")}`

            }
        })
        .then((res) => {
            if(res && res.data.error == null){
                commit('setUserData',res.data.data);

            }
        })
}
  },
  getters: {
    getErrors(state){
        return state.errors;
    },
    getUserData(state){
        return state.user;
    }
  },
});

export default store;
