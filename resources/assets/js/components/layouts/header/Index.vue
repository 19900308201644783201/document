<template>
  <nav class="navbar navbar-inverse header-no-margin navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Document</a>
      </div>
      <ul class="nav navbar-nav">
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
          <router-link to="/javascript">JS</router-link>
        </li>
        <li>
          <router-link to="/css">CSS</router-link>
        </li>
        <li>
          <router-link to="/typescript">TypeScript</router-link>
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
  </nav>
</template>
<style type="text/css">
.header-no-margin{
  margin-bottom: 0;
}
</style>