import Css         from '../index';
import ListCss     from '../listCss';
import Scss        from '../scss';

export default [
  {
    path: '/css',
    name: 'css',
    component: Css,
    redirect: {
      name: 'list-css'
    },
    children: [
      {
        path: 'list-css',
        name: 'list-css',
        component: ListCss
      },
      {
        path: 'scss',
        name: 'scss',
        component:  Scss
      }
    ]
  }
]