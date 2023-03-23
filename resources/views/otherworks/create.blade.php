@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Add Other Work</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Other Works</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Other Work</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('otherworks.store')}}" enctype="multipart/form-data">
                              
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Order Id</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="order_id" placeholder="" value="" required>
                                                </div>
                                            </div>
                                              <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Client Ref</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="client_ref" placeholder="" value="" required>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Jobs</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="job_id" data-placeholder="">
                                                        <option value="0" selected="selected">Select Jobs </option>
                                                        @if(!empty($jobs))
                                                        @foreach($jobs as $job)
                                                        <option value="{{ $job->id }}" >{{ $job->title }} </option>
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
                                            
                                            
                                              <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Status </label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="status" data-placeholder="">
                                                        <option value="0" selected>Select status  </option>
                                                        <option value="PAI" >PAI </option>
                                                        <option value="CAN">CAN</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                              <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Priority</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="priority" placeholder="" value="" required>
                                                </div>
                                            </div>
                                           
                                            
                                            
                                            
                                            
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description</label>
                                                <textarea rows="10" class="form-control" name="description"></textarea>
                                               
                                            </div>
                                           
                                              
                                            
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Create</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="#"><span class="button__text">Cancel</span></a>
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
