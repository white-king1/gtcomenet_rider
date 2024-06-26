@extends('layouts.app')
@section('content')
  <!-- connect wallet modal start -->
  <div class="wallet-modal modal fade" id="wallet-option" tabindex="-1" aria-labelledby="choose-wallet"
  aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="choose-wallet">Sign Up With Us</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <p>Please Signup/Signin As  User or Rider and <br> Start Booking</p>
              <ul class="wallet__list">
                  <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/metamask.jpg"
                                  alt="metamask">
                          </span> </a></li>
                  <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/coinbase.jpg"
                                  alt="coinbase">
                          </span> </a></li>
                  <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/bsc.jpg"
                                  alt="bsc">
                          </span></a></li>
                  <li class="wallet__list-item"><a href="#"> <span><img src="assets/images/wallet/trust.jpg"
                                  alt="Trust Wallet">
                          </span></a></li>
              </ul>
              <p>By Signing Up with us , you agree to our Terms of Service and our Privacy Policy.</p>
          </div>
      </div>
  </div>
</div>
<!-- connect wallet modal end -->






<!-- ================> Banner section start here <================== -->
<section id="home" class="banner" style="background-image: url(assets/images/banner/bg.png);">
  <div class="container">
      <div class="banner__wrapper">
          <div class="row g-5 align-items-center">
              <div class="col-lg-6">
                  <div class="banner__content" data-aos="fade-right" data-aos-duration="2000">
                      <h3>Booking is <span class="color--secondary-color">Live <i
                                  class="fa-solid fa-wifi"></i></span></h3>
                      <h1> <span class="color--theme-color">Welcome <br> To</span> GTCOMNET. RIDES</h1>
                      <p>We Deliver your Items at the Snap of your Fingers </p>
                      <p>Swift and Reliable 24/7Hr  </p>

                      <div class="btn-group">
                          <a href="{{route('register')}}" class="default-btn default-btn--secondary">Mint Now</a>
                          <a href="{{route('register')}}" class="default-btn">Whitelist Now</a>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="banner__thumb d-flex justify-content-center" data-aos="fade-left"
                      data-aos-duration="2000">
                      <img src="assets/images/banner/01.png" alt="banner Image">
                      <a class="banner__video" href="https://www.youtube.com/embed/BKkc2v8echI"
                          data-rel="lightcase">
                          <div class="banner__video-inner">
                              <svg viewBox="0 0 100 100">
                                  <defs>
                                      <path id="circle" d="
                                      M 50, 50
                                      m -37, 0
                                      a 37,37 0 1,1 74,0
                                      a 37,37 0 1,1 -74,0" />
                                  </defs>
                                  <text>
                                      <textPath xlink:href="#circle">
                                          Mint is live * Mint is live * Mint Is live
                                      </textPath>
                                  </text>
                              </svg>
                              <span><i class="fa-solid fa-play"></i></span>
                          </div>
                      </a>
                      <div class="banner-shape">
                          <img src="assets/images/banner/icon/01.png" alt="shape">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================> Banner section end here <================== -->





<!-- ================> Counter section start here <================== -->
<section class="counter counter--uplifted">
  <div class="container">
      <div class="counter__wrapper">
          <div class="row g-1">
              <div class="col-lg-3 col-sm-6">
                  <div class="counter__item">
                      <div class="counter__item-content">
                          <h2><span class="purecounter" data-purecounter-start="0"
                                  data-purecounter-end="8888">8888</span> </h2>
                          <p>Total items Delivered</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="counter__item">
                      <div class="counter__item-content">
                          <h2><span class="purecounter" data-purecounter-start="0" data-purecounter-end="1460"
                                  data-purecounter-once="false">1460</span></h2>
                          <p>Total Owners</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="counter__item">
                      <div class="counter__item-content">
                          <h2>₦<span class="purecounter" data-purecounter-start="0.1" data-purecounter-end="3000"
                                  data-purecounter-once="false"></span></h2>
                          <p>Delivery Fee</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="counter__item">
                      <div class="counter__item-content">
                          <h2><span class="purecounter" data-purecounter-start="0" data-purecounter-end="13"
                                  data-purecounter-once="false">13</span>k</h2>
                          <p>Ride Request</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================> Counter section end here <================== -->





<!-- ================> About section start here <================== -->
<section class="about padding-top padding-bottom" id="about">
  <div class="container">
      <div class="about__wrapper">
          <div class="row g-5">
              <div class="col-lg-6">
                  <div class="about__thumb" data-aos="fade-up" data-aos-duration="1500">
                      <img src="assets/images/about/01.png" alt="About Image">
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="about__content" data-aos="fade-up" data-aos-duration="2000">
                      <p class="subtitle">The Story</p>
                      <h2>About us</h2>
                      <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                       Abode.</p>

                      <div class="mint-step">
                          <p class="subtitle color--secondary-color">Easy Steps</p>
                          <h3>How to Mint</h3>
                          <p>Quickly click on Join Us to SignUp and access your dashboard to Mint your Arts at a little MintFee of 0.11ETH With 4 Easy steps</p>
                          <ul class="mint-step__list">
                              <li class="mint-step__list-item"><span class="color--secondary-color">1.</span>
                                  Signup</li>
                              <li class="mint-step__list-item"><span class="color--secondary-color">2.</span>
                                  Upload Your Art and set your price</li>
                              <li class="mint-step__list-item"><span class="color--theme-color">3.</span>
                                  Int by Paying a  MintFee</li>
                              <li class="mint-step__list-item"><span class="color--theme-color">4.</span>
                                  Get a Minted Art Link for your buyer</li>
                          </ul>
                          <div class="btn-group">
                              <a href="{{route('register')}}" class="default-btn default-btn--secondary">Mint Now</a>
                              <a href="{{route('register')}}" class="default-btn">Whitelist Now</a>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================> About section end here <================== -->





<!-- ================>Roadmap section start here <================== -->
<section class="roadmap roadmap--style1 padding-top padding-bottom" id="roadmap"
  style="background-image: url(assets/images/roadmap/bg.jpg);">
  <div class="container">
      <div class="section-header text-center">
          <p class="subtitle">Roadmap</p>
          <h2>How it all started</h2>
      </div>
      <div class="roadmap__wrapper">
          <div class="row gy-4 gy-md-0 gx-5">
              <div class="col-md-6 offset-md-6">
                  <div class=" roadmap__item ms-md-4 aos-init" data-aos="fade-left" data-aos-duration="800">
                      <div class="roadmap__item-inner">
                          <div class="roadmap__item-content">
                              <div class="roadmap__item-header">
                                  <h4>Launched Initialized</h4>
                                  <p>10%</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                  Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                  Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                  Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                  Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                  L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                  L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                  L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class=" roadmap__item ms-auto me-md-4 aos-init" data-aos="fade-right"
                      data-aos-duration="800">
                      <div class="roadmap__item-inner">
                          <div class="roadmap__item-content">
                              <div class="roadmap__item-header">
                                  <h4>Physical Merch</h4>
                                  <p>20%</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                          L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                          L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                          L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-md-6 offset-md-6">
                  <div class="roadmap__item ms-md-4  aos-init" data-aos="fade-left" data-aos-duration="800">
                      <div class="roadmap__item-inner">
                          <div class="roadmap__item-content">
                              <div class="roadmap__item-header">
                                  <h4>The Apes Land</h4>
                                  <p>50%</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                          L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                          L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                          L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="roadmap__item ms-auto me-md-4  aos-init" data-aos="fade-right"
                      data-aos-duration="800">
                      <div class="roadmap__item-inner">
                          <div class="roadmap__item-content">
                              <div class="roadmap__item-header">
                                  <h4>Bored Apes Game</h4>
                                  <p>70%</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                          L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                          L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                          L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-md-6 offset-md-6">
                  <div class="roadmap__item ms-md-4  aos-init" data-aos="fade-left" data-aos-duration="800">
                      <div class="roadmap__item-inner">
                          <div class="roadmap__item-content">
                              <div class="roadmap__item-header">
                                  <h4>Launched Metaverse</h4>
                                  <p>80%</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                          L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                          L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                          L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="roadmap__item ms-auto me-md-4  aos-init" data-aos="fade-right"
                      data-aos-duration="800">
                      <div class="roadmap__item-inner">
                          <div class="roadmap__item-content">
                              <div class="roadmap__item-header">
                                  <h4>Upcoming Dapps</h4>
                                  <p>100%</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                          Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                          L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                          L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                          L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================>Roadmap section end here <================== -->





<!-- ================>collection section start here <================== -->
<section class="collection padding-top padding-bottom">
  <div class="container">
      <div class="collection__wrapper">
          <div class="row g-4">
              <div class="col-lg-3">
                  <div class="collection__header">
                      <div class="collection__header-content">
                          <p class="subtitle">Collection</p>
                          <h2>RainSea NFT items</h2>
                          <p>8888 Unique Minting Undercover Creatues</p>
                      </div>
                  </div>
              </div>
              <div class="col-lg-9">
                  <div class="swiper collection__slider1">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="collection__item">
                                  <div class="collection__item-thumb"><img src="assets/images/collection/01.jpg"
                                          alt="NFT Image"></div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="collection__item">
                                  <div class="collection__item-thumb"><img src="assets/images/collection/02.jpg"
                                          alt="NFT Image"></div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="collection__item">
                                  <div class="collection__item-thumb"><img src="assets/images/collection/03.jpg"
                                          alt="NFT Image"></div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-9">
                  <div class="swiper collection__slider2">
                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <div class="collection__item">
                                  <div class="collection__item-thumb"><img src="assets/images/collection/04.jpg"
                                          alt="NFT Image">
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="collection__item">
                                  <div class="collection__item-thumb"><img src="assets/images/collection/05.jpg"
                                          alt="NFT Image">
                                  </div>
                              </div>
                          </div>
                          <div class="swiper-slide">
                              <div class="collection__item">
                                  <div class="collection__item-thumb"><img src="assets/images/collection/06.jpg"
                                          alt="NFT Image">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="collection__btn">
                      <a href="{{route('register')}}" class="default-btn default-btn--secondary"> <span><img
                                  src="assets/images/opensea.svg" alt="opensea icon" width="24" height="24"> View
                              On RainSea</span> </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================>collection section end here <================== -->





<!-- ================>Team section start here <================== -->
<section class="team padding-top padding-bottom" style="background-image: url(assets/images/team/bg.jpg);"
  id="team">
  <div class="container">
      <div class="section-header text-center">
          <p class="subtitle">Team Member</p>
          <h2>Meet the Crew</h2>
      </div>
      <div class="team__wrapper">
          <div class="row g-4">
              <div class="col-lg-6">
                  <div class="team__item">
                      <div class="team__item-inner">
                          <div class="team__item-thumb">
                              <img src="assets/images/team/01.jpg" alt="Team Image">
                          </div>
                          <div class="team__item-content">
                              <div class="team__item-author">
                                  <h4><a href="team-single.html">Harry Abraham</a> </h4>
                                  <p>Founder</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                              <ul class="social">
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-twitter"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-facebook-f"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i
                                              class="fa-brands fa-linkedin-in"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-instagram"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                              L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                              L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                              L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="team__item">
                      <div class="team__item-inner">
                          <div class="team__item-thumb">
                              <img src="assets/images/team/02.jpg" alt="Team Image">
                          </div>
                          <div class="team__item-content">
                              <div class="team__item-author">
                                  <h4><a href="team-single.html">Anne Haiwk</a> </h4>
                                  <p>Co Founder</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                              <ul class="social">
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-twitter"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-facebook-f"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i
                                              class="fa-brands fa-linkedin-in"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-instagram"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                              L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                              L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                              L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="team__item">
                      <div class="team__item-inner">
                          <div class="team__item-thumb">
                              <img src="assets/images/team/03.jpg" alt="Team Image">
                          </div>
                          <div class="team__item-content">
                              <div class="team__item-author">
                                  <h4><a href="team-single.html">Jebeca Rio</a> </h4>
                                  <p>Marketer</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                              <ul class="social">
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-twitter"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-facebook-f"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i
                                              class="fa-brands fa-linkedin-in"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-instagram"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                              L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                              L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                              L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="team__item">
                      <div class="team__item-inner">
                          <div class="team__item-thumb">
                              <img src="assets/images/team/04.jpg" alt="Team Image">
                          </div>
                          <div class="team__item-content">
                              <div class="team__item-author">
                                  <h4><a href="team-single.html">Anderson Leo</a> </h4>
                                  <p>Advisor</p>
                              </div>
                              <p>Contrary to popular believes Non Fungible Token (NFT MINTING) is here to stay and easy to perform from the comfort of your
                                Abode.</p>
                              <ul class="social">
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-twitter"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-facebook-f"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i
                                              class="fa-brands fa-linkedin-in"></i></a>
                                  </li>
                                  <li><a href="#" class="social__link"><i class="fa-brands fa-instagram"></i></a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <span class="svg-shape"><svg xmlns="http://www.w3.org/2000/svg"
                              xmlns:xlink="http://www.w3.org/1999/xlink" width="210px" height="10px">
                              <path fill-rule="evenodd" fill-opacity="0.102" d=" M5.000,-0.001 L30.000,-0.001 L25.000,9.999 L-0.000,9.999 L5.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.302" d=" M35.000,-0.001 L60.000,-0.001 L55.000,9.999 L30.000,9.999 L35.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.502" d=" M65.000,-0.001 L90.000,-0.001 L85.000,9.999 L60.000,9.999 L65.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.702" d=" M95.000,-0.001 L120.000,-0.001 L115.000,9.999 L90.000,9.999 L95.000,-0.001
                                                              Z" />
                              <path fill-rule="evenodd" fill-opacity="0.8" d=" M125.000,-0.001 L150.000,-0.001 L145.000,9.999 L120.000,9.999
                                                              L125.000,-0.001 Z" />
                              <path fill-rule="evenodd" fill-opacity="0.902" d=" M155.000,-0.001 L180.000,-0.001 L175.000,9.999 L150.000,9.999
                                                              L155.000,-0.001 Z" />
                              <path fill-rule="evenodd" d=" M185.000,-0.001 L210.000,-0.001 L210.000,9.999 L180.000,9.999
                                                              L185.000,-0.001 Z" />
                          </svg></span>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================>Team section end here <================== -->





<!-- ================FAQ section start here <================== -->
<section id="faq" class="faq padding-top padding-bottom">
  <div class="container">
      <div class="section-header text-center">
          <p class="subtitle">Questions & Answers</p>
          <h2>Frequently Asked Questions</h2>
      </div>
      <div class="faq__wrapper">
          <div class="row g-4">
              <div class="col-lg-6">
                  <div class="accordion" id="faqAccordion1">
                      <div class="row g-4">
                          <div class="col-12">
                              <div class="accordion__item" data-aos="fade-up" data-aos-duration="1000">
                                  <div class="accordion__header" id="faq1">
                                      <button class="accordion__button collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#faqBody1"
                                          aria-expanded="false" aria-controls="faqBody1">
                                          What is NFTPort <span class="plus-icon"></span>
                                      </button>
                                  </div>
                                  <div id="faqBody1" class="accordion-collapse collapse" aria-labelledby="faq1"
                                      data-bs-parent="#faqAccordion1">
                                      <div class="accordion__body">
                                          We want provide our community with the best quality art from real artist
                                          for afordable price
                                          That is why we chose mint price of 0.11 ETH (+ gas fee). If you are
                                          planning to hold your Bulls
                                          you will bee rewarded with FEE Apes Land approximatey 6-8 weeks after
                                          the official launch
                                          02
                                          What will the mint price be?.
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="accordion__item" data-aos="fade-up" data-aos-duration="1100">
                                  <div class="accordion__header" id="faq2">
                                      <button class="accordion__button" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#faqBody2" aria-expanded="true"
                                          aria-controls="faqBody2">
                                          Whe we should choose NFTPort? <span class="plus-icon"></span>
                                      </button>
                                  </div>
                                  <div id="faqBody2" class="accordion-collapse collapse show"
                                      aria-labelledby="faq2" data-bs-parent="#faqAccordion1">
                                      <div class="accordion__body">
                                          We want provide our community with the best quality art from real artist
                                          for afordable price
                                          That is why we chose mint price of 0.11 ETH (+ gas fee). If you are
                                          planning to hold your Bulls
                                          you will bee rewarded with FEE Apes Land approximatey 6-8 weeks after
                                          the official launch
                                          02
                                          What will the mint price be?.
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="accordion__item" data-aos="fade-up" data-aos-duration="1200">
                                  <div class="accordion__header" id="faq3">
                                      <button class="accordion__button collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#faqBody3"
                                          aria-expanded="false" aria-controls="faqBody3">
                                          how secure is this token<span class="plus-icon"></span>
                                      </button>
                                  </div>
                                  <div id="faqBody3" class="accordion-collapse collapse" aria-labelledby="faq3"
                                      data-bs-parent="#faqAccordion1">
                                      <div class="accordion__body">
                                          We want provide our community with the best quality art from real artist
                                          for afordable price
                                          That is why we chose mint price of 0.11 ETH (+ gas fee). If you are
                                          planning to hold your Bulls
                                          you will bee rewarded with FEE Apes Land approximatey 6-8 weeks after
                                          the official launch
                                          03
                                          How does the raffle work?
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="accordion" id="faqAccordion2">
                      <div class="row g-4">
                          <div class="col-12">
                              <div class="accordion__item" data-aos="fade-up" data-aos-duration="1000">
                                  <div class="accordion__header" id="faq1-two">
                                      <button class="accordion__button collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#faqBody1-two"
                                          aria-expanded="false" aria-controls="faqBody1-two">

                                          When is the official launch? <span class="plus-icon"></span>
                                      </button>
                                  </div>
                                  <div id="faqBody1-two" class="accordion-collapse collapse"
                                      aria-labelledby="faq1-two" data-bs-parent="#faqAccordion2">
                                      <div class="accordion__body">
                                          We want provide our community with the best quality art from real artist
                                          for afordable price
                                          That is why we chose mint price of 0.11 ETH (+ gas fee). If you are
                                          planning to hold your Bulls
                                          you will bee rewarded with FEE Apes Land approximatey 6-8 weeks after
                                          the official launch
                                          02
                                          What will the mint price be?.
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="accordion__item" data-aos="fade-up" data-aos-duration="1100">
                                  <div class="accordion__header" id="faq2-two">
                                      <button class="accordion__button collapsed" type="button"
                                          data-bs-toggle="collapse" data-bs-target="#faqBody2-two"
                                          aria-expanded="true" aria-controls="faqBody2-two">

                                          What will the mint price be? <span class="plus-icon"></span>
                                      </button>
                                  </div>
                                  <div id="faqBody2-two" class="accordion-collapse collapse"
                                      aria-labelledby="faq2-two" data-bs-parent="#faqAccordion2">
                                      <div class="accordion__body">
                                          We want provide our community with the best quality art from real artist
                                          for afordable price
                                          That is why we chose mint price of 0.11 ETH (+ gas fee). If you are
                                          planning to hold your Bulls
                                          you will bee rewarded with FEE Apes Land approximatey 6-8 weeks after
                                          the official launch
                                          02
                                          What will the mint price be?.
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-12">
                              <div class="accordion__item" data-aos="fade-up" data-aos-duration="1200">
                                  <div class="accordion__header" id="faq3-two">
                                      <button class="accordion__button" type="button" data-bs-toggle="collapse"
                                          data-bs-target="#faqBody3-two" aria-expanded="false"
                                          aria-controls="faqBody3-two">

                                          How does the raffle work?<span class="plus-icon"></span>
                                      </button>
                                  </div>
                                  <div id="faqBody3-two" class="accordion-collapse collapse show"
                                      aria-labelledby="faq3-two" data-bs-parent="#faqAccordion2">
                                      <div class="accordion__body">
                                          We want provide our community with the best quality art from real artist
                                          for afordable price
                                          That is why we chose mint price of 0.11 ETH (+ gas fee). If you are
                                          planning to hold your Bulls
                                          you will bee rewarded with FEE Apes Land approximatey 6-8 weeks after
                                          the official launch
                                          03
                                          How does the raffle work?
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
</section>
<!-- ================FAQ section end here <================== -->



<!-- ================Blog section start here <================== -->
{{-- <section class="blog padding-top padding-bottom" style="background-image: url(assets/images/blog/bg.jpg);">
  <div class="container">
      <div class="section-header text-center">
          <p class="subtitle">Latest Articles</p>
          <h2>Our Recent Blog Post</h2>
      </div>
      <div class="blog__wrapper">
          <div class="row g-4">
              <div class="col-lg-4 col-md-6">
                  <div class="blog__item">
                      <div class="blog__inner">
                          <div class="blog__thumb">
                              <img src="assets/images/blog/01.jpg" alt="Blog Images">
                          </div>
                          <div class="blog__content">
                              <div class="blog__content-top">
                                  <span class="blog__meta-tag">NFT</span>
                                  <h4><a href="blog-single.html">Distinct Resource Maximizing Minting</a></h4>
                                  <ul class="blog__meta d-flex flex-wrap align-items-center">
                                      <li class="blog__meta-author">
                                          <a href="#"><span><i class="fa-solid fa-user"></i></span> Jhon
                                              Doe</a>
                                      </li>
                                      <li class="blog__meta-date">
                                          <a href="#"><span><i class="fa-solid fa-calendar-days"></i></span>
                                              30
                                              December 2022</a>
                                      </li>
                                  </ul>
                              </div>
                              <p>Contrar to popuar belieif loreme Ipsum is an not
                                  consectetur cites of the word in...</p>
                              <div class="blog__content-bottom">
                                  <a href="blog-single.html" class="text-btn">Read More</a>
                                  <a href="#" class="blog__meta-comment">
                                      <i class="fa-solid fa-message"></i>
                                      <span
                                          class="position-absolute top-0 start-100 translate-middle rounded-circle">
                                          2
                                      </span>

                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="blog__item">
                      <div class="blog__inner">
                          <div class="blog__thumb">
                              <img src="assets/images/blog/02.jpg" alt="Blog Images">
                          </div>
                          <div class="blog__content">
                              <div class="blog__content-top">
                                  <span class="blog__meta-tag">MINTING</span>
                                  <h4><a href="blog-single.html">Make 100% profit by minting nft</a></h4>
                                  <ul class="blog__meta d-flex flex-wrap align-items-center">
                                      <li class="blog__meta-author">
                                          <a href="#"><span><i class="fa-solid fa-user"></i></span> rasselmrh
                                          </a>
                                      </li>
                                      <li class="blog__meta-date">
                                          <a href="#"><span><i class="fa-solid fa-calendar-days"></i></span>
                                              30
                                              December 2022</a>
                                      </li>
                                  </ul>
                              </div>
                              <p>Contrar to popuar belieif loreme Ipsum is an not
                                  consectetur cites of the word in...</p>
                              <div class="blog__content-bottom">
                                  <a href="blog-single.html" class="text-btn">Read More</a>
                                  <a href="#" class="blog__meta-comment">
                                      <i class="fa-solid fa-message"></i>
                                      <span
                                          class="position-absolute top-0 start-100 translate-middle rounded-circle">
                                          2
                                      </span>

                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="blog__item">
                      <div class="blog__inner">
                          <div class="blog__thumb">
                              <img src="assets/images/blog/03.jpg" alt="Blog Images">
                          </div>
                          <div class="blog__content">
                              <div class="blog__content-top">
                                  <span class="blog__meta-tag">Crypto</span>
                                  <h4><a href="blog-single.html">Purchase your 1st Nft Crypto here</a></h4>
                                  <ul class="blog__meta d-flex flex-wrap align-items-center">
                                      <li class="blog__meta-author">
                                          <a href="#"><span><i class="fa-solid fa-user"></i></span> Alex
                                              Cary</a>
                                      </li>
                                      <li class="blog__meta-date">
                                          <a href="#"><span><i class="fa-solid fa-calendar-days"></i></span>
                                              30
                                              December 2022</a>
                                      </li>
                                  </ul>
                              </div>
                              <p>Contrar to popuar belieif loreme Ipsum is an not
                                  consectetur cites of the word in...</p>
                              <div class="blog__content-bottom">
                                  <a href="blog-single.html" class="text-btn">Read More</a>
                                  <a href="#" class="blog__meta-comment">
                                      <i class="fa-solid fa-message"></i>
                                      <span
                                          class="position-absolute top-0 start-100 translate-middle rounded-circle">
                                          2
                                      </span>

                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
          <div class="mt-5 text-center">
              <a href="blog.html" class="default-btn"><span>View all blog post</span></a>
          </div>
      </div>
  </div>
</section> --}}
<!-- ================Blog section end here <================== -->





<!-- ================Partner section start here <================== -->
<section class="partner padding-top padding-bottom">
  <div class="container">
      <div class="section-header text-center">
          <p class="subtitle">Partners</p>
          <h2>Our Best Partners</h2>
      </div>
      <div class="partner__wrapper">
          <div class="row g-0 row-cols-2 row-cols-md-3 row-cols-xl-5 ">
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/01.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/02.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/03.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/04.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/05.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/06.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/07.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/08.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/09.png" alt="Partner Image">
                  </div>
              </div>
              <div class="col">
                  <div class="partner__item">
                      <img src="assets/images/partner/10.png" alt="Partner Image">
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- ================Partner section end here <================== -->






<!-- ================>Community section start here <================== -->
<section class="community padding-top padding-bottom" style="background-image:url(assets/images/community/bg.jpg)">
  <div class="container">
      <div class="comminity__wrapper">
          <div class="section-header text-center">
              <p class="subtitle">Our Community</p>
              <h2>Join Our Cumminity and get early access</h2>
          </div>
          <div class="btn-group justify-content-center">
              <a href="#" class="default-btn default-btn--secondary"><span><i class="fab fa-discord"></i> Join
                      Discord</span></a>
              <a href="{{route('register')}}" class="default-btn"> <span><img src="assets/images/opensea.svg" alt="opensea icon"
                          width="20" height="20"> Join RainSea</span> </a>
          </div>
      </div>
  </div>
</section>
<!-- ================>Community section end here <================== -->






@endsection
