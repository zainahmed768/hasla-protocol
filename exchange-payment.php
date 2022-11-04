<?php include 'inc/app.php'; ?>
<!-- css starts here -->
<link rel="stylesheet" href="css/exchange-payment.css">
<!-- css ends here -->
<!-- page Header starts here -->
<section class="pageHeader-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header-wrapper">
                    <div class="heading-wrapper">
                        <h3>Buy Crypto</h3>
                    </div>
                    <div class="breadcrumbs-wrapper">
                        <ul>
                            <li class="base-page"><a href="#">HOME</a></li>
                            <li class="arrow"><a href="#">></a></li>
                            <li class="current-page"><a href="#">Buy Crypto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page Header ends here -->
<!-- exchange payment starts here -->
<section class="exchange-payment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="buy-and-sell-wrapper">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Buy</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false" onclick="location.href='exchange-sell.php'">Sell</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="row" id="sel-tab-wrapper">
                                <div class="col-lg-6">
                                    <div class="checkbox-wrapper">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <label class="check-wrapper" for="flexRadioDefault1">
                                                    <input type="radio" name="radio" id="flexRadioDefault1">
                                                    <div class="img-wrapper">
                                                        <figure>
                                                            <img src="img/bitcoin-icon.png" class="img-fluid" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="check-icon-wrapper">
                                                        <img src="img/checked-icon.png" class="checked-icon" alt="">
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <h4>Bitcoin</h4>
                                                        <h5>@ $12,460.96</h5>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="check-wrapper" for="flexRadioDefault2">
                                                    <input type="radio" name="radio" id="flexRadioDefault2">
                                                    <div class="img-wrapper">
                                                        <figure>
                                                            <img src="img/bitcoin-icon.png" class="img-fluid" alt="">
                                                        </figure>
                                                    </div>
                                                    <div class="check-icon-wrapper">
                                                        <img src="img/checked-icon.png" class="checked-icon" alt="">
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <h4>Bitcoin</h4>
                                                        <h5>@ $12,460.96</h5>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-lg-4">
                                                <label class="check-wrapper" for="flexRadioDefault3">
                                                    <input type="radio" name="radio" id="flexRadioDefault3">
                                                    <div class="img-wrapper">
                                                        <figure>
                                                            <img src="img/bitcoin-icon.png" class="img-fluid" alt="">
                                                        </figure>


                                                    </div>
                                                    <div class="check-icon-wrapper">
                                                        <img src="img/checked-icon.png" class="checked-icon" alt="">
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <h4>Bitcoin</h4>
                                                        <h5>@ $12,460.96</h5>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="payment-method-wrapper">
                                        <div class="heading-wrapper">
                                            <h4>Payment Method</h4>
                                        </div>
                                        <div class="back-card-wrapper">
                                            <div class="icon-wrapper">
                                                <i class="fa fa-university" aria-hidden="true"></i>
                                            </div>
                                            <div class="bank-content-wrapper">
                                                <h5>Bank Of America - Bank</h5>
                                                <h6>Checking. *************</h6>
                                            </div>
                                            <div class="icon-toggle-wrapper">
                                                <button class="up-arrow"><i class="fa fa-arrow-up"></i></button>
                                                <button class="down-arrow"><i class="fa fa-arrow-down"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="amount-wrapper">
                                        <div class="heading-wrapper">
                                            <h4>Amount</h4>
                                        </div>
                                    </div>
                                    <div class="limits-wrapper">
                                        <div class="weekly-wrapper">
                                            <h3><i class="fa fa-university"></i> Weekly Bank Limit</h3>
                                            <div class="usd-field-wrapper">
                                                <input type="text" placeholder="0.00">
                                                <span>USD</span>
                                            </div>
                                        </div>
                                        <div class="arrows-wrapper">
                                            <i class="fa fa-arrow-left"></i>
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                        <div class="weekly-wrapper">
                                            <h3>$15,000.00 Remaining . Increase Limit</h3>
                                            <input type="text" class="form-control limit-field">
                                        </div>
                                    </div>
                                    <div class="row pt-3" id="Repeat">
                                        <div class="col-lg-5">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Default checkbox
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="yearly-wrapper">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Daily
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Weekly
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                                    <label class="form-check-label" for="flexRadioDefault3">
                                                        Every Two Week
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" checked>
                                                    <label class="form-check-label" for="flexRadioDefault4">
                                                        Monthly
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="buy-coin-wrapper text-end">
                                <a href="#" class="btn">Buy Coin <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- exchange payment ends here -->
<?php include 'inc/footer.php'; ?>