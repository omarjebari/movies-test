<template>
    <div>
        <span v-if="isDark" @click="onToggleTheme"><sun-icon :width="35" /></span>
        <span v-else @click="onToggleTheme"><moon-icon :width="35" /></span>
    </div>
</template>
<script>
import { loadTheme } from '../utils/ThemeHelper';
import MoonIcon from "./icons/MoonIcon";
import SunIcon from "./icons/SunIcon";
export default {
    name: "ThemeSwitcher",
    components: {MoonIcon, SunIcon},
    data() {
        return {
            theme: '',
        };
    },
    created() {
        this.theme = localStorage.theme;
    },
    watch: {
        theme(newTheme) {
            localStorage.theme = newTheme;
            loadTheme();
        }
    },
    computed: {
        isDark() {
            return this.theme === 'dark';
        },
    },
    methods: {
        onToggleTheme() {
            if (this.isDark) {
                this.theme = '';
            }
            else {
                this.theme = 'dark';
            }
        },
    }
};
</script>
