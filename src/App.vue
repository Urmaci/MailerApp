<template>
  <div class="container">
    <div class="form-row">
      <div class="form-wrapper">
        <FormImage />
        <MyForm />
      </div>
    </div>
  </div>
</template>

<script>
import FormImage from "@/components/FormImage.vue";
import MyForm from "@/components/MyForm.vue";

export default {
  components: {
    FormImage,
    MyForm,
  },
};
</script>
