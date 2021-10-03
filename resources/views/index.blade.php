<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="zxx" class="js">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
  <title>Access Demo</title>
  <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
  <link rel="stylesheet" href="{{ asset('css/access-demo.css') }}">
  <!-- Fav Icon  -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body class="nk-body body-wider bg-light-alt">
  <div class="nk-wrap">
    <div class="nk-pages">
      <div class="tab-pane fade show active" id="page-head-default-01">
        <!-- Copy from here -->
        <div class="header-banner bg-theme-grad has-ovm">
          <div class="nk-banner">
            <div class="banner banner-page">
              <div class="banner-wrap">
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-9">
                      <div class="banner-caption cpn tc-light text-center">
                        <div class="cpn-head">
                          <h2 class="title ttu">Access Bank</h2>
                          <p>Carry out transactions with your face.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- .nk-banner -->
          <div class="nk-ovm shape-a-sm"></div>
        </div><!-- Stop here -->
      </div>

      {{-- AccessDemo preloader Spinning  --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
        role="dialog">
        <div class="modal-dialog" role="document">
          <div class="spinner-border" style="width: 7rem; height: 7rem;" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-7 mx-auto" style="padding-top: 45px; padding-bottom:45px;">
            <div class="card">
              {{-- Logo Image --}}
              <img class="card-img-top mx-auto my-4 d-block" src="{{ asset('assets/images/logo_2.png') }}"
                alt="Card image" style="width: 70px;">

              {{-- Service text --}}
              <p style="font-family: quicksand;">In order to use this service, you have to complete this verification
                process</p>

              {{-- Multi-step form --}}
              <div class="multi_step_form">
                {{-- Test Progress --}}
                <ul id="progressbar" style="margin-top: 14px;">
                  <li class="active text-center" id="step1" style="font-size: 10px;">
                    <span class="step-number">1</span>
                    Step 1
                  </li>
                  <li class="text-center inactive" id="step2" style="font-size: 10px;">
                    <span class="step-number">2</span>
                    Step 2
                  </li>
                  <li class="text-center inactive" id="step3" style="font-size: 10px;">
                    <span class="step-number">3</span>
                    Step 3
                  </li>
                  <li class="text-center inactive" id="step4" style="font-size: 10px;">
                    <span class="step-number">4</span>
                    Step 4
                  </li>
                  <li class="text-center inactive" id="step5" style="font-size: 10px;">
                    <span class="step-number">5</span>
                    Finish
                  </li>
                </ul>

                {{-- Card body --}}
                <div class="card-body">
                  {{-- Form --}}
                  <form action="" method="POST">
                    {{-- wizard 1 --}}
                    <div class="wizard_field" id="selfieContainer">
                      {{-- Start Selfie --}}
                      <div class="d-flex justify-content-center align-items-center mb-4" style="margin-top: 10px;">
                        <button type="button" class="btn btn-outline btn-grad on-bg-theme-dark" data-toggle="modal"
                          data-target="#smart-camera" id="btnSmartCamera"><i class="ti-camera mr-3"></i> Click here to
                          take your
                          selfie</button>
                        <em class="icon fas fa-check" style="font-size: 20px;color: green;display: none"></em>
                      </div>

                      {{-- Select  Mode of  Transaction --}}
                      <div class="field-item">
                        <label class="field-label" style="font-family: roboto;">Mode of Verification</label>
                        <div class="field-wrap">
                          <select class="select" data-select2-theme="bordered" id="id_verification_option" required>
                            <option value="">Please select</option>
                            <option value="mobile number">Mobile Number</option>
                            <option value="bvn">BVN</option>
                          </select>
                        </div>
                        <p style="font-size: 13px; font-family: quicksand;">In order to complete, please provide any of
                          the
                          following personal
                          verification</p>
                      </div>

                      {{-- Phone or BVN --}}
                      <div class="field-item">
                        <div class="field-wrap">
                          <input name="id_verification" type="text" class="input-line" id="id_verification" required=""
                            aria-required="true" maxlength="11" minlength="11" disabled>
                          <label class="field-label field-label-line" id="id_verification_label">---</label>
                        </div>
                        <span id="identity-verification-field" role="alert"> </span>
                      </div>

                      {{-- Selfie --}}
                      <input type="hidden" id="selfie">

                      {{-- Verification Button --}}
                      <div class="text-center">
                        <button type="button" id="btnVerify"
                          class="btn btn-outline w-100 btn-block btn-grad">Verify</button>
                      </div>
                    </div>

                    {{-- wizard 2 --}}
                    <div class="wizard_field" id="serviceContainer">
                      {{-- Transaction Type --}}
                      <div class="field-item">
                        <label class="field-label" style="font-family: roboto;">Select Transaction Type:</label>
                        <div class="field-wrap">
                          <select class="select" data-select2-theme="bordered" name="service" id="service" required>
                            <option value="">Please select</option>
                            <option value="Transfer">Transfer</option>
                            <option value="Withdrawal">Withdrawal</option>
                          </select>
                        </div>
                      </div>

                      {{-- Wizard pagination next, finish and previous --}}
                      <div class="wizard actions clearfix" style="margin-top: 30px;">
                        <ul role="menu" aria-label="Pagination">
                          <li class="disabled" aria-disabled="true">
                            <a href="javascript:void(0)" class="btn btn-grad" role="menuitem previous">Previous</a>
                          </li>
                          <li aria-hidden="false" aria-disabled="false">
                            <a href="javascript:void(0)" class="btn btn-info next" role="menuitem">Next</a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    {{-- wizard 3 --}}
                    <div class="wizard_field" id="accountTypeContainer">
                      {{-- Transaction Type --}}
                      <div class="field-item">
                        <label class="field-label" style="font-family: roboto;">Select preferred account for
                          debit:</label>
                        <div class="field-wrap">
                          <select class="select" data-select2-theme="bordered" name="account" id="account" required>
                            <option value="">Please select</option>
                            <option value="Savings">Savings</option>
                            <option value="Current">Current</option>
                          </select>
                        </div>
                      </div>

                      {{-- Wizard pagination next, finish and previous --}}
                      <div class="wizard actions clearfix" style="margin-top: 30px;">
                        <ul role="menu" aria-label="Pagination">
                          <li class="disabled" aria-disabled="true"><a href="javascript:void(0)" class="btn btn-grad"
                              role="menuitem previous">Previous</a></li>
                          <li aria-hidden="false" aria-disabled="false"><a href="javascript:void(0)"
                              class="btn btn-info next" role="menuitem">Next</a></li>
                        </ul>
                      </div>
                    </div>

                    {{-- wizard 4 --}}
                    <div class="wizard_field" id="accountNoContainer">
                      {{-- Beneficiary account no --}}
                      <div class="field-item">
                        <div class="field-wrap">
                          <input name="accountno" type="text" class="input-line" id="accountno" required=""
                            aria-required="true" maxlength="10" minlength="10">
                          <label class="field-label field-label-line" id="accountno_label">Enter Beneficiary's
                            account number</label>
                        </div>
                        <span id="accountno-field" role="alert"> </span>
                      </div>

                      {{-- Wizard pagination next, finish and previous --}}
                      <div class="wizard actions clearfix" style="margin-top: 30px;">
                        <ul role="menu" aria-label="Pagination">
                          <li class="disabled" aria-disabled="true">
                            <a href="javascript:void(0)" class="btn btn-grad" role="menuitem previous">Previous</a>
                          </li>
                          <li aria-hidden="false" aria-disabled="false">
                            <a href="javascript:void(0)" class="btn btn-info next" role="menuitem">Next</a>
                          </li>
                        </ul>
                      </div>
                    </div>

                    {{-- wizard 5 --}}
                    <div class="wizard_field" id="accountNoContainer">
                      {{-- Beneficiary account no --}}
                      <div class="field-item">
                        <div class="field-wrap">
                          <input name="amount" type="text" class="input-line" id="amount" required=""
                            aria-required="true" maxlength="10" minlength="10">
                          <label class="field-label field-label-line" id="amount-label">Enter Transaction Amount:</label>
                        </div>
                        <span id="amount-field" role="alert"> </span>
                      </div>

                      {{-- Wizard pagination next, finish and previous --}}
                      <div class="wizard actions clearfix" style="margin-top: 30px;">
                        <ul role="menu" aria-label="Pagination">
                          <li class="disabled" aria-disabled="true">
                            <a href="javascript:void(0)" class="btn btn-grad" role="menuitem previous">Previous</a>
                          </li>
                          <li aria-hidden="false" aria-disabled="false">
                            <a href="javascript:void(0)" class="btn btn-info next" role="menuitem">Finish</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    {{-- footer --}}
    <footer class="nk-footer bg-theme-grad has-ovm">
      <section class="section section-footer tc-light bg-transparent">
        <div class="container">
          <!-- Block -->
          <div class="nk-block block-footer">
            <div class="row">
              <div class="col-lg-2 col-sm-4 mb-4 mb-sm-0">
                <div class="wgs wgs-menu">
                  <h6 class="wgs-title">Company</h6>
                  <div class="wgs-body">
                    <ul class="wgs-links">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Meet Our Team</a></li>
                      <li><a href="#">Advisors</a></li>
                    </ul>
                  </div>
                </div>
              </div><!-- .col -->
              <div class="col-lg-2 col-sm-4 mb-4 mb-sm-0">
                <div class="wgs wgs-menu">
                  <h6 class="wgs-title">Legal</h6>
                  <div class="wgs-body">
                    <ul class="wgs-links">
                      <li><a href="#">Terms &amp; Conditions</a></li>
                      <li><a href="#">Privacy Policy</a></li>
                      <li><a href="#">Terms of Sales</a></li>
                    </ul>
                  </div>
                </div>
              </div><!-- .col -->
              <div class="col-lg-2 col-sm-4 mb-4 mb-sm-0">
                <div class="wgs wgs-menu">
                  <h6 class="wgs-title">Quick Links</h6>
                  <div class="wgs-body">
                    <ul class="wgs-links">
                      <li><a href="#">Ecosystems</a></li>
                      <li><a href="#">Tokens</a></li>
                      <li><a href="#">Roadmaps</a></li>
                    </ul>
                  </div>
                </div>
              </div><!-- .col -->
              <div class="col-lg-6 mb-4 mb-lg-0 order-lg-first">
                <div class="wgs wgs-text">
                  <div class="wgs-body">
                    <a href="./" class="wgs-logo">
                      <img src="{{ asset('assets/images/logo_2.png') }}"
                        srcset="{{ asset('assets/images/logo_2.png') }} 5x" alt="logo">
                    </a>
                    <p>Copyright © 2021 Acess Demo. <br>ABN: 2018AD947. All rights reserved. </p>
                    </p>
                  </div>
                </div>
              </div><!-- .col -->
            </div><!-- .row -->
          </div><!-- .block -->
        </div>
      </section>
      <div class="nk-ovm shape-b"></div>
    </footer>

    {{-- Smart camera modal --}}
    <div class="modal fade" id="smart-camera">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
          <div class="modal-body p-md-3 p-lg-4">
            <h6 class="title title-md" style="font-family: quicksand; font-size: 13px;">Selfie Verification</h6>
            <smart-camera-web></smart-camera-web>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Preloader --}}
  <div class="preloader"><span class="spinner spinner-round"></span></div>

  {{-- Scripts --}}
  <script src="{{ asset('js/jquery.js') }}"></script>
  <script src="https://cdn.smileidentity.com/js/v1.0.0-beta.4/smart-camera-web.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  <script src="{{ asset('js/axios.min.js') }}"></script>
  <script>
    $(window).on("load", () => {
       // Preloader
       let preloader = $(".preloader");
      let spinner = $(".spinner");
      $('body').addClass("page-loaded");
      spinner.addClass("load-done");
      if(spinner.hasClass("spinner-alt") || spinner.fadeOut(3000)) {
        preloader.delay(1500).fadeOut(1000);
      }
    });
  </script>
  <script>
    $(document).ready(() => {
      //  Select2
      let verification_option  = $(".select");
      verification_option.each(function() {
        let a = $(this);
        l = a.data("select2-theme") ? a.data("select2-theme") : "bordered",
            e = a.data("select2-placehold")
              ? a.data("select2-placehold")
              : "Select an option";
          a.select2({ placeholder: e, theme: "default select-" + l });
      })

      //  validation check
      $(document).on('change', '#id_verification_option', () => {
        let verification_id = $('#id_verification_option').val();

        if(verification_id == "") {

        }else if(verification_id == "mobile number") {
          $('#id_verification').attr("disabled", false);
          $('#id_verification_label').html("Input your 11 digit mobile number").css("font-family", "quicksand");
          $('#id')
        }else if(verification_id == "bvn") {
          $('#id_verification').attr("disabled", false);
          $('#id_verification_label').html("Input your 11 digit BVN").css("font-family", "quicksand");
        }
      });

      // input animate
      let accountno_field = $('#accountno');
      accountno_field.each(function() {
        let a = $(this);
        l = a.val();
        e = "input-focused";
        l && a.parent().addClass(e);
         a.on("focus", function () {
          $(this).parent().addClass(e);
        }),
        a.on("blur", function () {
          $(this).parent().removeClass(e),
            $(this).val() && $(this).parent().addClass(e);
        });
      });

      let amount_field = $('#amount');
      amount_field.each(function() {
        let a = $(this);
        l = a.val();
        e = "input-focused";
        l && a.parent().addClass(e);
         a.on("focus", function () {
          $(this).parent().addClass(e);
        }),
        a.on("blur", function () {
          $(this).parent().removeClass(e),
            $(this).val() && $(this).parent().addClass(e);
        });
      });

      let verification_field = $('#id_verification');
      verification_field.each(function() {
        let a = $(this);
        l = a.val();
        e = "input-focused";
        l && a.parent().addClass(e);
         a.on("focus", function () {
          $(this).parent().addClass(e);
        }),
        a.on("blur", function () {
          $(this).parent().removeClass(e),
            $(this).val() && $(this).parent().addClass(e);
        });
      });

      // animate selfie verification mode
      $('#proceedToSefieVerification').on('click', () => {
        $('.first-content').animate({width: "toggle"}, () => {
          $('.second-content').animate({width: "toggle"});
          let height = $(".modal-body .second-content p").height();
          $(".modal-body").css('height', height+80+'px');
          $(".modal-body .second-content p").css('height', height+'px');
        });
      });

      //  regular expression for id_verification testing
      const validateBVN_validateMobileNumber = (id) => {
        const idPattern = /^[0-9]{11}$/;
        return idPattern.test(id);
      }

      $(document).on('keyup', "#id_verification", () => {
        // grab bvn or mobile number for verification
        let identityPass = document.getElementById('id_verification').value;
        let verification_id = $('#id_verification_option').val();

        // bvn or mobile number for verification
        if(identityPass.length == 0){
          $('#id_verification').addClass('is-invalid');
          $('#identity-verification-field').html("This field is required").css({'font-family' : 'quicksand', 'font-size' : '12px', 'color' : 'red',  'font-weight' : 'bold'});
        }else if(identityPass.length < 11 && verification_id == "mobile number"){
          $('#id_verification').addClass('is-invalid');
          $('#identity-verification-field').html("Please lenghten your mobile number field to 11 digit numbers").css({'font-family' : 'quicksand', 'font-size' : '12px', 'color' : 'red',  'font-weight' : 'bold'});
        }else if(!validateBVN_validateMobileNumber(identityPass) && verification_id == "mobile number"){
          $('#id_verification').addClass('Only <code>numeric numbers</code> are allowed');
          $('#identity-verification-field').html("Only numeric numbers are allowed").css({'font-family' : 'quicksand', 'font-size' : '12px', 'color' : 'red',  'font-weight' : 'bold'});
        }else if(identityPass.length < 11 && verification_id == "bvn"){
          $('#id_verification').addClass('is-invalid');
          $('#identity-verification-field').html("Please lenghten your BVN field to 11 digit numbers").css({'font-family' : 'quicksand', 'font-size' : '12px', 'color' : 'red',  'font-weight' : 'bold'});
        }else if(!validateBVN_validateMobileNumber(identityPass) && verification_id == "bvn"){
          $('#id_verification').addClass('is-invalid');
          $('#identity-verification-field').html("Only valid 11 digit BVN number are accepted").css({'font-family' : 'quicksand', 'font-size' : '12px', 'color' : 'red', 'font-weight' : 'bold'});
        }else {
          $('#id_verification').removeClass('is-invalid');
          $('#identity-verification-field').html("").css({});
        }
      });

      //  SWC
      const SCW = document.querySelector('smart-camera-web');
      SCW.addEventListener('imagesComputed', (e) => {
        try {
          let response = e.detail;
          // convert image object to json
          console.log("Fetched image");
          let convertedImage = JSON.stringify(response.images);
          $('#selfie').val(convertedImage);
        } catch (e) {
          console.error(e);
        }
      });


      // next and previous script
      // var current_fs, next_fs, previous_fs; //wizard_field
      // var left, opacity, scale; //wizard_field properties which we will animate
      // var animating; //flag to prevent quick multi-click glitches

      // $(".next").click(function () {
      //   if (animating) return false;
      //   animating = true;

      //   current_fs = $(this).parent().parent().parent().parent();
      //   next_fs = $(this).parent().parent().parent().parent().next();

      //   //activate next step on progressbar using the index of next_fs
      //   $("#progressbar li").eq($(".wizard_field").index(next_fs)).addClass("active");

      //   //show the next fieldset
      //   next_fs.show();
      //   //hide the current fieldset with style
      //   current_fs.animate({
      //     opacity: 0
      //     }, {
      //     step: function (now, mx) {
      //       //as the opacity of current_fs reduces to 0 - stored in "now"
      //       //1. scale current_fs down to 80%
      //       scale = 1 - (1 - now) * 0.2;
      //       //2. bring next_fs from the right(50%)
      //       left = (now * 50) + "%";
      //       //3. increase opacity of next_fs to 1 as it moves in
      //       opacity = 1 - now;
      //       current_fs.css({
      //         'transform': 'scale(' + scale + ')',
      //         'position': 'absolute'
      //       });
      //       next_fs.css({
      //         'left': left,
      //         'opacity': opacity
      //       });
      //     },
      //     duration: 800,
      //     complete: function () {
      //       current_fs.hide();
      //       animating = false;
      //     },
      //     //this comes from the custom easing plugin
      //     easing: 'easeInOutBack'
      //   });
      // });


      // $(".previous").click(function () {
      //   if (animating) return false;
      //   animating = true;

      //   current_fs = $(this).parent().parent().parent().parent();
      //   next_fs = $(this).parent().parent().parent().parent().prev();

      //   //de-activate current step on progressbar
      //   $("#progressbar li").eq($(".wizard_field").index(current_fs)).removeClass("active");

      //   //show the previous fieldset
      //   previous_fs.show();
      //   //hide the current fieldset with style
      //   current_fs.animate({
      //     opacity: 0
      //   }, {
      //   step: function (now, mx) {
      //     //as the opacity of current_fs reduces to 0 - stored in "now"
      //     //1. scale previous_fs from 80% to 100%
      //     scale = 0.8 + (1 - now) * 0.2;
      //     //2. take current_fs to the right(50%) - from 0%
      //     left = ((1 - now) * 50) + "%";
      //     //3. increase opacity of previous_fs to 1 as it moves in
      //     opacity = 1 - now;
      //     current_fs.css({
      //       'left': left
      //     });
      //     previous_fs.css({
      //       'transform': 'scale(' + scale + ')',
      //       'opacity': opacity
      //     });
      //   },
      //   duration: 800,
      //   complete: function () {
      //     current_fs.hide();
      //     animating = false;
      //   },
      //   //this comes from the custom easing plugin
      //   easing: 'easeInOutBack'
      //   });
      // });

      // using onclick verification
      $(document).on('click', '#btnVerify', () => {

        var message_array = "";

        // validation
        let identityPass = document.getElementById('id_verification').value;
        let verification_id = $('#id_verification_option').val();
        let selfie = $('#selfie').val();

        if(selfie == ""){
          message_array+= "\nPlease take a selfie!";
        }

        if(identityPass.length == 0){
          message_array+= "\nPlease select your mode of verification";
        }

        if(identityPass.length < 11 && verification_id == "mobile number"){
          message_array+= "\nPlease lenghten your mobile number field to 11 digit numbers <code>080-XXXX-XXXX</code>";
        }

        if(!validateBVN_validateMobileNumber(identityPass) && verification_id == "mobile number"){
          message_array+= "\nOnly numeric numbers are allowed";
        }


        if(identityPass.length < 11 && verification_id == "bvn"){
          message_array+= "\nPlease lenghten your BVN field to 11 digit numbers";
        }

        if(!validateBVN_validateMobileNumber(identityPass) && verification_id == "bvn"){
          message_array+= "\nOnly valid 11 digit BVN number are accepted";
        }

        if(message_array != null && message_array != "")
        {
          console.log(message_array);
          Swal.fire(
            'Failed!',
            message_array,
            'error'
          );
        }else{
          let data  = new FormData();
          data.append('bvn', identityPass);
          data.append('selfie', selfie);
          console.log(data.getAll('bvn'));
          console.log(data.getAll('selfie'));

          $("#btnVerify").click(function() {
            currentFs = $(this).parent().parent();
            nextFs = $(this).parent().parent().next();
            next('btnVerify', currentFs, nextFs, '#step2', '#step1');
          })
        }
      });
    });
  </script>
  
  {{-- Reuseable script --}}
  <script>
    function next(nextBtn, currentFs, nextFs, nextStep, previousStep) {

      var current_fs, next_fs, previous_fs; //wizard_field
      var left, opacity, scale; //wizard_field properties which we will animate
      var animating; //flag to prevent quick multi-click glitches

      if (animating) return false;
      animating = true;

      current_fs = currentFs;
      next_fs = nextFs;

      //activate next step on progressbar using the index of next_fs
      $("#progressbar li").eq($(".wizard_field").index(next_fs)).addClass("active");
      $(nextStep).removeClass("inactive");
      $(nextStep).addClass("active");
      $(previousStep).addClass("complete");

      //show the next fieldset
      next_fs.show();
      //hide the current fieldset with style
      current_fs.animate({
        opacity: 0
        }, {
        step: function (now, mx) {
          //as the opacity of current_fs reduces to 0 - stored in "now"
          //1. scale current_fs down to 80%
          scale = 1 - (1 - now) * 0.2;
          //2. bring next_fs from the right(50%)
          left = (now * 50) + "%";
          //3. increase opacity of next_fs to 1 as it moves in
          opacity = 1 - now;
          current_fs.css({
            'transform': 'scale(' + scale + ')',
            'position': 'absolute'
          });
          next_fs.css({
            'left': left,
            'opacity': opacity
          });
        },
        duration: 800,
        complete: function () {
          current_fs.hide();
          animating = false;
        },
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
      });
    }
  </script>
</body>

</html>
