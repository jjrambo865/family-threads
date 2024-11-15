<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <div class="h-svh flex flex-col">
        <div class="flex justify-between mx-24 py-2">
            <div class="flex items-center justify-center">
                <Link
                    href="/"
                >
                    <ApplicationLogo
                        class="h-20 w-20 fill-current text-gray-500 me-1"
                    />
                </Link>
                <p class="font-light logo-text montserrat-light">
                    FAMILY THREADS<br />
                    by <span class="montserrat-bold">BYTEXITO</span>
                </p>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center min-w-80 flex-1">
            <slot />
        </div>
    </div>
</template>
