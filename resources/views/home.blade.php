@extends('modules.layouts.app')
@section('content')
<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-xl-8">
                <div class="card">
                <div class="card-body pb-2">
                    <div class="d-flex align-items-start mb-4 mb-xl-0">
                        <div class="flex-grow-1">
                            <h5 class="card-title">Invoice Overview</h5>
                        </div>
                        <div class="flex-shrink-0">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold">Sort By:</span> <span class="text-muted">Yearly<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Yearly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Today</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-xl-4">
                                <div class="card bg-light mb-0">
                                    <div class="card-body">
                                        <div class="py-2">
                                            <h5>Total Revenue:</h5>
                                        <h2 class="mt-4 pt-1 mb-1">$9,542,00</h2>
                                        <p class="text-muted font-size-15 text-truncate">From Jan 20,2022 to July,2022</p>

                                        <div class="d-flex mt-4 align-items-center">
                                            <div id="mini-1" data-colors='["--bs-success"]' class="apex-charts"></div>
                                            <div class="ms-3">
                                                <span class="badge bg-danger"><i class="mdi mdi-arrow-down me-1"></i>16.3%</span>
                                            </div>
                                        </div>

                                        <div class="row mt-4">
                                            <div class="col">
                                                <div class="d-flex mt-2">
                                                    <i class="mdi mdi-square-rounded font-size-10 text-success mt-1"></i>
                                                    <div class="flex-grow-1 ms-2 ps-1">
                                                        <h5 class="mb-1">3,526,56</h5>
                                                        <p class="text-muted text-truncate mb-0">Net Profit</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="d-flex mt-2">
                                                    <i class="mdi mdi-square-rounded font-size-10 text-primary mt-1"></i>
                                                    <div class="flex-grow-1 ms-2 ps-1">
                                                        <h5 class="mb-1">5,324,85</h5>
                                                        <p class="text-muted text-truncate mb-0">Net Revenue</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>

                                </div>
                        </div>

                        <div class="col-xl-8">
                        <div>
                            <div id="column_chart" data-colors='["--bs-primary", "--bs-primary-rgb, 0.2"]' class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                    </div>

                </div>

                </div>
            </div>

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-2">Order Stats</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Monthly<i class="mdi mdi-chevron-down ms-1"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="chart-donut" data-colors='["--bs-primary", "--bs-success","--bs-danger"]' class="apex-charts" dir="ltr"></div>

                        <div class="mt-1 px-2">
                            <div class="order-wid-list d-flex justify-content-between border-bottom">
                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-primary me-2"></i>Order Completed</p>
                                <div>
                                    <span class="pe-5">56,236</span>
                                    <span class="badge bg-primary"> + 0.2% </span>
                                </div>
                            </div>
                            <div class="order-wid-list d-flex justify-content-between border-bottom">
                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Order Processing</p>
                                <div>
                                    <span class="pe-5">12,596</span>
                                    <span class="badge bg-success"> - 0.7% </span>
                                </div>
                            </div>
                            <div class="order-wid-list d-flex justify-content-between">
                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-danger me-2"></i>Order Cancel</p>
                                <div>
                                    <span class="pe-5">1,568</span>
                                    <span class="badge bg-danger"> + 0.4% </span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><!-- end row-->

        <div class="row">
            <div class="col-xl-7">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body pb-3">
                                <div class="d-flex align-items-start">
                                    <div class="flex-grow-1">
                                        <h5 class="card-title mb-2">Sales By Social Source</h5>
                                    </div>
                                    <div class="flex-shrink-0">
                                        <div class="dropdown">
                                            <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Monthly<i class="mdi mdi-chevron-down ms-1"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Yearly</a>
                                                <a class="dropdown-item" href="#">Monthly</a>
                                                <a class="dropdown-item" href="#">Weekly</a>
                                                <a class="dropdown-item" href="#">Today</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 pt-1">
                                    <div class="social-box row align-items-center border-bottom pt-0 g-0">
                                        <div class="col-12 col-sm-5">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded bg-primary">
                                                            <i class="mdi mdi-facebook font-size-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-15 mb-1 text-truncate">Facebook Ads</h5>
                                                    <p class="text-muted mb-0">Shoes</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-3">
                                            <div class="mt-3 mt-md-0 text-md-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">4,562 Sale</h5>
                                                <p class="text-muted mb-0 text-truncate">4.2k Like</p>
                                            </div>
                                        </div>
                                        <div class="col-auto col-sm-4">
                                            <div class="mt-3 mt-md-0 text-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">$47,526.00</h5>
                                                <p class="text-muted mb-0">
                                                    <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>50%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="social-box row align-items-center border-bottom g-0">
                                        <div class="col-12 col-sm-5">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded bg-info">
                                                            <i class="mdi mdi-twitter font-size-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-15 mb-1 text-truncate">Twitter Ads</h5>
                                                    <p class="text-muted mb-0">T-shirt</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-3">
                                            <div class="mt-3 mt-md-0 text-md-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">1,652 Sale</h5>
                                                <p class="text-muted mb-0 text-truncate">3.7k Like</p>
                                            </div>
                                        </div>
                                        <div class="col-auto col-sm-4">
                                            <div class="mt-3 mt-md-0 text-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">$52,785.00</h5>
                                                <p class="text-muted mb-0">
                                                    <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>45%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="social-box row align-items-center border-bottom g-0">
                                        <div class="col-12 col-sm-5">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded bg-danger">
                                                            <i class="mdi mdi-linkedin font-size-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-15 mb-1 text-truncate">linkedin Ads</h5>
                                                    <p class="text-muted mb-0">Watch</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-3">
                                            <div class="mt-3 mt-md-0 text-md-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">5,256 Sale</h5>
                                                <p class="text-muted mb-0 text-truncate">3.3k Like</p>
                                            </div>
                                        </div>
                                        <div class="col-auto col-sm-4">
                                            <div class="mt-3 mt-md-0 text-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">$52,785.00</h5>
                                                <p class="text-muted mb-0">
                                                    <span class="badge bg-danger"><i class="mdi mdi-arrow-bottom-right me-1"></i>30%</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="social-box row align-items-center border-bottom g-0">
                                        <div class="col-12 col-sm-5">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded bg-danger">
                                                            <i class="mdi mdi-youtube font-size-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-15 mb-1 text-truncate">Youtube Ads</h5>
                                                    <p class="text-muted mb-0">Chairs</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-3">
                                            <div class="mt-3 mt-md-0 text-md-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">6,965 Sale</h5>
                                                <p class="text-muted mb-0 text-truncate">3.7k Like</p>
                                            </div>
                                        </div>
                                        <div class="col-auto col-sm-4">
                                            <div class="mt-3 mt-md-0 text-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">$86,456.00</h5>
                                                <p class="text-muted mb-0">

                                                    <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>35%</span>

                                                    </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="social-box row align-items-center border-bottom g-0">
                                        <div class="col-12 col-sm-5">
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <div class="avatar-title rounded bg-primary">
                                                            <i class="mdi mdi-instagram font-size-20"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 overflow-hidden">
                                                    <h5 class="font-size-15 mb-1 text-truncate">Instagram Ads</h5>
                                                    <p class="text-muted mb-0">Chairs</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-sm-3">
                                            <div class="mt-3 mt-md-0 text-md-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">8,532 Sale</h5>
                                                <p class="text-muted mb-0 text-truncate">4.2k Like</p>
                                            </div>
                                        </div>
                                        <div class="col-auto col-sm-4">
                                            <div class="mt-3 mt-md-0 text-end">
                                                <h5 class="font-size-15 mb-1 text-truncate">$92,452.00</h5>
                                                <p class="text-muted mb-0">

                                                    <span class="badge bg-success"><i class="mdi mdi-arrow-top-right me-1"></i>35%</span>

                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="card">
                            <div class="card-body pb-1">
                              <div class="d-flex align-items-start">
                                  <div class="flex-grow-1">
                                      <h5 class="card-title mb-2">Product Traking</h5>
                                  </div>
                                  <div class="flex-shrink-0">
                                      <div class="dropdown">
                                          <a class=" dropdown-toggle" href="#" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <span class="text-muted">View All<i class="mdi mdi-chevron-down ms-1"></i></span>
                                          </a>

                                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton2">
                                              <a class="dropdown-item" href="#">Members</a>
                                              <a class="dropdown-item" href="#">New Members</a>
                                              <a class="dropdown-item" href="#">Old Members</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>

                              <div class="mx-n4 px-4" data-simplebar style="height: 258px;">
                                    <div class="mt-3">
                                        <ol class="activity-checkout mb-0 mt-2 ps-3">
                                                <li class="checkout-item crypto-activity">
                                                    <div class="avatar checkout-icon">
                                                        <div class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-cart text-white font-size-17"></i>
                                                        </div>
                                                    </div>
                                                    <div class="feed-item-list">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Have 5 pending order.</h5>
                                                                <p class="text-truncate text-muted mb-2">Delivered</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="mb-1 font-size-15">Nov 02</h5>
                                                                <p class="text-muted mb-0">6 hour ago</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="checkout-item crypto-activity">
                                                    <div class="avatar checkout-icon">
                                                        <div class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-gift text-white font-size-17"></i>
                                                        </div>
                                                    </div>
                                                    <div class="feed-item-list">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-15 mb-1 text-truncate">New Order Received</h5>
                                                                <p class="text-truncate text-muted mb-2">Pick Up</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="mb-1 font-size-15">Nov 03</h5>
                                                                <p class="text-muted mb-0">1 day ago</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="checkout-item crypto-activity">
                                                    <div class="avatar checkout-icon">
                                                        <div class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-account text-white font-size-17"></i>
                                                        </div>
                                                    </div>
                                                    <div class="feed-item-list">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Manager Posted</h5>
                                                                <p class="text-truncate text-muted mb-2">In Transit</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="mb-1 font-size-15">Nov 03</h5>
                                                                <p class="text-muted mb-0">Yesterday</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="checkout-item crypto-activity">
                                                    <div class="avatar checkout-icon">
                                                        <div class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-wallet text-white font-size-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="feed-item-list">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Have 1 pending order.</h5>
                                                                <p class="text-truncate text-muted mb-2">2 hour ago</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="mb-1 font-size-15">Nov 04</h5>
                                                                <p class="text-muted mb-0">6 hour ago</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="checkout-item crypto-activity">
                                                    <div class="avatar checkout-icon">
                                                        <div class="avatar-title rounded-circle bg-primary">
                                                            <i class="mdi mdi-weight text-white font-size-20"></i>
                                                        </div>
                                                    </div>
                                                    <div class="feed-item-list">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 overflow-hidden me-4">
                                                                <h5 class="font-size-15 mb-1 text-truncate">Order Received</h5>
                                                                <p class="text-truncate text-muted mb-2">Received</p>
                                                            </div>
                                                            <div class="flex-shrink-0 text-end">
                                                                <h5 class="mb-1 font-size-15">Nov 04</h5>
                                                                <p class="text-muted mb-0">Today</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                        </ol>
                                    </div>
                               </div>

                              <div id="chart-area" data-colors='["--bs-primary"]' class="apex-charts"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title">Best Selling Product</h5>
                            </div>
                        </div>

                        <div class="slider mt-4">
                            <!-- Add Pagination -->
                            <div class="swiper-button-next"><i class="mdi mdi-arrow-right"></i></div>
                            <div class="swiper-button-prev"><i class="mdi mdi-arrow-left"></i></div>

                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card dash-product-box shadow-none border mb-0">
                                            <div class="card-body">
                                                <div class="pricing-badge">
                                                    <span class="badge bg-success">Sale</span>
                                                </div>
                                               <div class="dash-product-img">
                                                 <img src="assets/images/product/img-1.png" class="img-fluid" alt="">
                                               </div>

                                                <h5 class="font-size-17 mt-1">
                                                    <a href="ecommerce-product-detail.html" class="text-dark lh-base">Stylish Cricket & Walking Light Weight Shoes</a>
                                                </h5>

                                                <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$280</del> $140.00</h5>

                                                <div class="font-size-16">
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star text-warning"></i>
                                                    <i class="mdi mdi-star-half-full text-warning"></i>
                                                </div>

                                                <div class="mt-4">
                                                    <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card dash-product-box shadow-none border mb-0">
                                            <div class="card-body">
                                                <div class="dash-product-img">
                                                    <img src="assets/images/product/img-2.png" class="img-fluid" alt="">
                                                  </div>

                                                   <h5 class="font-size-17 mt-1">
                                                       <a href="ecommerce-product-detail.html" class="text-dark lh-base">Combo Pack of 2 Sports Shoes Running Shoes</a>
                                                   </h5>

                                                   <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$320</del> $280.00</h5>

                                                   <div class="font-size-16">
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star text-warning"></i>
                                                   </div>

                                                   <div class="mt-4">
                                                       <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                           Now</a>
                                                   </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card dash-product-box shadow-none border mb-0">
                                              <div class="card-body">
                                                <div class="dash-product-img">
                                                    <img src="assets/images/product/img-3.png" class="img-fluid" alt="">
                                                  </div>

                                                   <h5 class="font-size-17 mt-1">
                                                       <a href="ecommerce-product-detail.html" class="text-dark lh-base">Trendy Men Sports Running Running Shoes</a>
                                                   </h5>

                                                   <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$740</del> $520.00</h5>

                                                   <div class="font-size-16">
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star-half-full text-warning"></i>
                                                   </div>

                                                   <div class="mt-4">
                                                       <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                           Now</a>
                                                   </div>
                                              </div>
                                         </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="card dash-product-box shadow-none border mb-0">
                                              <div class="card-body">
                                                <div class="dash-product-img">
                                                    <img src="assets/images/product/img-6.png" class="img-fluid" alt="">
                                                  </div>

                                                   <h5 class="font-size-17 mt-1">
                                                       <a href="ecommerce-product-detail.html" class="text-dark lh-base">Sneakers For Women Sports Running Shoes (Blue)</a>
                                                   </h5>

                                                   <h5 class="font-size-20 text-primary mt-3 mb-0"><del class="font-size-17 text-muted fw-normal me-1">$530</del> $420.00</h5>

                                                   <div class="font-size-16">
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star text-warning"></i>
                                                       <i class="mdi mdi-star-half-full text-warning"></i>
                                                   </div>

                                                   <div class="mt-4">
                                                       <a href="ecommerce-product-detail.html" class="btn btn-primary btn-sm w-lg"><i class="mdi mdi-cart me-1 align-middle"></i> Buy
                                                           Now</a>
                                                   </div>
                                              </div>
                                         </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end row -->

        <div class="row">
            <div class="col-xl-4">
               <div class="card">
                   <div class="card-body pb-0">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title">Sales Revenue</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-reset" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <span class="fw-semibold">Year:</span> <span
                                            class="text-muted">2022<i
                                                class="mdi mdi-chevron-down ms-1"></i></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">2019</a>
                                        <a class="dropdown-item" href="#">2020</a>
                                        <a class="dropdown-item" href="#">2021</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <div id="world-map-markers" style="height: 230px;"></div>
                        </div>

                        <div>
                            <div id="sales-countries" class="apex-charts" dir="ltr"></div>
                        </div>
                   </div>
               </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body pb-3">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <h5 class="card-title mb-2">Recent Orders</h5>
                            </div>
                            <div class="flex-shrink-0">
                                <div class="dropdown">
                                    <a class="dropdown-toggle text-muted" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Monthly<i class="mdi mdi-chevron-down ms-1"></i>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Yearly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Today</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="table-responsive">
                                <table class="table project-list-table table-nowrap align-middle table-borderless mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 210px">Customer</th>
                                            <th scope="col" style="width: 140px">Product Name</th>
                                            <th scope="col">Order ID</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Trend</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">Neal Matthews</div>
                                                </div>
                                            </td>
                                            <td>Office Chair</td>
                                            <td>
                                              <span>#526552</span>
                                            </td>
                                            <td>
                                                $210.00
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Available</p>
                                            </td>
                                            <td>
                                                <div id="chart-sparkline1" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/users/avatar-2.jpg" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">Connie Franco</div>
                                                </div>
                                            </td>
                                            <td>Black T-shirt</td>
                                            <td>
                                                <span>#746648</span>
                                            </td>
                                            <td>
                                                $150.00
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Available</p>
                                            </td>
                                            <td>
                                                <div id="chart-sparkline2" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/users/avatar-3.jpg" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">Paul Reynolds</div>
                                                </div>
                                            </td>
                                            <td>Smart Watch</td>
                                            <td>
                                                <span>#125635</span>
                                            </td>
                                            <td>
                                              $260.00
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-danger me-2"></i>Out Of Stock</p>
                                            </td>
                                            <td>
                                                <div id="chart-sparkline3" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/users/avatar-4.jpg" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1">Ronald Patton</div>
                                                </div>
                                            </td>
                                            <td>Apple Phone</td>
                                            <td>
                                                <span>#236521</span>
                                            </td>
                                            <td>
                                                $170.00
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-success me-2"></i>Available</p>
                                            </td>
                                            <td>
                                                <div id="chart-sparkline4" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0 me-3">
                                                        <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar rounded-circle">
                                                    </div>
                                                    <div class="flex-grow-1"> Adella Perez</div>
                                                </div>
                                            </td>
                                            <td>New Shoes</td>
                                            <td>
                                                <span>#236521</span>

                                            </td>
                                            <td>
                                                $240.00
                                            </td>
                                            <td>
                                                <p class="mb-0"><i class="mdi mdi-square-rounded font-size-10 text-danger me-2"></i>Out Of Stock</p>
                                            </td>
                                            <td>
                                                <div id="chart-sparkline5" data-colors='["--bs-primary"]' class="apex-charts"></div>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="text-muted dropdown-toggle font-size-18" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                        <i class="mdi mdi-dots-horizontal"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Edit</a>
                                                        <a class="dropdown-item" href="#">Print</a>
                                                        <a class="dropdown-item" href="#">Delete</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end row -->

    </div>
    <!-- container-fluid -->
</div>
@endsection
