<form action="<?=base_url()?>artikel/submit" method="post" enctype="multipart/form-data" class="form" >
 <table class="table table-striped table-condensed ">

   <tr>
    <td colspan="2">
      Deskripsi
      <?php echo $this->ckeditor->editor('description','');?>
    </td>
  </tr>
 
  <tr>
    <td></td>
    <td> 
     <input type="submit" class="btn btn-primary btn-lg" value="Simpan">
     <input type="reset" class="btn btn-default btn-lg" value="Reset">
   </td>
 </tr> 
</table>
</form> 