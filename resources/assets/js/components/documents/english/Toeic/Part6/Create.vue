<template>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="panel panel-default">
      <div class="panel-heading"><h3 class="text-center">PART 6 CREATE</h3></div>
      <div class="panel-body">
        <form class="form-horizontal" v-on:submit="saveForm()">
          <div class="form-group">
            <label class="col-md-2 control-label">Question</label>
            <div class="col-md-10">
              <input class="form-control" autofocus="" placeholder="Question" v-model="questions.question">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Translate</label>
            <div class="col-md-10">
              <input class="form-control" placeholder="Translate" v-model="questions.translate">
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-2 control-label">Explain</label>
            <div class="col-md-10">
              <textarea class="form-control" placeholder="Explain" v-model="questions.explain" rows="3">
              </textarea>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-2 control-label">Answer</label>
            <div class="col-md-10">
              <input class="form-control" placeholder="Answer" v-model="questions.answer">
            </div>
          </div>

          <hr></hr>
          <div class="row">
            <answer :answer="answers[0]"></answer>
            <answer :answer="answers[1]"></answer>
          </div>
          <hr></hr>
          <div class="row">
            <answer :answer="answers[2]"></answer>
            <answer :answer="answers[3]"></answer>
          </div>
          <div class="row">
            <button type="submit" class="col-md-3 col-md-offset-4 btn btn-primary">Submit</button>
          </div>
        </form>
      </div><!-- end panel-body -->
    </div>
  </div> <!-- end main-->
</template>

<script type="text/javascript">
  import answer from './partials/Answer'
  export default {
    components: {
      answer: answer
    },
    data: function () {
      return {
        questions: {
          question: '',
          translate: '',
          answer: '',
          explain: '',
        },
        answers: [
          {
            index: 'A',
            content: '',
            type_word: '',
            pronunciation: '',
            meaning: '',
          },
          {
            index: 'B',
            content: '',
            type_word: '',
            pronunciation: '',
            meaning: '',
          },
          {
            index: 'C',
            content: '',
            type_word: '',
            pronunciation: '',
            meaning: '',
          },
          {
            index: 'D',
            content: '',
            type_word: '',
            pronunciation: '',
            meaning: '',
          },
        ]
      }
    },
    methods: {
      saveForm() {
        event.preventDefault();
        var app = this;
        var data = {};
        data.answers = app.answers
        data.questions = app.questions
        axios.post('http://127.0.0.1:8000/toeic/part6', data)
          .then(function (res) {
            app.$router.replace('/english/toeic/part6');
          })
          .catch(function (res) {
            console.log(res);
          })
      }
    },
    props: []
  }
</script>
<style type="text/css">
  .form-control {
    height:25px;
  }
</style>