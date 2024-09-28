<script>
import axios from 'axios';

export default {
    data () {
        return {
            username: null,
            password: null,
            error: false,
            class_name: null,
            validation_message: null,
            valid: true
        }
    },

    methods: {
        send () {
            if(this.username.length >= 4 && this.password.length >= 6 && this.class_name != null){
                axios.post('/api/register', {
                    username: this.username,
                    class: this.class_name,
                    password: this.password
                })
                    .then(response => {
                        console.log(response.data.message);
                        if (response.data.register === false) {
                           this.error = true;
                        } else if(response.data.register === true){
                            window.location.href = '/';
                        }
                    })
                    .catch(error => {
                        // Обработка ошибок
                        console.error('Error:', error);
                    });
            }else{
                this.valid = false;
                this.validation_message = 'Длина имени не менее 4 символов! Длина пароля не менее 8 символов! Выберите класс';
            }
        }
    }
}
</script>

<template>


    <div class="container align-middle mt-5 w-50 h-25">
        <div class="btn btn-danger" v-if="error">Такой пользователь уже зарегестрирован</div>
        <div class="btn btn-danger" v-show="!valid">{{this.validation_message}}</div>
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" v-model="username" @change="check">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Class</label>
            <select class="form-select" v-model="class_name">
                <option class="form-select">11А</option>
                <option class="form-notch">11Б</option>
                <option class="form-notch">11В</option>
                <option class="form-notch">11Г</option>
                <hr>
                <option class="form-select">10А</option>
                <option class="form-notch">10Б</option>
                <option class="form-notch">10В</option>
                <option class="form-notch">10Г</option>
                <hr>
                <option class="form-select">9А</option>
                <option class="form-notch">9Б</option>
                <option class="form-notch">9В</option>
                <option class="form-notch">9Г</option>
                <hr>
                <option class="form-select">8А</option>
                <option class="form-notch">8Б</option>
                <option class="form-notch">8В</option>
                <option class="form-notch">8Г</option>
                <hr>
                <option class="form-select">7А</option>
                <option class="form-notch">7Б</option>
                <option class="form-notch">7В</option>
                <option class="form-notch">7Г</option>
                <hr>
                <option class="form-select">6А</option>
                <option class="form-notch">6Б</option>
                <option class="form-notch">6В</option>
                <option class="form-notch">6Г</option>
                <hr>
                <option class="form-select">5А</option>
                <option class="form-notch">5Б</option>
                <option class="form-notch">5В</option>
                <option class="form-notch">5Г</option>
                <hr>
                <option class="form-select">4А</option>
                <option class="form-notch">4Б</option>
                <option class="form-notch">4В</option>
                <option class="form-notch">4Г</option>
                <hr>
                <option class="form-select">3А</option>
                <option class="form-notch">3Б</option>
                <option class="form-notch">3В</option>
                <option class="form-notch">3Г</option>
                <hr>
                <option class="form-select">2А</option>
                <option class="form-notch">2Б</option>
                <option class="form-notch">2В</option>
                <option class="form-notch">2Г</option>
                <hr>
                <option class="form-select">1А</option>
                <option class="form-notch">1Б</option>
                <option class="form-notch">1В</option>
                <option class="form-notch">1Г</option>
                <hr>
            </select>
<!--        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" v-model="username" @change="check">-->
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Придумайте пароль" v-model="password" @change="check">
        </div>

        <button @click="send" class="btn btn-primary">Register</button>
        <div class="text-black"><p>Already have an account? <a class="text-blue text-decoration-none" href="/">Login</a></p></div>

    </div>
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
