<template>
    <div class="bg-white">
        <div
            :class="
                cartOpen ? 'translate-x-0 ease-out' : 'translate-x-full ease-in'
            "
            class="fixed right-0 top-0 max-w-xs w-full h-full px-6 py-4 transition duration-300 transform overflow-y-auto bg-white border-l-2 border-gray-300"
        >
            <div class="flex items-center justify-between">
                <h3 class="text-2xl font-medium text-gray-700">Your cart</h3>
                <button
                    @click="cartOpen = !cartOpen"
                    class="text-gray-600 focus:outline-none"
                >
                    <svg
                        class="h-5 w-5"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <hr class="my-3" />
            <div class="flex justify-between mt-6">
                <div class="flex">
                    <img
                        class="h-20 w-20 object-cover rounded"
                        :src="products[0].image"
                        alt=""
                    />
                    <div class="mx-3">
                        <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                        <div class="flex items-center mt-2">
                            <button
                                class="text-gray-500 focus:outline-none focus:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </button>
                            <span class="text-gray-700 mx-2">2</span>
                            <button
                                class="text-gray-500 focus:outline-none focus:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <span class="text-gray-600">20$</span>
            </div>
            <div class="flex justify-between mt-6">
                <div class="flex">
                    <img
                        class="h-20 w-20 object-cover rounded"
                        src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
                        alt=""
                    />
                    <div class="mx-3">
                        <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                        <div class="flex items-center mt-2">
                            <button
                                class="text-gray-500 focus:outline-none focus:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </button>
                            <span class="text-gray-700 mx-2">2</span>
                            <button
                                class="text-gray-500 focus:outline-none focus:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <span class="text-gray-600">20$</span>
            </div>
            <div class="flex justify-between mt-6">
                <div class="flex">
                    <img
                        class="h-20 w-20 object-cover rounded"
                        src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1189&q=80"
                        alt=""
                    />
                    <div class="mx-3">
                        <h3 class="text-sm text-gray-600">Mac Book Pro</h3>
                        <div class="flex items-center mt-2">
                            <button
                                class="text-gray-500 focus:outline-none focus:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </button>
                            <span class="text-gray-700 mx-2">2</span>
                            <button
                                class="text-gray-500 focus:outline-none focus:text-gray-600"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <span class="text-gray-600">20$</span>
            </div>
            <div class="mt-8">
                <form class="flex items-center justify-center">
                    <input
                        class="form-input w-48"
                        type="text"
                        placeholder="Add promocode"
                    />
                    <button
                        class="ml-3 flex items-center px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
                    >
                        <span>Apply</span>
                    </button>
                </form>
            </div>
            <a
                class="flex items-center justify-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500"
            >
                <span>Chechout</span>
                <svg
                    class="h-5 w-5 mx-2"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                </svg>
            </a>
        </div>
        <main class="my-8">
            <div class="container mx-auto px-6">
                <div class="md:flex md:items-center">
                    <div class="w-full h-64 md:w-1/2 lg:h-96">
                        <img
                            class="h-full w-full rounded-md object-cover max-w-lg mx-auto"
                            :src="products[currentIndex].image"
                            alt="Nike Air"
                        />
                    </div>
                    <div
                        class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2"
                    >
                        <h3 class="text-gray-700 uppercase text-lg">
                            {{ products[currentIndex].name }}
                        </h3>
                        <p class="opacity-70 text-sm">
                            {{ products[currentIndex].description }}
                        </p>
                        <span class="text-gray-500 mt-3 flex">
                            <h2 class="text-red-500 mr-3">price:</h2>
                            {{ products[currentIndex].price }} vnđ
                            <div
                                class="bg-red-600 px-3 py-1 flex ml-8 rounded text-white font-thin text-xs"
                            >
                                {{ products[currentIndex].discount }}
                                <p class="text-white font-medium">% giảm giá</p>
                            </div>
                        </span>

                        <hr class="my-3" />
                        <div class="mt-2">
                            <label class="text-gray-700 text-sm" for="count"
                                >Count:</label
                            >
                            <div class="flex items-center mt-1">
                                <button
                                    class="text-gray-500 focus:outline-none focus:text-gray-600"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                </button>
                                <span class="text-gray-700 text-lg mx-2"
                                    >20</span
                                >
                                <button
                                    class="text-gray-500 focus:outline-none focus:text-gray-600"
                                >
                                    <svg
                                        class="h-5 w-5"
                                        fill="none"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                                        ></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="text-gray-700 text-sm" for="count"
                                >Color:</label
                            >
                            <div class="flex items-center mt-1">
                                <button
                                    class="h-5 w-5 rounded-full bg-blue-600 border-2 border-blue-200 mr-2 focus:outline-none"
                                ></button>
                                <button
                                    class="h-5 w-5 rounded-full bg-teal-600 mr-2 focus:outline-none"
                                ></button>
                                <button
                                    class="h-5 w-5 rounded-full bg-pink-600 mr-2 focus:outline-none"
                                ></button>
                            </div>
                        </div>
                        <div class="flex items-center mt-6">
                            <button
                                class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500"
                            >
                                Order Now
                            </button>
                            <button
                                class="mx-2 text-gray-600 border rounded-md p-2 hover:bg-gray-200 focus:outline-none"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"
                                    ></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="mt-16">
                    <h3 class="text-gray-600 text-2xl font-medium">
                        More Products
                    </h3>
                    <div
                        class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6"
                    >
                        <!-- more products -->
                        <MoreProduct
                            :products="products"
                            @curent-index="onMyEvent"
                        />
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-gray-200">
            <div
                class="container mx-auto px-6 py-3 flex justify-between items-center"
            >
                <a
                    href="#"
                    class="text-xl font-bold text-gray-500 hover:text-gray-400"
                    >Brand</a
                >
                <p class="py-2 text-gray-500 sm:py-0">All rights reserved</p>
            </div>
        </footer>
    </div>
</template>

<script setup>
import MoreProduct from "../components/MoreProduct.vue";
</script>

<script>
import axios from "axios";
export default {
    data() {
        return {
            currentIndex: 0,
            products: [],
        };
    },
    created() {
        axios
            .get("http://127.0.0.1:8000/api/products")
            .then((response) => {
                console.log(response);
                this.products = response.data.data;
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        onMyEvent(data) {
            this.currentIndex = data.currentIndex;
        },
    },
};
</script>
