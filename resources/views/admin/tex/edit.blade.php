@extends('admin.master')

@section('title')
    Tex Info
@endsection

@section('module')
    active
@endsection

@section('tex')
    active
@endsection

@section('body')
    <!-- Main Content -->

    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">

                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">

                            <div class="card-header">
                                <h4>Add Payment</h4>
                            </div>

                            <p class="text-center text-success">{{ session('Gmessage') }}</p>

                            <form class="form-horizontal" action="{{ route('texInfo.update', $payment->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="card-body">

                                    <div class="col-md-12">
                                        <div class="section-title mt-0">Tax Amount<samp class="required">*</samp></div>
                                        <div class="form-group">
                                            <input type="number" name="tex" value="{{ $payment->tex }}"
                                                class="form-control" placeholder="Tax Amount" required>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="section-title mt-0">Currency Type<samp class="required">*</samp></div>
                                        <div class="form-group">
                                            <select name="currency_type" class="form-control" required>
                                                <option {{ $payment->currency_type == "$" ? ' selected' : ' ' }}       value="$">USD</option>
                                                <option {{ $payment->currency_type == "€" ? ' selected' : ' ' }}       value="€">EUR</option>
                                                <option {{ $payment->currency_type == "£" ? ' selected' : ' ' }}       value="£">GBP</option>
                                                <option {{ $payment->currency_type == "¥" ? ' selected' : ' ' }}       value="¥">JPY</option>
                                                <option {{ $payment->currency_type == "৳" ? ' selected' : ' ' }}       value="৳">BDT</option>
                                                <option {{ $payment->currency_type == "CAD $" ? ' selected' : ' ' }}   value="CAD $">CAD</option>
                                                <option {{ $payment->currency_type == "CHF" ? ' selected' : ' ' }}     value="CHF">CHF</option>
                                                <option {{ $payment->currency_type == "AUD $" ? ' selected' : ' ' }}   value="AUD $">AUD</option>
                                                <option {{ $payment->currency_type == "HKD $" ? ' selected' : ' ' }}   value="HKD $">HKD</option>
                                                <option {{ $payment->currency_type == "NZD $" ? ' selected' : ' ' }}   value="NZD $">NZD</option>
                                                <option {{ $payment->currency_type == "SGD $" ? ' selected' : ' ' }}   value="SGD $">SGD</option>
                                                <option {{ $payment->currency_type == "₹" ? ' selected' : ' ' }}       value="₹">INR</option>
                                                <option {{ $payment->currency_type == "CNY ¥" ? ' selected' : ' ' }}   value="CNY ¥">CNY</option>
                                                <option {{ $payment->currency_type == "₩" ? ' selected' : ' ' }}       value="₩">KRW</option>
                                                <option {{ $payment->currency_type == "฿" ? ' selected' : ' ' }}       value="฿">THB</option>
                                                <option {{ $payment->currency_type == "Rp" ? ' selected' : ' ' }}      value="Rp">IDR</option>
                                                <option {{ $payment->currency_type == "RM" ? ' selected' : ' ' }}      value="RM">MYR</option>
                                                <option {{ $payment->currency_type == "₱" ? ' selected' : ' ' }}       value="₱">PHP</option>
                                                <option {{ $payment->currency_type == "MX$" ? ' selected' : ' ' }}     value="MX$">MXN</option>
                                                <option {{ $payment->currency_type == "R$" ? ' selected' : ' ' }}      value="R$">BRL</option>
                                                <option {{ $payment->currency_type == "₽" ? ' selected' : ' ' }}       value="₽">RUB</option>
                                                <option {{ $payment->currency_type == "₺" ? ' selected' : ' ' }}       value="₺">TRY</option>
                                                <option {{ $payment->currency_type == "₪" ? ' selected' : ' ' }}       value="₪">ILS</option>
                                                <option {{ $payment->currency_type == "ZAR" ? ' selected' : ' ' }}     value="ZAR">ZAR</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="buttons">
                                        <button type="submit" class="btn btn-lg btn-info col-md-12">Save</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
