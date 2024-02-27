<template>
    <NavBar />
    <router-view></router-view>
</template>

<script setup>
import NavBar from "./components/NavBar.vue";
import Product from "./components/Product.vue";
</script>

<script>
import axios from "axios";
export default {
    data() {
        return {
            products: [],
        };
    },
};
</script>
