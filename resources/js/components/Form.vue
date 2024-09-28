<script>
import axios from "axios";

export default {
    data () {
        return {
            name: null,
            email: null,
            phone: null,
            text: null,
            check: false
        }
    },
    methods: {
        send() {
            if (!this.name || !this.email || !this.phone || !this.text) {
                this.check = true;
            } else {
                // Все обязательные поля заполнены, отправляем запрос
                let text = 'Name: ' + this.name + ' \n' + 'Email: ' + this.email + ' \n' + 'Phone: ' + this.phone + ' \n' + 'Text: ' + this.text;
                axios.post('https://api.telegram.org/bot6849918343:AAEgFgWtwX6ycj-OYXOvqOeC6JAmg3OgI0A/sendMessage?chat_id=-4195569355&text=' + text)
                    .then(response => {
                        // Здесь можно добавить какую-то обработку успешного запроса
                    })
                    .catch(error => {
                        console.log(error);
                    });
            }
        }
    }
}
</script>
<template>
    <body>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Гимназия №4 города Худжанд</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarNavDropdown">

                <ul class="navbar-nav ms-auto ">

                    <li class="nav-item">
                        <a class="nav-link mx-2 " aria-current="page" href="/home">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/home#gallery">Галлерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/olimpiada">Олимпиады</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/home#contacts">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2 active" href="/form">Связатся с нами</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/schedule">Рассписание</a>
                    </li>
                    <button class="btn btn-outline-danger" ><a href="/" class="text">Выйти</a></button>
                </ul>
            </div>
        </div>
    </nav>
    <div class="section-first1 container ">
        <div class=" mx-auto w-50">
            <h1>Связатся с нами</h1>
            <div class="btn btn-danger mx-auto" v-show="check">Заполните все поля!</div><br>
            <label  class="col-sm-2 col-form-label" for="name">Name</label>
            <input class="form-control" id="name" v-model="name">
            <label  class="col-sm-2 col-form-label" for="email">Email</label>
            <input class="form-control" id="email" v-model="email">
            <label  class="col-sm col-form-label" for="phone">Phone number</label>
            <input class="form-control" id="phone" v-model="phone">
            <label class="col-sm col-form-label" for="text">Text</label>
            <textarea id="text" class="form-control" v-model="text"></textarea>
            <button @click="send" class="btn btn-success mt-2">Send</button>
        </div>
    </div>

    </body>
</template>
<style>

</style>
