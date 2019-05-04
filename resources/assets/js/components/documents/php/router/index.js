import PHP from '../index';
import ListPHP from '../ListPHP';

export default [
  {
    path: '/php',
    name: 'php',
    component: PHP,
    redirect: {name: 'ListPHP'},
    children: [
      {
        path: 'list-php',
        name: 'ListPHP',
        component: ListPHP
      }
    ]
  }
]