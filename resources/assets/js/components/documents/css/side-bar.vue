<template>
    <div class="sidebar-nav-fixed affix">
            <div class="well">
                <ul class="nav">
                    <li class="nav-header">Sidebar</li>
                    <li class="active">
                        <router-link to="/english-alias/pronunciation">Css</router-link>
                    </li>
                    <li>
                        <router-link :to="{ path: '/english/pronunciation' }">Css1</router-link>
                    </li>
                    <li>
                        <router-link :to="{ path: '/english/pronunciation' }">Css2</router-link>
                    </li>
                </ul>
            </div>
        </div>
</template>