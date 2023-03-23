@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Add Info</h1>
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Dashbord</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                                    </li>
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Info</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Info</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                             <form class="add-product__form" method="post" action="{{route('info.update',$job->id)}}" enctype="multipart/form-data">
                              {{ method_field('PATCH') }}
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Title</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="title" placeholder="" value="{{$job->title}}" >
                                                </div>
                                            </div>
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Job Code</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="job_code" placeholder="" value="{{$job->job_code}}" >
                                                </div>
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">UOM</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="uom" placeholder="" value="{{$job->uom}}" >
                                                </div>
                                            </div>
                                            
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Job Category</label>
                                                
                                                 <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid"  name="job_category" data-placeholder="">
                                                       <option value="0" selected="selected">Select Category</option>
                                                        <option value="Scoping" <?php if($job->job_category == "Scoping"){echo "selected"; }?>>Scoping</option>
                                                        <option value="Car" <?php if($job->job_category == "Car"){echo "selected"; }?>>Car</option>
                                                        <option value="Trade" <?php if($job->job_category == "Trade"){echo "selected"; }?>>Trade</option>
                                                        <option value="GGS Only" <?php if($job->job_category == "GGS Only"){echo "selected"; }?>>GGS Only</option>
                                                        <option value="Left Card" <?php if($job->job_category == "Left Card"){echo "selected"; }?>>Left Card</option>
                                                      
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                
                                
                                               
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Contract Start Date</label>
                                                <div class="input-group">
                                                    <input class="input" type="date" name="start_date" placeholder="" value="{{$job->start_date}}" >
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Contract End Date</label>
                                                <div class="input-group">
                                                    <input class="input" type="date" name="end_date" placeholder="" value="{{$job->end_date}}" >
                                                </div>
                                            </div>
                                            
                                               <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Version</label>
                                                
                                                 <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid"  name="version" data-placeholder="">
                                                       <option value="0" selected="selected">Select Year</option>
                                                        <option value="2020" <?php if($job->version == "2020"){echo "selected"; }?>>2020</option>
                                                        <option value="2021"  <?php if($job->version == "2021"){echo "selected"; }?>>2021</option>
                                                        <option value="2022"  <?php if($job->version == "2022"){echo "selected"; }?>>2022</option>
                                                        <option value="2023"  <?php if($job->version == "2023"){echo "selected"; }?>>2023</option>
                                                        <option value="2024"  <?php if($job->version == "2024"){echo "selected"; }?>>2024</option>
                                                        <option value="2025"  <?php if($job->version == "2025"){echo "selected"; }?>>2025</option>
                                                        <option value="2026"  <?php if($job->version == "2026"){echo "selected"; }?>>2026</option>
                                                        <option value="2027"  <?php if($job->version == "2027"){echo "selected"; }?>>2027</option>
                                                        <option value="2028"  <?php if($job->version == "2028"){echo "selected"; }?>>2028</option>
                                                        <option value="2029"  <?php if($job->version == "2029"){echo "selected"; }?>>2029</option>
                                                        <option value="2030"  <?php if($job->version == "2030"){echo "selected"; }?>>2030</option>
                                                      
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                
                                
                                               
                                            </div>
                                            
                                           
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Area</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="area" placeholder="" value="{{$job->area}}" >
                                                </div>
                                            </div>
                                           
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description</label>
                                                <textarea rows="6" class="form-control" name="description">{{$job->description}}</textarea>
                                               
                                            </div>
                                             
                                            
                                             
                                            
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Update</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="{{url('info')}}"><span class="button__text">Cancel</span></a>
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
