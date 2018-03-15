<template>
  <div class="col-md-6">
    <div class="form-group">
    <label class="col-md-3 control-label">Index</label>
      <div class="col-md-9">
        <input class="form-control" placeholder="Content" v-model="answer.index">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label">Content</label>
      <div class="col-md-9">
        <input class="form-control" placeholder="Content" v-model="answer.content">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label">Type word</label>
      <div class="col-md-9">
        <input class="form-control" placeholder="type word" v-model="answer.type_word">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label">Pronunciation</label>
      <div class="col-md-9">
        <input class="form-control" placeholder="pronunciation" v-model="answer.pronunciation">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-3 control-label">Meanning</label>
      <div class="col-md-9">
        <input class="form-control" placeholder="Meaning" v-model="answer.meaning">
      </div>
    </div>
  </div>
</template>

<script type="text/javascript">
  export default {
    props: ['answer']   
  }
</script>
