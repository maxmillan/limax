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

<!--checkout-area start-->
<div class="checkout-area mt-15">
    <div class="container">
        <div class="row">
        </div>
        <div class="row mt-10">
            <div class="col-lg-8">
                <div class="billing-form">
                    <h4>Billing Address</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-3 align-items-center">
                                <label>COUNTRY *</label>
                            </div>
                            <div class="col-lg-9">
                                <select>
                                    <option>Kenya</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>FIRST NAME *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>LAST NAME *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>PHONE *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>COMPANY NAME</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text"  placeholder="{optional}" a/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>ADDRESS *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" placeholder="Street Address" />
                                <input type="text" placeholder="Apartment, A123, Ruaka (optional)" class="mt-sm-30" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>TOWN / CITY *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label>EMAIL ADDRESS *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <p><button class="btn btn-danger">Change Address</button> </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar-checkout">
                    <div class="cart-box cart-coupon fix">
                        <h5>Promotrional Code</h5>
                        <div class="cart-box-inner">
                            <p>Enter your coupin if you have one</p>
                            <input type="text" />
                            <a href="#" class="btn-common">Apply</a>
                        </div>
                    </div>
                </div>
                <div class="order-details mt-30">
                    <h4>Your Order</h4>
                    <div class="order-details-inner">
                        <table>
                            <thead>
                            <tr>
                                <th>PRODUCT</th>
                                <th>TOTAL</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Aloe vera - herbal</td>
                                <td><strong>$260.00</strong></td>
                            </tr>
                            <tr>
                                <td>Haworthia Wide Zebra</td>
                                <td><strong>$200.00</strong></td>
                            </tr>
                            <tr>
                                <td>Cart Subtotal</td>
                                <td><strong>$460.00</strong></td>
                            </tr>
                            <tr>
                                <td>Shipping and Handling</td>
                                <td>Free Shipping</td>
                            </tr>
                            <tr>
                                <td>ORDER TOTAL</td>
                                <td><strong>$460.00</strong></td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="payment-gateways mt-30">
                            <div class="single-payment-gateway">
                                <input type="checkbox" id="system1" />
                                <label for="system1">Create an account?</label>
                                <div class="payment-gateway-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="single-payment-gateway">
                                <input type="radio" id="system2" />
                                <label for="system2">Cheque Payment</label>
                            </div>
                            <div class="single-payment-gateway">
                                <input type="radio" id="system3" />
                                <label for="system3">Paypal</label>
                            </div>
                        </div>
                        <div class="place-order text-center mt-60">
                            <a href="#" class="btn-common width-180">place porder</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--checkout-area end-->

<!--brands-area start-->
@include('Partials._footer')
<!--footer-area end-->

<!-- modernizr js -->
<script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
<!-- jquery-3.3.1 version -->
<script src="assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- bootstra.min js -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- mmenu js -->
<script src="assets/js/jquery.mmenu.js"></script>
<!-- easing js -->
<script src="assets/js/jquery.easing.min.js"></script>
<!---slick-js-->
<script src="assets/js/slick.min.js"></script>
<!---letteranimation-js-->
<script src="assets/js/letteranimation.min.js"></script>
<!-- jquery-ui js -->
<script src="assets/js/jquery-ui.min.js"></script>
<!-- jquery.countdown js -->
<script src="assets/js/jquery.countdown.min.js"></script>
<!-- venobox js -->
<script src="assets/js/venobox.min.js"></script>
<!-- plugins js -->
<script src="assets/js/plugins.js"></script>
<!-- main js -->
<script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 16:18:18 GMT -->
</html>
