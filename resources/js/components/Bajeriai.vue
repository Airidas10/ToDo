<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bajeriukai</div>

                    <div class="card-body">
                        <ul class="list-group" v-for="(joke, index) in jokes">
                            <bajeris :joke-prop="joke" :index="index" :key="joke.id" @addJoke="addJoke" @deleteJoke="deleteJoke"></bajeris>
                        </ul>

                        <button type="button" class="btn btn-primary" :style="'margin-top: 20px;'" @click="addNew">Pridėti naują</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Bajeris from './Bajeris.vue';

    export default {
        props: ['jokesProp'],

        components:{
            'bajeris' : Bajeris,
        },

        mounted() {
            this.jokes = this.jokesProp
        },

        data () {
            return {
                jokes: [],
            }
        },

        methods: {
            addNew(){
                this.jokes.push({})
            },

            addJoke(data){
                let self = this

                axios.post('/addJoke', {joke: data.newValue})
                     .then(function (response) {
                        console.log(response)
                        if(response.data.status == 'success'){
                            self.jokes.splice(data.index, 1)
                            self.jokes.push(response.data.data)
                        } else{
                            alert('error. Ooops')
                        }
                     })
                     .catch(function (error) {
                        alert('error. Ooops')
                     });
            },

            deleteJoke(data){
                let self = this

                axios.post('/deleteJoke', {joke_id: data.joke_id})
                     .then(function (response) {
                        console.log(response)
                        if(response.data.status == 'success'){
                            self.jokes.splice(data.index, 1)
                        } else{
                            alert('error. Ooops')
                        }
                     })
                     .catch(function (error) {
                        alert('error. Ooops')
                     });
            },
        },
    }
</script>
