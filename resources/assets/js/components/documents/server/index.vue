<template>
  <div class="row">
    <sidebarPage></sidebarPage>
    <router-view></router-view>
  </div>
</template>
<script>
  import sidebarPage from './side-bar'
  export default {
    components : {
      sidebarPage
    }
  }
</script>