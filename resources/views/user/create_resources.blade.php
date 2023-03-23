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
                            <form class="add-product__form" method="post" action="{{route('inforesources.store')}}" enctype="multipart/form-data">
                              
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Resources Type</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="resources_type" data-placeholder="">
                                                      <option value="New">New</option>
                                                      <option value="Health & Safety">Health & Safety</option>
                                                      <option value="Trades">Trades</option>
                                                      <option value="Quality">Quality</option>
                                                      <option value="Kainga Ora">Kainga Ora</option>
                                                      <option value="Tamkai">Tamkai</option>
                                                      <option value="Training Videos">Training Videos</option>
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
                                                     <input class="input" type="text" name="name" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Expires Date</label>
                                                <div class="input-group" >
                                                     <input class="input" type="date" name="expires" placeholder="" value="" required>
                                                   
                                                </div>
                                            </div>
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">File Uplaods</label>
                                                <div class="input-group"  style="border: dashed 2px #ddd;">
                                                     <input class="input" type="file" name="file_name" placeholder="" value="" style="width: 100%;height: 150px;z-index: 9999;opacity: 0;margin: 100px;border: solid #ddd;cursor: pointer;" required>
                                                     <button class="btn btn-primary" style="position: absolute;top: 35%;left: 40%;width: 350px;height: 45px;">Uploads File</button>
                                                     <p style="position: absolute;top: 50%;left: 45%;font-size: 24px;text-align: center;">Or<br> drag & drop File here</p>
                                                   
                                                </div>
                                            </div>
                                           
                                            
                                              
                                            
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Create</span>
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
