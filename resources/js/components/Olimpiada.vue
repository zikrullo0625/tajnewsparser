<script>
import axios from 'axios';

export default {
    data() {
        return {
            data: null
        }
    },
    mounted() {
        axios
            .get('/api/olimps')
            .then(response => (this.data = response.data));
    }

}
</script>

<template>

    <body>
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
                        <a class="nav-link mx-2 active" href="/olimpiada" @click="onLogin">Олимпиады</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/home#contacts">Контакты</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/form">Связатся с нами</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/schedule">Рассписание</a>
                    </li>
                    <button class="btn btn-outline-danger" ><a href="/" class="text">Выйти</a></button>
                </ul>
            </div>
        </div>
    </nav>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<div v-for="olimp in this.data">
    <div class="card-group">
        <div class="card ">
            <div class="card-body">
                <h2 class="card-title">{{olimp.name}}</h2>
                <p class="card-text">{{olimp.description}}</p>
                <p class="card-text"><small class="text-muted">{{olimp.date}}</small></p>
                <h2 v-if="olimp.winner != null">Победитель: {{olimp.winner}}</h2>
            </div>
        </div>
    </div>
</div>


    </body>
</template>

<style>

</style>
