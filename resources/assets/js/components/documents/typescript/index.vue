<template>
    <div>
        <div class="col-md-3 left-side-bar">
            <sidebarPage></sidebarPage>
        </div>
        <div class="col-md-9 content-header-fixed">
            <h3>TypeScript</h3>
        </div>
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