<template>
  <div>
    <add-task
        @newTaskAdded="getTasks(1)"
    ></add-task>
    <Task v-for="task in tasks"
          :key="task.id"
          :task="task"
    >
    </Task>
    <div>
      <p class="text-center text-gray-100">Pages</p>
    </div>
    <div class="flex justify-center">
      <pagination-link
          v-for="(link, index) in links"
          :link="link"
          :key="index"
          @loadTasksFromPage="getTasks(link.label)"
      >
      </pagination-link>



    </div>
  </div>

</template>

<script>

import axios from 'axios';
import Task from "./Task";
import AddTask from "./AddTask";
import PaginationLink from "./PaginationLink";
export default {
  name: "Tasks",
  components: {PaginationLink, Task, AddTask},
  data() {
    return {
      tasks : [],
      links: []
    }
  },
  methods: {
    getTasks(pageNumber) {
      axios.get('api/tasks?page=' + pageNumber).then(response => {
        this.tasks = response.data.data;
        response.data.meta.links.pop();
        response.data.meta.links.shift();
        this.links = response.data.meta.links;
        }).catch(err => {
          console.log(err)
        });
    }
  },
  mounted() {
    this.getTasks(1)
  }
}

</script>

<style scoped>

</style>