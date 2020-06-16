<script src="{{ URL::asset('admin/js/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ URL::asset('admin/js/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('admin/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ URL::asset('admin/js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ URL::asset('admin/js/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ URL::asset('admin/js/jquery.vmap.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ URL::asset('admin/js/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ URL::asset('admin/js/moment.min.js')}}"></script>
<script src="{{ URL::asset('admin/js/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ URL::asset('admin/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ URL::asset('admin/js/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('admin/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('admin/js/adminlte.js')}}"></script>
<script src="{{ URL::asset('admin/js/all.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ URL::asset('admin/js/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('admin/js/demo.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{ URL::asset('admin/js/bs-custom-file-input.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('admin/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('admin/js/jquery.dataTables.js')}}"></script>
<script src="{{ URL::asset('admin/js/dataTables.bootstrap4.js')}}"></script>
<!-- Select2 -->
<script src="{{ URL::asset('admin/js/select2.full.min.js')}}"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="{{ URL::asset('admin/js/jquery.bootstrap-duallistbox.min.js')}}"></script>
<!-- InputMask -->
<script src="{{ URL::asset('admin/js/jquery.inputmask.bundle.min.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{ URL::asset('admin/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{ URL::asset('admin/js/bootstrap-switch.min.js')}}"></script>
<!-- Page script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })
    
    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    });

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

  })
</script>
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function () {
  bsCustomFileInput.init();
  });
</script>
<script>
  $(function () {
    // Summernote
    $('body.textarea').summernote()
  })
</script>
