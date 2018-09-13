
<?php 

$alert  = $this->session->userdata("alert");


if(isset($alert)){


	if($alert["type"]=="success"){

 ?>
 <script type="text/javascript">
 	

swal({
  position: 'top',
  type: 'success',
  title: '<?php echo $alert['title'] ;?>',
  text:  '<?php echo $alert['subject'];?>',
  showConfirmButton: false,
  timer: 2500
})

 </script>

 <?php } else{ ?>

  <script type="text/javascript">
swal({
  position: 'top',
  type: 'error',
  title: '<?php echo $alert['title'] ;?>',
  text:  '<?php echo $alert['subject'];?>',
  showConfirmButton: false,
  timer: 2500
})

 </script>

<?php }} ?>

