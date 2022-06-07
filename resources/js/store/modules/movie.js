import Api from "../../api/Api";
import _findIndex from 'lodash/findIndex';

const state = {
    list: [],
    newMovie: {
        id: null,
        title: ''
    },
};

const actions = {
    list: async ({commit, dispatch}) => {
        return Api.get('movies').then(response => {
            commit('setList', response.data);
        });
    },
    store: async ({commit, state}) => {
        return Api.post('movies', state.newMovie).then(response => {
            commit('addMovieToList', response.data);
            commit('setNewMovie', '');
        });
    },
    delete: async ({commit, dispatch}, id) => {
        return Api.delete(`movies/${id}`).then(() => {
            commit('deleteMovieFromList', id);
        });
    },
};

const mutations = {
    setList: (state, list) => {
        state.list = list;
    },
    deleteMovieFromList: (state, id) => {
        const index = _findIndex(state.list, (o) => { return o.id === id });
        state.list.splice(index, 1);
    },
    addMovieToList: (state, movie) => {
        state.list.push(movie);
    },
    setNewMovie: (state, title) => {
        state.newMovie.title = title;
    },
};

export default {
    namespaced: true,
    state,
    actions,
    mutations
};
