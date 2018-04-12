<template>
  <div class="col-sm-3 col-md-2 _sidebar">
    <ul class="_nav _nav-sidebar">
      <li><router-link :to="{ name: 'english'}">General</router-link></li>
      <li><router-link :to="{ name: 'english-vocabulary'}">Vocabulary</router-link>
        <ul>
          <li><router-link :to="{ name: 'english-vocabulary' }"><i class="fa fa-angle-right leftNavIcon"></i>Vocabulary</router-link></li>
        </ul>
      </li>
      <li><router-link :to="{ name: 'pronunciation'}">Pronunciation</router-link></li>
      <li><router-link :to="{ name: 'english-music'}">Music</router-link></li>
      <li><router-link :to="{ name: 'english-remind-vocabulary'}">Remind Vocabulary</router-link></li>
      <li><router-link :to="{ name: 'english-toeic'}">Toeic</router-link>
        <ul class="ducxinh">
          <li class="ducxinh"><router-link :to="{ name: 'IndexPart6' }"><i class="fa fa-angle-right leftNavIcon"></i>Part6</router-link></li> 
        </ul>
      </li>
      <li><router-link :to="{ name: 'english-general'}">General</router-link></li>
    </ul>
  </div>
</template>
<script>
    export default {
        data: function() {
            return {}
        },
        methods: {
            loadClass() {
                let as = document.querySelectorAll('._nav-sidebar > li > a');
                for( let i = 0; i < as.length; i++) {
                    as[i].onclick = function() {
                        if (as[i].parentElement.className === 'active') {
                            as[i].parentElement.classList.remove('active');
                        } else {
                            for (let j = 0; j < as.length; j++) {
                                as[j].parentElement.classList.remove('active');
                            }
                            as[i].parentElement.classList.add('active');
                        }
                    }
                }
            }
        },
        beforeMount() {
            // this.loadClass();
        },
        created() {
            // this.loadClass();
        },
        mounted() {
            this.loadClass();
        }
    }
</script>
<style type="sass">
    @import '../../../../../sass/sidebars/sidebar_blue.scss';
    @import 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
</style>
