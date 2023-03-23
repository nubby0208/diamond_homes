  
@extends('layouts.app')
@section('content')
  <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">Account</h1>
                </div>
                <div class="page-tools">
                    <div class="page-tools__breadcrumbs">
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <ol class="breadcrumbs__list">
                                    <li class="breadcrumbs__item">
                                        <a class="breadcrumbs__link" href="#">
                                            <svg class="icon-icon-home breadcrumbs__icon">
                                                <use xlink:href="#icon-home"></use>
                                            </svg>
                                            <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                <use xlink:href="#icon-keyboard-right"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Dashboard</span>
                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                          <use xlink:href="#icon-keyboard-right"></use>
                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Account</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon button-icon--grey-dark" href="#" data-modal="#accountEdit" data-toggle-tab="#accountDetails"><span class="button-icon__icon">
                      <svg class="icon-icon-task">
                        <use xlink:href="#icon-task"></use>
                      </svg></span></a>
                            </div>
                            <div class="page-tools__right-item"><a class="button-icon button-icon--grey-dark" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-trash">
                        <use xlink:href="#icon-trash"></use>
                      </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="customer-account">
                    <div class="customer-account__item-1 customer-profile customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__body">
                                    <div class="customer-profile__avatar">
                                        <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g filter="url(#filter0_dd)">
                                                <path d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z" fill="white" />
                                            </g>
                                            <g filter="url(#filter1_dd)">
                                                <path d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                fill="url(#pattern0)" />
                                            </g>
                                            <defs>
                                                <filter id="filter0_dd" x="23" y="183" width="206" height="89" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="8" />
                                                    <feGaussianBlur stdDeviation="8" />
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="16" />
                                                    <feGaussianBlur stdDeviation="16" />
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow" />
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape" />
                                                </filter>
                                                <filter id="filter1_dd" x="0" y="0" width="252" height="252" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="12" />
                                                    <feGaussianBlur stdDeviation="8" />
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0" />
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                    <feOffset dy="2" />
                                                    <feGaussianBlur stdDeviation="2" />
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0" />
                                                    <feBlend mode="normal" in2="effect1_dropShadow" result="effect2_dropShadow" />
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow" result="shape" />
                                                </filter>
                                                <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                    <use xlink:href="#profileImage" transform="scale(0.00142857)" />
                                                </pattern>
                                                <image id="profileImage" width="700" height="700" xlink:href='{{asset("img/content/avatar-full.jpg")}}' />
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="customer-profile__title">Felecia Burke</h4>
                                    <div class="customer-profile__balance">
                                        <div class="label label--primary label--lg"><span class="label__icon">
                          <svg class="icon-icon-wallet">
                            <use xlink:href="#icon-wallet"></use>
                          </svg></span> Balance: $5,000</div>
                                    </div>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="customer-account__item-2 customer-shipping customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title"> Address</h3>
                                    </div>
                                    <div class="customer-card__header-right">
                                        <button class="button-icon button-icon--transparent" data-modal="#accountEdit" data-toggle-tab="#accountShippingAddress"><span class="button-icon__icon">
                          <svg class="icon-icon-task">
                            <use xlink:href="#icon-task"></use>
                          </svg></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <ul class="card-list">
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Address</div>
                                            <div class="card-list__value col">898 Joanne Lane street</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">City</div>
                                            <div class="card-list__value col">Hong Kong</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Country</div>
                                            <div class="card-list__value col">China</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Zip code</div>
                                            <div class="card-list__value col">02110</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="customer-account__item-3 customer-payment customer-card card">
                        <div class="card__wrapper">
                            <div class="card__container">
                                <div class="card__header">
                                    <div class="card__header-left">
                                        <h3 class="card__header-title">Payment methods</h3>
                                    </div>
                                    <div class="customer-card__header-right">
                                        <button class="button-icon button-icon--transparent" data-modal="#accountEdit" data-toggle-tab="#accountPayment"><span class="button-icon__icon">
                          <svg class="icon-icon-task">
                            <use xlink:href="#icon-task"></use>
                          </svg></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="card__body">
                                    <div class="card__credit-card">
                                        <div class="credit-card">
                                            <img class="credit-card__image" src="{{asset('img/content/credit-card.svg')}}" alt="#" />
                                            <div class="credit-card__number-wrapper">
                                                <input class="credit-card__number-input" type="text" value="0123456789101112" readonly="readonly" />
                                                <div class="credit-card__number">
                                                    <div class="credit-card__number-item">0123</div>
                                                    <div class="credit-card__number-item">4567</div>
                                                    <div class="credit-card__number-item">8910</div>
                                                    <div class="credit-card__number-item">1112</div>
                                                </div>
                                            </div>
                                            <div class="credit-card__name">
                                                <div class="credit-card__caption">Card Holder</div>Felecia Burke
                                            </div>
                                            <div class="credit-card__date">
                                                <div class="credit-card__caption">Expire</div><span>12/31</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <div class="card__credit-list">
                                            <ul class="card-list">
                                                <li class="row row--xs">
                                                    <div class="card-list__title col-auto">Card Type</div>
                                                    <div class="card-list__value col">VISA</div>
                                                </li>
                                                <li class="row row--xs">
                                                    <div class="card-list__title col-auto">Card Holder</div>
                                                    <div class="card-list__value col">Felecia Burke</div>
                                                </li>
                                                <li class="row row--xs">
                                                    <div class="card-list__title col-auto">Expire</div>
                                                    <div class="card-list__value col">12/31</div>
                                                </li>
                                                <li class="row row--xs">
                                                    <div class="card-list__title col-auto">Card Number</div>
                                                    <div class="card-list__value col">0123 4567 8910 1112</div>
                                                </li>
                                                <li class="row row--xs">
                                                    <div class="card-list__title col-auto">Balance</div>
                                                    <div class="card-list__value col">$1,000,000</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
@stop