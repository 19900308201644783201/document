<template>
  <div class="row">
    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="text-center">LIST DEVELOPER</h1>
        </div><!-- End panel-heading -->
        <div class="panel-body">

          <div class="post-list-heading">
            <div class="post-list-title">
              <router-link :to="{ name: 'skill-web-developer' }">Skill Web developer</router-link> 
            </div>
          </div><!-- End post-list-heading -->

          <div class="post-list-heading">
            <div class="post-list-title">
              <router-link :to="{ name: 'Exercise' }">Exercise</router-link> 
            </div>
          </div><!-- End post-list-heading -->

          <div class="post-list-heading">
            <div class="post-list-title">
              <router-link :to="{ name: 'Algorithm' }">Algorithm</router-link> 
            </div>
          </div><!-- End post-list-heading -->

        </div><!-- End Panle-body -->
      </div><!-- End panel-primary -->
    </div><!-- End container -->
  </div><!-- End row -->
</template>