<template>
    <Layout>
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Ajouter
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ajouter produit au panier</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form @submit.prevent="soumettre" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                            id="ajouter">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    nom produit
                                </label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                                    v-model="nomproduit">
                            </div>
                            <div class="mb-6">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                                    nombre
                                </label>
                                <input
                                    class="appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none"
                                    id="username" type="text" placeholder="nombre" v-model="nombre">
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                            class="bg-red-400 hover:bg-red-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            form="ajouter" data-bs-dismiss="modal">Ajouter</button>
                    </div>
                </div>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import Layout from '../Layout/Layout.vue';
import { ref } from "vue";


const nomproduit = ref("");
const nombre = ref("");

const soumettre = () => {
    const recup = nomproduit.value;
    const chiffre = nombre.value;
    nomproduit.value = "";
    nombre.value = "";
}

</script>
