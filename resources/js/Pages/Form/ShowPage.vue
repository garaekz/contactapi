<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps<{
    submissions: Pagination<Form>;
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
                <div
                    class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg p-4 dark:text-gray-100 flex justify-between">
                    {{ submissions }}
                </div>
            </div>
        </div>
    </AppLayout>
</template>
