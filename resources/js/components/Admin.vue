<script>
export default {
    data () {
        return {
            Name: null,
            Description: null,
            Date: null,
            Winner: null,
            data: [],
            delete_page: null,
            show: null
        }
    },
    methods: {
        show_buttons(olimpId) {
            if (this.show === olimpId) {
                // Если значение уже равно olimpId, то сбросить его на null
                this.show = null;
            } else {
                // Иначе установить значение на olimpId
                this.show = olimpId;
            }
            console.log(this.show);
        },
        send () {
            axios.post('/api/olimp', { Name: this.Name, Date: this.Date, Description: this.Description,  Winner: this.Winner })
                .then(response => {
                    this.fetchOlympiads();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        deleteOlympiad(olimpId) {
            axios.delete('/api/olimp/' + olimpId)
                .then(response => {
                    this.fetchOlympiads();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        updateOlympiad(olimpId) {
            axios.put('/api/olimp/update/' + olimpId, { Name: this.Name, Date: this.Date, Description: this.Description,  Winner: this.Winner })
                .then(response => {
                    this.fetchOlympiads();
                })
                .catch(error => {
                    console.log(error);
                });
        },
        fetchOlympiads() {
            axios.get('/api/olimps')
                .then(response => {
                    this.data = response.data;
                })
                .catch(error => {
                    console.log(error);
                });
        }
    },
    mounted() {
        this.fetchOlympiads();
    }
}
</script>

<template>
    <div class="container  align-middle mt-5 mb-5 h-25 w-100">
        <h1>Олимпиада</h1>
        <div class="form-group">
            <label for="exampleFormControlInput1">Имя</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" v-model="Name">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Описание</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="Description"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Дата</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" v-model="Date">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Победитель</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" v-model="Winner">
        </div>
        <button @click="send" class="btn btn-primary">Send</button>
    </div>
    <hr>
    <div v-for="olimp in data" :key="olimp.id">
        <div class="card-group">
            <div class="card w-100">
                <div class="card-body">
                    <h2 class="card-title">{{ olimp.name }}</h2>
                    <p class="card-text">{{ olimp.description }}</p>
                    <p class="card-text"><small class="text-muted">{{ olimp.date }}</small></p>
                    <h2 v-if="olimp.winner != null">Победитель: {{ olimp.winner }}</h2>
                    <button @click="show_buttons(olimp.id)" class="btn btn-primary">↓</button>
                    <div v-show="this.show === olimp.id">
                        <button class="btn btn-danger" @click="deleteOlympiad(olimp.id)">Удалить</button>
                        <h1 class="text-lg-center">Изменить</h1>
                        <div class="container  align-middle mt-5 mb-5">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Имя</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" v-model="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Описание</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" v-model="Description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Дата</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" v-model="Date">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Победитель</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" v-model="Winner">
                        </div>
                        <button @click="updateOlympiad(olimp.id)" class="btn btn-primary">Send</button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>

</style>
