<template>
    <li class="mb-12 flex justify-between items-center">
        <div class="text-5xl text-white tracking-widest font-semibold">MOVIES</div>

        <theme-switcher />
    </li>
</template>
<script>
import ThemeSwitcher from './ThemeSwitcher';
import MoonIcon from "./icons/MoonIcon";
import SunIcon from "./icons/SunIcon";
export default {
    name: "MovieListHeader",
    components: {ThemeSwitcher, MoonIcon, SunIcon},
};
</script>
