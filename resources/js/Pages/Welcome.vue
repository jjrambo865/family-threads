<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FlipCounter from "@/Components/FlipCounter.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

const password = ref("");
const Confirmpassword = ref("");
const show1 = ref(false);
const show2 = ref(true);

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>

<template>
    <Head title="Welcome" />
    <div class=" h-svh flex flex-col">
        <div class="flex justify-between mx-24 py-2">
            <div class="flex items-center align-middle">
                <ApplicationLogo
                    class="h-20 w-20 fill-current text-gray-500 me-1"
                />
                <p class="font-light logo-text">
                    FAMILY THREADS<br />
                    by <span class="font-bold">BYTEXITO</span>
                </p>
            </div>
            <PrimaryButton class="self-center px-8 py-3">Sign in</PrimaryButton>
        </div>
        <div class="flex flex-col justify-center align-middle flex-1 pb-24">
            <div class="flex flex-col items-end mx-24 mb-10">
                <FlipCounter :count="100000" />
                <p>Connections</p>
            </div>
            <div class="flex mx-24 hero-content">
                <div class="container-left relative">
                    <div class="triangle absolute left-80 top-0"></div>
                    <div class="text-3xl font-bold mt-20">
                        Reconnect | Rediscover | Preserve Your Family Legacy
                    </div>
                    <h1 class="text-8xl font-extrabold leading-snug">
                        Join Family Threads<br />Today!
                    </h1>
                </div>
                <div class="container-right">
                    <div
                        class="bg-white p-8 h-full rounded-3xl w-full flex flex-col"
                    >
                        <v-text-field
                            label="Email address"
                            placeholder="johndoe@gmail.com"
                            type="email"
                            variant="outlined"
                            class="mb-2"
                        ></v-text-field>
                        <v-text-field
                            v-model="password"
                            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            :type="show1 ? 'text' : 'password'"
                            hint="At least 8 characters"
                            label="Password"
                            name="input-10-1"
                            counter
                            @click:append="show1 = !show1"
                            variant="outlined"
                            class="mb-2"
                        ></v-text-field>
                        <v-text-field
                            v-model="Confirmpassword"
                            :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                            :type="show2 ? 'text' : 'password'"
                            hint="At least 8 characters"
                            label="Confirm Password"
                            name="input-10-1"
                            counter
                            @click:append="show2 = !show2"
                            variant="outlined"
                            class="mb-2"
                        ></v-text-field>
                        <div class="flex items-center justify-end">
                            <a href="#">Already have an account?</a>
                            <PrimaryButton class="px-8 py-3 rounded-lg ms-5"
                                >Register
                            </PrimaryButton>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="mx-24 parent-grid h-custom mb-40">
            <div class="div1"></div>
            <div class="div2"></div>
            <div class="div3"></div>
            <div class="div4"></div>
        </div>
    </div>
</template>

<style scoped>
.logo-text {
    font-size: 15px;
}
.container-left {
    width: 65%;
    height: 400px;
    /* background-color: #d9ce5b; */
}
.container-right {
    width: 35%;
    height: 400px;
}
.h-custom {
    height: 40rem;
}
.parent-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: repeat(6, 1fr);
    grid-column-gap: 10px;
    grid-row-gap: 10px;
}

.div1 {
    grid-area: 1 / 1 / 7 / 5;
    background-color: aqua;
    border-radius: 15px;
}
.div2 {
    grid-area: 1 / 5 / 4 / 13;
    background-color: rgb(0, 0, 0);
    border-radius: 15px;
}
.div3 {
    grid-area: 4 / 5 / 7 / 9;
    background-color: rgb(21, 175, 23);
    border-radius: 15px;
}
.div4 {
    grid-area: 4 / 9 / 7 / 13;
    background-color: rgb(198, 86, 21);
    border-radius: 15px;
}
</style>
