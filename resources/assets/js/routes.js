import TypeScript from './components/documents/typescript/index.vue';

import Dashboard  from './components/documents/home';

import EnglishRoutes    from './components/documents/english/router';
import ServerRoutes     from './components/documents/server/router';
import DeveloperRoutes  from './components/documents/developer/router';
import GitRoutes        from './components/documents/git/router/';
import SqlRoutes        from './components/documents/sql/router';
import cssRoutes        from './components/documents/css/router';
import PHPRoutes        from './components/documents/php/router';
import LaravelRoutes    from './components/documents/laravel/router';
import JavascriptRoutes from './components/documents/javascript/router';
import VueRoutes        from './components/documents/vue/router';
import MongoDB          from './components/documents/mongodb/router';

const baseRoutes = [
    { path: '/',           component: Dashboard},
    { path: '/typescript', component: TypeScript}
];
const routes = baseRoutes.concat(
    EnglishRoutes,
    ServerRoutes,
    DeveloperRoutes,
    GitRoutes,
    SqlRoutes,
    cssRoutes,
    PHPRoutes,
    LaravelRoutes,
    JavascriptRoutes,
    VueRoutes,
    MongoDB
);

export default routes;