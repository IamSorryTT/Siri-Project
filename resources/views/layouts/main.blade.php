<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title','Siri-Logistics')</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">

<link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css?v=3.2.0')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
</head>
<body class="sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed" style="height: auto;">
<div class="wrapper">

    @include('layouts.header')


    @include('layouts.sidebar')

<div class="content-wrapper">

<div class="content">
<div class="container-fluid">
 @yield('content')

</div>

</div>
</div>

</div>


<aside class="control-sidebar control-sidebar-dark">

<div class="p-3">
<h5>Title</h5>
<p>Sidebar content</p>
</div>
</aside>


@include('layouts.footer')
</div>



<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>

<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{ asset('assets/dist/js/adminlte.min.js?v=3.2.0')}}"></script>

<!-- DataTables  & Plugins -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.j')}}s"></script>

@livewireScripts

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": []
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
  window.addEventListener('swal',function(e){
    Swal.fire({
      title: e.detail.title,
      timer: e.detail.timer,
      icon: e.detail.icon
    }).then(function(){
      if(e.detail.url){
        window.location = e.detail.url;
      }
    })
  })
  window.livewire.on("modalHide",() => {
    $("#modal").modal("hide");
  })
</script>

<script>
    function validateInput(event) {
        // ตรวจสอบ event keyCode ว่าไม่ใช่ตัวเลขหรือไม่
        if ((event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode >= 186 && event.keyCode <= 192) || (event.keyCode >= 219 && event.keyCode <= 222)) {
            // แสดงข้อความ Validate
            alert('กรุณาระบุตัวเลขเท่านั้น');
            // ยกเลิกการเปลี่ยนค่าของ input
            event.preventDefault();
        }
    }
</script>
</body>
</html>
