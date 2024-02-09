<script>
import axios from 'axios';

export default {
    name: 'Items',
    data() {
        return {
            items: []
        };
    },
    created() {
        axios.get('http://127.0.0.1:8000/api/data')
            .then(response => {
                this.items = response.data.data;
            })
            .catch(error => {
                console.error('Error fetching data:', error);
            });
    }
}
</script>
<template>
    <h1 class="text-center py-2 text-lg font-medium dark:text-white">
        User List
    </h1>
    <div class="flex justify-end mx-4">
        <router-link class="dark:text-white text-base font-medium bg-blue-600 rounded-md p-1" to="/create_user">
            Create New User
        </router-link>
    </div>
    <div class="relative overflow-x-auto mx-1 flex justify-center">
        <table class="w-full max-w-3xl text-sm text-left text-gray-500 dark:text-gray-40">
            <thead>
                <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-300">
                    <th scope="col" class="py-2 px-6">
                        Id
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Name
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-2 px-6">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <tr v-for="item in items" :key="item.id" class="border-b dark:text-gray-300">
                    <td scope="col" class="py-1 px-6">
                        {{ item.id }}
                    </td>
                    <td scope="col" class="py-1 px-6">
                        {{ item.name }}
                    </td>
                    <td scope="col" class="py-1 px-6">
                        {{ item.email }}
                    </td>
                    <td scope="col" class="py-1 px-1 flex gap-2">
                        <a href="" class="text-white p-1 px-2 bg-yellow-500 font-medium  rounded-lg">Edit</a>
                        <a href="" class="text-white p-1 px-2 bg-red-500 font-medium  rounded-lg">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

