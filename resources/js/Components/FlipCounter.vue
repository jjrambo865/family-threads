<template>
    <div class="flip-counter">
        <div v-for="(digit, index) in digits" :key="index" class="digit">
            <div class="digit-count">{{ digit }}</div>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted, watch } from "vue";

const props = defineProps({
    count: {
        type: Number,
        required: true,
    },
});

const animatedCount = ref(1);

const digits = computed(() => {
    return animatedCount.value
        .toString()
        .padStart(props.count.toString().length, "0")
        .split("");
});

const animateCount = () => {
    const incrementStep = Math.max(1, Math.floor(props.count / 100)); 
    const interval = setInterval(() => {
        if (animatedCount.value < props.count) {
            animatedCount.value = Math.min(animatedCount.value + incrementStep, props.count);
        } else {
            clearInterval(interval);
        }
    }, 10);
};

onMounted(() => {
    animateCount();
});

watch(
    () => props.count,
    () => {
        animatedCount.value = 1;
        animateCount();
    }
);
</script>

<style scoped>
.flip-counter {
    display: flex;
    align-items: center;
    font-family: "Courier New", Courier, monospace;
    font-size: 2rem;
    color: #333;
}

.digit {
    position: relative;
    width: 3rem;
    height: 4.8rem;
    margin: 0 0.1rem;
    background: #000;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    border-radius: 3px;
    overflow: hidden;
    transition: transform 0.3s ease;
}

.digit:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 50%;
    background: #222;
}

.digit:after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 50%;
    background: #444;
}

.label {
    font-size: 1rem;
    margin-left: 0.5rem;
}
.digit-count {
    position: relative;
    z-index: 1;
}
</style>
