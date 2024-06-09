<!DOCTYPE html>
<html lang="en">


<!-- invoice.html  21 Nov 2019 04:05:05 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Otika - Admin Dashboard Template</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>

    @foreach ($themeInfos as $themeInfo)
        <!-- Main Content -->
        <section class="section">
            <div class="section-body">
                <div class="invoice">
                    <div id="invoice-container">
                        <div class="invoice-print">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="invoice-title">
                                        <h2>Invoice</h2>
                                        <div class="invoice-number">Order #00{{ $order->id }}</div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <img src="{{ asset($themeInfo->header_logo) }}" alt="logo"
                                                    style="height: 100px;" />
                                            </address>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong>Customer Infomation:</strong><br>
                                                {!! $order->customer->fname . ' ' . $order->customer->lname !!}<br>
                                                {{ $order->customer->email }}<br>
                                                +{{ $order->customer->phone }}<br>
                                                {{ $order->delivery_address }}
                                            </address>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <address>
                                                <strong>{{ $themeInfo->name }}</strong><br>
                                                {{ $themeInfo->contact_email }}<br>
                                                +{{ $themeInfo->contact_mobile }}<br>
                                                +{{ $themeInfo->whapp_mobile }}(Whatapp)
                                            </address>
                                        </div>
                                        <div class="col-md-6 text-md-right">
                                            <address>
                                                <strong>Order Date:</strong><br>
                                                {{ date('j M Y', strtotime($order->created_at)) }}<br><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="section-title">Order Summary</div>
                                    @foreach ($prices as $price)
                                        <p class="section-lead">All Products will be delivered in @if ($order->package_type == 'Basic')
                                                {{ $price->basic_delivery }}
                                            @elseif($order->package_type == 'Pro')
                                                {{ $price->pro_delivery }}
                                            @elseif($order->package_type == 'Premium')
                                                {{ $price->pre_delivery }}
                                            @endif working days.</p>
                                    @endforeach
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-md">
                                            <tr>
                                                <th data-width="40">#</th>
                                                <th>Item</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-center">Price</th>
                                            </tr>

                                            @foreach ($orderDetails as $item)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $item->product_name }}</td>
                                                    <td class="text-center">{{ $item->product_qty }}</td>
                                                    <td class="text-center">
                                                        ${{ number_format($item->product_price, 2) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tfoot>
                                                <td></td>
                                                <td>{{ $order->package_type }}</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">${{ number_format($order->package_price, 2) }}
                                                </td>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="row mt-4">

                                        <div class="col-lg-12 text-right">
                                            <div class="invoice-detail-item">
                                                <div class="invoice-detail-name">Subtotal</div>
                                                <div class="invoice-detail-value">
                                                    ${{ number_format($order->subtotel_price, 2) }}</div>
                                            </div>
                                            <div class="invoice-detail-item">
                                                <div class="invoice-detail-name">Tax</div>
                                                <div class="invoice-detail-value">{{ $order->tax_ammount }}%</div>
                                            </div>
                                            <hr class="mt-2 mb-2">
                                            <div class="invoice-detail-item">
                                                <div><span class="invoice-detail-name"
                                                        style="text-align: left">Total</span>
                                                    <span
                                                        class="invoice-detail-value-lg">${{ number_format($order->order_total, 2) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="text-md-right">
                        <div class="float-lg-left mb-lg-0 mb-3">
                            <button type="button" class="btn btn-primary btn-icon icon-left" id="invoice-download"><i
                                    class="fas fa-download"></i>Invoice Download</button>
                            <button class="btn btn-danger btn-icon icon-left"><i class="fas fa-times"></i>
                                Cancel</button>
                        </div>
                        <button class="btn btn-warning btn-icon icon-left" onclick="printPage('invoice-container')"><i
                                class="fas fa-print"></i> Print</button>
                    </div>
                </div>
            </div>
        </section>


        <script>
            function printPage(containerId) {
                var printContents = document.getElementById(containerId).innerHTML;
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents;
            }
        </script>
    @endforeach

    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>

    <script>
        function printPage(containerId) {
            var printContents = document.getElementById(containerId).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>


</body>


<!-- invoice.html  21 Nov 2019 04:05:05 GMT -->

</html>
