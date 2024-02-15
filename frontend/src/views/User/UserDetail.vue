<template>
    <div v-if="user">
        <h1>
            {{ user.name }}
        </h1>
    </div>
</template>


<script>
    export default {
        data(){
            return {
                user: null
            }
        },
        mounted() {
           fetch(`http://127.0.0.1:8000/api/user/${this.$route.params.id}`)
            .then(res => res.json())
            .then(data => this.user = data)
            .catch(err => console.error(err.message))
        }
    }
</script>