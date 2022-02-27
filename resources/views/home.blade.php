@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Make a payment</div>

                    <div class="card-body">
                        <form action="{{ route('pay') }}" method="POST" id="paymentForm">
                            @csrf
                            <div class="row">
                                <div class="col-auto">
                                    <label for="">
                                        How mush you want to pay ?
                                    </label>
                                    <input type="number" name="value" min="5" step="0.01" class="form-control"
                                        value="{{ mt_rand(500, 100000) / 100 }}" required>

                                    <small class="form-text text-muted">
                                        Use values with up to tow decimal positions , using a dot .
                                    </small>
                                </div>
                                <div class="col-auto">
                                    <label for="">
                                        Currency
                                    </label>
                                    <select class="form-select" name="currency" id="" required>
                                        @foreach ($currencies as $currency)
                                            <option value="{{ $currency->iso }}">{{ strtoupper($currency->iso) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="crow mt-3">
                                    <div class="col">
                                        <label for="">
                                            Select the payment platform
                                        </label>
                                        <div class="form-group">

                                            @foreach ($paymentPlatforms as $paymentPlatform)
                                                <label id="select_payment_wrapper">
                                                    <input type="radio" name="payment_platform"
                                                        value="{{ $paymentPlatform->id}}">
                                                    <img class="img-thumbnail" src=" {{ $paymentPlatform->image }} "
                                                        alt="">
                                                </label>

                                            @endforeach


                                            @foreach ($paymentPlatforms as $paymentPlatform)
                                                <div class = "dynamic-pay-component {{  strtolower($paymentPlatform->name)}}">
                                                    @includeif('components.' . strtolower($paymentPlatform->name) .
                                                    '-collapse')
                                                </div>


                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" mt-3">
                                <button id="payButton" class="btn btn-large btn-primary" type="submit"> Pay the money
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
