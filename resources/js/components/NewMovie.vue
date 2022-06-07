<template>
    <li class="h-20 p-6 mb-3 flex justify-between items-center bg-white border border-white shadow rounded-lg">
        <div class="flex items-center w-full">
            <input
                class="hidden-text-input ml-4 text-gray-700 font-semibold font-sans tracking-wide"
                type="text"
                placeholder="Enter movie name and press enter"
                v-model="movie"
                @keyup.enter="onEnter"
            />
        </div>
    </li>
</template>
<script>
import {mapState, mapMutations, mapActions} from "vuex";
export default {
    name: "NewMovie",
    computed: {
        ...mapState({
            newMovie: state => state.movie.newMovie,
        }),
        movie: {
            get() {
                return this.newMovie.title;
            },
            set(title) {
                this.setMovie(title);
            }
        },
    },
    methods: {
        ...mapMutations({
            setMovie: 'movie/setNewMovie',
        }),
        ...mapActions({
            store: 'movie/store',
        }),
        onEnter() {
            this.store();
        },
    }
};
</script>
<style>
.hidden-text-input {
    width: 100%;
}
.hidden-text-input {
    outline: none;
    border: none;
}
.hidden-text-input:focus {
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
    outline: none;
}
</style>
