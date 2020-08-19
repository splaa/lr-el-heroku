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
    console.log('Component mounted.');
    window.Echo.channel('chat')
        .listen('Message', ({message}) => {
          this.messages.push(message)
        })
  },
  methods: {
    sendMessage() {
      axios.get('https://dka-develop.ru/api?type=city').then((response) => {
        console.log(response);

      });
      // axios.post('/messages', {"body": this.textMessage});
      //
      // this.messages.push(this.textMessage);
      // this.textMessage = '';
    }

  }
}
</script>
