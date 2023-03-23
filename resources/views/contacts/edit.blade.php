@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Edit Contact</h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Dashbord</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                                    </li>
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Contact Info</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Edit Contact </span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('contact-info.update',$notes->id)}}" enctype="multipart/form-data">
                              
                                   {{ method_field('PATCH') }}
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Contact Type</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="contact_type" placeholder="" value="{{$notes->contact_type}}" >
                                                </div>
                                            </div>
                                          </div>
                                          <div class="row row--md">
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Contact Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="contact_name" placeholder="" value="{{$notes->contact_name}}" >
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row row--md">
                                             <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Jobs</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="job_id" data-placeholder="">
                                                        <option value="0" selected="selected">Select Jobs </option>
                                                        @if(!empty($jobs))
                                                        @foreach($jobs as $job)
                                                        <option value="{{ $job->id }}" <?php if($notes->job_id == $job->id){echo 'selected';}?>>{{ $job->title }} </option>
                                                        @endforeach
                                                        @endif
                                                      
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row row--md">
                                              <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Communication Type</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="communication_type" data-placeholder="">
                                                        <option value="0" selected>Select type </option>
                                                        <option value="Phone" <?php if($notes->communication_type == 'Phone'){echo 'selected';}?>>Phone</option>
                                                        <option value="Email" <?php if($notes->communication_type == 'Email'){echo 'selected';}?>>Email</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Number/Email </label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="value" placeholder="" value="{{$notes->value}}" >
                                                </div>
                                            </div>
                                            </div>
                                           
                                            <div class="row row--md">
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Preferred</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="preferred" data-placeholder="">
                                                        <option value="1"  <?php if($notes->preferred == '1'){echo 'selected';}?>>Preferred On </option>
                                                        <option value="0" <?php if($notes->preferred == '0'){echo 'selected';}?>>Preferred Off</option>
                                                        <option value="2" <?php if($notes->preferred == '2'){echo 'selected';}?>>Other</option>
                                                       
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                           
                                            
                                           
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Update</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="products.html"><span class="button__text">Cancel</span></a>
                                            </div>
                                        </div>
                                    </div>
                              
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@stop
@section('scripts')

@stop
