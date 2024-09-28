<script>
import App from './App.vue'
import axios from 'axios';
import {ref} from "vue";


export default {
    data () {
        return {
            username: null,
            password: null,
            error: false,
            admin: ref(0),
        }
    },
    methods: {
        send () {
            axios.put('/api/login', {
                username: this.username,
                password: this.password
            })
                .then(response => {
                    console.log(response.data.message);
                    if (response.data.login === false) {
                        this.error = true;
                    } else if (response.data.admin === true) {
                        this.admin = 1;
                    } else if (response.data.login === true) {
                        window.location.href = '/home';
                    }
                })
                .catch(error => {
                    // Обработка ошибок
                    console.error('Error:', error);
                });
        }
    }
}

</script>

<template>
<!--    <p>{{window.location.href}}</p>-->
    <button type="button" class="btn btn-danger mt-3 ml-3" @click.prevent="admin = 0" v-if="admin === 1">Назад</button>
    <admin v-if="admin === 1"></admin>
    <div class="container align-middle mt-5 w-50 h-25 justify-content-center" v-else-if="admin === 0">
        <div class="btn btn-danger" v-if="error">Неправилный Email или пароль</div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" v-model="username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" v-model="password">
        </div>

        <button @click="send" class="btn btn-primary">Login</button>
        <div class="text-black "><p>Don't have an account? <a class="text-blue text-decoration-none" href="/register">Register</a></p></div>

    </div>
<!--    <app v-else-if="admin === 2"></app>-->
</template>

<style scoped>
.divider:after,
.divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;
}
.h-custom {
    height: calc(100% - 73px);
}
@media (max-width: 450px) {
    .h-custom {
        height: 100%;
    }
}
</style>
