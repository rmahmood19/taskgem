<template>
  <button type="button"  class=" text-center w-12 h-12 rounded-full text-white  hover:bg-pink-600 focus:bg-pink-700 focus:text-gray-100 focus:outline-none"

  v-bind:class="[link.active ? 'bg-pink-800' : '', 'bg-pink-500']"
          @click="loadTasksFromPage(link.label)"
  >{{link.label}}</button>
</template>

<script>
export default {
name: "PaginationLink",

  props: [
    'link'
  ],
  methods: {
  loadTasksFromPage(pageNumber) {
    this.$emit('loadTasksFromPage',pageNumber);
    console.log(pageNumber)
  }
  },

}
</script>

<style scoped>

</style>