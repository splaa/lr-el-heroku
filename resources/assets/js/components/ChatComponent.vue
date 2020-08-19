<template>
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-sm-12">
        <textarea name="" id="" cols="30" rows="10" class="form-control" readonly>{{ message.join('\n') }}</textarea>
        <input type="text" class="form-control" v-model="textMessage" @keyup.enter="sendMessage">
      </div>
    </div>

  </div>
</template>

<script>
export default {
  data() {
    return {
      message: ['one', 'two', 'three'],
      textMessage: '',
    }
  },
  created() {
    console.log('Created hello');
  },
  mounted() {
    console.log('Component mounted.')
  },
  methods:{
   sendMessage() {
      console.log('hello');
    }

  }
}
</script>
