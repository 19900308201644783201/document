import sql                from '../index';
import bTreeAndHashIndex  from '../bTreeAndHashIndex';
import MysqlAndMongoDB    from '../MysqlAndMongoDB';
import ListContainer      from '../ListSql';

export default [
  {
    path: '/sql',
    name: 'sql',
    component: sql,
    redirect: {
      name: 'list-sql'
    },
    children: [
      {
        path: 'list-sql',
        name: 'list-sql',
        component: ListContainer
      },
      {
        path: 'b-tree-index-and-hash-index',
        name: 'b-tree-index-and-hash-index',
        component: bTreeAndHashIndex
      },
      {
        path: 'mongodb-and-mysql',
        name: 'mongodb-and-mysql',
        component: MysqlAndMongoDB
      }
    ]
  }
]