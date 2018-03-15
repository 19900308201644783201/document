<template>
  <div class="row">
    <sidebarPage></sidebarPage>
    <router-view></router-view>
  </div>
</template>
<script>
  import sidebarPage from './Sidebar/Index'
  export default {
    components : {
      sidebarPage
    }
  }
</script>