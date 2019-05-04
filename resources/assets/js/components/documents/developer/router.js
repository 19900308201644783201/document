import DeveloperIndex from './index';
import ListDeveloper from './listDeveloper';
import SkillWebDeveloper from './SkillWebDeveloper';
import Exercise from './exercise/general/Index';
import Algorithm from './exercise/algorithm/Index';

export default [
  {
    path: '/developer',
    name: 'developer',
    component: DeveloperIndex,
    redirect: {name: 'list-developer'},
    children: [
      {
        path: 'list-developer',
        name: 'list-developer',
        component: ListDeveloper
      },
      {
        path: 'skill-web-developer',
        name: 'skill-web-developer',
        component: SkillWebDeveloper
      },
      {
        path: 'exercise',
        name: 'Exercise',
        component: Exercise
      },
      {
        path: 'algorithm',
        name: 'Algorithm',
        component: Algorithm
      }
    ]
  }
]