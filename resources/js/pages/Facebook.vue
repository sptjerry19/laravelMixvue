<template>
    <div class="h-screen w-full flex flex-col px-3 lg:px-10">
        <div class="w-2/5 mx-auto">
            <div class="bg-white w-full h-32 rounded-md shadow-md">
                <div class="w-full h-16 flex items-center justify-between px-5">
                    <img
                        class="rounded-full w-10 h-10 mr-3"
                        src="https://scontent.fsub1-1.fna.fbcdn.net/v/t1.0-9/37921553_1447009505400641_8037753745087397888_n.jpg?_nc_cat=102&_nc_sid=09cbfe&_nc_oc=AQnDTnRBxV3QgnhKOtk9AiziIOXw0K68iIUQfdK_rlUSFgs8fkvnQ6FjP6UBEkA6Zd8&_nc_ht=scontent.fsub1-1.fna&oh=728962e2c233fec37154419ef79c3998&oe=5EFA545A"
                        alt=""
                    />
                    <input
                        type="text"
                        class="w-full rounded-full h-10 bg-gray-200 px-5"
                        placeholder="Apa yang Anda pikirkan, Sudana?"
                    />
                </div>
                <div
                    class="w-full h-16 flex justify-between px-3 md:px-10 lg:px-24 xl:px-5"
                >
                    <div class="flex h-full items-center">
                        <svg
                            class="h-12 fill-current text-red-500 stroke-current"
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
                                d="M15.6 11.6L22 7v10l-6.4-4.5v-1zM4 5h9a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2z"
                            />
                        </svg>
                        <span
                            class="text-xs lg:text-md mx-2 font-semibold text-gray-500"
                        >
                            Video Siaran Langsung
                        </span>
                    </div>
                    <div
                        @click="isCloseModal = false"
                        class="flex h-full items-center cursor-pointer"
                    >
                        <svg
                            class="h-12 text-green-500 stroke-current"
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
                            <rect x="3" y="3" width="18" height="18" rx="2" />
                            <circle cx="8.5" cy="8.5" r="1.5" />
                            <path d="M20.4 14.5L16 10 4 20" />
                        </svg>
                        <span
                            class="text-xs lg:text-md mx-2 font-semibold text-gray-500"
                        >
                            Foto/Video
                        </span>
                    </div>
                    <div class="hidden xl:flex h-full items-center">
                        <svg
                            class="h-12 text-yellow-500 stroke-current"
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
                                d="M5.52 19c.64-2.2 1.84-3 3.22-3h6.52c1.38 0 2.58.8 3.22 3"
                            />
                            <circle cx="12" cy="10" r="3" />
                            <circle cx="12" cy="12" r="10" />
                        </svg>
                        <span
                            class="text-xs lg:text-md mx-2 font-semibold text-gray-500"
                        >
                            Perasaan Aktivitas
                        </span>
                    </div>
                </div>
            </div>

            <!-- image -->
            <ImageFb />

            <!-- video -->
            <VideoFb />

            <TwiterLink />
        </div>
    </div>

    <ModalCreateFb v-if="isCloseModal === false" @close-modal="closeModal" />
</template>

<script setup>
import ImageFb from "../components/ImageFb.vue";
import VideoFb from "../components/VideoFb.vue";
import ModalCreateFb from "../components/ModalCreateFb.vue";
import TwiterLink from "../linksJs/TwiterLink.vue";
</script>

<script>
export default {
    data() {
        return {
            isCloseModal: true,
        };
    },
    methods: {
        createImage() {},
        closeModal(data) {
            this.isCloseModal = data.isCloseModal;
        },
    },
};
</script>
