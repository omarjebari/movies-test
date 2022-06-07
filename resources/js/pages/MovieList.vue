<template>
    <div class="mx-4 mt-20 mb-16">
        <div class="flex flex-col items-center">
            <div class="w-full max-w-[576px] text-center">
                <movie-list-header />
                <new-movie />
                <draggable
                    tag="ul"
                    group="movies"
                    class="draggable-list"
                    ghost-class="movie-in-motion"
                    :list="movies"
                    :animation="200"
                >
                    <movie-item
                        v-for="movie in movies"
                        :movie="movie"
                        :key="movie.id"
                    ></movie-item>
                </draggable>
            </div>
        </div>
    </div>
</template>

<script>
import Draggable from "vuedraggable";
import MovieItem from "../components/MovieItem";
import NewMovie from "../components/NewMovie";
import MovieListHeader from "../components/MovieListHeader";
import {mapState, mapActions} from "vuex";

export default {
    name: "MovieList",
    components: {
        MovieListHeader,
        NewMovie,
        Draggable,
        MovieItem
    },
    data() {
        return {};
    },
    created() {
        this.fetchMovies();
    },
    computed: {
        ...mapState({
            movies: state => state.movie.list,
        }),
    },
    methods: {
        ...mapActions({
            fetchMovies: 'movie/list',
        }),
    }
};
</script>
<style>
.draggable-list {
    min-height: 100px;
}
.draggable-list li:first-of-type {
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}
.draggable-list li:last-of-type {
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}
.movie-in-motion {
    opacity: 0.5;
    background: #F7FAFC;
    border: 1px solid #4299e1;
}
</style>
