<script setup lang="ts">
import Button from '@/components/ui/button/Button.vue';
import Input from '@/components/ui/input/Input.vue';
import Label from '@/components/ui/label/Label.vue';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, useForm } from '@inertiajs/vue3';
//import { route } from 'ziggy-js';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Create a product',
        href: '/products/create',
    },
];
const form = useForm({
    name: '',
    price: '',
    description: '',
});
//const handleSubmit = () => {
//    //console.log(form);
//    form.post(route('products.store'));
//};
</script>

<template>

    <Head title="Create a Product" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="p-4">
            <form @submit.prevent="form.post(route('products.store'))" class="w-8/12 space-y-4">
                <div class="space-y-2">
                    <Label for="product name"> Name </Label>
                    <Input v-model="form.name" type="text" placeholder="Name" />
                    <div class="text-sm text-red-500" v-if="form.errors.name">
                        {{ form.errors.name }}
                    </div>
                </div>
                <div class="space-y-2">
                    <Label for="product price">Price</Label>
                    <Input v-model="form.price" type="number" placeholder="Price" />
                    <div class="text-sm text-red-500" v-if="form.errors.price">
                        {{ form.errors.price }}
                    </div>
                </div>
                <div class="space-y-2">
                    <Label for="product description"> Description </Label>
                    <Input v-model="form.description" type="text" placeholder="Description" />
                    <div class="text-sm text-red-500" v-if="form.errors.description">
                        {{ form.errors.description }}
                    </div>
                </div>

                <Button type="submit" :disabled="form.processing">
                    Add a Product
                </Button>
            </form>
        </div>
    </AppLayout>
</template>
