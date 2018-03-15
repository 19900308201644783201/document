import Music            from '../Music/Index';
import RemindVocabulary from '../RemindVocabulary/Index';
import Pronunciation    from '../Pronunciation/Index';
import Vocabulary       from '../Vocabulary/Index';
import VocabularyCreate from '../Vocabulary/Create';
import VocabularyEdit   from '../Vocabulary/Edit';
import VocabularyShow   from '../Vocabulary/Show';

import Toeic            from '../Toeic/Index';
import IndexPart6       from '../Toeic/Part6/Index';
import CreatePart6      from '../Toeic/Part6/Create';
import EditPart6        from '../Toeic/Part6/Edit';
import ShowPart6        from '../Toeic/Part6/Show';

import General          from '../General/Index';
import English          from '../Index';

export default [
  {
    path: '/english',
    name: 'english',
    component: English,
    title: 'english',
    icon: 'fa-users',
    // redirect: { name: 'english-welcome'},
    children: [
      // {
      //   path: 'welcome',
      //   name: 'english-welcome',
      //   component: { template: '<div><div>English</div></div>'},
      // },
      {
        path: 'general',
        name: 'english-general', 
        component: General
      },
      {
        path: 'music',
        name: 'english-music',
        component: Music,
      },
      {
        path: 'pronunciation',
        name: 'pronunciation',
        component: Pronunciation
      },
      // Router for Toeic
      {
        path: 'toeic',
        name: 'english-toeic',
        component: Toeic
      },
      // Router for Toeic part 6
      {
        path: 'toeic/part6',
        name: 'IndexPart6',
        component: IndexPart6
      },
      {
        path: 'toeic/part6/create',
        name: 'CreatePart6',
        component: CreatePart6
      },
      {
        path: 'toeic/part6/edit/:id',
        name: 'EditPart6',
        component: EditPart6
      },
      {
        path: 'toeic/part6/:id',
        name: 'ShowPart6',
        component: ShowPart6
      },
      // Router for Vocabulary
      {
        path: 'vocabulary',
        name: 'english-vocabulary',
        component: Vocabulary,
      },
      {
        path: 'vocabulary/create',
        name: 'createVocabulary',
        component: VocabularyCreate,
      },
      {
        path: 'vocabulary/edit/:id',
        name: 'editVocabulary',
        component: VocabularyEdit,
      },
      {
        path: 'vocabulary/:id',
        name: 'showVocabulary',
        component: VocabularyShow
      },
      // Remind vocabulary
      {
        path: 'remind-vocabulary',
        name: 'english-remind-vocabulary',
        component: RemindVocabulary,
      },
    ],
  },
];
