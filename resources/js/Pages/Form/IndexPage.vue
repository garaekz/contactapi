<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps<{
    forms: Pagination<Form>;
}>();
</script>

<template>
    <AppLayout title="Forms">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Forms
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Link v-for="form in forms.data" :href="`/forms/${form.ulid}`"
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4 dark:text-gray-100 flex justify-between items-center cursor-pointer">
                <div>
                    <h3 class="text-lg font-semibold">{{ form.name }}</h3>
                    <p class="text-sm text-gray-500">{{ form.ulid }}</p>
                </div>
                <button @click.prevent="() => console.log('View form')"
                    class="rounded border dark:border-gray-600 p-2 dark:hover:border-gray-500">
                    View
                </button>
                </Link>
            </div>
        </div>
    </AppLayout>
</template>
