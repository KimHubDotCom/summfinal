<template>
 <h1></h1>
 <hr>

<div class="d-flex align-contents-between">
    <div class="card mb-3" v-for="bike in bikes" :key="bike.id">
        <div class="card-header">
            <h5> BigBike: {{bike.id}}</h5>
        </div>
        <div class="card-body" >
            <h6></h6>
            <table class="table">
                <tr>
                    <th>Model Name:</th>
                    <td>{{bike.model_name}}</td>
                </tr>
                <tr>
                    <th>Rpm:</th>
                    <td>{{bike.rpm}}</td>
                </tr>
                <tr>
                    <th>Price:</th>
                    <td>{{bike.price}}</td>
                </tr>
                <tr>
                    <th>Color:</th>
                    <td>{{bike.color}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>
<script>
export default {
    layout: Layout,
    props: {
        bikes: Array
    }
}
</script>

<style scoped>
.card{
    width: 375px;
}

</style>
