<!-- Vendor JS Files -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/chart.umd.js')}}"></script>
<script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script>
    $(document).ready(function(){
        $('#sidenav a').filter(function(){
        return this.href == window.location.href;
        }).parent().removeClass('collapsed');
    });
</script>
<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>