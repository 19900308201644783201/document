<template>
  <div class="content mongodb">
    <sidebarPage></sidebarPage>
    <router-view></router-view>
  </div>
</template>
<script>
import sidebarPage from './sidebar/index';
export default {
  components: {
    sidebarPage
  }
} 
</script>
<style style="sass">
  @import '../../../../sass/mongo.scss';
</style> 