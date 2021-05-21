require('./bootstrap');

var index = new Vue ({
  el:'#root',
  data: {
    currIndex: null,
  },
  methods: {
    deleteForm: function (index) {
      this.currIndex = index;
    },
    exit: function () {
      this.currIndex = null;
    }
  }
});
