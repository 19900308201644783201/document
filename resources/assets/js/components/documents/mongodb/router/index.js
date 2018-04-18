import MongoDB from '../index';
import Dashboard from '../Dashboard';
import SqlComparison from '../SqlComparison';

export default [
  {
    path: '/mongodb',
    name: 'mongodb',
    component: MongoDB,
    redirect: {name: 'mongodbDashboard'},
    children: [
      {
        path: 'dashboard',
        name: 'mongodbDashboard',
        component: Dashboard
      },
      {
        path: 'sql-comparison',
        name: 'SqlComparison',
        component: SqlComparison
      }
    ]
  }
]