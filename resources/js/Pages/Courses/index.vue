<template>
        <h1 class="mx-2 my-3 mb-2 text-green-700">
             liste des utilisateurs
        </h1>

        <div v-for="liste in this.utlise">
            <div class="flex m-2">
                <h3 class="m-2">{{ liste.id }}</h3>
                <h3 class="m-2">{{ liste.name }}</h3>
                <h3 class="m-2">{{ liste.email }}</h3>
                <a :href="'info/'+liste.id" class="bg-yellow-500 text-white p-2 px-5 rounded-lg">plus</a>
            </div>
            <hr class="m-2">
        </div>
   
</template>

<script>
import { Link } from '@inertiajs/vue3';
import Layout from '../Layout/Layout.vue';
    export default {
    layout: Layout,
    props: ['utilisateurs'],
    data() {
        return {
            utlise: this.utilisateurs
        };
    },
    components: { Link }
}


</script>
