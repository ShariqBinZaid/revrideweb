@extends('layouts.front-app')
@section('title', 'Sports')

@section('content')

    <section class="mainBanner">
        <div class="fluid-container container p-0">
            <div class="banner-bg inner-banner-bg" style="background-image:url({{ asset('assets/images/bg1.jpg') }}); ">
                <div class="container inner-relative">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div class="banner-content text-center">
                                <h4>Dream Dare Defy</h4>
                                <hr class="seperator">
                                <h1>Our extreme sports</h1>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="search-fields-parent inner-search-fields-parent">
                                <div class="search-fields inner-search-fields">
                                    <div>
                                        <div class="search-field-input">
                                            <input type="text" placeholder="Search your sports here ...">
                                        </div>
                                    </div>
                                    <div>
                                        <div>
                                            <select class="">
                                                <option value="" data-display-text="Category">Category</option>
                                                <option value="Jetski">Jetski</option>
                                                <option value="Dirt Bike">Dirt Bike</option>
                                                <option value="Snowmobile">Snowmobile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <a class="serach-sports-btn" href="#">SEARCH <i
                                                class="fal fa-arrow-to-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="category-sec p-50 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="category-content text-center mb-60">
                        <h4 class="sub-hd">Pay As You Play</h4>
                        <hr class="seperator">
                        <h2 class="primary-hd">Hour by Hour, Thrill by Thrill</h2>
                    </div>
                </div>
            </div>
            <div class="previous-sports">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <ul class="category-tabbing-list m-silder mb-50">
                            <li class="current" data-targetit="box-1"><a href="#">UTV</a></li>
                            <li data-targetit="box-2"><a href="#">ATV</a></li>
                            <li data-targetit="box-3"><a href="#">JET SKIS</a></li>
                            <li data-targetit="box-4"><a href="#">BOATS</a></li>
                            <li data-targetit="box-5"><a href="#">SURF BOARDS</a></li>
                            <li data-targetit="box-6"><a href="#">SNOWBOARDS/SKIS</a></li>
                            <li data-targetit="box-7"><a href="#">DIRT BIKES</a></li>
                            <li data-targetit="box-8"><a href="#">MOTORCYCLES</a></li>
                            <li data-targetit="box-9"><a href="#">RV</a></li>
                            <li data-targetit="box-10"><a href="#">KAYAKS/CANOES</a></li>
                            <li data-targetit="box-11"><a href="#">SNOWMOBILES</a></li>
                        </ul>

                        <div class="box-1 showfirst">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-2">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-3">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-4">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-5">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-6">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-7">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-8">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-9">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-10">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="box-11">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j6.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j7.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="sports-detail.php">
                                        <div class="popular-page-activity-box">
                                            <div class="popular-activity-box-img">
                                                <img src="{{ asset('assets/images/j8.png') }}" alt="">
                                            </div>
                                            <div class="popular-activity-box-content popular-page-activity-box-content">
                                                <div>
                                                    <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                                    <h3>Yamaha Jet Ski</h3>
                                                </div>
                                                <div>
                                                    <p><span>$30</span> + tax</p>
                                                    <span>per hour</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="searched-sports">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="sports-detail.php">
                            <div class="popular-page-activity-box">
                                <div class="popular-activity-box-img">
                                    <img src="{{ asset('assets/images/j9.png') }}" alt="">
                                </div>
                                <div class="popular-activity-box-content popular-page-activity-box-content">
                                    <div>
                                        <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                        <h3>Yamaha Jet Ski</h3>
                                    </div>
                                    <div>
                                        <p><span>$30</span> + tax</p>
                                        <span>per hour</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="sports-detail.php">
                            <div class="popular-page-activity-box">
                                <div class="popular-activity-box-img">
                                    <img src="{{ asset('assets/images/j1.png') }}" alt="">
                                </div>
                                <div class="popular-activity-box-content popular-page-activity-box-content">
                                    <div>
                                        <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                        <h3>Yamaha Jet Ski</h3>
                                    </div>
                                    <div>
                                        <p><span>$30</span> + tax</p>
                                        <span>per hour</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="sports-detail.php">
                            <div class="popular-page-activity-box">
                                <div class="popular-activity-box-img">
                                    <img src="{{ asset('assets/images/j2.png') }}" alt="">
                                </div>
                                <div class="popular-activity-box-content popular-page-activity-box-content">
                                    <div>
                                        <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                        <h3>Yamaha Jet Ski</h3>
                                    </div>
                                    <div>
                                        <p><span>$30</span> + tax</p>
                                        <span>per hour</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="sports-detail.php">
                            <div class="popular-page-activity-box">
                                <div class="popular-activity-box-img">
                                    <img src="{{ asset('assets/images/j3.png') }}" alt="">
                                </div>
                                <div class="popular-activity-box-content popular-page-activity-box-content">
                                    <div>
                                        <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                        <h3>Yamaha Jet Ski</h3>
                                    </div>
                                    <div>
                                        <p><span>$30</span> + tax</p>
                                        <span>per hour</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="sports-detail.php">
                            <div class="popular-page-activity-box">
                                <div class="popular-activity-box-img">
                                    <img src="{{ asset('assets/images/j4.png') }}" alt="">
                                </div>
                                <div class="popular-activity-box-content popular-page-activity-box-content">
                                    <div>
                                        <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                        <h3>Yamaha Jet Ski</h3>
                                    </div>
                                    <div>
                                        <p><span>$30</span> + tax</p>
                                        <span>per hour</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <a href="sports-detail.php">
                            <div class="popular-page-activity-box">
                                <div class="popular-activity-box-img">
                                    <img src="{{ asset('assets/images/j5.png') }}" alt="">
                                </div>
                                <div class="popular-activity-box-content popular-page-activity-box-content">
                                    <div>
                                        <h6><i class="fas fa-map-marker-alt"></i> New York, United States</h6>
                                        <h3>Yamaha Jet Ski</h3>
                                    </div>
                                    <div>
                                        <p><span>$30</span> + tax</p>
                                        <span>per hour</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


<script>
    function create_custom_dropdowns() {
        $('select').each(function(i, select) {
            if (!$(this).next().hasClass('dropdown')) {
                $(this).after('<div class="dropdown ' + ($(this).attr('class') || '') +
                    '" tabindex="0"><span class="current"></span><div class="list"><ul></ul></div></div>');
                var dropdown = $(this).next();
                var options = $(select).find('option');
                var selected = $(this).find('option:selected');
                dropdown.find('.current').html(selected.data('display-text') || selected.text());
                options.each(function(j, o) {
                    var display = $(o).data('display-text') || '';
                    dropdown.find('ul').append('<li class="option ' + ($(o).is(':selected') ?
                            'selected' : '') + '" data-value="' + $(o).val() +
                        '" data-display-text="' + display + '">' + $(o).text() + '</li>');
                });
            }
        });
    }

    // Event listeners

    // Open/close
    $(document).on('click', '.dropdown', function(event) {
        $('.dropdown').not($(this)).removeClass('open');
        $(this).toggleClass('open');
        if ($(this).hasClass('open')) {
            $(this).find('.option').attr('tabindex', 0);
            $(this).find('.selected').focus();
        } else {
            $(this).find('.option').removeAttr('tabindex');
            $(this).focus();
        }
    });
    // Close when clicking outside
    $(document).on('click', function(event) {
        if ($(event.target).closest('.dropdown').length === 0) {
            $('.dropdown').removeClass('open');
            $('.dropdown .option').removeAttr('tabindex');
        }
        event.stopPropagation();
    });
    // Option click
    $(document).on('click', '.dropdown .option', function(event) {
        $(this).closest('.list').find('.selected').removeClass('selected');
        $(this).addClass('selected');
        var text = $(this).data('display-text') || $(this).text();
        $(this).closest('.dropdown').find('.current').text(text);
        $(this).closest('.dropdown').prev('select').val($(this).data('value')).trigger('change');
    });

    // Keyboard events
    $(document).on('keydown', '.dropdown', function(event) {
        var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find('.list .option.selected')[
            0]);
        // Space or Enter
        if (event.keyCode == 32 || event.keyCode == 13) {
            if ($(this).hasClass('open')) {
                focused_option.trigger('click');
            } else {
                $(this).trigger('click');
            }
            return false;
            // Down
        } else if (event.keyCode == 40) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                focused_option.next().focus();
            }
            return false;
            // Up
        } else if (event.keyCode == 38) {
            if (!$(this).hasClass('open')) {
                $(this).trigger('click');
            } else {
                var focused_option = $($(this).find('.list .option:focus')[0] || $(this).find(
                    '.list .option.selected')[0]);
                focused_option.prev().focus();
            }
            return false;
            // Esc
        } else if (event.keyCode == 27) {
            if ($(this).hasClass('open')) {
                $(this).trigger('click');
            }
            return false;
        }
    });

    $(document).ready(function() {
        create_custom_dropdowns();
    });
</script>
