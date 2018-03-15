<template>
    <div class="sidebar-nav-fixed affix">
            <div class="well">
                <ul class="nav">
                    <li class="nav-header">Sidebar</li>
                    <li class="active">
                        <router-link to="/english-alias/pronunciation">Vue_pronunciation</router-link>
                    </li>
                    <li>
                        <router-link :to="{ path: '/english/pronunciation' }">Vue_pronunciation1</router-link>
                    </li>
                    <li>
                        <router-link :to="{ path: '/english/pronunciation' }">Vue_pronunciation2</router-link>
                    </li>
                </ul>
            </div>
        </div>
</template>