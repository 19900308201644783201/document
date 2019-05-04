<template>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h1 class="text-center">SQL LIST</h1>
      </div><!-- End panel-heading -->

      <div class="panel-body">
        <div class="post-list-heading">
          <h1 class="post-list-title">
            <router-link :to="{ name: 'b-tree-index-and-hash-index' }">B-tree index an hash index</router-link>
          </h1>
        </div><!-- End post-list-heading -->
        <div class="post-list-heading">
          <h1 class="post-list-title">
            <router-link :to="{ name: 'mongodb-and-mysql' }">Mongodb and Mysql</router-link>
          </h1>
        </div><!-- End post-list-heading -->
        <div class="post-list-heading">
          <h1 class="post-list-title">
            <router-link :to="{ name: 'b-tree-index-and-hash-index' }">B-tree index an hash index</router-link>
          </h1>
        </div><!-- End post-list-heading -->
      </div><!-- End panel-body -->

    </div> <!-- End panel --> 
  </div><!-- End col-md-12 main -->
</template>
