<template>
  <div class="content mongodb">
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
<style type="text/scss">
.content {
    font-size: 16px;
    line-height: 24px;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    display: flex;
    margin: 45px auto 0;
}

@media (max-width: 1263px) {
    #left-column {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
    }
}
@media (max-width: 1093px) {
    #left-column, .sphinxsidebar {
        /*display: none;*/
    }
}

.mongodb#left-column {
    display: flex;
    -ms-flex-negative: 1;
    flex-shrink: 1;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    -ms-flex-preferred-size: 330px;
    flex-basis: 330px;
    min-width: 330px;
    display: flex;
    overflow-y: auto;
    border-right: 1px solid #e0e7e8;
    background-color: #fff;
}

#left-column {
    -ms-flex-negative: 1;
    flex-shrink: 1;
    -webkit-box-flex: 0;
    -ms-flex-positive: 0;
    flex-grow: 0;
    -ms-flex-preferred-size: 330px;
    flex-basis: 330px;
    min-width: 330px;
    display: flex;
    overflow-y: auto;
    border-right: 1px solid #e0e7e8;
}


#left-column, #topbar, .tab-strip__dropdown, .tab-strip__dropdown>li {
    background-color: #fff;
}
div.sphinxsidebar {
    font-size: 16px;
    line-height: 20px;
    top: 45px;
    bottom: 0;
    position: fixed;
    overflow-y: auto;
}
div.sphinxsidebarwrapper {
    padding: 0;
    min-height: 100%;
    width: 330px;
    right: 0;
}
#closeNav {
    font-size: 14px;
    color: #333!important;
    text-decoration: none;
    position: relative;
    right: 12px;
    display: block;
    top: 12px;
}
#btnv .btn-arrow-left, #btnv .btn-next-text, #closeNav, .align-right, .modal-footer, .text-right, blockquote.pull-right p, blockquote.pull-right small {
    text-align: right;
}
.sphinxsidebarwrapper .toctree-l1 li.current.selected-item>ul, a.list-group-item .list-group-item-heading, div.sphinxsidebar a, input[type=text]:disabled {
    color: #333;
}
div.sphinxsidebar h3 {
    padding: 6px 12px;
    margin: 5px 0 0 10px;
    font-size: 14px;
    line-height: 24px;
    font-weight: 700;
}
div.sphinxsidebar h3 a.index-link {
    text-transform: uppercase;
}

div.sphinxsidebar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    color: #000;
}
.sphinxsidebarwrapper>ul>.toctree-l1 {
    line-height: 24px;
    border-top: 1px solid #e0e7e8;
    padding: 10px 0;
}

div.sphinxsidebarwrapper ul {
    margin: 0;
    padding: 0;
}
.sphinxsidebarwrapper>ul>.toctree-l1>a {
    line-height: 24px;
    padding: 0 30px;
    width: 100%;
    display: inline-block;
}
.sphinxsidebarwrapper .toctree-l1 li.current.selected-item>a {
    color: #69b241;
    background-color: #f5f6f7;
    border-right: 5px solid #69b241;
}

.sphinxsidebarwrapper li.toctree-l1 ul>li>a {
    line-height: 24px;
    display: inline-block;
    width: 100%;
    position: relative;
}
div.sphinxsidebar li.toctree-l2>a {
    padding-left: 52px;
}
.sphinxsidebarwrapper .toctree-l1 li a {
    padding: 5px 5px 5px 0;
}
div.sphinxsidebar li.toctree-l4>a {
    padding-left: 104px;
}
div.sphinxsidebar li.toctree-l3>a {
    padding-left: 78px;
}
.expand-icon.docs-expand-arrow {
    border-radius: 3px;
    border-right: 3px solid #b3bbc1;
    border-top: 3px solid #b3bbc1;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    content: '';
    height: 13px;
    margin-left: -23px;
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
    -webkit-transition: -webkit-transform .2s ease-in-out;
    transition: -webkit-transform .2s ease-in-out;
    transition: transform .2s ease-in-out;
    transition: transform .2s ease-in-out,-webkit-transform .2s ease-in-out;
}
.expand-icon, .expand-icon.docs-expand-arrow {
    position: absolute;
    top: 8px;
    width: 13px;
    display: inline-block;
}
.expand-icon {
    background-repeat: no-repeat;
    height: 16px;
    margin-left: -21px;
}

.btn-danger.active, .btn-danger:active, .btn-default.active, .btn-default:active, .btn-info.active, .btn-info:active, .btn-primary.active, .btn-primary:active, .btn-success.active, .btn-success:active, .btn-warning.active, .btn-warning:active, .open .dropdown-toggle.btn-danger, .open .dropdown-toggle.btn-default, .open .dropdown-toggle.btn-info, .open .dropdown-toggle.btn-primary, .open .dropdown-toggle.btn-success, .open .dropdown-toggle.btn-warning, .sphinxsidebarwrapper .toctree-l1 li.current.selected-item>a>.expand-icon.docs-expand-arrow, .sphinxsidebarwrapper .toctree-l1 li>a>.expand-icon.docs-expand-arrow, button, input, select[multiple], textarea {
    background-image: none;
}

/* Main column area */

.content .main-column {
    -webkit-box-ordinal-group: 2;
    -ms-flex-order: 1;
    order: 1;
    min-height: 600px;
    width: 68%;
    max-width: 800px;
    -webkit-box-flex: 2;
    -ms-flex-positive: 2;
    flex-grow: 2;
    margin: 40px 15px;
    -webkit-transition: margin-left .4s cubic-bezier(.02,.01,.47,1);
    transition: margin-left .4s cubic-bezier(.02,.01,.47,1);
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    display: inline-block;
    overflow-x: scroll;
}

#showNav {
    display: none;
    position: fixed;
    top: 90px;
    font-size: 14px;
    margin-top: 70px;
    text-align: center;
    left: 30px;
    border: 1.5px solid #7fc857;
    padding: 5px 10px;
    -webkit-transform: rotate(90deg);
    transform: rotate(90deg);
    -webkit-transform-origin: left top 0;
    transform-origin: left top 0;
    cursor: pointer;
}
#showNav, .searchButton {
    background-color: #7fc857;
    color: #fff;
}
#showNav, .well-sm {
    border-radius: 3px;
}
div.document {
    margin: 25px;
}
div.body {
    -webkit-transition: opacity .25s linear;
    transition: opacity .25s linear;
}
div.body div.bc {
    background: #fff;
    cursor: default;
}
div.body div.bc, dl.method dt {
    margin-bottom: 24px;
}
div.body div.bc ul {
    padding: 0;
    margin: 0;
}
div.body div.bc ul li {
    list-style: none;
    font-size: 13px;
    display: inline;
}
div.body li {
    padding-top: .2em;
}
a, a>code, a>tt, div.body div.bc ul li a {
    color: #006cbc;
}


div.body h1 {
    border-top: none;
    font-size: 36px;
    line-height: 48px;
    padding: 0;
    margin: -24px 0 24px;
}
div.body div.contents {
    padding: 0 .5em .5em;
}
div.topic {
    border: 1px solid #ccc;
    padding: 7px 7px 0;
    margin: 10px 0;
}
.btn-default, .form-control, .img-thumbnail, .table .table, body, div.highlight, div.topic {
    background-color: #fff;
}
.body p, h2, h3, h4 {
    margin: 24px 0;
}
p.topic-title {
    margin-top: 10px;
}
dl.glossary dt, p.topic-title {
    font-size: 1.1em;
    font-weight: 700;
}
.first {
    margin-top: 0!important;
}
div.body div.contents.twocols ul {
    margin: 0;
    padding-left: 1em;
    -webkit-column-count: 2;
    column-count: 2;
    -webkit-column-gap: 10px;
    column-gap: 10px;
    -webkit-columns: 2;
    columns: 2;
}
div.body div.contents li {
    padding-top: .25em;
    column-break-inside: avoid;
    list-style-position: inside;
}

.sphinxsidebarwrapper .toctree-l1 li.current.selected-item>a>.expand-icon {
    background-image: url(https://docs.mongodb.com/manual/_static/images/page-icon-active.png);
}

</style>