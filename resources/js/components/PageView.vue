<template>
  <div class="container mt-5">
    <h1>{{ page.title }}</h1>
    <p v-if="page.content">{{ page.content }}</p>
    <p v-else>No content available for this page.</p>
  </div>
</template>

<script>
import api from "../api";

export default {
  props: ['slug'],
  data() {
    return {
      page: {},
    };
  },
  async created() {
    const response = await api.get(`/nirav/${this.slug}`);
    this.page = response.data;
  },
};
</script>
