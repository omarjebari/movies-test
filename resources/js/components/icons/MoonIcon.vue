<template>
    <img src="/images/icon-moon.svg" :width="width">
</template>
<script>
export default {
    name: "MoonIcon",
    props: {
        width: {
            type: Number,
            required: true
        }
    }
};
</script>
