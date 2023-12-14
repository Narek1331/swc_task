<template>
    <div>
    <div class="register-box" style="width: 100%!important;">
        <div class="register-logo">
          <a><b>Task</b></a>
        </div>
        <div class="card">
          <div class="card-body register-card-body text-center">
            <p class="login-box-msg">Login</p>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Login" required v-model="data.login">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password" required v-model="data.password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block" @click="login">
                    Login
                  </button>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      data:{
        login:'',
        password:''
      }
    }
  },
  methods: {
    async login(){
        let login = await this.$store.dispatch("login", this.data);
        if(login){
            this.$router.push({ name: 'profile' });

        }

    }
  },
  mounted() {
    console.log(import.meta.env.VITE_API_URL);
  }
}
</script>
