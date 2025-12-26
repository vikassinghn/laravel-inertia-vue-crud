<script setup lang="ts">
import { Alert, AlertDescription, AlertTitle } from '@/components/ui/alert';
import Button from '@/components/ui/button/Button.vue';
import Input from '@/components/ui/input/Input.vue';
import {
    Table,
    TableBody,
    TableCaption,
    TableCell,
    TableHead,
    TableHeader,
    TableRow,
} from '@/components/ui/table';
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head, Link, router, usePage } from '@inertiajs/vue3';
import { Rocket } from 'lucide-vue-next';
import { ref, watch, onMounted, nextTick, computed } from 'vue';

const props = defineProps({
    products: Object,
});

const totalProducts = computed(() => props.products.total);
const showingProducts = computed(() => props.products.data.length);
const search = ref('');
const searchInput = ref<HTMLInputElement | null>(null);

onMounted(async () => {
    await nextTick();
    searchInput.value?.focus();
});

watch(search, (value) => {
    router.get('/products', { search: value }, {
        preserveState: true,
        replace: true,
    });
});

const breadcrumbs: BreadcrumbItem[] = [
    { title: 'Products', href: '/products' },
];

const page = usePage();

const handleDelete = (id: number) => {
    if (confirm('Do you want to delete this product?')) {
        router.delete(`/products/${id}`);
    }
};
</script>

<template>

    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="p-4">
            <div v-if="page.props.flash?.message" class="mb-4">
                <Alert class="bg-blue-200">
                    <Rocket class="h-4w-4" />
                    <AlertTitle>Notification!</AlertTitle>
                    <AlertDescription>
                        {{ page.props.flash.message }}
                    </AlertDescription>
                </Alert>
            </div>
            <div class="mb-4 flex items-center justify-between">
                <Link :href="route('products.create')">
                    <Button>Create a Product</Button>
                </Link>

                <div class="flex items-center gap-2">
                    <Input ref="searchInput" v-model="search" placeholder="Search products..." class="w-64" />

                    <Button v-if="search" variant="ghost" @click="search = ''">
                        Clear
                    </Button>
                </div>
            </div>

            <div>
                <Table>
                    <TableCaption>A list of your recent products</TableCaption>
                    <TableHeader>
                        <TableRow>
                            <TableHead class="w-[100px]"> ID </TableHead>
                            <TableHead>Name</TableHead>
                            <TableHead>Price</TableHead>
                            <TableHead>Description</TableHead>
                            <TableHead class="text-center"> Actions </TableHead>
                        </TableRow>
                    </TableHeader>
                    <TableBody>
                        <TableRow v-for="product in products.data" :key="product.id">
                            <TableCell>{{ product.id }}</TableCell>
                            <TableCell class="font-medium">{{
                                product.name
                            }}</TableCell>
                            <TableCell>{{ product.price }}</TableCell>
                            <TableCell>{{ product.description }}</TableCell>
                            <TableCell class="text-center space-x-2">
                                <Link :href="route('products.edit', {
                                    id: product.id,
                                })
                                    ">
                                    <Button class="bg-slate-600">
                                        Edit
                                    </Button>
                                </Link>
                                <Button class="bg-red-600" @click="handleDelete(product.id)">Delete</Button>
                            </TableCell>
                        </TableRow>
                    </TableBody>
                </Table>
                <div v-if="props.products.links && props.products.links.length > 1"
                    class="mt-6 flex justify-center gap-1">
                    <Link v-for="link in props.products.links" :key="link.label" :href="link.url ?? ''"
                        v-html="link.label" class="px-3 py-1 border rounded text-sm" :class="{
                            'bg-blue-600 text-white': link.active,
                            'pointer-events-none text-gray-400': !link.url
                        }" preserve-scroll />
                </div>
                <p class="text-sm text-gray-500 mt-1">
                    Showing {{ showingProducts }} of {{ totalProducts }} products
                </p>

            </div>
        </div>
    </AppLayout>
</template>
