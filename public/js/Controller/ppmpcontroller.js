 new Vue({
  el: '#ppmpform',
  data: {
    isProcessing: false,
    form: {},
    errors: {},
    product:{},
    currencyValue: 0,
    disabled: false,
  },

  created: function () {
    Vue.set(this.$data, 'form', _form);
    },

  methods: {
    addLine: function() {
      this.form.products.push({
       // operatingprogramtxt:$( "#operatingprogram option:selected" ).text()
        operatingprogram_id:this.form.operatingprogram_id
        ,modeofprocurement_id: this.form.modeofprocurement_id
        ,category_id: this.form.category_id
        ,fund_id: this.form.fund_id
        ,code:this.form.code.trim()
        ,generaldescription:this.form.generaldescription.trim()
        ,quantity:this.form.quantity
        ,estimated_budget:this.form.estimated_budget
        ,jan:this.form.jan
        ,feb:this.form.feb
        ,mar:this.form.mar
        ,apr:this.form.apr
        ,may:this.form.may
        ,june:this.form.june
        ,july:this.form.july
        ,aug:this.form.aug
        ,sept:this.form.sept
        ,oct:this.form.oct
        ,nov:this.form.nov
        ,dec:this.form.dec
      });
      this.clearform();
    },

    removeline: function(product) {
      var index = this.form.products.indexOf(product); 
      this.form.products.splice(index, 1);
    },

    editline: function(product) {
      $("#operatingprogram").dropdown("set selected", product.operatingprogram_id);
      $("#modeofprocurement").dropdown("set selected", product.modeofprocurement_id);
      $("#category").dropdown("set selected", product.category_id);
      $("#fundcode").dropdown("set selected", product.fund_id);
      this.form.code = product.code;
      this.form.generaldescription = product.generaldescription;
      this.form.quantity = product.quantity;
      this.form.estimated_budget = product.estimated_budget;

      $("#Jan").val(product.jan).change();
      $("#Feb").val(product.feb).change();
      $("#Mar").val(product.mar).change();
      $("#Apr").val(product.apr).change();
      $("#May").val(product.may).change();
      $("#June").val(product.june).change();
      $("#July").val(product.july).change();
      $("#Aug").val(product.aug).change();
      $("#Sept").val(product.sept).change();
      $("#Oct").val(product.oct).change();
      $("#Nov").val(product.nov).change();
      $("#Dec").val(product.dec).change();

      this.form.jan=product.jan;
      this.form.feb=product.feb;
      this.form.mar=product.mar;
      this.form.apr=product.apr;
      this.form.may=product.may;
      this.form.june=product.june;
      this.form.july=product.july;
      this.form.aug=product.aug;
      this.form.sept=product.sept;
      this.form.oct=product.oct;
      this.form.nov=product.nov;
      this.form.dec=product.dec;
      this.product = product;
      this.disabled=true;
    },

    updateline: function(product){
      this.product.operatingprogram_id=this.form.operatingprogram_id
      ,this.product.modeofprocurement_id= this.form.modeofprocurement_id
      ,this.product.category_id= this.form.category_id
      ,this.product.fund_id=this.form.fund_id
      ,this.product.code=this.form.code.trim()
      ,this.product.generaldescription=this.form.generaldescription.trim()
      ,this.product.quantity=this.form.quantity
      ,this.product.estimated_budget=this.form.estimated_budget
      ,this.product.jan=this.form.jan
      ,this.product.feb=this.form.feb
      ,this.product.mar=this.form.mar
      ,this.product.apr=this.form.apr
      ,this.product.may=this.form.may
      ,this.product.june=this.form.june
      ,this.product.july=this.form.july
      ,this.product.aug=this.form.aug
      ,this.product.sept=this.form.sept
      ,this.product.oct=this.form.oct
      ,this.product.nov=this.form.nov
      ,this.product.dec=this.form.dec
       this.disabled=false;
      this.clearform();
    },
    clearform: function(){
      this.form.code='';
      this.form.generaldescription='';
      this.form.quantity='';
      this.form.estimated_budget=0;

      $("#operatingprogram").dropdown("set selected", "0");
      $("#modeofprocurement").dropdown("set selected", "0");
      $("#category").dropdown("set selected", "0");
      $("#fundcode").dropdown("set selected", "0");

      $("#Jan").val("1").change();
      $("#Feb").val("1").change();
      $("#Mar").val("1").change();
      $("#Apr").val("1").change();
      $("#May").val("1").change();
      $("#June").val("1").change();
      $("#July").val("1").change();
      $("#Aug").val("1").change();
      $("#Sept").val("1").change();
      $("#Oct").val("1").change();
      $("#Nov").val("1").change();
      $("#Dec").val("1").change();
      this.form.jan=1;
      this.form.feb=1;
      this.form.mar=1;
      this.form.apr=1;
      this.form.may=1;
      this.form.june=1;
      this.form.july=1;
      this.form.aug=1;
      this.form.sept=1;
      this.form.oct=1;
      this.form.nov=1;
      this.form.dec=1;
    },
    focusOut: function() {
      this.currencyValue = parseFloat(this.form.estimated_budget.replace(/[^\d\.]/g, ""))
      if (isNaN(this.currencyValue)) {
        this.currencyValue = 0
      }
      this.form.estimated_budget = this.currencyValue.toFixed(2).replace(/(\d)(?=(\d{3})+(?:\.\d+)?$)/g, "$1,")
    },
    focusIn: function() {
      this.form.estimated_budget = this.currencyValue.toString()
    },
    preview: function() {
      window.location = '/ppmp/ppmppreview/';
    },

    create: function() {
      this.isProcessing = true;
      this.$http.post('/ppmp', this.form)
        .then(function(response) {
          if(response.data.created) {
            window.location = '/ppmp/' + response.data.id;
          } else {
            this.isProcessing = false;
          }
        })
        .catch(function(response) {
          this.isProcessing = false;
          Vue.set(this.$data, 'errors', response.data);
        })
    },
    update: function() {
      this.isProcessing = true;
      this.$http.put('/ppmp/' + this.form.id, this.form)
        .then(function(response) {
          if(response.data.updated) {
            window.location = '/ppmp/' + response.data.id;
          } else {
            this.isProcessing = false;
          }
        })
        .catch(function(response) {
          this.isProcessing = false;
          Vue.set(this.$data, 'errors', response.data);
        })
    }
  },
  computed: {
    subTotal: function() {
      return this.form.products.reduce(function(carry, product) {
        return carry + (parseFloat(product.qty) * parseFloat(product.price));
      }, 0);
    },
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
  },


})
   