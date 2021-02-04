<template>
  <div class="relative text-gray-700 mb-4 shadow-lg">
    <form v-on:submit="createTask">
    <input  v-model="name" class="w-full h-10 pl-3 pr-8 text-base placeholder-gray-600 border  focus:shadow-outline" type="text" placeholder="Enter the name of your task"
    @keydown.enter="createTask"/>
    <button type="submit" class="absolute inset-y-0 right-0 flex items-center px-8 h-10 font-bold text-white bg-pink-500 hover:bg-pink-600 focus:bg-pink-700 focus:text-gray-100 focus:outline-none">Add</button>
    </form>
    <p v-if="errorMessage" class="text-red-300">{{errorMessage}} </p>
  </div>
</template>

<script>
import axios from 'axios'
export default {

  name: "AddTask",
  data() {
     return {
       'name' : '',
       'errorMessage': ''
     }
  },
  methods: {
    createTask(e) {
      e.preventDefault();
      axios.post('/api/tasks', {
        'name' : this.name,
      }).then( response => {
        this.$emit('newTaskAdded');
        this.name = ''
      }).catch( error => {
        this.errorMessage = error.response.data.errors.name
        console.log(error.response.data.errors)
      });

    }
  }
}
</script>

<style scoped>

</style>