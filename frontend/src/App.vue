<template>
  <div>
    <ul>
      <li v-for="item in items" :key="item.id">{{ item.id }}</li>
      <li v-for="item in items" :key="item.id">{{ item.name }}</li>
      <li v-for="item in items" :key="item.id">{{ item.email }}</li>
    </ul>
  </div>
</template>

<script>
import axios from 'axios';

export default {
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
