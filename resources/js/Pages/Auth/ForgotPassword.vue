<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

defineProps({
    status: {
        type: String,
    },
});

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>
        <Head title="Forgot Password" />

        <div
            v-if="status"
            class="mb-4 text-sm font-medium text-green-600"
        >
            {{ status }}
        </div>

        <p class="text-5xl montserrat-bold mb-8">Reset your password</p>
        <div class="bg-white container rounded-3xl p-8">
            <div class="mb-4 text-sm text-gray-600">
                <p class="montserrat-light">Lost your password?</p>
                <p class="mt-2 montserrat-light">Please enter your email address and you will recieve a link to create a new password via email.</p>
            </div>
            <v-form @submit.prevent="submit" class="p-2">
                <v-text-field
                    v-model="form.email"
                    label="Email Address"
                    class="mb-2 montserrat-light"
                    name="input-email"
                    variant="outlined"
                ></v-text-field>
                <div class="flex items-center justify-end">
                    <PrimaryButton
                        class="px-16 py-3 rounded-lg ms-5 montserrat-light"
                        type="submit"
                        >Send
                    </PrimaryButton>
                </div>
            </v-form>
        </div>
    </GuestLayout>
</template>
<style scoped>
.container {
    width: 37rem;
}
</style>
