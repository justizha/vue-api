<script lang="ts">

  interface User {
    id : number,
    name : string,
    email : string
  }

  export default {
    name : 'UserList',
    data() {
      return {
        users: [] as User[]
      }
    },
    mounted() {
      this.fetchUsers()
    },
    methods : {
      fetchUsers(){
        fetch('http://127.0.0.1:8000/api/user')
          .then(res => res.json())
          .then((data: User[]) => this.users = data)
          .catch(err => console.error(err.message))
      },
      deleteUser(userId:any){
        if(confirm("are you sure")){
          fetch(`http://127.0.0.1:8000/api/user/delete/${userId}`,{
            method :'DELETE',
          })
          .then(res =>{
              if(!res.ok){
                throw new Error('failed to delete user')
              }
              {this.fetchUsers()}
            }
          )
          .catch(error => {
            console.error('Failed to delete user',error)
          })
        }
      }
    }
    
  }
</script>

<template>                    
  <section class="pt-20">
    <div class="my-2 flex justify-center">
      <router-link to="/user/create" class="bg-blue-700 hover:bg-blue-800 px-6 py-1 rounded text-white font-medium">
        Add new User
      </router-link>
    </div>
    <div class="flex justify-center">
        <table class="w-full max-w-3xl text-sm text-left  text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Id 
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Detail
                    </th>
                    <th scope="col" class="px-6 py-3">
                      action
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="user in users" :key="user.id">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                      {{ user.id }}
                    </th>
                    <td class="px-6 py-4">
                      {{ user.name }}
                    </td>
                    <td class="px-6 py-4">
                      {{ user.email }}
                    </td>
                    <td class="px-6 py-4">
                      <router-link :to="{ name: 'UserDetail', params: { id: user.id }}" class="bg-blue-600 hover:bg-blue-700 p-1 rounded font-medium text-white">Detail</router-link>
                    </td>
                    <td class="px-6 py-4">
                      <a @click="deleteUser(user.id)" class="cursor-pointer px-2 py-1 rounded bg-red-500 font-medium text-white">Delete</a>
                    </td>
                </tr>  
            </tbody>
        </table>
    </div>
  </section>
</template>


