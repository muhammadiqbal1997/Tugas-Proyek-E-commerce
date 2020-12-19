$("#tambahkategori").fireModal({
    title: 'Tambah Kategori',
    body: $("#modal-tambah-part"),
    footerClass: 'bg-whitesmoke',
    autoFocus: false,
    onFormSubmit: function(modal, e, form) {
      // Form Data
      let form_data = $(e.target).serialize();
      console.log(form_data)
  
      // DO AJAX HERE
      let fake_ajax = setTimeout(function() {
        form.stopProgress();
        modal.find('.modal-body').prepend('<div class="alert alert-info">Kategori berhasil ditambahkan</div>')
  
        clearInterval(fake_ajax);
      }, 1500);
  
      e.preventDefault();
    },
    shown: function(modal, form) {
      console.log(form)
    },
    buttons: [
      {
        text: 'Tambah Kategori',
        submit: true,
        class: 'btn btn-primary btn-shadow',
        handler: function(modal) {
        }
      }
    ]
  });