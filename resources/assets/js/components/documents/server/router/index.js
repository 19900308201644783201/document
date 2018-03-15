import Server      from '../index';
import lempIndex   from '../lemp/index';
import lempEnglish from '../lemp/index_eng';
import linux       from '../linux/index';
import setupSsh    from '../linux/ssh';
import sPermission from  '../linux/permission';

export default [
  {
    path: '/server',
    name: 'server',
    component: Server,
    children: [
      {
        path: 'lemp',
        name: 'lempIndex',
        component: lempIndex
      },
      {
        path: 'english-lemp',
        name: 'lempEnglish',
        component: lempEnglish
      },
      {
        path: 'linux',
        name: 'linux',
        component: linux
      },
      {
        path: 'linux/ssh',
        name: 'setupSsh',
        component: setupSsh
      },
      {
        path: 'linux/permission',
        name: 'server_permission',
        component: sPermission
      }
    ]
  }
] 