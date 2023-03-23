@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Edit Note</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Notes</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Edit Note</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('notes.update',$notes->id)}}" enctype="multipart/form-data">
                              {{ method_field('PATCH') }}
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-5 form-group form-group--lg">
                                                <label class="form-label">Title</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="title" placeholder="" value="{{$notes->title}}" >
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Jobs</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="job_id" data-placeholder="">
                                                        <option value="0" >Select Jobs </option>
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
                                             <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">Audience</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="audiences" data-placeholder="">
                                                         <option value="0" selected>Select audience </option>
                                                        <option value="SHL"  <?php if($notes->audiences == 'SHL') { echo "selected"; } ?>>SHL </option>
                                                        <option value="My Staff" <?php if($notes->audiences == 'My Staff') { echo "selected"; } ?>>My Staff </option>
                                                        <option value="My Employer" <?php if($notes->audiences == 'My Employer') { echo "selected"; } ?>>My Employer</option>
                                                        <option value="Genral" <?php if($notes->audiences == 'Genral') { echo "selected"; } ?>>Genral</option>
                                                        <option value="Trades" <?php if($notes->audiences == 'Trades') { echo "selected"; } ?>>Trades</option>
                                                      
                                                       
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                             <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">Type</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="note_type" data-placeholder="">
                                                        <option value="0" selected>Select Type </option>
                                                        <option value="Follow On"  <?php if($notes->note_type == 'Follow On') { echo "selected"; } ?>>Follow On   </option>
                                                        <option value="Appointment" <?php if($notes->note_type == 'Appointment') { echo "selected"; } ?>>Appointment</option>
                                                        <option value="Contact Tracing" <?php if($notes->note_type == 'Contact Tracing') { echo "selected"; } ?>>Contact Tracing</option>
                                                        <option value="Other" <?php if($notes->note_type == 'Other') { echo "selected"; } ?>>Other</option>
                                                        
                                                       
                                                       
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" rows="15" name="description">{{$notes->description}}</textarea>
                                               
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
