<template>
  <button class="px-4 text-center w-32 py-2 text-white bg-pink-500 hover:bg-pink-600 focus:bg-pink-700 focus:text-gray-100 focus:outline-none"
  >{{link.label}}</button>
</template>

<script>
export default {
name: "appButton",
  props: [
      'link'
  ]
}
</script>

<style scoped>

</style>