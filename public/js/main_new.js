var APP = APP || {};

var main = (function(APP, win, $, undefined) {
  "use strict";

  Vue.component('slide-up-down', VueSlideUpDown);
  Vue.component('vue-slick', {
    template: '<div><slot></slot></div>',
    props: {
      options: {
        type: Object,
        default: function() {
          return {};
        },
      },
    },
    mounted: function() {
      this.create();
    },
    destroyed: function() {
      $(this.$el).slick('unslick');
    },
    methods: {
      create: function() {
        const $slick = $(this.$el);
        $slick.on('afterChange', this.onAfterChange);
        $slick.on('beforeChange', this.onBeforeChange);
        $slick.on('breakpoint', this.onBreakpoint);
        $slick.on('destroy', this.onDestroy);
        $slick.on('edge', this.onEdge);
        $slick.on('init', this.onInit);
        $slick.on('reInit', this.onReInit);
        $slick.on('setPosition', this.onSetPosition);
        $slick.on('swipe', this.onSwipe);
        $slick.on('lazyLoaded', this.onLazyLoaded);
        $slick.on('lazyLoadError', this.onLazyLoadError);
        $slick.slick(this.options);
      },
      destroy: function() {
        const $slick = $(this.$el);
        $slick.off('afterChange', this.onAfterChange);
        $slick.off('beforeChange', this.onBeforeChange);
        $slick.off('breakpoint', this.onBreakpoint);
        $slick.off('destroy', this.onDestroy);
        $slick.off('edge', this.onEdge);
        $slick.off('init', this.onInit);
        $slick.off('reInit', this.onReInit);
        $slick.off('setPosition', this.onSetPosition);
        $slick.off('swipe', this.onSwipe);
        $slick.off('lazyLoaded', this.onLazyLoaded);
        $slick.off('lazyLoadError', this.onLazyLoadError);
        $(this.$el).slick('unslick');
      },
      reSlick: function() {
        this.destroy();
        this.create();
      },
      next: function() {
        $(this.$el).slick('slickNext');
      },
      prev: function() {
        $(this.$el).slick('slickPrev');
      },
      pause: function() {
        $(this.$el).slick('slickPause');
      },
      play: function() {
        $(this.$el).slick('slickPlay');
      },
      goTo: function(index, dontAnimate) {
        $(this.$el).slick('slickGoTo', index, dontAnimate);
      },
      currentSlide: function() {
        return $(this.$el).slick('slickCurrentSlide');
      },
      add: function(element, index, addBefore) {
        $(this.$el).slick('slickAdd', element, index, addBefore);
      },
      remove: function(index, removeBefore) {
        $(this.$el).slick('slickRemove', index, removeBefore);
      },
      filter: function(filterData) {
        $(this.$el).slick('slickFilter', filterData);
      },
      unfilter: function() {
        $(this.$el).slick('slickUnfilter');
      },
      getOption: function(option) {
        $(this.$el).slick('slickGetOption', option);
      },
      setOption: function(option, value, refresh) {
        $(this.$el).slick('slickSetOption', option, value, refresh);
      },
      setPosition: function() {
        $(this.$el).slick('setPosition');
      },
      // Events
      onAfterChange: function(event, slick, currentSlide) {
        this.$emit('afterChange', event, slick, currentSlide);
      },
      onBeforeChange: function(event, slick, currentSlide, nextSlide) {
        this.$emit('beforeChange', event, slick, currentSlide, nextSlide);
      },
      onBreakpoint: function(event, slick, breakpoint) {
        this.$emit('breakpoint', event, slick, breakpoint);
      },
      onDestroy: function(event, slick) {
        this.$emit('destroy', event, slick);
      },
      onEdge: function(event, slick, direction) {
        this.$emit('edge', event, slick, direction);
      },
      onInit: function(event, slick) {
        this.$emit('init', event, slick);
      },
      onReInit: function(event, slick) {
        this.$emit('reInit', event, slick);
      },
      onSetPosition: function(event, slick) {
        this.$emit('setPosition', event, slick);
      },
      onSwipe: function(event, slick, direction) {
        this.$emit('swipe', event, slick, direction);
      },
      onLazyLoaded: function(event, slick, image, imageSource) {
        this.$emit('lazyLoaded', event, slick, image, imageSource);
      },
      onLazyLoadError: function(event, slick, image, imageSource) {
        this.$emit('lazyLoadError', event, slick, image, imageSource);
      },
    },
  });

  var mq = win.matchMedia("(max-width: 426px)");

  APP.VM = new Vue({
    data: function(){
      return{
        slickOptions: {
          arrows: true,
          dots: false,
          slidesToShow: 1,
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
                arrows: true,
                dots: false
              }

            }
          ]
        },
        hash:{
          tabs:[
            {
              name:'Bancos',
              query:'bancos',
              options: [
                'interbank',
                'bcp',
                'bbva',
                'scotiabank',
                'nacion',
                'bim'
              ],
              active: 0
            },
            {
              name:'Cajas rurales',
              query:'cajas-rurales',
              options: [
                'cusco',
                'huancayo'
              ],
              active: 0
            }
          ],
          selected: {
            name:'Bancos',
            query:'bancos',
            options: [
              'interbank',
              'bcp',
              'bbva',
              'scotiabank',
              'nacion',
              'bim'
            ],
            active: 0
          }
        },
        menu:{
          show1: false,
          show2: false
        },
        accordion:{
          tabs:[
            [
              {
                option:[
                  true,
                  false,
                  false
                ]
              },
              {
                option:[
                  true,
                  false,
                  false
                ]
              },
              {
                option:[
                  true,
                  false
                ]
              },
              {
                option:[
                  true,
                  false,
                  false
                ]
              },
              {
                option:[
                  true
                ]
              },
              {
                option:[
                  true
                ]
              }
            ],
            [
              {
                option:[
                  true,
                  false
                ]
              },
              {
                option:[
                  true
                ]
              }
              /*{
                option:[
                  true,
                  false,
                  false
                ]
              }*/
            ]
          ]
        }
      }
    },
    created: function(){
      
    },
    mounted: function(){
      const self = this;

      /*var considerations = Array.apply(null, document.querySelectorAll('.considerations__subtitle'));

      considerations.filter(function (element, index) {
        element.addEventListener("click", function(){

          var buttonClass = this.classList;
          var panel = this.nextElementSibling;
          var data = panel.classList;

          if(buttonClass.contains("active")){
            buttonClass.remove("active");
            data.remove("active");
          }else{
            buttonClass.add("active");
            data.add("active");
          }

          if (panel.style.maxHeight){
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          } 

        });
      });*/

      self.validateQueryParameter();

      win.addEventListener('resize', function(e) {
        if (mq.matches) {
        }else{
          self.menu.show1 = false;
          self.menu.show2 = false;
        }
      });

    },
    methods: {
      openAccordion: function(tab, option, index){
        const self = this;

        self.accordion.tabs[tab][option].option.filter(function (element, i) {

          if(i == index){

            if(self.accordion.tabs[tab][option].option[i]){
              Vue.set(self.accordion.tabs[tab][option].option,i,false);
            }else{
              Vue.set(self.accordion.tabs[tab][option].option,i,true);
            }

          }else{
            Vue.set(self.accordion.tabs[tab][option].option,i,false);
          }

        });

      },
      objectLength: function( object ) {
          var length = 0;
          for( var key in object ) {
              if( object.hasOwnProperty(key) ) {
                  ++length;
              }
          }
          return length;
      },
      validateQueryParameter: function(){
        const self = this;

        var tab = self.getUrlParameter('tab');
        var option = self.getUrlParameter('option');

        var tabChoose = null;
        var optionChoose = null;

        if(tab == 'bancos'){
          tabChoose = 0;

          if(option == 'interbank'){
            optionChoose = 0;
          }else if(option == 'bcp'){
            optionChoose = 1;
          }else if(option == 'bbva'){
            optionChoose = 2;
          }else if(option == 'scotiabank'){
            optionChoose = 3;
          }else if(option == 'nacion'){
            optionChoose = 4;
          }else if(option == 'bim'){
            optionChoose = 5;
          }

        }else if(tab == 'cajas-rurales'){
          tabChoose = 1;

          if(option == 'cusco'){
            optionChoose = 0;
          }else if(option == 'huancayo'){
            optionChoose = 1;
          }
        }

        

        if(tab == null || tab == ''){
          self.chooseTab(self.hash.tabs[0]);
        }else{
          self.chooseTab(self.hash.tabs[tabChoose]);
          if(option == null || option == ''){
            self.chooseOption(0);
          }else{
            self.chooseOption(optionChoose);
          }
        }

      },
      chooseTab: function(tab){
        const self = this;

        self.hash.selected = tab; 
        self.hash.selected.active = 0;       

        self.updateQueryStringParam('tab', self.hash.selected.query);
        self.updateQueryStringParam('option', self.hash.selected.options[0]);

        self.menu.show1 = false;
        

        console.log("self.$refs",self.$refs);

        self.refreshElements();
        
      },
      chooseOption: function(option){
        const self = this;

        self.hash.selected.active = option;
        self.updateQueryStringParam('option', self.hash.selected.options[option]);

        self.menu.show2 = false;

        self.refreshElements();

      },
      refreshElements: function(){
        const self = this;

        self.$nextTick(function(){

          //self.$slick.reSlick();

          //console.log("self.$refs",self.$refs);
         
          //self.$refs['slick1'].setPosition();
          //self.$refs['slick2'].setPosition();

          //self.$refs['slick'].setPosition();
          //self.$refs['slick'].reSlick();
          /*for (var x = 0; x < self.objectLength(self.$refs); x++) {
            self.$refs['slick' + x].setPosition();
            //self.$refs['slick' + x].reSlick();
          };*/
        });

      },
      getUrlParameter: function(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
      },
      updateQueryStringParam: function (key, value) {

        var baseUrl = [location.protocol, '//', location.host, location.pathname].join(''),
            urlQueryString = document.location.search,
            newParam = key + '=' + value,
            params = '?' + newParam;

        if (urlQueryString) {
            var updateRegex = new RegExp('([\?&])' + key + '[^&]*');
            var removeRegex = new RegExp('([\?&])' + key + '=[^&;]+[&;]?');

            if( typeof value == 'undefined' || value == null || value == '' ) { 
                params = urlQueryString.replace(removeRegex, "$1");
                params = params.replace( /[&;]$/, "" );

            } else if (urlQueryString.match(updateRegex) !== null) { 
                params = urlQueryString.replace(updateRegex, "$1" + newParam);

            } else { 
                params = urlQueryString + '&' + newParam;
            }
        }

        params = params == '?' ? '' : params;

        window.history.replaceState({}, "", baseUrl + params);
      }
    },
    beforeDestroy: function() {
      const self = this;
    },
    
  }).$mount('#app');

  var st = {
  };

  var dom = {};

  var page;

  var catchDom = function() {
  };

  var suscribeEvents = function() {
  };

  var plugins = {
  }

  var methods = {
  }

  var events = {
  };

  return {
    init: function(x){
      page = x;
      //catchDom();
      //suscribeEvents();

      //plugins.slick();
      //methods.mGetHashParameter();
    }
  }

})(APP, window, jQuery);