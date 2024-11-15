<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import FlipCounter from "@/Components/FlipCounter.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import "vue3-carousel/dist/carousel.css";
import Carousel from "@/Components/Carousel.vue";

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

const team = [
    {
        id: 1,
        name: "Mohamed Shahadh",
        image: "/images/shahadh.png",
        title: "Fullstack Developer",
        description:
            "M.H.M. Shahadh is a dedicated software developer working remotely as a full-stack developer at Flynode Wireless LLC. With experience in web and mobile application development using Vue.js, Laravel, PostgreSQL, and React Native, he approaches each project with a focus on learning and growth. Currently pursuing a externel degree in Information Technology at the University of Moratuwa, he is also exploring areas like blockchain and Zero-Knowledge Proofs to expand his knowledge. Shahadh values continuous improvement and aims to make a positive impact through his work in technology.",
    },
    {
        id: 2,
        name: "Naqash",
        image: "/images/shahadh.png",
        title: "UI/UX Designer & Developer",
        description:
            "Naqash is a skilled developer with expertise in UI/UX design and web development, as well as desktop application development using C#. With a strong eye for detail and a focus on user-centered design, Naqash brings thoughtful, effective solutions to each project. Currently pursuing an external degree in Information Technology at the University of Moratuwa, Naqash is committed to continuous learning and professional growth. Driven by a passion for technology and design, Naqash aims to create impactful digital experiences that prioritize both functionality and aesthetics.",
    },
    {
        id: 3,
        name: "Mohamed Haseef",
        image: "/images/shahadh.png",
        title: "Developer",
        description:
            "Mohamed Haseef is a versatile developer with the ability to build both desktop and web applications. With a strong foundation in programming and a commitment to delivering effective solutions, he approaches each project with attention to detail and a focus on quality. Currently pursuing an external degree in Information Technology at the University of Moratuwa, Haseef is dedicated to expanding his knowledge and skills in the tech field. His goal is to create applications that are both functional and user-friendly, making a positive impact through technology.",
    },
];

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>

<template>
    <Head title="Welcome" />
    <div class="h-svh flex flex-col">
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
                                >Sign up
                            </PrimaryButton>
                        </div>
                        <p class="my-6 text-center font-bold">Or</p>
                        <div class="flex justify-center">
                            <button class="gsi-material-button">
                            <div class="gsi-material-button-state"></div>
                            <div class="gsi-material-button-content-wrapper">
                                <div class="gsi-material-button-icon">
                                    <svg
                                        version="1.1"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 48 48"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        style="display: block"
                                    >
                                        <path
                                            fill="#EA4335"
                                            d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"
                                        ></path>
                                        <path
                                            fill="#4285F4"
                                            d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"
                                        ></path>
                                        <path
                                            fill="#FBBC05"
                                            d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"
                                        ></path>
                                        <path
                                            fill="#34A853"
                                            d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"
                                        ></path>
                                        <path
                                            fill="none"
                                            d="M0 0h48v48H0z"
                                        ></path>
                                    </svg>
                                </div>
                                <span class="gsi-material-button-contents"
                                    >Sign up with Google</span
                                >
                                <span style="display: none"
                                    >Sign up with Google</span
                                >
                            </div>
                        </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="features-section">
        <div class="mx-24 parent-grid h-custom mb-40">
            <div class="div1 img-2">
                <div class="flex flex-col justify-end h-full">
                    <p
                        class="text-xl font-extralight mt-5 text-white backdrop-blur-sm w-32"
                    >
                        Connect your
                    </p>
                    <p class="text-4xl font-bold text-white">Family Tree</p>
                </div>
            </div>
            <div class="div2 img-1">
                <div class="flex h-full">
                    <div class="flex flex-col justify-end">
                        <p class="text-xl font-extralight mt-5">
                            Live your memories in
                        </p>
                        <p class="text-4xl font-bold">Memory Threads</p>
                    </div>
                </div>
            </div>
            <div class="div3 img-3">
                <div class="flex flex-col justify-end h-full">
                    <p class="text-xl font-extralight mt-5 text-white">
                        Excite with
                    </p>
                    <p class="text-4xl font-bold text-white">Time Capsules</p>
                </div>
            </div>
            <div class="div4 img-4">
                <div class="flex flex-col justify-end h-full">
                    <p class="text-xl font-extralight mt-5">Pass on your</p>
                    <p class="text-4xl font-bold">Keep Sakes</p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-section mx-24 flex gap-4">
        <div class="carousel-sec-col1 flex justify-end pe-5">
            <div class="">
                <p class="text-5xl font-bold">OUR</p>
                <p class="text-2xl font-bold ms-10">Team</p>
            </div>
        </div>
        <div
            class="carousel-sec-col2 bg-white h-custom w-full rounded-xl flex p-5 mb-40"
        >
            <Carousel :items="team" class="h-custom">
                <template #default="{ item }">
                    <div class="flex gap-3 justify-center items-center">
                        <div class="desc p-32">
                            <p class="text-xl text-left">
                                {{ item.description }}
                            </p>
                            <p class="text-4xl text-left mt-5 font-bold">
                                {{ item.name }}
                            </p>
                            <p class="text-xl text-left">{{ item.title }}</p>
                        </div>
                        <div>
                            <img
                                :src="item.image"
                                alt="team-player"
                                style="
                                    width: 80%;
                                    height: 80%;
                                    object-fit: contain;
                                "
                            />
                        </div>
                    </div>
                </template>
            </Carousel>
        </div>
    </div>
    <div class="footer bg-black h-56 flex flex-col justify-center items-center">
        <div class="flex gap-10">
            <span class="mdi mdi-facebook text-3xl hover:cursor-pointer"></span>
            <span
                class="mdi mdi-instagram text-3xl hover:cursor-pointer"
            ></span>
            <span class="mdi mdi-whatsapp text-3xl hover:cursor-pointer"></span>
            <span class="mdi mdi-linkedin text-3xl hover:cursor-pointer"></span>
        </div>
        <p class="mt-3">Join and follow us now!</p>
        <p class="mt-3">© 2024 Made with 💛 by ByteExito.</p>
    </div>
</template>

<style scoped>
.logo-text {
    font-size: 15px;
}
.container-left {
    width: 65%;
    height: 500px;
    /* background-color: #d9ce5b; */
}
.container-right {
    width: 35%;
    height: 500px;
}
.h-custom {
    height: 40rem;
}
.parent-grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-template-rows: repeat(6, 1fr);
    grid-column-gap: 20px;
    grid-row-gap: 20px;
}

.div1 {
    grid-area: 1 / 1 / 7 / 5;
    background-color: rgb(255, 255, 255);
    border-radius: 15px;
    padding: 20px;
}
.div2 {
    grid-area: 1 / 5 / 4 / 13;
    background-color: rgb(255, 255, 255);
    border-radius: 15px;
    padding: 20px;
}
.div3 {
    grid-area: 4 / 5 / 7 / 9;
    background-color: rgb(255, 255, 255);
    border-radius: 15px;
    padding: 20px;
}
.div4 {
    grid-area: 4 / 9 / 7 / 13;
    background-color: rgb(255, 255, 255);
    border-radius: 15px;
    padding: 20px;
}

.img-2 {
    background-image: url("/images/img-2.webp");
    background-size: cover;
    border-radius: 15px;
}

.img-1 {
    background-image: url("/images/img-1.jpg");
    background-size: cover;
    border-radius: 15px;
}

.img-3 {
    background-image: url("/images/img-3.jpg");
    background-size: cover;
}

.img-4 {
    background-image: url("/images/img-4.webp");
    background-size: cover;
}
.carousel-sec-col1 {
    width: 20%;
}
.carousel-sec-col2 {
    width: 80%;
}

.gsi-material-button {
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  -webkit-appearance: none;
  background-color: #131314;
  background-image: none;
  border: 1px solid #747775;
  -webkit-border-radius: 20px;
  border-radius: 20px;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  color: #e3e3e3;
  cursor: pointer;
  font-family: 'Roboto', arial, sans-serif;
  font-size: 14px;
  height: 40px;
  letter-spacing: 0.25px;
  outline: none;
  overflow: hidden;
  padding: 0 12px;
  position: relative;
  text-align: center;
  -webkit-transition: background-color .218s, border-color .218s, box-shadow .218s;
  transition: background-color .218s, border-color .218s, box-shadow .218s;
  vertical-align: middle;
  white-space: nowrap;
  width: auto;
  max-width: 400px;
  min-width: min-content;
  border-color: #8e918f;
}

.gsi-material-button .gsi-material-button-icon {
  height: 20px;
  margin-right: 12px;
  min-width: 20px;
  width: 20px;
}

.gsi-material-button .gsi-material-button-content-wrapper {
  -webkit-align-items: center;
  align-items: center;
  display: flex;
  -webkit-flex-direction: row;
  flex-direction: row;
  -webkit-flex-wrap: nowrap;
  flex-wrap: nowrap;
  height: 100%;
  justify-content: space-between;
  position: relative;
  width: 100%;
}

.gsi-material-button .gsi-material-button-contents {
  -webkit-flex-grow: 1;
  flex-grow: 1;
  font-family: 'Roboto', arial, sans-serif;
  font-weight: 500;
  overflow: hidden;
  text-overflow: ellipsis;
  vertical-align: top;
}

.gsi-material-button .gsi-material-button-state {
  -webkit-transition: opacity .218s;
  transition: opacity .218s;
  bottom: 0;
  left: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.gsi-material-button:disabled {
  cursor: default;
  background-color: #13131461;
  border-color: #8e918f1f;
}

.gsi-material-button:disabled .gsi-material-button-state {
  background-color: #e3e3e31f;
}

.gsi-material-button:disabled .gsi-material-button-contents {
  opacity: 38%;
}

.gsi-material-button:disabled .gsi-material-button-icon {
  opacity: 38%;
}

.gsi-material-button:not(:disabled):active .gsi-material-button-state, 
.gsi-material-button:not(:disabled):focus .gsi-material-button-state {
  background-color: white;
  opacity: 12%;
}

.gsi-material-button:not(:disabled):hover {
  -webkit-box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
  box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
}

.gsi-material-button:not(:disabled):hover .gsi-material-button-state {
  background-color: white;
  opacity: 8%;
}

</style>
