<template>
  <nav class="_navbar _navbar-default _nav-top">
    <div class="_container-fluid">

      <div class="_navbar-header">
        <button type="button" class="_navbar-toggle" data-toggle="collapse" data-target="#_navbar" aria-expanded="true" aria-controls="navbar">
          <span class="_sr-only">Toggle navigation</span>
          <span class="_icon-bar"></span>
          <span class="_icon-bar"></span>
          <span class="_icon-bar"></span>
        </button>
        <a class="_navbar-brand" href="#">Document</a>
      </div>

      <div class="_navbar-collapse _collapse" id="_navbar"><!-- if click hide, add class  `_in`-->
        <ul class="_nav _navbar-nav">
          <li class="active">
            <router-link to="/">Home</router-link>
          </li>
          <li>
            <router-link to="/php">PHP</router-link>
          </li>
          <li>
            <router-link to="/english">English</router-link>
          </li>
          <li>
            <router-link to="/laravel">Laravel</router-link>
          </li>
          <li>
            <router-link to="/vue">Vue</router-link>
          </li>
          <li>
            <router-link to="/developer">Developer</router-link>
          </li>
          <li>
            <router-link to="/sql">SQL</router-link>
          </li>
          <li>
            <router-link to="/server">Server</router-link>
          </li>
          <li>
            <router-link to="/git">Git</router-link>
          </li>
          <li>
            <router-link to="/git">Design Pattern</router-link>
          </li>
          <li>
            <router-link to="/mongodb">MongoDB</router-link>
          </li>
        </ul>
      </div>

    </div>
  </nav>
</template>
<script type="text/javascript">
</script>