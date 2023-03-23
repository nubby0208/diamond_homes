@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Edit Exemptions</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Exemptions</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Edit Exemptions</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('exemptions.update',$notes->id)}}" enctype="multipart/form-data">
                              {{ method_field('PATCH') }}
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        
                                        
                                        
                                           <div class="row row--md">
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Exemptions</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="exemptions_type" placeholder="Exemptions" value="{{$notes->exemptions_type}}" required>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Jobs</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="job_id" data-placeholder="">
                                                        <option value="0" selected="selected">Select Jobs </option>
                                                        @if(!empty($jobs))
                                                        @foreach($jobs as $job)
                                                        <option value="{{ $job->id }}" <?php if($notes->job_id == $job->id) { echo "selected"; } ?>>{{ $job->title }} </option>
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
                                                <label class="form-label">Exemptions By </label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="exemptions_by" data-placeholder="">
                                                        <option value="0" selected>Select User </option>
                                                        @if(!empty($users))
                                                        @foreach($users as $user)
                                                        <option value="{{$user->first_name}}" <?php if($notes->exemptions_by == $user->first_name) { echo "selected"; } ?>>{{$user->title}} {{$user->first_name}} {{$user->last_name}} </option>
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
                                                <label class="form-label">EOT Type</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="eot_type" data-placeholder="">
                                                        <option value="Online" <?php if($notes->eot_type == 'Online') { echo "selected"; } ?>>Online</option>
                                                        <option value="Offline" <?php if($notes->eot_type == 'Offline') { echo "selected"; } ?>>Offline</option>
                                                        <option value="Other" <?php if($notes->eot_type == 'Other') { echo "selected"; } ?>>Other</option>
                                                       
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                              <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">EOT Dand & Time</label>
                                                <div class="input-group">
                                                    <input class="input" type="datetime-local" name="eot_date_time"  value="{{ $notes->eot_date_time }}">
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Reason</label>
                                                
                                                <div class="input-group" >
                                                 <input class="input" type="text" name="reason" value="{{ $notes->reason }}" >
                                                </div>
                                            </div>
                                            
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Additional Reason</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="additional_reason" value="{{ $notes->additional_reason }}" >
                                                </div>
                                            </div>
                                             <div class="col-8 form-group form-group--lg">
                                                <label class="form-label">Acknowledged</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="acknowledged"  value="{{ $notes->acknowledged }}">
                                                </div>
                                            </div>
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Acknowledged By</label>
                                                 <div class="input-group input-group--append" >
                                                  <select class="input js-input-select input--fluid" name="acknowledged_by" data-placeholder="">
                                                     <option value="0" selected>Select User </option>
                                                        @if(!empty($users))
                                                        @foreach($users as $user)
                                                          <option value="{{$user->first_name}}" <?php if($notes->acknowledged_by == $user->first_name) { echo "selected"; } ?>>{{$user->title}} {{$user->first_name}} {{$user->last_name}} </option>
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
                                                <label class="form-label">Notes</label>
                                                <textarea rows="6" class="form-control" name="notes">  {{ $notes->notes }}</textarea>
                                               
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
