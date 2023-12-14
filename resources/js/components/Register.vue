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
                <input type="text" class="form-control" placeholder="Name" required v-model="data.name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Surname" required v-model="data.surname">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="date" class="form-control" placeholder="Date Of Birthday" required v-model="data.dob">
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
                  <button type="submit" class="btn btn-primary btn-block" @click="register">
                    Register
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
        name:'',
        surname:'',
        dob:'',
        password:''
      }
    }
  },
  methods: {
    async register(){
        let register = await this.$store.dispatch("register", this.data);
        if(register){
            this.$router.push({ name: 'home' });

        }

    }
  },
  mounted() {
    console.log(import.meta.env.VITE_API_URL);
  }
}
</script>
