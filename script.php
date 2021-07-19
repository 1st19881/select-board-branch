<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">
  $('#board').change(function() {
    var id_province = $(this).val();

      $.ajax({
      type: "POST",
      url: "ajax_db.php",
      data: {id:id_province,function:'board'},
      success: function(data){
          $('#branch').html(data); 
      }
    });
  });


</script>