<template>
  <div id="left-column">
    <aside id="sidebar" class="sidebar">
      <div class="sphinxsidebar" id="sphinxsidebar">
        <div class="sphinxsidebarwrapper" id="sphinxsidebarwrapper">
          <a href="javascript:void(0)" class="closeNav" id="closeNav">Close ×</a>
          <h3>
            <a class="index-link" href="../../">MongoDB Manual</a>
          </h3>

          <ul class="current ul-poppup">
            <li class="toctree-l1" v-for="side_menu in side_menus">
              <router-link class="reference internal" :to="{name: side_menu.name}">
                {{ side_menu.text }} <span class="fa fa-angle-right" v-if="side_menu.childrens"></span>
              </router-link>
              <ul class="_hidden" v-if="side_menu.childrens">
                <li class="toctree-l2" v-for="sub_side_menu in side_menu.childrens">
                  <router-link class="reference internal" :to="{ name: sub_side_menu.name }">
                    <span class="expand-icon"></span>{{ sub_side_menu.text }}
                  </router-link>
                  <ul class="_hidden" v-if="sub_side_menu.childrens">
                    <li class="toctree-l3" v-for="_sub_side_menu in sub_side_menu.childrens">
                      <router-link class="reference internal" :to="{ name: _sub_side_menu.name }">
                        <span class="expand-icon"></span>{{ _sub_side_menu.text }}
                    </router-link>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>

        </div>
      </div>
    </aside>
  </div>
</template>
<script>
export default {
  data: function() {
    return {
      side_menus: [
      {
        name: 'Lemp',
        text: 'Lemp',
        childrens: [
        {
          name: 'LempEnglish',
          text: 'LempEnglish',
          childrens: [
            {
              name: 'LempEnglish',
              text: 'LempEnglish',
              childrens: null
            }
          ]
        },
        {
          name: 'LempOnMac',
          text: 'LempOnMac',
          childrens: null 
        },
        ]
      },
      {
        name: 'Linux',
        text: 'Linux',
        childrens: [
        {
          name: 'SetupSSH',
          text: 'SetupSSH',
          childrens: null
        },
        {
          name: 'LinuxPermission',
          text: 'LinuxPermission',
          childrens: null
        },
        {
          name: 'CliInLinux',
          text: 'CliInLinux',
          childrens: null
        },
        ]
      },
      {
        name: 'Mac',
        text: 'Mac',
        childrens: [
        {
          name: 'Brew',
          text: 'brew',
          childrens: null
        }
        ]
      },
      {
        name: 'Nginx',
        text: 'Nginx',
        childrens: [
        {
          name: 'InstallNginx',
          text: 'InstallNginx',
          childrens: null
        },
        {
          name: 'CreateVitualHost',
          text: 'CreateVitualHost',
          childrens: null
        },
        ]
      },
      {
        name: 'CreateVitualHost',
        text: 'Abc',
        childrens: null
      }
      ]
    }
  },
  methods: {
    loadClass() {
      let _buttons = document.querySelectorAll('ul.ul-poppup li');
      for(let i = 0; i < _buttons.length; i++) {
        _buttons[i].onclick = function(event){
          if (this.children[1]) {
            console.log(this.parentNode);
            console.log(this.children);
            console.log(this.childNodes);
            // console.log(this.parent());
            this.children[1].classList.toggle('_hidden');
          }
        };
      }
    }
  },
  mounted() {
    this.loadClass();
  }
}
</script>
<style>
p{
  color: #494747;
  font-family: Akzidenz,"Helvetica Neue",Helvetica,Arial,sans-serif;
}
</style>