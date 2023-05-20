<!DOCTYPE html>
<html lang="en">
    <?php
        $json = file_get_contents('site_settings/head.json');
        $data = json_decode($json, true);
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="@if (session()->has('locale') && session()->get('locale') =='ar') {{ $data['website_description_ar'] }} @else {{ $data['website_description_en'] }} @endif">
        <meta name="keywords" content="{{ $data['website_keywords'] }}">
        <link rel="canonical" href="{{ $data['website_canonical'] }}">
        <link rel="icon" href="{{ asset('images/icon/icon.png') }}">
        {{-- ********************* --}}
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/all.min.css">
        <link rel="stylesheet" href="/css/animate.css">
        <link rel="stylesheet" href="/css/hover.css">
        <link rel="stylesheet" href="/css/style.css">
        @yield('style')
        <title>{{ __('nav_bar_translate.title') }}</title>
    </head>

    <body>
        <div class="top-page"></div>
        <div class="to-top" onclick="topFunction()" data-section=".service">
            <i class="fa-solid fa-arrow-up"></i>
        </div>
        @yield('navbar')
        @yield('content')
        {{-- <article class="col-lg-2 text-center" style="position: fixed; bottom: 0;left: 0;">
            <span class="lead">{{ __('index_translate.support') }}</span>
            <div class="mt-1" id="smart-button-container">
                <div style="text-align: center;">
                    <div id="paypal-button-container"></div>
                </div>
            </div>
            <script
                src="https://www.paypal.com/sdk/js?client-id=AQaV6z8MmvHfcIW7Qs_8qPF6oDLAg9t-X49FGBg6-rbLSuGp7J27TLg_-609dDKzWWGowH6jMJJUMKyx&currency=USD&intent=capture&enable-funding=venmo"
                data-sdk-integration-source="integrationbuilder"></script>
            <script>
            // <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory">
            </script>
            <!-- <script src="https://www.paypal.com/sdk/js?client-id=ABSzkCwy7ZhObpff7UjOnn3jz6G5AVV-OMODlZnLhNzfKIjtqHP7ge2d&enable-funding=venmo&currency=USD"> -->

            <script>

            const paypalButtonsComponent = paypal.Buttons({
                style: {
                    shape: 'pill',
                    color: 'silver',
                    layout: 'horizontal',
                    label: 'paypal',
                },
                // set up the transaction
                createOrder: (data, actions) => {
                    const createOrderPayload = {
                        purchase_units: [{
                            amount: {
                                "currency_code": "USD",
                                value: 1
                            }
                        }]
                    };
                    return actions.order.create(createOrderPayload);
                },

                onApprove: (data, actions) => {
                    const captureOrderHandler = (details) => {
                        console.log(details);
                        const payerName = details.payer.name.given_name;
                        const payment_id = details.id;
                    };
                    return actions.order.capture().then(captureOrderHandler);
                },
                // handle unrecoverable errors
                onError: (err) => {
                    const element = document
                        .getElementById(
                            'paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML =
                        '<h3 style="color: red;">payment Error Try again!</h3>';
                    console.error(
                        'An error prevented the buyer from checking out with PayPal'
                    );
                }
            });
            paypalButtonsComponent
                .render("#paypal-button-container")
                .catch((err) => {
                    console.error('PayPal Buttons failed to render');
                });
            </script>
        </article> --}}
        <script src="/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <script src="/js/jquery-3.6.0.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/all.min.js"></script>
        <script src="/js/main.js"></script>
        <script>
            // var scrollTop = $(".to-top");
            // scrollTop.click(function() {
            //     $("body").animate({ scrollTop: 0 }, 600);
            // });
            function topFunction() {
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        </script>
        @yield('scripts')

    </body>

</html>
