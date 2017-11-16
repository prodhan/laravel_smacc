<div class="work-bottom">
    <div class="container">
        <h1 align="center"> Our Client </h1>

        {{--client slider--}}
        <ul id="flexiselDemo1">
            @foreach($ClientSlider as $client)
                <li>
                    <div class="media">
                        <a href='{{$client->link}}' title='{{$client->caption}}' target="_blank"><img src='{{asset("public/files/$client->image")}}' alt='{{$client->caption}}'/></a>
                    </div>
                </li>

            @endforeach

        </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 5,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint:480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: {
                            changePoint:768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="{{asset('public/frontend/js/jquery.flexisel.js')}}"></script>
    </div>
</div>