<template>
    <div
        v-for="image in images"
        :key="image.id"
        class="bg-white w-full rounded-md shadow-md h-auto py-3 px-3 my-5"
    >
        <div class="w-full h-16 flex items-center justify-between relative">
            <div class="flex">
                <img
                    class="rounded-full object-cover w-10 h-10 mr-3"
                    :src="image.image_url"
                    alt=""
                />
                <div>
                    <h3 class="text-md font-semibold">Sudana Kunyung</h3>
                    <p class="text-xs text-gray-500">45 mnt</p>
                </div>
            </div>
            <svg
                @click="isClickDelete = !isClickDelete"
                class="w-16 hover:cursor-pointer hover:stroke-black transition-all"
                xmlns="http://www.w3.org/2000/svg"
                width="27"
                height="27"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#b0b0b0"
                stroke-width="2"
                stroke-linecap="square"
                stroke-linejoin="round"
            >
                <circle cx="12" cy="12" r="1"></circle>
                <circle cx="19" cy="12" r="1"></circle>
                <circle cx="5" cy="12" r="1"></circle>
            </svg>
            <div
                v-if="isClickDelete == true"
                class="flex items-center justify-around absolute px-2 top-10 right-0 bg-zinc-500 rounded cursor-pointer hover:scale-125"
                @click="deleteImage(image.id)"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="w-5 h-5 text-red-600"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z"
                    />
                </svg>

                <p class="hover: text-red-600 pl-2">Delete</p>
            </div>
        </div>
        <p>mencoba untuk mengclone facebook dengan Tailwind css</p>
        <div class="flex justify-center">
            <img
                class="w-full h-120 object-cover"
                :src="image.image_url"
                alt=""
            />
        </div>
        <div class="w-full h-8 flex items-center px-3 my-3">
            <div
                class="bg-blue-500 z-10 w-5 h-5 rounded-full flex items-center justify-center"
            >
                <svg
                    class="w-3 h-3 fill-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    width="27"
                    height="27"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#b0b0b0"
                    stroke-width="2"
                    stroke-linecap="square"
                    stroke-linejoin="round"
                >
                    <path
                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                    ></path>
                </svg>
            </div>
            <div
                class="bg-red-500 w-5 h-5 rounded-full flex items-center justify-center -ml-1"
            >
                <svg
                    class="w-3 h-3 fill-current stroke-current text-white"
                    xmlns="http://www.w3.org/2000/svg"
                    width="27"
                    height="27"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#b0b0b0"
                    stroke-width="2"
                    stroke-linecap="square"
                    stroke-linejoin="round"
                >
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"
                    ></path>
                </svg>
            </div>

            <div class="w-full flex justify-between">
                <p class="ml-3 text-gray-500">8</p>
                <p class="ml-3 text-gray-500">29 comment</p>
            </div>
        </div>
        <hr />
        <div class="grid grid-cols-3 w-full px-5 my-3">
            <button
                class="flex flex-row justify-center items-center w-full space-x-3"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="27"
                    height="27"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#838383"
                    stroke-width="2"
                    stroke-linecap="square"
                    stroke-linejoin="round"
                >
                    <path
                        d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"
                    ></path>
                </svg>
                <span class="font-semibold text-lg text-gray-600">sukai</span>
            </button>
            <button
                class="flex flex-row justify-center items-center w-full space-x-3"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="27"
                    height="27"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#838383"
                    stroke-width="2"
                    stroke-linecap="square"
                    stroke-linejoin="round"
                >
                    <path
                        d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"
                    ></path>
                </svg>
                <span class="font-semibold text-lg text-gray-600"
                    >komentari</span
                >
            </button>

            <button
                class="flex flex-row justify-center items-center w-full space-x-3"
            >
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="27"
                    height="27"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="#838383"
                    stroke-width="2"
                    stroke-linecap="square"
                    stroke-linejoin="round"
                >
                    <circle cx="18" cy="5" r="3"></circle>
                    <circle cx="6" cy="12" r="3"></circle>
                    <circle cx="18" cy="19" r="3"></circle>
                    <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                    <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                </svg>
                <span class="font-semibold text-lg text-gray-600">bagikan</span>
            </button>
        </div>
        <hr />
    </div>
</template>

<script>
import axios from "axios";
import VITE_SERVER from "../store";
export default {
    data() {
        return {
            isClickDelete: false,
            images: [],
        };
    },
    created() {
        axios
            .get(VITE_SERVER + "/images")
            .then((response) => {
                this.images = response.data.data;
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        deleteImage(id) {
            axios
                .delete(VITE_SERVER + "/images/" + id)
                .then((response) => {
                    console.log(response.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
