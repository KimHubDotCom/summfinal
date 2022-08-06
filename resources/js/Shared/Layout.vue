<template>

<nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BMW BigBikes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected' : $page.component=='Home'}" href="/">Home</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link " :class="{'selected' : $page.component=='Bike'}" href="/bike">Products</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected' : $page.component=='News&Events'}" href="/news&events">News&Events</Link>
        </li>
        <li class="nav-item">
          <Link class="nav-link" :class="{'selected' : $page.component=='About'}" href="/about">About</Link>
        </li>

      </ul>
    </div>
  </div>
</nav>

<section class="container bg-white p-4 rounded-3 my-5 shadow" style="min-height: 450px">
    <slot />
</section>

</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3'
</script>

<style scoped>
section{
    background-color: rgb(0, 0, 0);
    opacity: 0.7;
}
.selected{
    color:rgb(255, 255, 255);
    font-weight: bold;
    border-bottom: 1px solid #000;
    padding-bottom: 7px;
}
</style>