@include('PartialsOne._header')

<div class="shopping-cart-steps">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-steps">
                    <ul class="clearfix">
                        <li>
                            <div class="inner">
                                <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                            </div>
                        </li>
                        <li class="active">
                            <div class="inner">
                                <span class="step">02</span> <span class="inner-step">Checkout </span>
                            </div>
                        </li>
                        <li>
                            <div class="inner">
                                <span class="step">03</span> <span class="inner-step">Order Completed </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
            <div class="row">
                <div class="receipt-header receipt-header-mid">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <h5>LiMax  Shopping  Limited<small>  |   Order Id: 156</small></h5>
                            <p><b>Name :</b> James Ndungu</p>
                            <p><b>Mobile :</b> +91 12345-6789</p>
                            <p><b>Email :</b> info@gmail.com</p>
                            <p><b>Address :</b> Australia</p>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="receipt-left">
                            <h1>Receipt</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Description</th>
                        <th>Amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="col-md-9">Payment for August 2016</td>
                        <td class="col-md-3"><i class="fa fa-inr"></i> 15,000/-</td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Payment for June 2016</td>
                        <td class="col-md-3"><i class="fa fa-inr"></i> 6,00/-</td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Payment for May 2016</td>
                        <td class="col-md-3"><i class="fa fa-inr"></i> 35,00/-</td>
                    </tr>
                    <tr>
                        <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>Late Fees: </strong>
                            </p>
                            <p>
                                <strong>Payable Amount: </strong>
                            </p>
                            <p>
                                <strong>Balance Due: </strong>
                            </p>
                        </td>
                        <td>
                            <p>
                                <strong><i class="fa fa-inr"></i> 65,500/-</strong>
                            </p>
                            <p>
                                <strong><i class="fa fa-inr"></i> 500/-</strong>
                            </p>
                            <p>
                                <strong><i class="fa fa-inr"></i> 1300/-</strong>
                            </p>
                            <p>
                                <strong><i class="fa fa-inr"></i> 9500/-</strong>
                            </p>
                        </td>
                    </tr>
                    <tr>

                        <td class="text-right"><h2><strong>Total: </strong></h2></td>
                        <td class="text-left text-danger"><h2><strong>Ksh:31.566/-</strong></h2></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <div class="receipt-header receipt-header-mid receipt-footer">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <p><b>Date :</b> 15 Aug 2016</p>
                            <h5 style="color: rgb(140, 140, 140);">Thank you for your business!</h5>
                        </div>
                    </div>
                    <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="receipt-left">
                            <h1>Signature</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<style>
    .text-danger strong {
        color: #9f181c;
    }
    .receipt-main {
        background: #ffffff none repeat scroll 0 0;
        border-bottom: 12px solid #333333;
        border-top: 12px solid #9f181c;
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 40px 30px !important;
        position: relative;
        box-shadow: 0 1px 21px #acacac;
        color: #333333;
        font-family: open sans;
    }
    .receipt-main p {
        color: #333333;
        font-family: open sans;
        line-height: 1.42857;
    }
    .receipt-footer h1 {
        font-size: 15px;
        font-weight: 400 !important;
        margin: 0 !important;
    }
    .receipt-main::after {
        background: #414143 none repeat scroll 0 0;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: -13px;
    }
    .receipt-main thead {
        background: #414143 none repeat scroll 0 0;
    }
    .receipt-main thead th {
        color:#fff;
    }
    .receipt-right h5 {
        font-size: 16px;
        font-weight: bold;
        margin: 0 0 7px 0;
    }
    .receipt-right p {
        font-size: 12px;
        margin: 0px;
    }
    .receipt-right p i {
        text-align: center;
        width: 18px;
    }
    .receipt-main td {
        padding: 9px 20px !important;
    }
    .receipt-main th {
        padding: 13px 20px !important;
    }
    .receipt-main td {
        font-size: 13px;
        font-weight: initial !important;
    }
    .receipt-main td p:last-child {
        margin: 0;
        padding: 0;
    }
    .receipt-main td h2 {
        font-size: 20px;
        font-weight: 900;
        margin: 0;
        text-transform: uppercase;
    }
    .receipt-header-mid .receipt-left h1 {
        font-weight: 100;
        margin: 34px 0 0;
        text-align: right;
        text-transform: uppercase;
    }
    .receipt-header-mid {
        margin: 24px 0;
        overflow: hidden;
    }

    #container {
        background-color: #dcdcdc;
    }
</style>
