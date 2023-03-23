@extends('layouts.app')
@section('styles')
<style>
    .fade:not(.show) {
     opacity: 1; 
}
.nav-tabs li{
    /*width: 9%;*/
    height: 40px;
    text-align: center;
    background: #eee;
    color: #222;
    line-height: 40px;
    border-right: solid 1px #d5cece;
}
.job-details-section li a{
    padding: 10px 34px;
}
.nav-tabs {
    border-bottom: 1px solid #fffffc;
}
.job-details-section li a.active{
    background: #0081ff;
    color: #ffff;
    border-bottom: solid #fffffc 8px;
    border-left: solid 3px #0081ff;
    border-right: solid 3px #0081ff;
   
}
.tab-content>.active {
    display: block;
    margin: 5px 9px 15px 0px;
    border: solid 1px #0081ff;
}
</style>
@stop

@section('content')
    <div class="container container--flex">
                <div class="page-header">
                    <h1 class="page-header__title">Job Details</h1>
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
                                                    <li class="breadcrumbs__item"><a class="breadcrumbs__link" href="#"><span>Jobs</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                          <use xlink:href="#icon-keyboard-right"></use>
                                        </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Job Details</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card add-product">
                    <div class="card__wrapper">
                        <div class="card__container">
                            <div class="add-product__right">
                                <div class="row row--md">
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label">Job Id</label>
                                        <div class="input-group">
                                            #{{$jobs->id}}
                                        </div>
                                    </div>
                                     
                                      <div class="col-2 form-group form-group--lg">
                                        <label class="form-label">Order</label>
                                        <div class="input-group input-group--append" >
                                            {{$jobs->order_no}}
                                        </div>
                                    </div>
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label">External Job No</label>
                                        <div class="input-group input-group--append" >
                                          
                                           {{$jobs->external_job_no}}
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label">ECD</label>
                                         <div class="input-group input-group--append" >
                                       {{$jobs->ecd}}
                                        </div>
                                    </div>
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Type</label>
                                         <div class="input-group input-group--append" >
                                       {{$jobs->type}}
                                        </div>
                                    </div>
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Priority</label>
                                         <div class="input-group input-group--append" >
                                       {{$jobs->priority}}
                                        </div>
                                    </div>
                                    
                                    <div class="col-4 form-group form-group--lg">
                                        <label class="form-label">Job Title</label>
                                        <div class="input-group input-group--append" >
                                            {{$jobs->title}}
                                        </div>
                                    </div>
                                     <div class="col-4 form-group form-group--lg">
                                        <label class="form-label">Client</label>
                                        <div class="input-group input-group--append" >
                                            {{$jobs->client_name}}
                                        </div>
                                    </div>
                                     <div class="col-4 form-group form-group--lg">
                                        <label class="form-label">Assigned</label>
                                        <div class="input-group input-group--append" >
                                            {{$jobs->assigned}}
                                        </div>
                                    </div>
                                     <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Allocation</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->allocation}}
                                        </div>
                                    </div>
                                     <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> From Date</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->from_date}}
                                        </div>
                                    </div>
                                     <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> To Date</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->to_date}}
                                        </div>
                                    </div>
                                     <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Priority</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->priority}}
                                        </div>
                                    </div>
                                     <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Status</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->status}}
                                        </div>
                                    </div>
                                     <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Ret/Rem</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->ret_rem}}
                                        </div>
                                    </div>
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Approved</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->approved}}
                                        </div>
                                    </div>
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label">Value</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->value}}
                                        </div>
                                    </div>
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> Your Ref</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->your_ref}}
                                        </div>
                                    </div>
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label"> CL/No Access</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->cl_access_no}}
                                        </div>
                                    </div>
                                   
                                    <div class="col-2 form-group form-group--lg">
                                        <label class="form-label">Create Date & time</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->created_at}}
                                        </div>
                                    </div>
                                     <div class="col-6 form-group form-group--lg">
                                        <label class="form-label"> Notes</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->notes}}
                                        </div>
                                    </div>
                                    
                                    <div class="col-6 form-group form-group--lg">
                                        <label class="form-label"> Address</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->address}}
                                        </div>
                                    </div>
                                     <div class="col-6 form-group form-group--lg">
                                        <label class="form-label"> Comments</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->comments}}
                                        </div>
                                    </div>
                                     <div class="col-6 form-group form-group--lg">
                                        <label class="form-label"> Description</label>
                                         <div class="input-group input-group--append" >
                                            {{$jobs->description}}
                                        </div>
                                    </div>
                                    
                                   
                                      
                                    
                                    
                                </div>
                                <div class="job-details-section">
                                  <ul class="nav nav-tabs">
                                    <li class="active"><a data-toggle="tab" class="active" href="#home">Job Details</a></li>
                                    <li><a data-toggle="tab" href="#menu1">	Exemptions</a></li>
                                    <li><a data-toggle="tab" href="#menu2">Contact info</a></li>
                                    <li><a data-toggle="tab" href="#menu3">Notes</a></li>
                                    <li><a data-toggle="tab" href="#menu4">Log</a></li>
                                    <li><a data-toggle="tab" href="#menu5">Time Spent</a></li>
                                    <li><a data-toggle="tab" href="#menu6">Order Date</a></li>
                                    <li><a data-toggle="tab" href="#menu7">Documets</a></li>
                                    <li><a data-toggle="tab" href="#menu8">Cards Left</a></li>
                                    <li><a data-toggle="tab" href="#menu9">Tenants</a></li>
                                    <li><a data-toggle="tab" href="#menu10">Other Works</a></li>
                                  </ul>
                                
                                  <div class="tab-content">
                                    <div id="home" class="tab-pane fade in active show">
                                     <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Location</th>
                                             <th>Job Code</th>
                                             <th>Description</th>
                                             <th>UOM</th>
                                             <th>Damages</th>
                                             <th>Notes</th>
                                             <th>Quantity</th>
                                             <th>Rate</th>
                                             <th>Total</th>
                                             <th>Variance</th>
                                             <th>Complete</th>
                                             <th>Completed By</th>
                                             <th>PWrk Req</th>
                                             <th>Exclude</th>
                                             <th>Pre - App</th>
                                             <th>Allocated</th>
                                         </tr>
                                         @if(!empty($job_details))
                                         @foreach($job_details as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->location}}</td>
                                             <td>{{$details->job_code}}</td>
                                             <td>{{$details->description}}</td>
                                             <td>{{$details->uom}}</td>
                                             <td>{{$details->damages}}</td>
                                             <td>{{$details->notes}}</td>
                                             <td>{{$details->quantity}}</td>
                                             <td>{{$details->rate}}</td>
                                             <td>{{$details->total}}</td>
                                             
                                             <td>{{$details->variance}}</td>
                                             <td>{{$details->complete}}</td>
                                             <td>{{$details->completed_by}}</td>
                                             <td>{{$details->pwrk_req}}</td>
                                             <td>{{$details->exclude}}</td>
                                             <td>{{$details->pre_app}}</td>
                                             <td>{{$details->allocated}}</td>
                                             
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu1" class="tab-pane fade">
                                       <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Exemptions type</th>
                                             <th>Exemptions by</th>
                                             <th>EOT type</th>
                                             <th>EOT Date time</th>
                                             <th>Reason</th>
                                             <th>Additional Reason</th>
                                             <th>Notes</th>
                                             <th>Acknowledged</th>
                                             <th>Acknowledged by</th>
                                             <th>Created Date Time</th>
                                            
                                         </tr>
                                         @if(!empty($exemptions))
                                         @foreach($exemptions as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->exemptions_type}}</td>
                                             <td>{{$details->exemptions_by}}</td>
                                             <td>{{$details->eot_type}}</td>
                                             <td>{{$details->eot_date_time}}</td>
                                             <td>{{$details->reason}}</td>
                                             <td>{{$details->additional_reason}}</td>
                                             <td>{{$details->notes}}</td>
                                             <td>{{$details->acknowledged}}</td>
                                             <td>{{$details->acknowledged_by}}</td>
                                             
                                             <td>{{$details->created_at}}</td>
                                             
                                             
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu2" class="tab-pane fade">
                                        <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Contact type</th>
                                             <th>Contact name</th>
                                             <th>Communication type</th>
                                             <th>Email/Phone</th>
                                             <th>Damages</th>
                                             <th>Preferred</th>
                                             <th>Created date</th>
                                           
                                         </tr>
                                         @if(!empty($contacts))
                                         @foreach($contacts as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->contact_type}}</td>
                                             <td>{{$details->contact_name}}</td>
                                             <td>{{$details->communication_type}}</td>
                                             <td>{{$details->value}}</td>
                                             <td>{{$details->preferred}}</td>
                                             <td>{{$details->created_at}}</td>
                                           
                                             
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu3" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Audience</th>
                                             <th>Title</th>
                                             <th>Description</th>
                                             <th>Note type</th>
                                             <th>created date time</th>
                                         </tr>
                                         @if(!empty($notes))
                                         @foreach($notes as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->audiences}}</td>
                                             <td>{{$details->title}}</td>
                                             <td>{{$details->description}}</td>
                                             <td>{{$details->note_type}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu4" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>User</th>
                                             <th>Action</th>
                                             <th>Description</th>
                                             <th>Dispatch Id</th>
                                             <th>Created Date Time</th>
                                             
                                         </tr>
                                         @if(!empty($logs))
                                         @foreach($logs as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->user}}</td>
                                             <td>{{$details->action}}</td>
                                             <td>{{$details->description}}</td>
                                             <td>{{$details->dispatch_id}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu5" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Contact type</th>
                                             <th>Created by</th>
                                             <th>Comments</th>
                                             <th>Card left</th>
                                             <th>Created Date Time</th>
                                            
                                         </tr>
                                         @if(!empty($time_spents))
                                         @foreach($time_spents as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->contact_type}}</td>
                                             <td>{{$details->created_by}}</td>
                                             <td>{{$details->comments}}</td>
                                             <td>{{$details->card_left}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu6" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Data Type</th>
                                             <th>Comments</th>
                                             <th>Created Date Time</th>
                                         </tr>
                                         @if(!empty($orders))
                                         @foreach($orders as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->data_type}}</td>
                                             <td>{{$details->comments}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                        
                                     </table>
                                    </div>
                                    <div id="menu7" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Name</th>
                                             <th>Loaded by</th>
                                             <th>Job Code</th>
                                             <th>Location</th>
                                             <th>Code</th>
                                             <th>Comments</th>
                                             <th>Created Date Time</th>
                                            
                                         </tr>
                                         @if(!empty($documents))
                                         @foreach($documents as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->name}}</td>
                                             <td>{{$details->loaded_by}}</td>
                                             <td>{{$details->job_code}}</td>
                                             <td>{{$details->location}}</td>
                                             <td>{{$details->code}}</td>
                                             <td>{{$details->comments}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu8" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Action</th>
                                             <th>Assigned to</th>
                                             <th>Lattitude</th>
                                             <th>Longitude</th>
                                             <th>Distance</th>
                                             <th>Photo</th>
                                             <th>Reason</th>
                                             <th>Created Date Time</th>
                                            
                                         </tr>
                                         @if(!empty($cards))
                                         @foreach($cards as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->action}}</td>
                                             <td>{{$details->assigned_to}}</td>
                                             <td>{{$details->lattitude}}</td>
                                             <td>{{$details->longitude}}</td>
                                             <td>{{$details->distance}}</td>
                                             <td><img style="width:100px; height:100px;" src="{{url('uploads/')}}/{{$details->photo}}"></td>
                                             <td>{{$details->reason}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                     <div id="menu9" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>To From</th>
                                             <th>Entered by</th>
                                             <th>Notified To</th>
                                             <th>Message</th>
                                             <th>Created Date</th>
                                             
                                         </tr>
                                         @if(!empty($tenants))
                                         @foreach($tenants as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->to_from}}</td>
                                             <td>{{$details->entered_by}}</td>
                                             <td>{{$details->notified_to}}</td>
                                             <td>{{$details->message}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                    <div id="menu10" class="tab-pane fade">
                                          <table class="table">
                                         <tr>
                                             <th>Sr. No.</th>
                                             <th>Order Id</th>
                                             <th>Client Ref</th>
                                             <th>Status</th>
                                             <th>Priority</th>
                                             <th>Description</th>
                                             <th>Created Date</th>
                                         </tr>
                                         @if(!empty($other_works))
                                         @foreach($other_works as $details)
                                         <tr>
                                             <td>{{$details->id}}</td>
                                             <td>{{$details->order_id}}</td>
                                             <td>{{$details->client_ref}}</td>
                                             <td>{{$details->status}}</td>
                                             <td>{{$details->priority}}</td>
                                             <td>{{$details->description}}</td>
                                             <td>{{$details->created_at}}</td>
                                         </tr>
                                         @endforeach
                                         @endif
                                     </table>
                                    </div>
                                  
                                  
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@stop
@section('scripts')

@stop
