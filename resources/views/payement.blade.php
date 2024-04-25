@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-4">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-fluid mx-auto d-block" src="https://www.prepbootstrap.com/Content/images/shared/misc/creditcardicons.png">
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" placeholder="Valid Card Number" aria-label="Card Number" />
                                        <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-7 col-md-7">
                                <div class="mb-3">
                                    <label class="form-label">EXPIRATION DATE</label>
                                    <input type="tel" class="form-control" placeholder="MM / YY" aria-label="Expiration Date" />
                                </div>
                            </div>
                            <div class="col-5 col-md-5">
                                <div class="mb-3">
                                    <label class="form-label">CV CODE</label>
                                    <input type="tel" class="form-control" placeholder="CVC" aria-label="CV Code" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">CARD OWNER</label>
                                    <input type="text" class="form-control" placeholder="Card Owner Names" aria-label="Card Owner" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">
                            <a type="submit " class="btn  btn-block btn-lg  gradient-custom-4 text-body-white btn-submit" style="background-color: #554c86; margin-left:22%" href="{{ route('thank') }}">Process payment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .img-fluid {
        margin: 0 auto;
    }
    .card{
        box-shadow: 4px 4px 8px rgba(36, 141, 233, 0.5) ;
                transition: transform 0.3s ease-in-out;
    }
    .card.card-footer.btn:hover{
color:aqua
    }
    .container{
        margin-top: 11%;
    }
</style>
@endsection
