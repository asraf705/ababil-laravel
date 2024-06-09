@extends('admin.master')

@section('title')
    Customer Account
@endsection

@section('allaccount')
    active
@endsection

@section('customerUser')
    active
@endsection

@section('body')
    <!-- Main Content -->
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Manage Customer</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Sl</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Image</th>
                                            <th>Create Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($allcustomers as $item)
                                            <tr>

                                                <td>
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td>
                                                    {!! $item->fname.' '.$item->lname !!}
                                                </td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->phone  }}</td>
                                                <td>
                                                    <img src="{{ asset($item->image) }}" alt="Categry"
                                                        style="height: 50px; width: 50px;"></td>
                                                <td>{{ date('j M Y', strtotime($item->created_at)) }}</td>
                                                <td>
                                                    @if ($item->status == 1)
                                                        <a href="{{ route('customer.account.status', $item->id) }}"
                                                            class="btn btn-success"><i class="fas fa-user-alt"></i>
                                                            Publish</a>
                                                    @else
                                                        <a href="{{ route('customer.account.status', $item->id) }}"
                                                            class="btn btn-danger"><i class="fas fa-user-alt-slash"></i>
                                                            Block</a>
                                                    @endif


                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
