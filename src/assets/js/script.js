$.widget.bridge('uibutton', $.ui.button);

$('.hr_datepicker').datepicker({ dateFormat: 'YY-mm-dd'});

$(".flash-msg").fadeTo(2000, 500).slideUp(500, function(){
    $(".flash-msg").slideUp(500);
});  

$('#confirm-delete').on('show.bs.modal', function(e) {
  $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
});