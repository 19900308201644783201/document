<template>
  <div>
    <headerPage></headerPage>
    <div id="wrapper">
      <router-view></router-view>
    </div>
    <!-- <footerPage></footerPage> -->
  </div>
</template>

<script>
    // import headerPage from './components/layouts/header/Index'
    import headerPage from './components/layouts/header/HeaderMongo'
    import footerPage from './components/layouts/footer/Index'
    export default {
      components: {
        headerPage
        // footerPage,
      }
    }
    </script>
