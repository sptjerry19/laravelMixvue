<template>
    <div class="fixed z-10 inset-0 overflow-y-auto">
        <div
            class="flex items-center justify-center h-screen min-height-full p-4 bg-gray-500 bg-opacity-75"
        >
            <div class="w-full max-w-md p-4 bg-white rounded-lg shadow-lg">
                <div class="flex justify-between items-center pb-4">
                    <h5 class="text-xl font-bold">Tạo bài viết</h5>
                    <button
                        class="text-gray-400 hover:text-gray-600 focus:outline-none"
                        @click="closeModal()"
                    >
                        <svg
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            ></path>
                        </svg>
                    </button>
                </div>
                <div class="pt-2">
                    <div class="mb-4">
                        <label
                            for="author"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                            >image URL</label
                        >
                        <input
                            type="text"
                            id="author"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            placeholder="Nhập URL của ảnh"
                            v-model="imageURL"
                        />
                    </div>
                    <div class="mb-4">
                        <label
                            for="message"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                            >Nội dung hình ảnh</label
                        >
                        <div
                            id="message"
                            class="bg-gray-50 border min-h-60 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        >
                            <img v-if="imageURL != ''" :src="imageURL" alt="" />
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center mr-4"></div>
                        <button
                            class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:ring-blue-500 focus:outline-none"
                            @click="submitForm()"
                        >
                            Đăng bài
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import VITE_SERVER from "../store";
import axios from "axios";
export default {
    data() {
        return {
            isCloseModal: true,
            imageURL: "",
        };
    },
    methods: {
        closeModal() {
            this.$emit("close-modal", {
                isCloseModal: true,
            });
        },
        submitForm() {
            const formData = new FormData();
            formData.append("image_url", this.imageURL);
            axios
                .post(VITE_SERVER + "/images", formData, {
                    headers: {
                        "Content-Type": "multipart/form-data",
                    },
                })
                .then((response) => {
                    this.closeModal();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
