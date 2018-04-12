import Javascript from '../index';
import ListJavascript from '../ListJavascript';

export default [
{
  path: '/javascript',
  name: 'javascript',
  component: Javascript,
  redirect: {name: 'ListJavascript'},
  children: [
    {
      path: 'list-javascript',
      name: 'ListJavascript',
      component: ListJavascript
    }
  ]
}
]
