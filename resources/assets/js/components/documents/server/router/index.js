import Server           from '../index';

import Lemp             from '../lemp/index';
import LempEnglish      from '../lemp/index_eng';
import LempOnMac        from '../lemp/lem_on_mac';

import Linux            from '../linux/index';
import SetupSSH         from '../linux/ssh';
import LinuxPermission  from '../linux/permission';
import CliInLinux       from '../linux/CliInLinux';

import Mac              from '../mac/index';
import Brew             from '../mac/brew';

import Nginx            from '../nginx';
import InstallNginx     from '../nginx/InstallNginx';
import CreateVitualHost from '../nginx/CreateVitualHost';

import ServerDashboard  from '../dashboard';

export default [
{
  path: '/server',
  name: 'Server', 
  component: Server,
  redirect: {name: 'ServerDashboard'},
  children: [
  {
    path: 'dashboard',
    name: 'ServerDashboard',
    component: ServerDashboard
  },
  {
    path: 'lemp',
    name: 'Lemp',
    component: Lemp
  },
  {
    path: 'english-lemp',
    name: 'LempEnglish',
    component: LempEnglish
  },
  {
    path: 'lemp-on-mac',
    name: 'LempOnMac',
    component: LempOnMac
  },
  {
    path: 'install-nginx',
    name: 'InstallNginx',
    component: InstallNginx
  },
  {
    path: 'brew',
    name: 'Brew',
    component: Brew
  },
  {
    path: 'mac',
    name: 'Mac',
    component: Mac
  },
  {
    path: 'nginx',
    name: 'Nginx',
    component: Nginx
  },
  {
    path: 'create-vitual-nginx',
    name: 'CreateVitualHost',
    component: CreateVitualHost
  },
  {
    path: 'linux',
    name: 'Linux',
    component: Linux
  },
  {
    path: 'linux/ssh',
    name: 'SetupSSH',
    component: SetupSSH
  },
  {
    path: 'linux/permission',
    name: 'LinuxPermission',
    component: LinuxPermission
  },
  {
    path: 'linux/cli-in-linux',
    name: 'CliInLinux',
    component: CliInLinux
  }
  ]
}
] 