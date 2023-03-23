@extends('layouts.app')
@section('styles')

@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Edit Job</h1>
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Edit Job</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product card--content-center">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <form class="add-product__form" method="post" action="{{route('jobs.update',$jobs->id)}}" enctype="multipart/form-data">
                              {{ method_field('PATCH') }}
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                    <div class="add-product__right">
                                        <div class="row row--md">
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Title</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="title" placeholder="" value="{{$jobs->title}}" >
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Description</label>
                                                <textarea class="form-control" name="description">{{$jobs->description}}</textarea>
                                               
                                            </div>
                                             <div class="col-4 form-group form-group--lg">
                                                <label class="form-label">Client Name</label>
                                                
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid"  name="client_name" data-placeholder="">
                                                       <option value="0" >All Clients</option>
                                                        <option value="Housing NZ Central"  <?php if($jobs->client_name == 'Housing NZ Central'){ echo "selected";} ?>>Housing NZ Central</option>
                                                        <option value="Housing NZ North West" <?php if($jobs->client_name == 'Housing NZ North West'){ echo "selected";} ?>>Housing NZ North West</option>
                                                        <option value="Housing NZ Shouth 2" <?php if($jobs->client_name == 'Housing NZ Shouth 2'){ echo "selected";} ?>>Housing NZ Shouth 2</option>
                                                        <option value="KOA 2020 Henderson/New Lynn" <?php if($jobs->client_name == 'KOA 2020 Henderson/New Lynn'){ echo "selected";} ?>>KOA 2020 Henderson/New Lynn</option>
                                                        <option value="KOA 2020 Mt Roskill/Ellerslie" <?php if($jobs->client_name == 'KOA 2020 Mt Roskill/Ellerslie'){ echo "selected";} ?>>KOA 2020 Mt Roskill/Ellerslie</option>
                                                        <option value="KOA 2020 Northland/North and central Auckland" <?php if($jobs->client_name == 'KOA 2020 Northland/North and central Auckland'){ echo "selected";} ?>>KOA 2020 Northland/North and central Auckland</option>
                                                        <option value="Tamaki Housing" <?php if($jobs->client_name == 'Tamaki Housing'){ echo "selected";} ?>>Tamaki Housing</option>
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
                                                    <input class="input" type="text" name="order_no" placeholder="" value="{{$jobs->order_no}}" >
                                                </div>
                                            </div>
                                            <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">External Job No.</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="external_job_no" placeholder="" value="{{$jobs->external_job_no}}" >
                                                </div>
                                            </div>
                                             
                                            <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">Allocation</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="allocation" placeholder="" value="{{$jobs->allocation}}" >
                                                </div>
                                            </div>
                                            <div class="col-2 form-group form-group--lg">
                                                <label class="form-label">ECD</label>
                                                <div class="input-group">
                                                    <input class="input" type="date" name="ecd" placeholder="" value="{{$jobs->ecd}}" >
                                                </div>
                                            </div>
                                             
                                             
                                      
                                             <div class="col-12 form-group form-group--lg">
                                                <label class="form-label">Address</label>
                                                <textarea class="form-control" name="address">{{$jobs->address}}</textarea>
                                               
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Type</label>
                                                <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid" name="type" data-placeholder="">
                                                        <option value="Scoping"  <?php if($jobs->type == 'Scoping') { echo "selected"; } ?>>Scoping  </option>
                                                        <option value="Car" <?php if($jobs->type == 'Car') { echo "selected"; } ?>>Car </option>
                                                        <option value="Trade" <?php if($jobs->type == 'Trade') { echo "selected"; } ?>>Trade </option>
                                                        <option value="GGS Only" <?php if($jobs->type == 'GGS Only') { echo "selected"; } ?>>GGS Only </option>
                                                        <option value="Left Card" <?php if($jobs->type == 'Left Card') { echo "selected"; } ?>>Left Card </option>
                                                       
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
                                                        
                                                         <option value="EPS" <?php if($jobs->priority == 'EPS') { echo "selected"; } ?>>EPS </option>
                                                        <option value="GNL" <?php if($jobs->priority == 'GNL') { echo "selected"; } ?>>GNL </option>
                                                        <option value="PM" <?php if($jobs->priority == 'PM') { echo "selected"; } ?>>PM </option>
                                                        <option value="RM" <?php if($jobs->priority == 'RM') { echo "selected"; } ?>>RM </option>
                                                        <option value="RSC" <?php if($jobs->priority == 'RSC') { echo "selected"; } ?>>RSC </option>
                                                        <option value="URG" <?php if($jobs->priority == 'URG') { echo "selected"; } ?>>URG </option>
                                                        <option value="URS" <?php if($jobs->priority == 'URS') { echo "selected"; } ?>>URS </option>
                                                        <option value="VSC" <?php if($jobs->priority == 'VSC') { echo "selected"; } ?>>VSC </option>
                                                       
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
                                                        <option value="Diamond Homes Ltd" <?php if($jobs->assigned == 'Diamond Homes Ltd') { echo "selected"; } ?>>Diamond Homes Ltd</option>
                                                        <option value="Jiandong Li" <?php if($jobs->assigned == 'Jiandong Li') { echo "selected"; } ?>>Jiandong Li</option>
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
                                                    <input class="input" type="date" name="from_date" placeholder="" value="{{$jobs->from_date}}" >
                                                </div>
                                            </div>
                                             <div class="col-3  form-group form-group--lg">
                                                <label class="form-label">To Date</label>
                                               <div class="input-group">
                                                    <input class="input" type="date" name="to_date" placeholder="" value="{{$jobs->to_date}}" required>
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Status</label>
                                                <div class="input-group input-group--append">
                                                    <select class="input js-input-select input--fluid" name="status" data-placeholder="">
                                                        <option value="New" >New
                                                        </option>
                                                        <option value="Waiting-Approval" <?php if($jobs->priority == 'Waiting-Approval') { echo "selected"; } ?>>Waiting Approval
                                                        </option>
                                                        <option value="Started" <?php if($jobs->status == 'Started') { echo "selected"; } ?>>Started
                                                        </option>
                                                        <option value="Completed" <?php if($jobs->status == 'Completed') { echo "selected"; } ?>>Completed
                                                        </option>
                                                         <option value="Cancelled" <?php if($jobs->status == 'Cancelled') { echo "selected"; } ?>>Cancelled
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
                                                        <option value="Approved" <?php if($jobs->approved == 'Approved') { echo "selected"; } ?>>Approved
                                                        </option>
                                                        <option value="Unapproved" <?php if($jobs->approved == 'Unapproved') { echo "selected"; } ?>>Unapproved
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
                                                    <input class="input" type="text" name="ret_rem" placeholder="" value="{{$jobs->ret_rem}}" >
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Amount</label>
                                                <div class="input-group">
                                                    <input class="input" type="number" name="value" placeholder="" value="{{$jobs->value}}" >
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Your Referral</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="your_ref" placeholder="" value="{{$jobs->your_ref}}" >
                                                </div>
                                            </div>
                                             <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Cl/No Access</label>
                                                <div class="input-group">
                                                    <input class="input" type="text" name="cl_access_no" placeholder="" value="{{$jobs->cl_access_no}}" >
                                                </div>
                                            </div>
                                            <div class="col-3 form-group form-group--lg">
                                                <label class="form-label">Note</label>
                                                
                                                  <div class="input-group input-group--append" >
                                                    <select class="input js-input-select input--fluid"  name="notes" data-placeholder="">
                                                      <option value="0" >All Notes</option>
                                                        <option value="Unacknowledged sent by SHL" <?php if($jobs->notes == 'Unacknowledged sent by SHL') { echo "selected"; } ?>>Unacknowledged sent by SHL </option>
                                                        <option value="Unacknowledged sent to SHL" <?php if($jobs->notes == 'Unacknowledged sent to SHL') { echo "selected"; } ?>>Unacknowledged sent to SHL </option>
                                                        <option value="Unacknowledged sent or received by SHL" <?php if($jobs->notes == 'Unacknowledged sent or received by SHL') { echo "selected"; } ?>>Unacknowledged sent or received by SHL </option>
                                                        <option value="Any unacknowledged notes" <?php if($jobs->notes == 'Any unacknowledged notes') { echo "selected"; } ?>>Any unacknowledged notes</option>
                                                       
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
                                                <textarea class="form-control" name="comments">{{$jobs->comments}}</textarea>
                                               
                                            </div>
                                             
                                              
                                            
                                            
                                        </div>
                                        <div class="add-product__submit">
                                            <div class="modal__footer-button">
                                                <button type="submit" class="button button--primary button--block"><span class="button__text">Update</span>
                                                </button>
                                            </div>
                                            <div class="modal__footer-button"><a class="button button--secondary button--block" href="{{url('jobs')}}"><span class="button__text">Cancel</span></a>
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
