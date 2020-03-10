@include('PartialsOne._header')

<div class="shopping-cart-steps">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-steps">
                    <ul class="clearfix">
                        <li class="active">
                            <div class="inner">
                                <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                            </div>
                        </li>
                        <li>
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

<!--shopping-cart area-->
<div class="shopping-cart-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table class="cart-table">
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th class="text-center"><i class="fa fa-times" aria-hidden="true"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="cart-product-thumb">
                                    <a href="#"><img src="assets/images/products/cart/1.jpg" alt="" /></a>
                                </div>
                            </td>
                            <td>
                                <div class="cart-product-name">
                                    <h5><a href="#">Apple The New MacBook Retina</a></h5>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">$460.00</span>
                            </td>
                            <td>
                                <div class="cart-quantity-changer">
                                    <a class="value-decrease qtybutton">-</a>
                                    <input type="text" value="1" />
                                    <a class="value-increase qtybutton">+</a>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">$460.00</span>
                            </td>
                            <td>
                                <div class="product-remove">
                                    <a href="#">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-product-thumb">
                                    <a href="#"><img src="assets/images/products/cart/2.jpg" alt="" /></a>
                                </div>
                            </td>
                            <td>
                                <div class="cart-product-name">
                                    <h5><a href="product-details.html">Vantech VP-153C Camera</a></h5>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">$280.00</span>
                            </td>
                            <td>
                                <div class="cart-quantity-changer">
                                    <a class="value-decrease qtybutton">-</a>
                                    <input type="text" value="1" />
                                    <a class="value-increase qtybutton">+</a>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">$280.00</span>
                            </td>
                            <td>
                                <div class="product-remove">
                                    <a href="#">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="cart-product-thumb">
                                    <a href="#"><img src="assets/images/products/cart/3.jpg" alt="" /></a>
                                </div>
                            </td>
                            <td>
                                <div class="cart-product-name">
                                    <h5><a href="product-details.html">Blue Yeti USB Microphone </a></h5>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">$590.00</span>
                            </td>
                            <td>
                                <div class="cart-quantity-changer">
                                    <a class="value-decrease qtybutton">-</a>
                                    <input type="text" value="1" />
                                    <a class="value-increase qtybutton">+</a>
                                </div>
                            </td>
                            <td>
                                <span class="cart-product-price">$590.00</span>
                            </td>
                            <td>
                                <div class="product-remove">
                                    <a href="#">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row mt-30">
            <div class="col-lg-6">
                <div class="cart-update">
                    <a href="{{url('shoppingList')}}" class="btn-common">CONTINUE SHOPPING</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="cart-update pull-right">
                    <a href="#" class="btn-common">UPDATE CART</a>
                </div>
            </div>
        </div>
        <div class="row mt-40">
            <div class="col-lg-4">
                <div class="cart-box shpping-tax">
                    <h5>Estimate Shipping And Tax</h5>
                    <div class="cart-box-inner">
                        <p>Enter your destination to get shipping & tax</p>
                        <table class="table">
                            <tr>
                                <td>
                                    <label>COUNTRY *:</label>
                                </td>
                                <td>
                                    <select>
                                        <option>Select options</option>
                                        <option>United States</option>
                                        <option>China</option>
                                        <option>Canada</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>STATE / PROVINCE *:</label>
                                </td>
                                <td>
                                    <select>
                                        <option>Select options</option>
                                        <option>United States</option>
                                        <option>China</option>
                                        <option>Canada</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label>ZIP / POSTAL CODE *:</label>
                                </td>
                                <td>
                                    <select>
                                        <option>Select options</option>
                                        <option>United States</option>
                                        <option>China</option>
                                        <option>Canada</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <a href="#" class="btn-common">GET A QUOCTE</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-box cart-coupon fix">
                    <h5>Discount Codes</h5>
                    <div class="cart-box-inner">
                        <p>Enter your coupin if you have one</p>
                        <input type="text" />
                        <a href="#" class="btn-common">Apply</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-box cart-total">
                    <h5>Cart Total</h5>
                    <div class="cart-box-inner">
                        <table class="table">
                            <tr>
                                <td>SUB TOTAL:</td>
                                <td><span>$460.00</span></td>
                            </tr>
                            <tr>
                                <td>GRAND TOTAL:</td>
                                <td><span>$460.00</span></td>
                            </tr>
                        </table>
                        <div class="proceed-checkout">
                            <div class="col-lg-12">
                                <a href="#">Checkout with multiple address</a>
                            </div>
                            <div class="col-lg-12">
                                <a href="#" class="btn-common">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shopping-cart end-->

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

<!-- Mirrored from lionsbite.co.uk/html/hakduck-preview/shopping-cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Feb 2020 16:18:15 GMT -->
</html>
