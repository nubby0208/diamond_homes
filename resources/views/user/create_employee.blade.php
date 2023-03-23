@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Add Employee</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Employee</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Employee</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('employees.stored')}}" enctype="multipart/form-data">
                              
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-1 form-group form-group--lg">
                                                <label class="form-label">Title</label>
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
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">User Name</label>
                                                <div class="input-group" >
                                                     <input class="input" type="text" name="user_name" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">First Name</label>
                                                <div class="input-group" >
                                                     <input class="input" type="text" name="first_name" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Last Name</label>
                                                <div class="input-group" >
                                                     <input class="input" type="text" name="last_name" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Email Address</label>
                                                <div class="input-group" >
                                                     <input class="input" type="email" name="email" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Phone Number</label>
                                                <div class="input-group" >
                                                     <input class="input" type="number" name="phone" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                            
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Password</label>
                                                <div class="input-group" >
                                                     <input class="input" type="password" name="password" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                            
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">IRD Number</label>
                                                <div class="input-group" >
                                                     <input class="input" type="text" name="idr_number" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                               <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">City</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="city" data-placeholder="">
                                                         <option value="0">Select City</option>
                                                          <option value="Auckland">Auckland</option>
                                                          <option value="Wellington">Wellington</option>
                                                          <option value="Christchurch">Christchurch</option>
                                                     
                                                      
                                                    </select>
                                                     <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Country</label>
                                                <div class="input-group" >
                                                     <input class="input" type="text" name="country" placeholder="" value="New Zealand" autocomplete="off"  disabled>
                                                   
                                                </div>
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Language</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="language" data-placeholder="">
                                                      <option value="0">Select language</option>
                                                      <option value="English">English</option>
                                                      <option value="Mandarin">Mandarin</option>>
                                                     
                                                      
                                                    </select>
                                                     <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                           
                                            
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Address</label>
                                                <textarea rows="3" class="form-control" name="address"></textarea>
                                               
                                            </div>
                                           
                                              
                                            
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Create</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="{{url('employees')}}"><span class="button__text">Cancel</span></a>
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
