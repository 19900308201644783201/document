import Vue from '../index';
import ListVue from '../ListVue';

export default [
  {
    path: '/vue',
    name: 'vue',
    component: Vue,
    redirect: {name: 'ListVue'},
    children: [
      {
        path: 'list-vue',
        name: 'ListVue',
        component: ListVue
      }
    ]
  }
]