<!-- Bootstrap JS -->
<script src="{{ asset('assets/guru/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('assets/guru/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/chartjs/js/Chart.min.js') }}"></script>
<script src="{{ asset('assets/guru/plugins/chartjs/js/Chart.extension.js') }}"></script>
<script src="{{ asset('assets/guru/js/index.js') }}"></script>
	<script src="{{ asset('assets/guru/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/guru/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
<!--app JS-->
<script src="{{ asset('assets/guru/js/app.js') }}"></script>
