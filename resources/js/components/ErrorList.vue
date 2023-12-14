<template>
    <div>
        <ul>
          <li v-for="(messages, field) in errors" :key="field">
            <strong>{{ field }}:</strong>
            <ul>
              <li v-for="message in messages" :key="message">{{ message }}</li>
            </ul>
          </li>
        </ul>
      </div>
</template>

  <script>
  export default {
    data() {
    },
    props:['errors']
  };
  </script>
