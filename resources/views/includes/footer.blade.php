<script>
    var base_path = "{{ url('/') }}"
</script>
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

$('a.btn-modal').click(function(e) {
    e.preventDefault();
    var place = $(this).attr('value');

    // Display loading modal
    Swal.fire({
        title: 'Loading...',
        html: '<i class="fa fa-spinner fa-spin fa-3x"></i>',
        showConfirmButton: false,
        allowOutsideClick: false
    });

    $.ajax({
        url: base_path + '/getInfo/' + place,
        type: 'GET',
        success: function(data) {
            // Close loading modal
            Swal.close();

            // Display main modal
            Swal.fire({
                title: place,
                html: `
                    <ul class="text-left">
                        <li>Geo Data:</li>
                        <li>Latitude: ${data.latitude}</li>
                        <li>Longitude: ${data.longitude}</li>
                        <li>Place: ${data.place}</li>
                        <li>Timezone: ${data.timezone}</li>
                    </ul>
                    <br>
                    <ul class="text-left">
                        <li>Weather Condition: </li>
                        <li>Temperature: ${data.temperature}°C </li>
                        <li>Humidity: ${data.humidity}% </li>
                        <li>Wind Speed: ${data.wind_speed} m/s </li>
                    </ul>
                `,
                imageUrl: base_path + '/img/main/' + place + '.jpg',
                imageWidth: 400,
                imageHeight: 200,
                imageAlt: "Custom image"
            });
        }
    });
});


</script>
