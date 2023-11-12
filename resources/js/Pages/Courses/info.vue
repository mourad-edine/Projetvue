<template>
    <section style="background-color: #eee;">
        <div class="container py-5">

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">{{etudiant.name}}</h5>
                            <p class="text-muted mb-1">{{etudiant.email}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>


<script>
import Layout from '../Layout/Layout.vue';
export default {
    layout: Layout,
    props : ['val'],
    data(){
        return{
            etudiant : this.val
        };
    },
}
</script>
