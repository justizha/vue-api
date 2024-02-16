<script lang="ts">
import { Undo2 } from 'lucide-vue-next'
interface User {
    id: number,
    name: string,
    email: string
}
export default {
    data() {
        return {
            user: null as User | null
        }
    },
    mounted() {
        fetch(`http://127.0.0.1:8000/api/user/${this.$route.params.id}`)
            .then(res => res.json())
            .then((data: User) => this.user = data)
            .catch(err => console.error(err.message))
    }
}
</script>

<template>
    <section class="pt-24 pb-20">
        <div v-if="user" class="flex justify-center">
            <div class="rounded-md dark:bg-gray-700 w-full max-w-[400px] px-6 py-2">
                <h1 class="dark:text-white font-semibold text-xl">User Detail</h1>
                <p  class="text-base font-medium dark:text-white">
                    User Id : {{ user.id}}
                </p>
                <p  class="text-base font-medium dark:text-white">
                    Name : {{ user.name }}
                </p>
                <p  class="text-base font-medium dark:text-white">
                    Email : {{ user.email}}
                </p>
                <div class="mt-2 flex justify-end">
                    <router-link to="/user" class="py-1 px-6 bg-blue-600 rounded-md text-white hover:bg-blue-700 font-medium">
                            <Undo2/> Back
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</template>

