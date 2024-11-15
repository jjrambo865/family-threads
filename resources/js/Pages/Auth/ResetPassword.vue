<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import InputError from "@/Components/InputError.vue";
import InputLabel from "@/Components/InputLabel.vue";
import PrimaryButton from "@/Components/PrimaryButton.vue";
import TextInput from "@/Components/TextInput.vue";
import { Head, useForm } from "@inertiajs/vue3";
import { ref } from "vue";

const props = defineProps({
    email: {
        type: String,
        required: true,
    },
    token: {
        type: String,
        required: true,
    },
});

const form = useForm({
    token: props.token,
    email: props.email,
    password: "",
    password_confirmation: "",
});

const counter1 = ref(0);
const counter2 = ref(0);
const show1 = ref(false);
const show2 = ref(false);

const submit = () => {
    form.post(route("password.store"), {
        onFinish: () => form.reset("password", "password_confirmation"),
    });
};
</script>

<template>
    <GuestLayout>
        <Head title="Reset Password" />

        <p class="text-5xl montserrat-bold mb-8">Change Password</p>
        <div class="bg-white container rounded-3xl p-8">
            <v-form @submit.prevent="submit" class="p-2">
                <v-text-field
                    v-model="form.email"
                    label="Email Address"
                    :class="['montserrat-light', form.errors.email ? 'mb-2' : 'mb-5']"
                    name="input-email"
                    variant="outlined"
                    hide-details="auto"
                ></v-text-field>
                <InputError class="mb-2" :message="form.errors.email" />
                <v-text-field
                    v-model="form.password"
                    :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                    :type="show1 ? 'text' : 'password'"
                    label="Password"
                    name="input-password"
                    @click:append="show1 = !show1"
                    variant="outlined"
                    :class="['montserrat-light', form.errors.password ? 'mb-2' : 'mb-5']"
                    hide-details="auto"
                ></v-text-field>
                <InputError class="mb-2" :message="form.errors.password" />
                <v-text-field
                    v-model="form.password_confirmation"
                    :append-icon="show2 ? 'mdi-eye' : 'mdi-eye-off'"
                    :type="show2 ? 'text' : 'password'"
                    label="Confirma Password"
                    name="input-password-conf"
                    counter
                    @click:append="show2 = !show2"
                    variant="outlined"
                    class="montserrat-light"
                    hide-details="auto"
                ></v-text-field>
                <InputError class="mb-2" :message="form.errors.password_confirmation" />
                <div class="flex items-center justify-end">
                    <PrimaryButton
                        class="px-8 py-3 rounded-lg ms-5 montserrat-light"
                        type="submit"
                        >Reset
                    </PrimaryButton>
                </div>
            </v-form>
        </div>
    </GuestLayout>
</template>
<style scoped>
.container {
    width: 32rem;
}
</style>
