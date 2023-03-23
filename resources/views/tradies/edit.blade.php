@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title"><?php echo $title; ?></h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Tradies</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link"><?php echo $title; ?></span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product" style="flex-grow: 0;">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('tradies-directory.update',$tradies_data->id)}}" enctype="multipart/form-data">
                              {{ method_field('PATCH') }}
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-5 form-group form-group--lg">
                                                <label class="form-label">Tradie Name</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="tradie_name" placeholder="" value="{{ $tradies_data->tradie_name }}">
                                                </div>
                                            </div>
                                            <div class="col-5 form-group form-group--lg">
                                                <label class="form-label">Phone Number</label>
                                                <div class="input-group">
                                                    <input class="input" type="number" name="phone" placeholder="" value="{{ $tradies_data->phone }}" required>
                                                </div>
                                            </div>
                                              <div class="col-1 form-group form-group--lg">
                                                <button type="submit" class="button button--primary button--block" style="margin-top: 40px;"><span class="button__text">Update tradie</span>
                                                </button>
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
