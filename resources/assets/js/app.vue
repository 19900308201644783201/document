<template>
    <div>
        <headerPage></headerPage>
        <div id="wrapper">
            <router-view></router-view>
        </div>
        <footerPage></footerPage>
    </div>
</template>

<script>
    // import headerPage from './components/layouts/header/Index'
    import headerPage from './components/layouts/header/HeaderMongo'
    import footerPage from './components/layouts/footer/Index'
    export default {
        components: {
            headerPage,
            footerPage,
        }
    }
</script>
<style type="text/css">
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    #wrapper{
        min-height: 1000px;
        width: 100%;
        margin-top: 70px;
        box-sizing: border-box;
    }
    body {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif !important;
    }
</style>
