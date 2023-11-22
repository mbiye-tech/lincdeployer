@php
$banner = getContent('banner.content', true);
$countries = App\Models\Country::active()->get();
@endphp



<!--<style>
    .home-slider{
	overflow:hidden;
}
.home-slider,
.home-slider .single-slider{
	height: 660px;
}
.home-slider .single-slider::before {
	opacity: 0.7;
	z-index: 1;
}
.home-slider .slider-image{
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	position:absolute;
	top:0;
	left:0;
	width:100%;
	height:100%;
	-webkit-transition:all 0.3s ease 0s;
	-moz-transition:all 0.3s ease 0s;
	transition:all 0.3s ease 0s;
}
/* Slider Zoom Effect */
@-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(1, 1);
  }

  to {
    -webkit-transform: scale(1.2, 1.2);
  }
}

@-moz-keyframes zoom {
  from {
    -moz-transform: scale(1, 1);
  }

  to {
    -moz-transform: scale(1.2, 1.2);
  }
}

@-o-keyframes zoom {
  from {
    -o-transform: scale(1, 1);
  }

  to {
    -o-transform: scale(1.2, 1.2);
  }
}

@keyframes zoom {
  from {
    transform: scale(1, 1);
  }

  to {
    transform: scale(1.2, 1.2);
  }
}
.home-slider .owl-item.active .slider-image {
  -webkit-animation: zoom 25s;
  animation: zoom 25s;
}
.home-slider .slider-content {
	display: inline-block;
	border-radius: 3px;
	position: relative;
	z-index: 2;
	margin: 158px 0 0;
}
.home-slider .slider-title {
	font-size: 50px;
	font-weight: 800;
	color: #fff;
	padding: 30px;
	display: inline-block;
}
.home-slider .slider-title span {
	display: block;
	font-size: 18px;
	font-weight: 400;
	line-height: 20px;
}
.home-slider .slider-title b {
	font-weight: 400;
}
.home-slider .slider-text {
	font-size: 15px;
	background: #fff;
	color: #555;
	padding: 30px;
	display: inline-block;
}
.home-slider .button {
	margin-top: 20px;
}
.home-slider .button .btn {
	margin-right: 15px;
	position: relative;
	z-index: 2;
}
.home-slider .button .btn:last-child{
	margin:0;
}
/* Slider Animation */
.home-slider .owl-item.active .slider-title{
	animation: fadeInLeft 1s both 0.8s;
}
.home-slider .owl-item.active .slider-text{
	animation: fadeInLeft 1s  both 1.2s;
}
.home-slider .owl-item.active .button{
	animation: fadeInUp 1s  both 1.5s;
}

    
</style>



<section class="home-slider hero">
			<div class="slider-active">
				<div class="single-slider overlay">
					<div class="slider-image" style="background-image:url('images/slider/slider-bg1.jpg')"></div>
					<div class="container">
						<div class="row ">
							<div class="col-lg-7 col-md-10 col-12">
								<div class="slider-content">
									<h1 class="slider-title"><span></span>Envoyez De L'argent À Faible Coût <b></b></h1>
									<p class="slider-text">Linc vous propose d'envoyer de l'argent à vos amis et à votre famille à bas prix et de manière simple.</p>
									<div class="button">
										<a href="about.html" class="btn white"></a>
										<a href="courses.html" class="btn white primary"></a>
									</div>
								</div>
							</div>
							

                
                							
							
							   <div class="col-sm-10 col-lg-5 col-xxl-4">
                    <div class="exchange-form__header">
                        <span class="exchange-form__sub-title text--white"> @lang('Conversion Rate') </span>
                        <h5 class="exchange-form__title m-0 text-white">1 <span class="sending-currency"></span> = <span class="exchange-rate">0</span> <span class="recipient-currency"></span></h5>
                    </div>
                    <div class="exchange-form">
                        <form class="row g-0" action="{{ route('currency.calculator') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="exchange-form__body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="from" class="text--accent sm-text d-block fw-md mb-2">@lang('You Send')</label>
                                            <div class="input-group sending-parent">
                                                <input id="from" type="number" step="any" class="form-control form--control sending-amount" autocomplete="off" value="" placeholder="Enter amount" name="sending_amount" required>

                                                <select class="sending-countries country-picker" autocomplete="off" name="sending_country" required>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}"
                                                                data-id="{{ $country->id }}"
                                                                data-currency="{{ $country->currency }}"
                                                                data-rate="{{ $country->rate }}"
                                                                data-image="{{ getImage(getFilePath('country') . '/' . $country->image, getFileSize('country')) }}"
                                                                data-name="{{ $country->name }}">
                                                            {{ $country->currency }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="you-get" class="text--accent sm-text d-block fw-md mb-2">@lang('Recipient Gets')</label>
                                            <div class="input-group recipient-parent">
                                                <input id="to" type="number" step="any" class="form-control form--control recipient-amount" placeholder="Enter amount" name="recipient_amount" required>
                                                <select class="recipient-countries country-picker" name="recipient_country" id="recipient-country" required>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}"
                                                                @if ($loop->index == 1) selected @endif
                                                                data-id="{{ $country->id }}"
                                                                data-currency="{{ $country->currency }}"
                                                                data-rate="{{ $country->rate }}"
                                                                data-fixed_charge="{{ $country->fixed_charge }}"
                                                                data-percent_charge="{{ $country->percent_charge }}"
                                                                data-image="{{ getImage(getFilePath('country') . '/' . $country->image, getFileSize('country')) }}"
                                                                data-name="{{ $country->name }}">
                                                            {{ $country->currency }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 charge-section">
                                            <ul class="list list--column timeline-list">
                                                <li class="list__item timeline-list__item">
                                                    <span class="timeline-list__dot"></span>
                                                    <div class="timeline-list__content justify-content-between">
                                                        <div class="timeline-list__left">
                                                            <span class="d-block sm-text">@lang('CHARGE')
                                                                <span class="chargeInfo" data-bs-toggle="tooltip" title="Input amount to view charge rate">
                                                                    <i class="fa fa-info-circle"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="timeline-list__right">
                                                            +
                                                            <span class="charge-amount-text">0</span>
                                                            <span class="sending-currency"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list__item timeline-list__item">
                                                    <span class="timeline-list__dot"></span>
                                                    <div class="timeline-list__content justify-content-between">
                                                        <div class="timeline-list__left">
                                                            <span class="d-block heading-clr">
                                                                @lang('Payable Amount')
                                                            </span>
                                                        </div>
                                                        <div class="timeline-list__right">
                                                            <span class="d-block heading-clr">
                                                                <span class="final-amount-text">0</span>
                                                                <span class="sending-currency"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn--xl btn--base w-100 btn--xl">
                                                @lang('Send Now')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
						</div>
						
						
					</div>
					
					
				</div>
			</div>
		</section>-->
		
		
		<!--/ End Slider Area -->
		

<section class="hero" style="background-image: url('{{ getImage('assets/images/img/back.jpg') }}')">
    <div class="hero__content">
        <div class="container">
            <div class="row gy-5 g-lg-4 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-lg-7 col-xxl-6 text-lg-start text-center">
                    <h2 class="hero__content-title text-capitalize text--white pt-lg-0 pt-4">
                        {{ __($banner->data_values->heading) }}
                    </h2>
                    <p class="hero__content-para text--white ms-lg-0 mx-auto">
                        {{ __($banner->data_values->description) }}
                    </p>

                    <div class="hero__btn-group justify-content-center justify-content-lg-start mt-4">
                        <a href="{{ $banner->data_values->button_link }}" class="btn btn--xl btn--base">
                            {{ __($banner->data_values->button_text) }}
                        </a>
                        <a href="{{ $banner->data_values->youtube_link }}" class="btn btn--video btn--circle btn--base show-video">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                </div>
                <div class="col-sm-10 col-lg-5 col-xxl-4">
                    <div class="exchange-form__header">
                        <span class="exchange-form__sub-title text--white"> @lang('Conversion Rate') </span>
                        <h5 class="exchange-form__title m-0 text-white">1 <span class="sending-currency"></span> = <span class="exchange-rate">0</span> <span class="recipient-currency"></span></h5>
                    </div>
                    <div class="exchange-form">
                        <form class="row g-0" action="{{ route('currency.calculator') }}" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="exchange-form__body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="from" class="text--accent sm-text d-block fw-md mb-2">@lang('You Send')</label>
                                            <div class="input-group sending-parent">
                                                <input id="from" type="number" step="any" class="form-control form--control sending-amount" autocomplete="off" value="" placeholder="Enter amount" name="sending_amount" required>

                                                <select class="sending-countries country-picker" autocomplete="off" name="sending_country" required>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}"
                                                                data-id="{{ $country->id }}"
                                                                data-currency="{{ $country->currency }}"
                                                                data-rate="{{ $country->rate }}"
                                                                data-image="{{ getImage(getFilePath('country') . '/' . $country->image, getFileSize('country')) }}"
                                                                data-name="{{ $country->name }}">
                                                            {{ $country->currency }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="you-get" class="text--accent sm-text d-block fw-md mb-2">@lang('Recipient Gets')</label>
                                            <div class="input-group recipient-parent">
                                                <input id="to" type="number" step="any" class="form-control form--control recipient-amount" placeholder="Enter amount" name="recipient_amount" required>
                                                <select class="recipient-countries country-picker" name="recipient_country" id="recipient-country" required>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}"
                                                                @if ($loop->index == 1) selected @endif
                                                                data-id="{{ $country->id }}"
                                                                data-currency="{{ $country->currency }}"
                                                                data-rate="{{ $country->rate }}"
                                                                data-fixed_charge="{{ $country->fixed_charge }}"
                                                                data-percent_charge="{{ $country->percent_charge }}"
                                                                data-image="{{ getImage(getFilePath('country') . '/' . $country->image, getFileSize('country')) }}"
                                                                data-name="{{ $country->name }}">
                                                            {{ $country->currency }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 charge-section">
                                            <ul class="list list--column timeline-list">
                                                <li class="list__item timeline-list__item">
                                                    <span class="timeline-list__dot"></span>
                                                    <div class="timeline-list__content justify-content-between">
                                                        <div class="timeline-list__left">
                                                            <span class="d-block sm-text">@lang('CHARGE')
                                                                <span class="chargeInfo" data-bs-toggle="tooltip" title="Input amount to view charge rate">
                                                                    <i class="fa fa-info-circle"></i>
                                                                </span>
                                                            </span>
                                                        </div>
                                                        <div class="timeline-list__right">
                                                            +
                                                            <span class="charge-amount-text">0</span>
                                                            <span class="sending-currency"></span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list__item timeline-list__item">
                                                    <span class="timeline-list__dot"></span>
                                                    <div class="timeline-list__content justify-content-between">
                                                        <div class="timeline-list__left">
                                                            <span class="d-block heading-clr">
                                                                @lang('Payable Amount')
                                                            </span>
                                                        </div>
                                                        <div class="timeline-list__right">
                                                            <span class="d-block heading-clr">
                                                                <span class="final-amount-text">0</span>
                                                                <span class="sending-currency"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn--xl btn--base w-100 btn--xl">
                                                @lang('Send Now')
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

	<div class="col-lg-6 offset-lg-3 col-12">
						<div class="section-title bg">
							<h2>Linc vous propose d'envoyer de l'argent à vos amis et à votre famille à bas prix et de manière simple<span></span></h2>
							<p> </p>
							<div class="icon"><i class="fa fa-paper-plane"></i></div>
						</div>
					</div>
					
<!-- Hero End -->

@push('script')
    <script>
        (function($) {
            "use strict";
            let sender = $('.sending-parent').find('select');
            let receiver = $('.recipient-parent').find('select');

            let sendingAmount = 0;
            let recipientAmount = 0;

            var sendingCountry = sender.find(":selected");
            var recipientCountry = receiver.find(":selected");
            let displayError = false;
            let senderInput = false;
            let recipientInput = false;

            let charge = 0;
            var finalAmount = 0;
            var baseCurrencyAmount = 0;

            resetValues();
            seDialCode();

            function seDialCode() {
                $('.dial-code').text('+' + receiver.find(':selected').data('dial_code'))
            }

            displayError = true;

            sender.on('change', function() {
                sendingCountry = $(this).find(":selected");
                resetValues();
            });

            receiver.on('change', function() {
                seDialCode();
                recipientCountry = $(this).find(":selected");
                resetValues();
            });

            $(".sending-amount").on('input', function() {
                sendingAmount = $(this).val();
                recipientAmount = 0;
                senderInput = true;
                recipientInput = false;
                resetValues();
            });

            $(".recipient-amount").on('input', function() {
                recipientAmount = $(this).val();
                sendingAmount = 0;
                senderInput = false;
                recipientInput = true;
                resetValues();
            });

            function getCharge() {
                var fixedCharge = recipientCountry.data('fixed_charge') * 1;
                var percentCharge = recipientCountry.data('percent_charge') * 1;

                var sendingRate = sendingCountry.data('rate');
                var recipientRate = recipientCountry.data('rate');
                var conversionRate = recipientRate / sendingRate;
                $('.exchange-rate').text((conversionRate.toFixed(3)));
                $('.chargeInfo').attr('data-bs-original-title', fixedCharge + ' ' + recipientCountry.data('currency') + ' + ' + percentCharge + '% of total recipient amount. It will be converted to sending currency.');


                if (sendingAmount) {
                    recipientAmount = (conversionRate * sendingAmount).toFixed(2);
                } else if (recipientAmount) {
                    sendingAmount = (recipientAmount / conversionRate).toFixed(2);
                } else {
                    sendingAmount = 0;
                    recipientAmount = 0;
                    return 0
                }
                return (((fixedCharge * 1) + ((recipientAmount * percentCharge) / 100)) * (sendingRate / recipientRate)).toFixed(2);
            }

            function resetValues() {
                charge = getCharge() * 1;
                finalAmount = charge + parseFloat(sendingAmount);
                baseCurrencyAmount = finalAmount / sendingCountry.data('rate');
                updateDom();

                if (!sendingAmount && !recipientAmount) {
                    $('.sending-amount').val('');
                    $('.recipient-amount').val('');

                    if (displayError) {
                        showError();
                    }

                    sendingAmount = 0;
                }
            }

            function updateDom() {
                $('.error-section').addClass('d-none');
                if (recipientInput) {
                    $('.sending-amount').val(sendingAmount ? sendingAmount : null);
                }
                if (senderInput) {
                    $('.recipient-amount').val(recipientAmount ? recipientAmount : null);
                }
                $('.sending-currency').text(sendingCountry.data('currency'));
                $('.recipient-currency').text(recipientCountry.data('currency'));
                $('.charge-amount-text').text(charge);
                $('.base-amount-text').text(baseCurrencyAmount.toFixed(2));
                $('.final-amount-text').text(finalAmount.toFixed(2));
            }

            function showError() {
                $('.error-text').text('Please Enter an amount');
                $('.error-section').removeClass('d-none');
            }

            disableSelectedCountry();

            $('.sending-currency').text(sender.find(":selected").data('currency'));
            $('.recipient-currency').text(receiver.find(":selected").data('currency'));

            function disableSelectedCountry() {
                sender.find(':disabled').removeAttr('disabled')
                receiver.find(':disabled').removeAttr('disabled')
                let selectedSenderID = sender.find(':selected').data('id');
                let selectedReceiverID = receiver.find(':selected').data('id');
                sender.find(`[data-id=${selectedReceiverID}]`).attr('disabled', 'disabled');
                receiver.find(`[data-id=${selectedSenderID}]`).attr('disabled', 'disabled');
            }

            // Change Flags on load
            function formatState(state) {
                if (!state.id) return state.text;
                return $('<img  src="' + $(state.element).data('image') + '"/> <span >' + state.text + '</span>');
            }

            $('.country-picker').select2({
                templateResult: formatState
            });

            $('.country-picker').on('change', function() {
                disableSelectedCountry();
                changeSelectedCountryFlag();
            });

            // Change Flags on load
            changeSelectedCountryFlag();

            function changeSelectedCountryFlag() {
                $('.sending-parent .select2-selection__rendered').html(flagImageHtml(sender.find(':selected')));
                $('.recipient-parent .select2-selection__rendered').html(flagImageHtml(receiver.find(':selected')));
            }

            function flagImageHtml(data) {
                return `<img class="exchange-form__flags" src="${data.data('image')}" class="state-flags"/> ${data.text()}`
            }
        })(jQuery);
    </script>
@endpush

@push('style')
    <style>
        .select2-container--default .select2-results__option[aria-disabled=true] {
            display: none;
        }
    </style>
@endpush
