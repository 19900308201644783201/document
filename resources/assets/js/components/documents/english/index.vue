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
<style type="text/SCSS">

.form-control::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  opacity: 0.5;
}
.form-control::-moz-placeholder { /* Firefox 19+ */
  opacity: 0.5;
}
.form-control:-ms-input-placeholder { /* IE 10+ */
  opacity: 0.5;
}
.form-control:-moz-placeholder { /* Firefox 18- */
  opacity: 0.5;
}

</style>