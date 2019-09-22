<template>
    <div>
        <div v-if="joke.joke">
            <li class="list-group-item d-flex justify-content-between align-items-center" v-if="joke.joke">
                {{ joke.joke }}
                <span class="badge badge-primary badge-pill" @click="deleteJoke">Delete</span>
            </li>
        </div>

        <div v-else>
            <input type="text" class="form-control" v-model="newValue"> 
            <span class="badge badge-primary badge-pill" @click="addJoke">Ok</span>
            
        </div>
    </div>
</template>

<script>
    export default {
        props: ['jokeProp', 'index'],

        mounted() {
            this.joke = this.jokeProp
        },

        data () {
            return {
                joke: {},
                newValue: '',
            }
        },

        methods: {

            addJoke(){
                let data = {newValue: this.newValue, index: this.index}
                this.$emit('addJoke', data)
                this.newValue = ''
            },

            deleteJoke(){
                let data = {joke_id: this.joke.id, index: this.index}
                this.$emit('deleteJoke', data)
            },
        },
    }
</script>
