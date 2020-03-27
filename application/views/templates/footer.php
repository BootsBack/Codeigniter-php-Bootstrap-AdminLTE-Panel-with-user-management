<footer class="main-footer">
    <strong>Copyright &copy; 2019-<?php echo date('Y');?> <a href="#" target="_blank">Your Company Name</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/chart.js/Chart.min.js"></script>

<!-- JQVMap -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- overlayScrollbars -->
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/sweetalert2/sweetalert2.all.min.js"></script>

<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/AdminLTE-3.0.2/');?>dist/js/adminlte.js"></script>

<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
const Toast = Swal.mixin({
      toast: true,
      position: 'top-center',
      showConfirmButton: false,
      timer: 3000
    });
</script>
<?php if(isset($js)){	
	if (file_exists($js)) {
           include $js;
        }else{
		echo "<!--page $js file load fail Error 404-->";
		}
 }?>

</body>
</html>
