var APP = APP || {};

var main = (function(APP, win, $, undefined) {
  "use strict";

  Vue.use(window["vue-js-modal"].default);
  /*Vue.use(VueGrecaptcha, {
    sitekey: '6LfrU3EUAAAAAPtuHk-rNpNt8s3QroUqSlzZqwWH'
  })*/

  /*Vue.prototype.$ga = function(stuff){
    console.log("$ga",stuff);
    win.ga('send', stuff);
  }*/

  /*Vue.use(VueCustomTooltip, {
    color: '#c1403d', // 3 or 6 digit HEX color, including a leading hash (#)
  })*/

  //Vue.use(VueCustomTooltip);

  Vue.component("vue-slick", VueSlick);

  //console.log("vue-custom-tooltip",VueCustomTooltip);

  var mq = window.matchMedia("(max-width: 500px)");


  APP.VM = new Vue({
    data: function(){
      return{
        slickOptions:{
          mode1: {
            arrows: false,
            dots: true,
            slidesToShow: 4,
            slidesToScroll: 4,
            infinite: false,
            responsive: [
              //{
              //    breakpoint: 9999,
              //    settings: "unslick"
              //},
              {

                breakpoint: 426,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  dots: true
                }

              },
              {

                breakpoint: 769,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1
                }

              },
              {

                breakpoint: 1027,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1
                }

              }
              
              
            ]
          },
          mode2: {
            arrows: true,
            dots: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: false,
            responsive: [
              /*{
                  breakpoint: 9999,
                  settings: "unslick"
              },*/
              {

                breakpoint: 426,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                  arrows: false,
                  dots: true
                }

              }
            ]
          },
        }
      }
    },
    
    created: function(){
      const self = this;

      //self.$modal.show('m2');
      //self.$modal.hide('m1');

    },
    mounted: function(){
      const self = this;

    },
    beforeDestroy: function() {
      //const self = this;
    },
    methods:{
      showModal: function(){
        const self = this;

        self.$modal.show('m0');
      },
      hideModal: function(){
        const self = this;

        self.$modal.hide('m0');
      }
    }
  }).$mount('#app');

  

})(APP, window, jQuery);