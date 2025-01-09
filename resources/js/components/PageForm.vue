<template>
  <div class="container mt-5">
    <h1 class="mb-4">{{ isEdit ? 'Edit Page' : 'Create Page' }}</h1>
    <form @submit.prevent="savePage">
      <div class="mb-3">
        <label class="form-label">Parent Page</label>
        <select v-model="form.parent_id" class="form-select">
          <option :value="null">No Parent</option>
          <option v-for="page in pages" :key="page.id" :value="page.id">
            {{ page.title }}
          </option>
        </select>
      </div>
      <div class="mb-3">
        <label class="form-label">Slug</label>
        <input v-model="form.slug" class="form-control" type="text" placeholder="Enter slug" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Title</label>
        <input v-model="form.title" class="form-control" type="text" placeholder="Enter title" required />
      </div>
      <div class="mb-3">
        <label class="form-label">Content</label>
        <textarea v-model="form.content" class="form-control" rows="5" placeholder="Enter content"></textarea>
      </div>
      <div class="d-flex">
        <button type="submit" class="btn btn-primary me-2">Save</button>
        <button type="button" class="btn btn-secondary" @click="$router.push('/')">Cancel</button>
      </div>
    </form>
  </div>
</template>

<script>
import api from '../api';

export default {
  props: ['id'],
  data() {
    return {
      form: {
        parent_id: null,
        slug: '',
        title: '',
        content: '',
      },
      pages: [],
    };
  },
  computed: {
    isEdit() {
      return !!this.id;
    },
  },
  async created() {
    try {
      const response = await api.get('/pages');
      this.pages = response.data;

      if (this.isEdit) {
        const pageResponse = await api.get(`/pages/${this.id}`);
        this.form = pageResponse.data;
      }
    } catch (error) {
      console.error('Error fetching pages:', error);
    }
  },
  methods: {
    async savePage() {
      try {
        if (this.isEdit) {
          await api.put(`/pages/${this.id}`, this.form);
        } else {
          await api.post('/pages', this.form);
        }
        this.$router.push('/');
      } catch (error) {
        console.error('Error saving page:', error);
      }
    },
  },
};
</script>
