<template>
  <div class="row">
    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h1 class="text-center">List GIT</h1>
        </div><!--End panel-heading -->
        <div class="panel-body">

          <div class="post-list-heading">
            <div class="post-list-title">
              <router-link :to="{ name: 'GithubUsingSSH' }">Connect GitHub using SSH</router-link>
            </div>
          </div><!-- End post-list-heading -->

          <div class="post-list-heading">
            <div class="post-list-title">
              <router-link :to="{ name: 'GithubUsingSSHMultiple' }">Git Using SSH Multiple account</router-link>
            </div>
          </div><!-- End post-list-heading -->

        </div><!--End panel-body -->
      </div><!-- End panel-primary -->
    </div><!-- End Container -->
  </div><!-- End row -->
</template>