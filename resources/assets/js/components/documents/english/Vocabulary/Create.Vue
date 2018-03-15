<template>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <div class="panel panel-default">
    <div class="panel-heading">Form</div>
    <div class="panel-body">
    <h3 class="text-center">Vocabulary Create</h3>
    <form class="form-horizontal" v-on:submit="saveForm()">
      <div class="form-group">
        <label class="col-sm-2 control-label">Word:</label>
        <div class="col-sm-10">
          <input type="text" v-model="vocabulary.word" class="form-control" placeholder="Name" autofocus="">
        </div>
      </div>

      <div class="form-group">
        <label class="col-sm-2 control-label">Type:</label>
        <div class="col-sm-10">
          <input type="text" v-model="vocabulary.word_type" class="form-control" placeholder="Type word">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Pronunciation:</label>
        <div class="col-sm-10">
          <input type="text" v-model="vocabulary.pronunciation" @keydown="pressIpa" @keyup="removeIpa" class="form-control" placeholder="Pronunciation">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Vietnamese mean:</label>
        <div class="col-sm-10">
          <input type="text" v-model="vocabulary.vn_mean" class="form-control" placeholder="Vietnamese mean">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">English mean:</label>
        <div class="col-sm-10">
          <textarea rows="5" v-model="vocabulary.en_mean" class="form-control" placeholder="English mean"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Example:</label>
        <div class="col-sm-10">
          <textarea rows="5" v-model="vocabulary.example" class="form-control" placeholder="Example"></textarea>
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Description:</label>
        <div class="col-sm-10">
          <input type="text" v-model="vocabulary.description" class="form-control" placeholder="Description">
        </div>
      </div>

      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button class="btn btn-default col-sm-4">Submit</button>
        </div>
      </div>
    </form>
    </div> <!-- end panel-body -->
  </div><!-- end panel panel-default -->

</div>
</template>
<script>
    import helper   from '../../../../common/helper'
    import pressIpa from '../../../../store/press_ipa'

    export default {
        data: function () {
            return {
                vocabulary: {
                    word: '',
                    word_type: '',
                    pronunciation: '',
                    vn_mean: '',
                    en_mean: '',
                    example: '',
                    description: ''
                },
                keyIpas: {},
            }
        },
        methods: {
            saveForm() {
                event.preventDefault();
                var app = this;
                var newVocabulary = app.vocabulary;
                axios.post('http://127.0.0.1:8000/vocabularies', newVocabulary)
                    .then(function (res) {
                        app.$router.replace('/english/vocabulary');
                    })
                    .catch(function (res) {
                        console.log(res);
                        alert('Could not create your vocabulary');
                    });
            },
            removeIpa : function (event) {
                delete this.keyIpas[event.keyCode];
            },
            pressIpa: function (event) {
                let app = this;
                let ipaKeys = pressIpa.ipaKeys;
                if (event.ctrlKey) {
                    app.keyIpas[event.keyCode] = true;
                    for (let ipaKey in ipaKeys) {
                        if (helper.isEquivalent(ipaKeys[ipaKey].keyCodes, app.keyIpas)) {
                            app.vocabulary.pronunciation += ipaKeys[ipaKey].result;
                        }
                    }
                }
            }
        }
    }
</script>
