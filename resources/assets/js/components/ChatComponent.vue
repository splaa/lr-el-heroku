<template>
  <div class="container">
    <hr>
    <div class="row">
      <div class="col-sm-12">
        <textarea name="" id="" cols="30" rows="10" class="form-control" readonly>{{ messages.join('\n') }}</textarea>
        <input type="text" class="form-control" v-model="textMessage" @keyup.enter="sendMessage">
      </div>
    </div>

  </div>
</template>

<script>
export default {
  data() {
    return {
      messages: [],
      textMessage: '',
    }
  },
  created() {
    console.log('Created hello');
  },
  mounted() {
    window.Echo.channel('chat')
        .listen('Message', ({message}) => {
          this.messages.push(message.body)
        })
  },
  methods: {
    sendMessage() {
      axios.post('/messages',{body: this.textMessage});
      this.messages.push(this.textMessage);
      this.textMessage = '';
    }

  }
}
</script>
