<template>
    <div id="login" class="container" style="margin-top:90px">
        <div class="row">
            <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2">
                <div class="card text-center">
                    <form class="form-signin" method="post" >
                        <input type="hidden" name="_token" :value="csrf">
                        <img class="mb-4" alt="" width="72" height="72">
                        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input id="inputEmail" type="email" name="email" class="form-control" placeholder="Email" required autofocus v-model="user.email">

                        <label for="inputPassword" class="sr-only">Password</label>
                        <input id="inputPassword" type="password" name="password" class="form-control" placeholder="Password" required v-model="user.password">

                        <div class="checkbox mb-3">
                            <label>
                                <input id="remember_me" type="checkbox" name="remember_me" value="1"> Quên mật khẩu

                            </label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block" value="Sign in" type="submit" @click="login">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; {{showDate()}}</p>

                        <div class="form-group">
                            <div class="col-md-12 control" style="padding: 0; margin-top: 15px;">
                                <div style="border-top: 1px solid#888; padding-top:10px; font-size:12px;" >
                                    Forgot your password!
                                    <a href="">Click here</a><br>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

    export default {
        name: "Login",
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                user: {
                    email: '',
                    password: ''
                },
            }
        },
        methods:{
            showDate(){
                var d = new Date();
                return d.getFullYear();
            },
            login(){
                let vm =this;
                axios.post('/signin', vm.user)
                    .then(function (response) {
                        console.log(response)
                    })
                    .catch(function (error) {
                        console.log(error)
                    });
            }
        }
    }
</script>
<style>
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }
    .form-signin .checkbox {
        font-weight: 400;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
</style>
