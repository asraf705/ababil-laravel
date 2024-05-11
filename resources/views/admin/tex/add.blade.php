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

                            <form class="form-horizontal" action="{{ route('texInfo.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="col-md-12">
                                        <div class="section-title mt-0">Tax Amount</div>
                                        <div class="form-group">
                                            <input type="number" name="tex" class="form-control"
                                                placeholder="Tax Amount" required>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div class="section-title mt-0">Currency Type<samp class="required">*</samp></div>
                                        <div class="form-group">
                                            <select name="currency_type" class="form-control" required>
                                                <option value="$">USD</option>
                                                <option value="€">EUR</option>
                                                <option value="£">GBP</option>
                                                <option value="¥">JPY</option>
                                                <option value="CAD $">CAD</option>
                                                <option value="CHF">CHF</option>
                                                <option value="AUD $">AUD</option>
                                                <option value="HKD $">HKD</option>
                                                <option value="NZD $">NZD</option>
                                                <option value="SGD $">SGD</option>
                                                <option value="₹">INR</option>
                                                <option value="CNY ¥">CNY</option>
                                                <option value="₩">KRW</option>
                                                <option value="฿">THB</option>
                                                <option value="Rp">IDR</option>
                                                <option value="RM">MYR</option>
                                                <option value="₱">PHP</option>
                                                <option value="MX$">MXN</option>
                                                <option value="R$">BRL</option>
                                                <option value="₽">RUB</option>
                                                <option value="₺">TRY</option>
                                                <option value="₪">ILS</option>
                                                <option value="ZAR">ZAR</option>
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
