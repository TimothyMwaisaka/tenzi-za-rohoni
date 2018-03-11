{{-- Author: Timothy Mwaisaka --}}
{{-- Email: timothymwaisaka@gmail.com --}}
{{-- Date: 21/10/2017 --}}

<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            v1.0.0
        </div>
        <strong>Copyright &copy; {{ date("Y") }} <a href="https://github.com/TimothyMwaisaka">Timothy Mwaisaka</a>.</strong> All rights
        reserved.
    </div>
    <!-- /.container -->
</footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('flexcodes/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('flexcodes/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('flexcodes/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('flexcodes/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('flexcodes/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('flexcodes/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('flexcodes/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('flexcodes/dist/js/demo.js') }}"></script>
<script src="{{ asset('flexcodes/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script>
    $('#flexcodes-datatable').dataTable({
        "pageLength": 25
    });
</script>
<script>
    $(function () {
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
</body>
</html>