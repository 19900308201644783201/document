<template>
<div>
  <div class="panel panel-default">
    <div class="panel-heading">Form</div>
    <div class="panel-body">
    <h3 class="text-center">Vocabulary Show</h3>
    <form class="form-horizontal">
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
          <input type="text" v-model="vocabulary.pronunciation" class="form-control" placeholder="Pronunciation">
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
          <label for="" class="col-sm-2 control-label">Thesaurus</label>
          <div class="col-sm-10">
              <input type="text" v-model="vocabulary.thesaurus" class="form-control" placeholder="thesaurus">
          </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-2 control-label">Description:</label>
        <div class="col-sm-10">
          <input type="text" v-model="vocabulary.description" class="form-control" placeholder="Description">
        </div>
      </div>
    </form>
    </div> <!-- end panel-body -->
  </div><!-- end panel panel-default -->

</div>
</template>
<script>
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
                    description: '',
                    thesaurus: ''
                },
            }
        },
        created: function()
        {
            this.fetchItems();
        },
        methods: {
            fetchItems() {
                let uri = `http://127.0.0.1:8000/vocabularies/${this.$route.params.id}`;
                axios.get(uri).then((response) => {
                    this.vocabulary = response.data;
                })
                .catch(function(res){
                    console.log(res);
                });
            },
        }
    }
</script>
