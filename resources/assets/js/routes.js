import cssComp    from './components/documents/css/index.vue'
import developer  from './components/documents/developer/index.vue'
import jsComp     from './components/documents/js/index.vue'
import TypeScript from './components/documents/typescript/index.vue'
import laravel    from './components/documents/laravel/index.vue'
import php        from './components/documents/php/index.vue'
import vueComp    from './components/documents/vue/index.vue'
import server     from './components/documents/server/index.vue'

import EnglishRoutes from './components/documents/english/router'
import ServerRoute   from './components/documents/server/router'

const Dashboard = { template: '<div>foo</div>' }
const baseRoutes = [
    { path: '/',           component: Dashboard},
    { path: '/css',        component: cssComp},
    { path: '/developer',  component: developer},
    { path: '/laravel',    component: laravel},
    { path: '/php',        component: php},
    { path: '/vue',        component: vueComp},
    { path: '/js',         component: jsComp},
    { path: '/typescript', component: TypeScript},
    { path: '/server',     component: server}
];
const routes = baseRoutes.concat(EnglishRoutes, ServerRoute /* , otherRouter */);

export default routes;