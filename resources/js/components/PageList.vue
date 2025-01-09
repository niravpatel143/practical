<template>
  <div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h1>Page List</h1>
      <button class="btn btn-primary" @click="$router.push('/create')">
        <i class="bi bi-plus-circle"></i> Create New Page
      </button>
    </div>
    <div v-if="pages.length === 0" class="alert alert-info">
      No pages available. Click "Create New Page" to add one!
    </div>
    <ul class="list-group">
      <li
        class="list-group-item"
        v-for="page in pages"
        :key="page.id"
      >
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <strong>{{ page.title }}</strong> 
            <small class="text-muted">({{ page.slug }})</small>
          </div>
          <div>
            <button class="btn btn-sm btn-info me-2" @click="viewPage(page)">
              <i class="bi bi-eye"></i> View
            </button>
            <button class="btn btn-sm btn-warning me-2" @click="editPage(page.id)">
              <i class="bi bi-pencil"></i> Edit
            </button>
            <button class="btn btn-sm btn-danger" @click="deletePage(page.id)">
              <i class="bi bi-trash"></i> Delete
            </button>
          </div>
        </div>
        <ul v-if="page.children.length" class="list-group mt-3">
          <li
            class="list-group-item"
            v-for="child in page.children"
            :key="child.id"
          >
            <div class="d-flex justify-content-between align-items-center">
              <div>
                {{ child.title }} 
                <small class="text-muted">({{ child.slug }})</small>
              </div>
              <div>
                <button class="btn btn-sm btn-info" @click="viewPage(child)">
                  <i class="bi bi-eye"></i> View
                </button>
              </div>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</template>

<script>
import api from "../api";

export default {
  data() {
    return {
      pages: [],
    };
  },
  async created() {
    const response = await api.get("/pages");
    this.pages = response.data;
  },
  methods: {
    viewPage(page) {
      this.$router.push(`/page/${page.slug}`); // Navigate to the page based on its slug
    },
    editPage(id) {
      this.$router.push(`/edit/${id}`);
    },
    async deletePage(id) {
      if (confirm("Are you sure you want to delete this page?")) {
        await api.delete(`/pages/${id}`);
        this.pages = this.pages.filter((page) => page.id !== id);
      }
    },
  },
};
</script>
