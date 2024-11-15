<template>
    <div class="carousel">
        <div
            class="carousel-track"
            :style="{ transform: `translateX(-${currentIndex * 100}%)` }"
        >
            <div
                class="carousel-item"
                v-for="(item, index) in items"
                :key="index"
            >
                <slot :item="item">{{ item }}</slot>
            </div>
        </div>

        <button class="carousel-nav prev" @click="prevSlide">‹</button>
        <button class="carousel-nav next" @click="nextSlide">›</button>

        <div class="carousel-pagination pt-10">
            <button
                v-for="(item, index) in items"
                :key="index"
                :class="{ active: index === currentIndex }"
                @click="goToSlide(index)"
            ></button>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";

const props = defineProps({
    items: {
        type: Array,
        required: true,
    },
});

const currentIndex = ref(0);

const prevSlide = () => {
    currentIndex.value =
        (currentIndex.value - 1 + props.items.length) % props.items.length;
};

const nextSlide = () => {
    currentIndex.value = (currentIndex.value + 1) % props.items.length;
};

const goToSlide = (index) => {
    currentIndex.value = index;
};
</script>

<style scoped>
.carousel {
    position: relative;
    width: 100%;
    /* max-width: 600px; */
    overflow: hidden;
    margin: auto;
}

.carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    flex: 0 0 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 500px;
    border-radius: 10px;
}

.carousel-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgb(0, 0, 0);
    color: #fff;
    border: none;
    border-radius: 50%;
    width: 38px;
    height: 38px;
    cursor: pointer;
    font-size: 1.5rem;
    z-index: 10;
    display: flex;
    justify-content: center;
    align-items: center;
}

.carousel-nav.prev {
    left: 10px;
}

.carousel-nav.next {
    right: 10px;
}

/* Pagination */
.carousel-pagination {
    display: flex;
    justify-content: center;
    margin-top: 10px;
}

.carousel-pagination button {
    width: 12px;
    height: 12px;
    margin: 0 5px;
    border: none;
    border-radius: 50%;
    background: #ccc;
    cursor: pointer;
}

.carousel-pagination button.active {
    background: #333;
}
</style>
