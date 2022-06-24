<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/orderStyle.css') }}">

    <title>Order Detail</title>
</head>
<body>
    <div class="container mb-5 mt-5">
        <div class="col-md-6 m-auto" id="staticBackdrop">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body ">
                        <div class="px-4 py-5">        
                            <h5 class="text-uppercase">{{ $orders->user->name }}</h5>             
                            <h4 class="mt-5 theme-color">Thanks for your order</h4>
                            <h4 class="theme-color mb-5">{{ $orders->order_date }}</h4>
                            
                            <span class="theme-color">Payment Summary</span>
                            <div class="mb-3">
                                <hr class="new1">
                            </div>
                            
                            @foreach ($orders->orderDetail as $od)
                                <div class="d-flex justify-content-between">
                                    <span class="font-weight-bold">{{$od->menu->name}}(Qty:{{ $od->qty }})</span>
                                    <span class="text-muted">Rp {{ number_format($od->menu->price * $od->qty, 2, ',', '.') }}</span>
                                </div>
                            @endforeach                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
                            
                            <div class="d-flex justify-content-between mt-3">
                                <span class="font-weight-bold">Total</span>
                                <span class="font-weight-bold theme-color">Rp {{ number_format($orders->total, 2, ',', '.') }}</span>
                            </div>              
                            <p class="mt-5 text-center fw-bolder">Goto cashier and scan it to finish order</p>
                            <div class="text-center mt-5">            
                                {{ $qrcode }}
                            </div>                   
        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
    
