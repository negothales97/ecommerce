<footer class="main-footer">
    <strong>Copyright &copy; 2020 <a href="https://imaxinformatica.com.br/">IEAGA. </a></strong>
    TODOS OS DIREITOS RESERVADOS.
    <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> 1.0.0
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('adminlte/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
$.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('adminlte/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('adminlte/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('adminlte/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('adminlte/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('adminlte/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('adminlte/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- MaskMoney -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
<!-- Toastr -->
<script src="{{asset('adminlte/plugins/toastr/toastr.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.js')}}"></script>
<!-- Axios -->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- DropZone -->
<script src="{{asset('plugins/dropzone/dropzone.js')}}"></script>
<!-- Mascaras -->
<script src="{{asset('js/mask.js')}}"></script>
<script type="text/javascript">
$('.btn-delete').on('click', function(e) {
    e.preventDefault();
    $('#confirmationModal .modal-title').html('Confirmação');
    $('#confirmationModal .modal-body p').html('Tem certeza que deseja realizar esta ação?');
    let href = $(this).attr('href');
    $('#delete-form').attr('action', href);
    $('#confirmationModal').modal('show');
});

$(function() {
    // Summernote
    $('.textarea').summernote({
        toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
        ]
    })
});


function deleteItem(element, redirect = 0) {
    let href = element.dataset.href
    $('#confirmationModal .modal-title').html('Confirmação');
    $('#confirmationModal .modal-body p').html('Tem certeza que deseja prosseguir?');

    $('#confirmationModal').modal('show').on('click', '#confirm', function() {
        if (redirect === 0) {
            axios.get(href)
                .then(response => {
                    renderTable(response.data);
                    $('#confirmationModal').modal('hide');
                    toastr.success("Dados removidos com sucesso");
                }).catch(error => {});
        } else {
            window.location.href = href;
        }
    });
}

function validateError(response) {
    const {
        data: {
            error
        },
        status
    } = response;

    if (status === 406) {
        for (item in error) {
            let elementError = document.querySelector(`input[name=${item}]`);
            elementError.classList.add('is-invalid');
            toastr.error(error[item]);
        }
    }
}
</script>

@if(session()->has('success'))
<script>
$(document).ready(function() {
    toastr.success("{{session('success')}}");
});
</script>
@endif
@if(session()->has('status'))
<script>
$(document).ready(function() {
    toastr.info("{{session('status')}}");
});
</script>
@endif

@if(session()->has('error'))
<script>
$(document).ready(function() {
    toastr.error("{{session('error')}}");
});
</script>
@endif
@if ($errors->any())
@foreach ($errors->all() as $error)
<script>
$(document).ready(function() {
    toastr.error("{{ $error }}");
});
</script>
@endforeach
@endif
<script type="text/javascript">
$(document).ready(function() {
    bsCustomFileInput.init();
});
</script>
@yield('scripts')