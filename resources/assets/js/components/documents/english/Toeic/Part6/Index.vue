<template>
  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="form-group">
      <router-link :to="{name: 'CreatePart6'}">Create part 6</router-link>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3>List Part6</h3>
      </div>
      <div class="panel-body">
        <div class="part6" v-for="part6 in part6s">
          <div class="transcript">{{ part6.question }}</div>
          <div class="green-btn oval-btn submit-btn translate-label">
            Dịch câu hỏi
          </div>
          <div class="transcript">{{ part6.translate }}</div>
          <div class="col-md-6 part6-answer" v-for="answer in part6.part6_answers">
            <div class="green-btn oval-btn submit-btn translate-label">{{ answer.index }}. {{ answer.content }}</div>
            <p class="blue-btn translate-label">{{ answer.pronunciation }}</p>
            <p class="blue-btn translate-label">{{ answer.meaning }} - ({{ answer.type_word }})</p>
          </div>
          <section class="blue-btn clearfix part6-explain">
            Sau mạo từ THE ta cần điền một danh từ hoặc cụm danh từ. -&gt; loại A và D. Dựa vào mặt ngữ nghĩa của câu ta thấy operation là từ còn thiếu trong câu trên.
          </section>
          <hr>
        </div> <!-- end .part6 -->
      </div>
    </div>
  </div>
</template>
<script>
  export default {
    data: function () {
      return {
        part6s: []
      }
    },
    mounted() {
      var app = this;
      axios.get('http://127.0.0.1:8000/toeic/part6')
        .then(function (res) {
          app.part6s = res.data;
          console.log(res.data);
        })
    },
    methods: {

    }
  }
</script>
<style type="sass">
  .transcript {
    font-size: 24px;
    color: #333;
  }
  .green-btn {
    background: #87c52e;
  }
  .blue-btn {
    background: #33abe5;
  }
  .oval-btn {
    border-radius: 30px;
  }
  .submit-btn {
    border:none;
    color: #fff;
    text-align: center;
  }
  .translate-label {
    cursor: pointer;
    font-size: 16px;
    width: 20%;
    padding: 5px 10px;
    margin: 0 auto 10px;
    line-height: 25px;
  }
  .part6-answer > .translate-label {
    width: 80%;
  }
  .clearfix {
    content: "";
    clear: both;
  }
  .part6-explain {
    padding: 5px 10px;
    line-height: 25px;
    margin-bottom: 20px;
  }
</style>
