@stack('scripts_before')

@livewireScripts

<!-- OneUI Core JS -->
<script src="{{ asset('js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>  
<script src="{{ asset('js/plugins/es6-promise/es6-promise.auto.min.js') }}"></script>
<script src="{{ asset('js/plugins/sweetalert2/sweetalert2.min.js') }}"></script>  
<script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="{{ asset('js/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ asset('js/plugins/moment/moment.min.js') }}"></script>

<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<!-- Delete Confirm -->
<script type="text/javascript">

    $(document).ready(function(){

        //remember last tab
        $('.nav-tabs .nav-item > a.nav-link').on('shown.bs.tab', function (e) {
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });

        var activeTab = localStorage.getItem('activeTab');
        if (activeTab) {
            $('.nav-tabs .nav-item a[href="' + activeTab + '"]').tab('show');
        }

        $(document).on('click', '.delete-confirm', function(event){

            var _this = $(this);

            Swal.fire({
            title: '{{ __("Are you sure") }}?',
            text: _this.attr('data-delete-text'),
            icon: 'warning',
            buttonsStyling: false,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            customClass: {
                confirmButton: 'btn btn-sm btn-danger mr-2',
                cancelButton: 'btn btn-sm btn-light'
            }
            }).then(function(result) { 
                if (result.value) {
                    $('#modal-loader').modal('show');
                    _this.prev().submit();
                }
            });
            
        });

        $(document).on('click', '.js-dataTable-full:not(.js-subtable) tbody tr', function(){

            var link = $(this).find('a').first();
            if (link.length)
                window.location.href = link.attr('href');
        });

    });
</script>

@yield('js_after')

@stack('scripts_after')

@if (session('alert'))
    <script type="text/javascript">
        $(document).ready(function(){
            //window.notify("{{ session('alert') }}", "{{ session('alert-message') }}");
            jQuery('#gr-notification').toast('show');
        });
    </script>
@endif

<script type="text/javascript">
    $(document).ready(function(){ 

        One.helpers(['flatpickr','magnific-popup','maxlength','select2']); 

        $(document).on('submit', 'form.crud-form', function(){

            var id = $(this).closest('.block').attr('id');
            One.block('state_loading', '#'+id);

        });

    });
</script>