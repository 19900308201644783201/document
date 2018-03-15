<template>
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
        <div class="form-group">
            <router-link :to="{name: 'createVocabulary'}" class="btn btn-success">Create new vocabulary</router-link>
        </div>
        <div class="panel panel-default">
             <div class="panel-heading">
                <h3>Vocabulary list</h3>
            </div>
            <div class="panel-body">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Word</th>
                        <th>Type</th>
                        <th>Pronun</th>
                        <th>Vn Mean</th>
                        <th>English Mean</th>
                        <th>Example</th>
                        <th>Desc</th>
                        <th width="100">Action</th>
                    </tr> 
                    </thead>
                    <tbody> 
                    <tr v-for="vocabulary, index in vocabularies">
                        <td>{{ vocabulary.id }}</td>
                        <td>{{ vocabulary.word }}</td>
                        <td>{{ vocabulary.word_type }}</td>
                        <td>{{ vocabulary.pronunciation }}</td>
                        <td>{{ vocabulary.vn_mean }}</td>
                        <td>{{ vocabulary.en_mean | truncate(25) }}</td>
                        <td>{{ vocabulary.example | truncate(25) }}</td>
                        <td>{{ vocabulary.description }}</td>
                        <td>
                            <router-link :to="{name: 'showVocabulary', params: {id: vocabulary.id}}" class="btn btn-xs btn-primary">
                                <i class="glyphicon glyphicon-eye-open"></i>
                            </router-link>
                            <router-link :to="{name: 'editVocabulary', params: {id: vocabulary.id}}" class="btn btn-xs btn-default">
                                <i class="glyphicon glyphicon-edit"></i>
                            </router-link>
                            <button class="btn btn-xs btn-danger" v-on:click="deleteItem(vocabulary.id)">
                                <i class="glyphicon glyphicon-trash"></i>
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
<script>
  import { http } from '../../../../services/http'
    export default {
        data: function () {
            return {
                vocabularies: []
            }
        },
        mounted() {
            var app = this;
            return new Promise((resolve, reject) => {
              http.get(`vocabularies`, ({ data }) => {
                app.vocabularies = data                
              }, error => reject(error))
          })
            // axios.get('http://127.0.0.1:8000/vocabularies')
            //     .then(function (res) {
            //         app.vocabularies = res.data;
            //     })
            //     .catch(function (res) {
            //         console.log(res);
            //         alert('Could not load vocabularies');
            //     })
        },
        methods: {
          deleteItem(id) {
            let uri = `http://127.0.0.1:8000/vocabularies/${id}`;
            this.vocabularies.splice(id, 1);
            axios.delete(uri).then(function (res) {

            }).catch(function (res) {
                console.log(res);
            });
          }  
        },
        filters: {
            truncate: function (string, number) {
                if (string != null) {
                    return string.substring(0, number) + '...';
                }
                return '';
            }
        }
    }
</script>
