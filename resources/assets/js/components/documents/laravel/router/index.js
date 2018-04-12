import Laravel from '../index';
import ListLaravel from '../ListLaravel';

export default [
  {
    path: '/laravel',
    name: 'laravel',
    component: Laravel,
    redirect: {name: 'ListLaravel'},
    children: [
      {
        path: 'list-laravel',
        name: 'ListLaravel',
        component: ListLaravel
      }
    ]
  }
]