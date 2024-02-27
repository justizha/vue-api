<template>
    <section class="relative mx-auto">
        <h1 class="mb-6 mt-8 text-center dark:text-white font-semibold text-2xl">Create User</h1>
        <div class="flex justify-center">
            <div class="p-2 dark:bg-gray-700/30 rounded-md flex  justify-center shadow w-full max-w-md py-12">
                <form @submit.prevent="submitForm" class="flex flex-col gap-2 dark:text-white">
                    <div>
                        <input placeholder="Name" type="text" id="name" v-model="formData.name" class="px-2 w-80 py-1 rounded-md bg-transparent dark:border border-gray-700 shadow">
                    </div>
                    <div>
                        <input placeholder="Email" type="email" id="email" v-model="formData.email" class="px-2 w-80 py-1 rounded-md bg-transparent dark:border border-gray-700 shadow">
                    </div>
                    <div>
                        <input placeholder="Password" type="password" id="password" v-model="formData.password" class="px-2 w-80 py-1 rounded-md bg-transparent dark:border border-gray-700 shadow">
                    </div>
                    <div class="grid ">
                        <button type="submit" class="bg-blue-600 hover:bg-blue-600 px-5 py-1 rounded font-medium text-white">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</template>


<script>
    export default {
        data() {
            return {
                formData: {
                    name : '',
                    email : '',
                    password : ''
                }
            }
        },
        methods : {
            submitForm(){
                fetch('http://127.0.0.1:8000/api/user/create',{
                    method: 'POST',
                    headers: {
                    'Content-Type': 'application/json'
                    },
                     body: JSON.stringify(this.formData)
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Failed to submit form');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log('Form submitted successfully',data)
                    this.$router.push('/user');
                })
                .catch(error => {
                    console.error("something went wrong",error)
                })
            },
           
        }
    }
</script>