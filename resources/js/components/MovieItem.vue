<template>
    <li
        class="h-20 p-6 flex justify-between items-center bg-white border border-white shadow cursor-move"
        @mouseover="showDeleteButton=true"
        @mouseleave="showDeleteButton=false"
    >
        <div class="flex items-center">
            <p class="mx-6 text-gray-700 font-semibold font-sans tracking-wide">{{movie.title}}</p>
        </div>
        <div class="flex">
            <button v-if="showDeleteButton" @click="onDelete(movie)">
                <delete-icon />
            </button>
        </div>
    </li>
</template>
<script>
import DeleteIcon from "./icons/DeleteIcon";
import {mapActions} from "vuex";
export default {
    name: "MovieItem",
    components: {DeleteIcon},
    props: {
        movie: {
            type: Object,
            default: () => ({})
        }
    },
    data() {
        return {
            showDeleteButton: false,
        };
    },
    methods: {
        ...mapActions({
            deleteMovie: 'movie/delete',
        }),
        onDelete(movie) {
            this.deleteMovie(movie.id);
        },
    }
};
</script>
