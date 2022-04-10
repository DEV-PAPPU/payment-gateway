<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel - Razorpay Payment Gateway Integration</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

    <div id="app">

        <main class="py-4">

            <div class="container">

                <div class="row">

                    <div class="col-md-6 offset-3 col-md-offset-6">

  

                        @if($message = Session::get('error'))

                            <div class="alert alert-danger alert-dismissible fade in" role="alert">

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                    <span aria-hidden="true">×</span>

                                </button>

                                <strong>Error!</strong> {{ $message }}

                            </div>

                        @endif

  

                        @if($message = Session::get('success'))

                            <div class="alert alert-success alert-dismissible fade {{ Session::has('success') ? 'show' : 'in' }}" role="alert">

                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                                    <span aria-hidden="true">×</span>

                                </button>

                                <strong>Success!</strong> {{ $message }}

                            </div>

                        @endif

  

                        <div class="card card-default">

                            <div class="card-header">

                                Laravel - Razorpay Payment Gateway Integration

                            </div>

  

                            <div class="card-body text-center">

                                <form action="{{ route('razorpay.store') }}" method="POST" >

                                    @csrf

                                    <script src="https://checkout.razorpay.com/v1/checkout.js"

                                            data-key="{{ env('RAZORPAY_KEY') }}"

                                            data-amount="1000"

                                            data-buttontext="Pay 10 INR"

                                            data-name="Roobnet Dev"

                                            data-description="Rozerpay"

                                            data-image="https://99designs-start-attachments.imgix.net/alchemy-pictures/2019%2F01%2F31%2F23%2F16%2F56%2Fa003b801-789a-4fbe-bdeb-55436d0a69b1%2FSpoon%20Lancer.png?auto=format&ch=Width%2CDPR&w=250&h=250"

                                            data-prefill.name="name"

                                            data-prefill.email="email"

                                            data-theme.color="#ff7529">

                                    </script>

                                </form>

                            </div>

                        </div>

  

                    </div>

                </div>

            </div>

        </main>

    </div>

</body>

</html>