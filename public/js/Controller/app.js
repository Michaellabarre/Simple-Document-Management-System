var app = new Vue({
  el: '#sample',
  data: {
    isProcessing: false,
    form: {},
    errors: {},
    product:{}
  },

  created: function () {
    Vue.set(this.$data, 'form', _form);
  },
  props: {
    value: {
      type: Number,
      default: 0
    },
    label: {
      type: String,
      default: ''
    }
  },
  mounted: function () {
    this.formatValue()
  },

  methods: {
    addLine: function() {
      this.form.products.push({
        firstname: this.form.firstname.trim()
        ,lastname: this.form.lastname.trim()
      });
      this.clearform();
    },

    removeline: function(product) {
      var index = this.form.products.indexOf(product); 
      this.form.products.splice(index, 1);
    },

    editline: function(product) {
      this.form.firstname = product.firstname;
      this.form.lastname = product.lastname;
      this.product = product;
    },

    updateline: function(product){
      this.product.firstname = this.form.firstname.trim();
      this.product.lastname = this.form.lastname.trim();
      this.clearform();
    },
    clearform: function(){
      this.form.firstname='';
      this.form.lastname='';
    },

    updateValue: function (value) {
      var result = currencyValidator.parse(value, this.value)
      if (result.warning) {
        this.$refs.firstname.value = result.value
        this.$refs.lastname.value = result.value
      }
      this.$emit('firstname', result.value)
      this.$emit('lastname', result.value)
    },

    formatValue: function () {
      this.$refs.firstname.value = currencyValidator.format(this.value)
      this.$refs.lastname.value = currencyValidator.format(this.value)
    },

    selectAll: function (event) {
      setTimeout(function () {
        event.target.select()
      }, 0)
    },
  },
  computed: {
    subTotal: function() {
      return this.form.products.reduce(function(carry, product) {
        return carry + (parseFloat(product.qty) * parseFloat(product.price));
      }, 0);
    },
    grandTotal: function() {
      return this.subTotal - parseFloat(this.form.discount);
    },
    fullname: function () {
      return ((
        this.form.firstname.trim()  * this.form.lastname.trim() ).toFixed(2)
      )
    }
  }
})