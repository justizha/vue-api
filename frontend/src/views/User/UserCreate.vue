<template>
    <div>
        <form @submit.prevent="submitForm">
            <div>
                <label for="" class="text-white">Name</label>
                <input type="text" id="name" v-model="formData.name">
            </div>
            <div>
                <label for="" class="text-white">Email</label>
                <input type="email" id="email" v-model="formData.email">
            </div>
            <div>
                <label for="" class="text-white">Password</label>
                <input type="password" id="password" v-model="formData.password">
            </div>
            <div>
                <button type="submit">Create</button>
            </div>
        </form>

    </div>
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