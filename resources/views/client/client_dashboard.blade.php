<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>@yield('pageTitle') - Art Trade Hub</title>
        <link rel="shortcut icon" href="{{ asset('assets2/img/logo.png') }}" />


		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="{{asset('../assets/vendors/styles/core.css')}}" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('../assets/vendors/styles/icon-font.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('../assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('../assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="{{asset('../assets/vendors/styles/style.css')}}" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/src/plugins/slick/slick.css') }}" />
    <!-- bootstrap-touchspin css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('../assets/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.css') }}" />

	</head>
	<body>
    @include('client.body.header')

        @include('client.body.sidebar')






		<div class="mobile-menu-overlay"></div>

		@yield('client')
        <div class="mt-4"></div>

        @include('client.body.footer')
		<!-- js -->
		<script src="{{asset('../assets/vendors/scripts/core.js')}}"></script>
		<script src="{{asset('../assets/vendors/scripts/script.min.js')}}"></script>
		<script src="{{asset('../assets/vendors/scripts/process.js')}}"></script>
		<script src="{{asset('../assets/vendors/scripts/layout-settings.js')}}"></script>
		<script src="{{asset('../assets/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
		<script src="{{asset('../assets/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('../assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{asset('../assets/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('../assets/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{asset('../assets/vendors/scripts/dashboard3.js')}}"></script>

        <script src="{{ asset('../assets/src/plugins/slick/slick.min.js') }}"></script>
        <script src="{{ asset('../assets/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js') }}"></script>
        <script src="{{ asset('../assets/src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>

        <script src="{{ asset('../assets/src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('../assets/src/plugins/datatables/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('../assets/src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('../assets/src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('../assets/src/plugins/datatables/js/pdfmake.min.js') }}"></script>
        <script src="{{ asset('../assets/src/plugins/datatables/js/vfs_fonts.js') }}"></script>
        <script src="{{ asset('../assets/vendors/scripts/datatable-setting.js') }}"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script>
            @if (Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}"
                switch (type) {
                    case 'info':
                        toastr.info(" {{ Session::get('message') }} ");
                        break;

                    case 'success':
                        toastr.success(" {{ Session::get('message') }} ");
                        break;

                    case 'warning':
                        toastr.warning(" {{ Session::get('message') }} ");
                        break;

                    case 'error':
                        toastr.error(" {{ Session::get('message') }} ");
                        break;
                }
            @endif
        </script>
        <script>
            $(function() {
                $(document).on('click', '#delete', function(e) {
                    e.preventDefault();
                    var link = $(this).attr("href");


                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirm'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = link
                            Swal.fire(
                                'Deleted!',
                                'Your data has been deleted.',
                                'success'
                            )
                        }
                    })


                });

            });
        </script>
    <script>
        jQuery(document).ready(function () {
            jQuery(".product-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                infinite: true,
                speed: 1000,
                fade: true,
                asNavFor: ".product-slider-nav",
            });
            jQuery(".product-slider-nav").slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                asNavFor: ".product-slider",
                dots: false,
                infinite: true,
                arrows: false,
                speed: 1000,
                centerMode: true,
                focusOnSelect: true,
            });
            $("input[name='demo3_22']").TouchSpin({
                initval: 1,
            });
        });
    </script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="{{ asset('assets/src/scripts/code/code.js') }}"></script>

	</body>
</html>
