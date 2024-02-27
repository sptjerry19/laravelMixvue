import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: "/",
            name: "home",
            component: import("../js/pages/Home.vue"),
        },
        {
            path: "/products",
            name: "products",
            component: import("../js/pages/Product.vue"),
        },
        {
            path: "/facebook",
            name: "facebook",
            component: import("../js/pages/Facebook.vue"),
        },
    ],
});

export default router;
