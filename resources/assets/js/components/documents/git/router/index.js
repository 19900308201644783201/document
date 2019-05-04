import GitIndex from '../index';
import ListGits from '../ListGits';
import GithubUsingSSH from '../GithubUsingSSH';
import GithubUsingSSHMultiple from '../GithubUsingSSHMultipleAccount';

export default [
{
  path: '/git',
  name: 'git',
  component: GitIndex,
  redirect: {name: 'ListGits'},
  children: [
    {
      path: 'list-gits',
      name: 'ListGits',
      component: ListGits
    },
    {
      path: 'github-using-ssh',
      name: 'GithubUsingSSH',
      component: GithubUsingSSH
    },
    {
      path: 'github-using-ssh-multiple',
      name: 'GithubUsingSSHMultiple',
      component: GithubUsingSSHMultiple
    }
  ]
}
]
