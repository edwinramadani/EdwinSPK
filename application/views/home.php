<div class="input-group">
  <span class="input-group-addon">Search</span>
  <input type="text" name="search_text" id="search_text" placeholder="Pencarian data karyawan" class="form-control" />
</div>


<div id="result" style="margin-top: 20px;"></div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query) {
  $.ajax({
     url:"<?php echo base_url(); ?>App/fetch",
     method:"POST",
     data:{query:query},
       success:function(data){
        $('#result').html(data);
       }
    })
  }

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '') {
      load_data(search);
    } else {
      load_data();
    }
  });

});
</script>
