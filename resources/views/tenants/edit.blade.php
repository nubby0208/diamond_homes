@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Edit Tenant</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Tenants</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Edit Tenant</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                           <form class="add-product__form" method="post" action="{{route('tenants.update',$notes->id)}}" enctype="multipart/form-data">
                              {{ method_field('PATCH') }}
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-8 form-group form-group--lg">
                                                <label class="form-label">Action</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="to_from" placeholder="" value="{{$notes->to_from}}" >
                                                </div>
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
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
                                              <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Entered by</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="entered_by" data-placeholder="">
                                                        <option value="0" selected>Select Entered by </option>
                                                        @if(!empty($users))
                                                        @foreach($users as $user)
                                                        <option value="{{$user->first_name}}" <?php if($notes->entered_by == $user->first_name) { echo "selected"; } ?>>{{$user->title}} {{$user->first_name}} {{$user->last_name}} </option>
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
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label"> Notified to</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="notified_to" data-placeholder="">
                                                        <option value="0" selected>Select Notified to </option>
                                                        @if(!empty($users))
                                                        @foreach($users as $user)
                                                        <option value="{{$user->first_name}}" <?php if($notes->notified_to == $user->first_name) { echo "selected"; } ?>>{{$user->title}} {{$user->first_name}} {{$user->last_name}} </option>
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
                                            
                                            
                                            
                                            
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Message</label>
                                                <textarea rows="10" class="form-control" name="message">{{ $notes->message }} </textarea>
                                               
                                            </div>
                                           
                                              
                                            
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Update</span>
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
