@section('styles')
<style>
.customer-account {
    grid-template-columns: 300px 1fr;
}
</style>
@stop
@extends('layouts.app')

@section('content')
 
 <div class="container">
                <div class="page-header">
                    <h1 class="page-header__title">{{ $title }}</h1>
                </div>
                <div class="page-tools">
                    <div class="page-tools__breadcrumbs">
                        <div class="breadcrumbs">
                            <div class="breadcrumbs__container">
                                <ol class="breadcrumbs__list">
                                    <li class="breadcrumbs__item">
                                        <a class="breadcrumbs__link" href="index.html">
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">{{ $title }}</span>
                                    </li>
                                </ol>
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
                                                <image id="profileImage" width="700" height="700" xlink:href='img/content/avatar-full.jpg' />
                                            </defs>
                                        </svg>
                                    </div>
                                    <h4 class="customer-profile__title">{{ $users->title }} {{ $users->first_name }} </h4>
                                  
                                </div>
                                <div class="card__footer">
                                    <div class="card__container">
                                        <ul class="customer-profile__address">
                                            <li>
                                                <svg class="icon-icon-location">
                                                    <use xlink:href="#icon-location"></use>
                                                </svg>{{ $users->address }}
                                            </li>
                                            <li>
                                                <svg class="icon-icon-email">
                                                    <use xlink:href="#icon-email"></use>
                                                </svg> <a href="mailto:#">{{ $users->email }}</a>
                                            </li>
                                            <li>
                                                <svg class="icon-icon-phone">
                                                    <use xlink:href="#icon-phone"></use>
                                                </svg> <a href="tel:#">{{ $users->phone }}</a>
                                            </li>
                                        </ul>
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
                                        <h3 class="card__header-title">Full Details</h3>
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
                                            <div class="card-list__title col-auto">Full Name</div>
                                            <div class="card-list__value col">{{ $users->title }} {{ $users->first_name }} {{ $users->last_name }}</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Address</div>
                                            <div class="card-list__value col">{{ $users->address }} </div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">City</div>
                                            <div class="card-list__value col">{{ $users->city }}</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Country</div>
                                            <div class="card-list__value col">{{ $users->country }}</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Email Address</div>
                                            <div class="card-list__value col">{{ $users->email }}</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Language</div>
                                            <div class="card-list__value col">{{ $users->language }}</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Phone</div>
                                            <div class="card-list__value col">{{ $users->phone }}</div>
                                        </li>
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">IRD Number</div>
                                            <div class="card-list__value col">{{ $users->idr_number }}</div>
                                        </li>
                                        
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Role</div>
                                            <div class="card-list__value col">{{ $users->user_type }}</div>
                                        </li>
                                        
                                        <li class="row row--xs">
                                            <div class="card-list__title col-auto">Register date</div>
                                            <div class="card-list__value col">{{ $users->created_at }}</div>
                                        </li>
                                       
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
             <div class="modal modal-account modal-compact scrollbar-thin" id="accountEdit" data-simplebar>
        <div class="modal__overlay" data-dismiss="modal"></div>
        <div class="modal__wrap">
            <div class="modal__window">
                <div class="modal__content">
                    <button class="modal__close" data-dismiss="modal">
                        <svg class="icon-icon-cross">
                            <use xlink:href="#icon-cross"></use>
                        </svg>
                    </button>
                    <div class="modal__body">
                        <div class="modal-account__content">
                            <div class="modal-account__left">
                                <div class="modal-account__upload profile-upload js-profile-upload">
                                    <input class="profile-upload__input" type="file" name="file_upload" accept="image/png, image/jpeg">
                                    <svg class="profile-upload__thumbnail" viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g filter="url(#filter0)">
                                            <path d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z" fill="white" />
                                        </g>
                                        <g filter="url(#filter1)">
                                            <path d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                            fill="url(#pattern1)" />
                                        </g>
                                        <path class="profile-upload__overlay" opacity="0.6" d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13899 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                        fill="#44566C" />
                                        <defs>
                                            <filter id="filter0" x="23" y="183" width="206" height="89" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                            <filter id="filter1" x="0" y="0" width="252" height="252" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
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
                                            <pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
                                                <use xlink:href="#profileImageAddPlaceholder" transform="scale(0.00142857)" />
                                                <use xlink:href="#profileImageAdd" transform="scale(0.00142857)" />
                                            </pattern>
                                            <image id="profileImageAddPlaceholder" width="700" height="700" xlink:href='img/content/placeholder.svg' />
                                            <image id="profileImageAdd" class="profile-upload__image" width="700" height="700" xlink:href='#' />
                                        </defs>
                                    </svg>
                                    <div class="profile-upload__label">
                                        <svg class="icon-icon-camera" width="50px" height="50px">
                                            <use xlink:href="#icon-camera"></use>
                                        </svg>
                                        <p class="mb-0">Click & Drop
                                            <br>to change photo</p>
                                    </div>
                                </div>
                                <div class="modal-account__tabs nav">
                                    <a class="modal-account__tab active" data-toggle="tab" href="#accountDetails">
                                        <svg class="icon-icon-details">
                                            <use xlink:href="#icon-details"></use>
                                        </svg>Account Details</a>
                                    <a class="modal-account__tab" data-toggle="tab" href="#accountShippingAddress">
                                        <svg class="icon-icon-truck">
                                            <use xlink:href="#icon-truck"></use>
                                        </svg> Address Details</a>
                                    <a class="modal-account__tab" data-toggle="tab" href="#accountPayment">
                                        <svg class="icon-icon-credit-card">
                                            <use xlink:href="#icon-credit-card"></use>
                                        </svg>Change Password</a>
                                </div>
                            </div>
                            <div class="modal-account__right tab-content">
                                <div class="modal-account__pane tab-pane show active" id="accountDetails">
                                    <div class="modal-account__pane-header">
                                        <h2>Account details</h2>
                                    </div>
                                    <form action="{{ route('profile.update',$users->id) }}" method="post">
                                        @csrf
                                        <div class="row row--md">
                                              <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Title (optional):</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="title" data-placeholder="">
                                                          <option value="Mr">Mr.</option>
                                                          <option value="Mrs">Mrs</option>
                                                          <option value="Ms">Ms</option>
                                                          <option value="Miss">Miss</option>
                                                    </select>
                                                    <span class="input-group__arrow">
						                              <svg class="icon-icon-keyboard-down">
						                                <use xlink:href="#icon-keyboard-down"></use>
						                              </svg>
						                            </span>
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">First Name: *</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="" name="first_name" value="{{ $users->first_name }}" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Last Name: *</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" placeholder="" name="last_name" value="{{ $users->last_name }}" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">E-Mail: *</label>
                                                <div class="input-group">
                                                    <input class="input" type="email" placeholder="" name="email" value="{{ $users->email }}" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Phone: *</label>
                                                <div class="input-group">
                                                    <input class="input" type="number" name="phone" placeholder="" value="{{ $users->phone }}" >
                                                </div>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="modal-account__form-submit">
                                            <button class="button button--primary button--load" type="submit"><span class="button__icon button__icon--left">
                                                <svg class="icon-icon-refresh">
                                                  <use xlink:href="#icon-refresh"></use>
                                                </svg></span><span class="button__text">Update</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-account__pane tab-pane" id="accountShippingAddress">
                                    <div class="modal-account__pane-header">
                                        <h2> Address Update</h2>
                                    </div>
                                     <form action="{{ route('address.update',$users->id) }}" method="post">
                                        @csrf
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Country: </label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="country" placeholder="" value="{{ $users->country }}" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">City: </label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="city" placeholder="" value="{{ $users->city }}" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">House Number and Street: </label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="address" placeholder="" value="{{ $users->address }}" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Language: </label>
                                                <div class="input-group">
                                                    <input class="input js-zip-code" name="language" type="text" placeholder="" value="{{ $users->language }}" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">IRD Number: </label>
                                                <div class="input-group">
                                                    <input class="input js-phone-number" name="idr_number"  type="text" value="{{ $users->idr_number }}" placeholder="" >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-account__form-submit">
                                            <button class="button button--primary button--load" type="submit"><span class="button__icon button__icon--left">
                                                <svg class="icon-icon-refresh">
                                                  <use xlink:href="#icon-refresh"></use>
                                                </svg></span><span class="button__text">Update</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-account__pane tab-pane" id="accountPayment">
                                    <div class="modal-account__pane-header">
                                        <h2>Change Password</h2>
                                    </div>
                                     <form action="#" method="post">
                                        @csrf
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Password</label>
                                                <div class="input-group">
                                                    <input class="input" type="password" name="password" >
                                                </div>
                                            </div>
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label form-label--sm">Confirm Password</label>
                                                <div class="input-group input-group--append">
                                                    <input class="input js-card-number" type="password" name="confirm_password" ><span class="input-group__append"></span>
                                                </div>
                                            </div>
                                            
                                         
                                        </div>
                                        <div class="modal-account__form-submit">
                                            <button class="button button--primary button--load" type="submit"><span class="button__icon button__icon--left">
                                                <svg class="icon-icon-refresh">
                                                  <use xlink:href="#icon-refresh"></use>
                                                </svg></span><span class="button__text">Update</span>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
@stop
