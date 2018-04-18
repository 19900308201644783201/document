<template>
  <nav class="_navbar _navbar-default">
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
<style type="text/css">


/*END media (min-width: 768px) */
._collapse {
  display: none;
}
._navbar-default ._navbar-toggle {
    border-color: #ddd;
}
._navbar {
    position: relative;
    min-height: 50px;
    margin-bottom: 20px;
    border: 1px solid transparent;
}

._navbar-brand {
    float: left; 
    height: 50px;
    padding: 15px 15px;
    font-size: 18px;
    line-height: 20px;
}

._navbar-nav>li>a {
    padding-top: 10px;
    padding-bottom: 10px;
    line-height: 20px;
}
._nav>li>a {
    position: relative;
    display: block;
    padding: 10px 15px;
    font-size: 85%;
}
._navbar-header>a {
    font-size: 85%;
}
._navbar-default {
    border-color: #e7e7e7;
}
._navbar-toggle {
    position: relative;
    float: right;
    padding: 9px 10px;
    margin-top: 8px;
    margin-right: 15px;
    margin-bottom: 8px;
    background-color: transparent;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
._navbar ul{
  list-style: none;
}
._navbar-default {
    background-color: #f8f8f8;
    border-color: #e7e7e7;
}
._sr-only {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0,0,0,0);
    border: 0;
}
._navbar-default ._navbar-toggle ._icon-bar {
    background-color: #888;
}
._navbar-toggle ._icon-bar+._icon-bar {
    margin-top: 4px;
}
._navbar-toggle ._icon-bar {
    display: block;
    width: 22px;
    height: 2px;
    border-radius: 1px;
}
.container-fluid>._navbar-collapse, .container-fluid>._navbar-header{
    margin-right: -15px;
    margin-left: -15px;
}
._navbar-collapse._in {
    overflow-y: auto;
}
._collapse._in {
    display: block;
}
._navbar-collapse {
    padding-right: 15px;
    padding-left: 15px;
    overflow-x: visible;
    -webkit-overflow-scrolling: touch;
    border-top: 1px solid transparent;
    -webkit-box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
    box-shadow: inset 0 1px 0 rgba(255,255,255,.1);
}
._collapse {
    display: none;
}
._navbar-nav {
}
ul._navbar-nav {
  padding:0 20px 0 20px;
}

._navbar-default ._navbar-collapse, ._navbar-default{
    border-color: #e7e7e7;
}

._navbar-header:after{
  display: table;
  content: "";
  clear: both;
}
._container-fluid>._navbar-collapse, ._container-fluid>._navbar-header{
    margin-right: -15px;
    margin-left: -15px;
}

nav {
    padding-left: 0;
    margin-bottom: 0;
    list-style: none;
}

@media (min-width: 910px) {
    ._navbar-collapse._collapse {
    display: block!important;
    height: auto!important;
    padding-bottom: 0;
    overflow: visible!important;
  }
  ._navbar-toggle {
    display: none;
  }
  ._navbar-header {
    float: left;
  }
}
@media (max-width: 768px) {
  #_navbar>ul>li {
    border-bottom: 1px solid #e2d1d1;
  }
}

@media (min-width: 768px) {
  ._navbar {
      border-radius: 4px;
  }
  ._navbar-collapse, ._navbar-header {
    margin-right: 0;
    margin-left: 0;
  }
  ._navbar-nav {
    float: left;
    margin: 0;
  }
  ._navbar-nav>li {
    float: left;
  }
  ._navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px;
  }
/*  ._navbar-collapse._collapse {
    display: block!important;
    height: auto!important;
    padding-bottom: 0;
    overflow: visible!important;
  }*/
  ._navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
  }
}

</style>