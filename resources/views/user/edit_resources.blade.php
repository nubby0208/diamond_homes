@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">{{ $title }}</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Resources</span>
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
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('inforesources.update', $user->id)}}" enctype="multipart/form-data">
                              
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Resources Type</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="resources_type" data-placeholder="">
                                                      <option value="New" <?php if($user->resources_type =='New') { echo "selected"; } ?>>New</option>
                                                      <option value="Health & Safety" <?php if($user->resources_type =='Health & Safety') { echo "selected"; } ?>>Health & Safety</option>
                                                      <option value="Trades" <?php if($user->resources_type =='Trades') { echo "selected"; } ?>>Trades</option>
                                                      <option value="Quality" <?php if($user->resources_type =='Quality') { echo "selected"; } ?>>Quality</option>
                                                      <option value="Kainga Ora" <?php if($user->resources_type =='Kainga Ora') { echo "selected"; } ?>>Kainga Ora</option>
                                                      <option value="Tamkai" <?php if($user->resources_type =='Tamkai') { echo "selected"; } ?>>Tamkai</option>
                                                      <option value="Training Videos" <?php if($user->resources_type =='Training Videos') { echo "selected"; } ?>>Training Videos</option>
                                                    </select>
                                                     <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Name</label>
                                                <div class="input-group" >
                                                     <input class="input" type="text" name="name" placeholder="" value="{{ $user->name }}" required>
                                                   
                                                </div>
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Expires Date</label>
                                                <div class="input-group" >
                                                     <input class="input" type="date" name="expires" placeholder="" value="{{ $user->expires }}" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">File Uplaods</label>
                                                <div class="input-group"  style="border: dashed 2px #ddd;">
                                                     <input class="input" type="file" name="file_name" placeholder="" value=""  >
                                                    
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="col-6 form-group form-group--lg">
                                                <label class="form-label">Uplaoded File</label>
                                                <div class="input-group"  style="border: dashed 2px #ddd;padding: 10px;">
                                                     
                                                    {{ $user->file_name }}
                                                   
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Update</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="{{url('info-resources')}}"><span class="button__text">Cancel</span></a>
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
