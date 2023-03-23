@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Add Job</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Jobs</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Add Job</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('jobs.store')}}" enctype="multipart/form-data">
                              
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Title</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="title" placeholder="" value="" required>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" name="description"></textarea>
                                               
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Client Name</label>
                                                
                                                 <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid"  name="client_name" data-placeholder="">
                                                       <option value="0" selected="selected">All Clients</option>
                                                        <option value="Housing NZ Central">Housing NZ Central</option>
                                                        <option value="Housing NZ North West" >Housing NZ North West</option>
                                                        <option value="Housing NZ Shouth 2" >Housing NZ Shouth 2</option>
                                                        <option value="KOA 2020 Henderson/New Lynn" >KOA 2020 Henderson/New Lynn</option>
                                                        <option value="KOA 2020 Mt Roskill/Ellerslie" >KOA 2020 Mt Roskill/Ellerslie</option>
                                                        <option value="KOA 2020 Northland/North and central Auckland" >KOA 2020 Northland/North and central Auckland</option>
                                                        <option value="Tamaki Housing" >Tamaki Housing</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                
                                
                                               
                                            </div>
                                              <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">Order Number</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="order_no" placeholder="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">External Job No.</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="external_job_no" placeholder="" value="" required>
                                                </div>
                                            </div>
                                             
                                            <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">Allocation</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="allocation" placeholder="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">ECD</label>
                                                <div class="input-group">
                                                    <input class="input" type="date" name="ecd" placeholder="" value="" required>
                                                </div>
                                            </div>
                                             
                                             
                                      
                                             <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Address</label>
                                                <textarea class="form-control" name="address"></textarea>
                                               
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Type</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="type" data-placeholder="">
                                                        <option value="Scoping" selected="selected">Scoping </option>
                                                        <option value="Car">Car </option>
                                                        <option value="Trade">Trade </option>
                                                        <option value="GGS Only">GGS Only </option>
                                                        <option value="Left Card">Left Card </option>
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
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="priority" data-placeholder="">
                                                        <option value="0" selected="selected">All Priority</option>
                                                        <option value="EPS" >EPS </option>
                                                        <option value="GNL" >GNL </option>
                                                        <option value="PM" >PM </option>
                                                        <option value="RM" >RM </option>
                                                        <option value="RSC" >RSC </option>
                                                        <option value="URG" >URG </option>
                                                        <option value="URS" >URS </option>
                                                        <option value="VSC" >VSC </option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                           
                                           
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Assigned</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid"  name="assigned" data-placeholder="">
                                                       <option value="0" selected="selected">All Assigned</option>
                                                        <option value="Diamond Homes Ltd" >Diamond Homes Ltd</option>
                                                        <option value="Jiandong Li">Jiandong Li</option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                    
                                                </div>
                                                
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">From Date</label>
                                               <div class="input-group">
                                                    <input class="input" type="date" name="from_date" placeholder="" value="" required>
                                                </div>
                                            </div>
                                             <div class="col-3  form-group form-group--lg">
                                                <label class="form-label">To Date</label>
                                               <div class="input-group">
                                                    <input class="input" type="date" name="to_date" placeholder="" value="" required>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Status</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="status" data-placeholder="">
                                                        <option value="New" selected="selected">New
                                                        </option>
                                                        <option value="Waiting-Approval">Waiting Approval
                                                        </option>
                                                        <option value="Started">Started
                                                        </option>
                                                        <option value="Completed">Completed
                                                        </option>
                                                         <option value="Cancelled">Cancelled
                                                        </option>
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Approved</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="approved" data-placeholder="">
                                                        <option value="Approved" selected="selected">Approved
                                                        </option>
                                                        <option value="Unapproved">Unapproved
                                                        </option>
                                                        
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Ret /Rem</label>
                                               <div class="input-group">
                                                    <input class="input" type="text" name="ret_rem" placeholder="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Amount</label>
                                                <div class="input-group">
                                                    <input class="input" type="number" name="value" placeholder="" value="" required>
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Your Referral</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="your_ref" placeholder="" value="" required>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Cl/No Access</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="cl_access_no" placeholder="" value="" required>
                                                </div>
                                            </div>
                                            
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Note</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid"  name="notes" data-placeholder="">
                                                      <option value="0" selected="selected">All Notes</option>
                                                        <option value="Unacknowledged sent by SHL" >Unacknowledged sent by SHL </option>
                                                        <option value="Unacknowledged sent to SHL" >Unacknowledged sent to SHL </option>
                                                        <option value="Unacknowledged sent or received by SHL" >Unacknowledged sent or received by SHL </option>
                                                        <option value="Any unacknowledged notes" >Any unacknowledged notes</option>
                                                       
                                                    </select>
                                                    <span class="input-group__arrow">
                                                      <svg class="icon-icon-keyboard-down">
                                                        <use xlink:href="#icon-keyboard-down"></use>
                                                      </svg>
                                                    </span>
                                                </div>
                                
                                               
                                            </div>
                                              
                                              
                                            
                                              <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Commets</label>
                                                <textarea class="form-control" name="comments"></textarea>
                                               
                                            </div>
                                            
                                             
                                            
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Create</span>
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
