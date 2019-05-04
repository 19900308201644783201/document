import Server           from '../index';
import lempIndex        from '../lemp/index';
import lempEnglish      from '../lemp/index_eng';
import lempOnMac        from '../lemp/lem_on_mac';
import linux            from '../linux/index';
import setupSsh         from '../linux/ssh';
import sPermission      from '../linux/permission';
import brew             from '../mac/brew';
import mac              from '../mac/index';
import InstallNginx     from '../nginx/InstallNginx';
import nginx            from '../nginx';
import CreateVitualHost from '../nginx/CreateVitualHost';
import CliInLinux       from '../linux/CliInLinux';

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
        path: 'lemp-on-mac',
        name: 'lempOnMac',
        component: lempOnMac
      },
      {
        path: 'install-nginx',
        name: 'install-nginx',
        component: InstallNginx
      },
      {
        path: 'brew',
        name: 'brew',
        component: brew
      },
      {
        path: 'mac',
        name: mac,
        component: mac
      },
      {
        path: 'nginx',
        name: 'nginx',
        component: nginx
      },
      {
        path: 'create-vitual-nginx',
        name: 'create-vitual-nginx',
        component: CreateVitualHost
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
      },
      {
        path: 'linux/cli-in-linux',
        name: 'cli-in-linux',
        component: CliInLinux
      }
    ]
  }
] 