<template>
  <nav class="_navbar _navbar-inverse _sidebar">
    <div class="_container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
      <div class="_navbar-header">
        <button class="_navbar-toggle" data-toggle="_collapse" data-target="#_bs-sidebar-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div> <!-- end navbar-header -->
      <div class="_collapse _navbar-collapse" id="_bs-sidebar-navbar-collapse-1">
        <!-- begin _navbar -->
        <ul class="_nav _navbar-nav">

          <li class="_dropdown">
            <a href="#" class="_dropdown-toggle">Lemp <span class="fa fa-caret-down"></span></a>
            <ul class="_dropdown-menu">
              <li><router-link :to="{ name: 'lempIndex' }"> <span class="fa fa-caret-right"></span> Lemp</router-link></li>
              <li><router-link :to="{ name: 'lempEnglish' }"> <span class="fa fa-caret-right"></span> Lemp English</router-link></li>
              <li><router-link :to="{ name: 'lempOnMac' }"> <span class="fa fa-caret-right"></span> Lemp On Mac</router-link></li>
            </ul>
          </li>
          <li><router-link :to="{ name: 'b-tree-index-and-hash-index' }">B-tree index an hash index</router-link></li>
          <li><router-link :to="{ name: 'mongodb-and-mysql' }"> Mongodb and Mysql</router-link></li>
        </ul><!-- end ul.navbar-nav -->
      </div> <!-- end div.collapse navbar-collapse -->
    </div> <!-- end container-fluid -->
  </nav> <!-- end Nav sidebar-->
</template>
<script>
  export default {
    methods: {
      loadClass() {
        let btnDropDowns = document.querySelectorAll('._navbar-nav > li._dropdown > a');
        for (let i = 0; i < btnDropDowns.length; i++) {
          btnDropDowns[i].onclick = function () {
            if (this.parentElement.classList.contains('_dropdowned')) {
              this.parentElement.classList.remove('_dropdowned');
            } else {
              let dropDowneds = document.getElementsByClassName('_dropdowned');
              while (dropDowneds.length > 0) {
                dropDowneds[0].classList.remove('_dropdowned');
              }
              this.parentElement.classList.add('_dropdowned');
            }
          }
        }
      }
    },
    mounted() { 
      this.loadClass();
    }
  }
</script>
<style type="sass">
  @import '../../../../sass/sidebars/sidebar_black.scss';
</style>
