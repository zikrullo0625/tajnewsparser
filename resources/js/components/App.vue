<script>
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
                        <a class="nav-link mx-2 active" aria-current="page" href="/home">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/home#gallery">Галлерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-2" href="/olimpiada" @click="onLogin">Олимпиады</a>
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
    <div class="section-first">
        <h1>Гимназия №4</h1>
        <h3>имени Ленина в городе Худжанд</h3>
    </div>

<div class="section-second" >
    <div class="container mt-5">
        <h1 class="text-center mb-4">О нас</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Учитель 1">
                    <div class="card-body">
                        <h5 class="card-title">Учитель 1</h5>
                        <p class="card-text">Описание учителя 1. Он/Она является экспертом в своей области.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Учитель 2">
                    <div class="card-body">
                        <h5 class="card-title">Учитель 2</h5>
                        <p class="card-text">Описание учителя 2. Он/Она является экспертом в своей области.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Учитель 3">
                    <div class="card-body">
                        <h5 class="card-title">Учитель 3</h5>
                        <p class="card-text">Описание учителя 3. Он/Она является экспертом в своей области.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid" id="gallery">
        <img src="../../photos/photo%20(1).jpg" alt="" >
        <img src="../../photos/photo%20(2).jpg" alt="">
        <img src="../../photos/photo%20(3).jpg" alt="">
        <img src="../../photos/photo%20(4.1).jpg" alt="">
        <img src="../../photos/photo%20(5).jpg" alt="" >
        <img src="../../photos/photo%20(7).jpg" alt="" >
    </div>

</div>

    <div class="section-third" id="contacts">
        <div class="profile-card  mb-5">
            <div class="profile-image">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6916.3679569069645!2d69.61830434973575!3d40.281276263256494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b1b2ff89f241c7%3A0x1d52dfaee68171f6!2z0JPQuNC80L3QsNC30LjRjyA0!5e1!3m2!1sru!2s!4v1705945004723!5m2!1sru!2s" width="800" height="350" style="border-radius:10px;" allowfullscreen="" loading="lazy" ></iframe>
            <div class="profile-contact-name">
                Гимназия №4 города Худжанд
            </div>
            <div class="profile-details">
                <p>
                    <i class="fa fa-envelope"></i>
                    <a href="#">abc@abc.com</a>
                </p>
                <p>
                    <i class="fa fa-phone"></i>
                    <a href="#">
                        +992 (3422) 6-16-74</a>
                </p>
                <p>735708, Худжанд, ул. К. Худжанди, 161</p>
            </div>
        </div>
    </div>
    </div>
    </body>
</template>
<style>


.second-text{
    font-size: 50px;
    color: white;
}
.profile-details p:last-child{
    padding-bottom: 10px;
}
.grid{
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(25%, 1fr));
    gap: 10px;
    padding: 2rem;
}
img{
    max-width: 100%;
    width: 626px;
    height: 417px;
    border-radius: 1rem;
}

@media (max-width: 768px) {
    .grid {
        grid-template-columns: repeat(auto-fill, minmax(40%, 1fr));
    }
}

@media (max-width: 480px) {
    .grid {
        grid-template-columns: repeat(auto-fill, minmax(100%, 1fr));
    }
}
.section-first {
    margin-top: -2px;
    height: 100vh; /* 100% высоты экрана */
    display: flex;
    justify-content: center;
    flex-direction: column; /* Изменяем направление на столбец */
    align-items: center; /* Выравнивание по горизонтали */
    background-attachment: fixed; /* Фиксированное положение фона для параллакса */
    background-size: cover;
    background-position: top;
    background-repeat: no-repeat;
    backdrop-filter: blur(10px);
    background-image: url("../../photos/photo (4).jpg");
}
.section-first h1{
    font-size: 100px;
    color: #e2e8f0;
    font-weight: 800;
}
.section-first h3{
    font-size: 30px;
    color: #e2e8f0;
    font-weight: 700;
}
* {
    box-sizing: border-box;
}
body {
    margin: 0;
}
.first-text {
    display: grid;
    place-content: center;
    backdrop-filter: blur(100%);
    min-height: 100vh;
    font-family: "Oswald", sans-serif;
    font-size: 800%;
    font-weight: 900;
    text-transform: uppercase;
    color: orange;
    -webkit-text-stroke: 5px orangered;
}

@media screen and (max-width: 600px) {
    .first-text {
        font-size: 350%;
        -webkit-text-stroke: 3px orangered;
        text-align: center;
    }
}
@media screen and (max-width: 600px) {
    img {
        width: 100%;
        height: 100%;
    }
}
.profile-card {
    padding: 10px;
    width: 90%;
    display: inline-block;
    background: #013864;
    color: white;
    margin: 6px 4px;
    box-shadow: 1px 1px 5px #333;
    border-radius: 10px;
    text-align: center;
    justify-content: center;
    font-size: xx-large;
}

.profile-image {
    height: 600px;
}

.profile-picture {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.profile-details {
    padding: 5px 18px;
}

.profile-details p {
    margin: 6px 0px;
    justify-content: space-between;
    align-items: center;
}

.profile-contact-name {
    padding: 5px 18px;
    text-align: center;
    font-weight: bold;
}

.main-section {
    width: 95%;
    margin: 0 auto;
    text-align: center;
    padding-top: 2em;
    padding-bottom: 2em;
}

div.profile-details a {
    text-decoration: none;
    color: white;
    font-size: xx-large;

}

@media screen and (max-width: 600px) {
    .nav-profile-container img {
        width: 15em;
        height: 15em;
    }
    .profile-card {
        width: 87%;
    }
}

.section-third{
    padding-left: 10%;
    background-image: url("https://img.freepik.com/free-vector/stylish-hexagonal-line-pattern-background_1017-19742.jpg?size=626&ext=jpg&ga=GA1.1.632798143.1705881600&semt=ais");
}

@media screen and (max-width: 600px) {
    iframe{
        width: 100%;
    }
    .profile-image{
        height: 60%;
    }
}
.text{
    text-decoration: none;
    color: red;
}
.text:hover{
    text-decoration: none;
    color: red;
    font-size: 20px;
}
</style>
