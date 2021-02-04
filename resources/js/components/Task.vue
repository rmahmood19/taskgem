<template>
<div class="py-4 px-4 bg flex justify-between gap-6 mb-1 bg-tertiary"

>
  <div>
    <p class=" text-gray-200 font-extrabold">{{task.name}}</p>
  </div>
  <div>
    <input type="checkbox" class="focus:outline-none ring-transparent form-checkbox h-5 w-5 text-pink-600 rounded-full" :checked="task.isCompleted"
    @click="toggleCompletedStatus(task.id)">
  </div>

</div>
</template>

<script>
import axios from 'axios';
export default {
name: "Task",
  props: [
  'task'
      ],
  methods: {
  toggleCompletedStatus(id) {
     axios.put('/api/tasks/' + id + '/toggle-completed-status')
  }
  }

}
</script>

<style scoped>

</style>