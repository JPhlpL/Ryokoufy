{{--  --}}
<script src="{{ URL::asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
{{--  --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
{{--  --}}
<script src="{{ URL::asset('js/vendor/bootstrap.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/easing.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/jquery.ajaxchimp.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/owl.carousel.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/jquery.sticky.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/jquery.nice-select.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/parallax.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/mail-script.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/isotope.pkgd.min.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/main.js')}}"></script>
{{--  --}}
<script src="{{ URL::asset('js/sweetalert.js')}}"></script>
{{-- Sweetalert function --}}
<script>

    $('a.btn-modal').click(function(e){
    e.preventDefault(); // Prevent the default action (navigation) of the click
    var value = $(this).attr('value'); // Get the value attribute of the clicked link
    // Open a SweetAlert with the value
    Swal.fire({
        title: "Sweet!",
        text: "Modal with a custom image." + value,
        imageUrl: "https://unsplash.it/400/200",
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: "Custom image"
    });
});

</script>
