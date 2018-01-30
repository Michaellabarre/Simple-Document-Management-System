 new Vue({
  el: '#Document',
    data: {
      doc_date:'',
    },
    
    methods: {
    clear_docdate: function(){

      document.getElementById('doc_date').setDate();

    }
  }
})
   