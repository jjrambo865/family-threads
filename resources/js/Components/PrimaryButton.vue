<template>
    <button
        class="inline-flex items-center rounded-3xl bg-gold px-8 py-2 text-sm font-semibold tracking-widest text-black transition duration-150 ease-in-out hover:bg-gray-700 focus:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-amber-200 focus:ring-offset-2 active:bg-gray-900"
    >
        <slot />
    </button>
</template>
<style scoped>
.bg-gold {
    background-color: #d9ce5b;
}
</style>
