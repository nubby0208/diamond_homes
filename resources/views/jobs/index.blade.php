@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css" />
<style>
.btn-edit{
    margin: 10px 5px;
    background: #2196f3;
    color: #fff;
    padding: 5px 15px;
    border-radius: 5px;
}
.btn-delete{
    margin: 10px 5px;
    background: red;
    color: #fff;
    padding: 5px 15px;
    border-radius: 5px;
}
.page-content{
    background: var(--background-primary-color);
}
.table th, .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 10px solid #f7faf9;
}
.fiter-section{
    /*border-bottom: solid 1px #dde2e4;*/
    margin-bottom: 15px;
}
.fiter-section .select2-selection{
    background-color: #fffffc !important;
}
.form-label{
     margin-top: 7px;
}
.mtb-10{
    padding: 10px 0px;
}

.pagination {
    list-style: none;
    display: -webkit-inline-box;
    display: -ms-inline-flexbox;
    display: inline-flex;
    min-height: 2.6667rem;
    padding: 0;
    margin: 0;
    border-radius: var(--radius-base);
    background: var(--background-primary-color);
    -webkit-filter: drop-shadow(0 4px 4px rgba(169,194,209,.05)) drop-shadow(0 8px 16px rgba(169,194,209,.1));
    filter: drop-shadow(0 4px 4px rgba(169,194,209,.05)) drop-shadow(0 8px 16px rgba(169,194,209,.1));
}
    
</style>
@stop

@section('content')
     <div style="padding: 0 30px;">
                <div class="page-header" >
                    <h2 class="page-header__title">All Jobs</h2>
                </div>
                <div  class="page-tools">
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Dashboard</span>
                                                <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                  <use xlink:href="#icon-keyboard-right"></use>
                                                </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">All Jobs</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="{{url('jobs/create')}}"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-plus"></use>
                      </svg></span></a>
                            </div>
                            
                             <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-print"></use>
                      </svg></span></a>
                            </div>
                            <div class="page-tools__right-item"><a class="button-icon" href="{{ route('jobs.export') }}"><span class="button-icon__icon">
                      <svg class="icon-icon-download">
                        <use xlink:href="#icon-download"></use>
                      </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                  <form method="GET" action="{{route('jobs.index')}}">
                     {{csrf_field()}}   
                <div class="row fiter-section">
                    <div class="col-md-1" style="padding-right: 0;">
                        <div class="row mtb-10">
                            <div class="col-md-4">   <label class="form-label">Priority</label></div>
                            <div class="col-md-8" style="padding-right: 0;">
                                  <div class="input-group input-group--append" >
                                    <select class="input js-input-select input--fluid" onchange="selectpriority(this)"  name="priority" data-placeholder="">
                                        <option value="0" selected="selected">All </option>
                                        <option value="EPS"  <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'EPS'){  echo "selected"; } } ?>>EPS </option>
                                        <option value="GNL" <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'GNL'){  echo "selected"; } }?>>GNL </option>
                                        <option value="PM" <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'PM'){  echo "selected"; } }?>>PM </option>
                                        <option value="RM" <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'RM'){  echo "selected"; } }?>>RM </option>
                                        <option value="RSC" <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'RSC'){  echo "selected"; } }?>>RSC </option>
                                        <option value="URG" <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'URG'){  echo "selected"; } }?>>URG </option>
                                        <option value="URS" <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'URS'){  echo "selected"; } }?>>URS </option>
                                        <option value="VSC" <?php if(!empty($_GET['priority'])){ if($_GET['priority'] == 'VSC'){  echo "selected"; } }?>>VSC </option>
                                    </select>
                                    <span class="input-group__arrow">
                                      <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                      </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                     
                      
                    </div>
                    <div class="col-md-3" >
                          <div class="row mtb-10">
                            <div class="col-md-4 text-center">   <label class="form-label">Assigned To</label></div>
                            <div class="col-md-8">
                                  <div class="input-group input-group--append" >
                                    <select class="input js-input-select input--fluid" onchange="selectassigned_to(this)" name="assigned_to" data-placeholder="">
                                        <option value="0" selected="selected">All </option>
                                        <option value="Diamond Homes Ltd"  <?php if(!empty($_GET['assigned_to'])){ if($_GET['assigned_to'] == 'Diamond Homes Ltd'){  echo "selected"; } } ?>>Diamond Homes Ltd</option>
                                        <option value="Jiandong Li" <?php if(!empty($_GET['assigned_to'])){ if($_GET['assigned_to'] == 'Jiandong Li'){  echo "selected"; } } ?>>Jiandong Li</option>
                                    </select>
                                    <span class="input-group__arrow">
                                      <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                      </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                          <div class="row mtb-10">
                            <div class="col-md-3">   <label class="form-label">Customer</label></div>
                            <div class="col-md-9">
                                  <div class="input-group input-group--append" >
                                    <select class="input js-input-select input--fluid" onchange="selectcustomer(this)" name="customer" data-placeholder="">
                                       <option value="0" selected="selected">All</option>
                                        <option value="Housing NZ Central" <?php if(!empty($_GET['client_name'])){ if($_GET['client_name'] == 'Housing NZ Central'){  echo "selected"; } } ?>>Housing NZ Central</option>
                                        <option value="Housing NZ North West" <?php if(!empty($_GET['client_name'])){ if($_GET['client_name'] == 'Housing NZ North West'){  echo "selected"; } } ?>>Housing NZ North West</option>
                                        <option value="Housing NZ Shouth 2" <?php if(!empty($_GET['client_name'])){ if($_GET['client_name'] == 'Housing NZ Shouth 2'){  echo "selected"; } } ?>>Housing NZ Shouth 2</option>
                                        <option value="KOA 2020 Henderson/New Lynn" <?php if(!empty($_GET['client_name'])){ if($_GET['client_name'] == 'KOA 2020 Henderson/New Lynn'){  echo "selected"; } } ?>>KOA 2020 Henderson/New Lynn</option>
                                        <option value="KOA 2020 Mt Roskill/Ellerslie" <?php if(!empty($_GET['client_name'])){ if($_GET['client_name'] == 'KOA 2020 Mt Roskill/Ellerslie'){  echo "selected"; } } ?>>KOA 2020 Mt Roskill/Ellerslie</option>
                                        <option value="KOA 2020 Northland/North and central Auckland" <?php if(!empty($_GET['client_name'])){ if($_GET['client_name'] == 'KOA 2020 Northland/North and central Auckland'){  echo "selected"; } } ?>>KOA 2020 Northland/North and central Auckland</option>
                                        <option value="Tamaki Housing" <?php if(!empty($_GET['client_name'])){ if($_GET['client_name'] == 'Tamaki Housing'){  echo "selected"; } } ?>>Tamaki Housing</option>
                                    </select>
                                    <span class="input-group__arrow">
                                      <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                      </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                          <div class="row mtb-10">
                            <div class="col-md-3">   <label class="form-label">Notes</label></div>
                            <div class="col-md-9">
                                  <div class="input-group input-group--append" >
                                    <select class="input js-input-select input--fluid"  onchange="selectnotes(this)" name="notes" data-placeholder="">
                                      <option value="0" selected="selected">All
                                        </option>
                                        <option value="Unacknowledged sent by SHL" <?php if(!empty($_GET['notes'])){ if($_GET['notes'] == 'Unacknowledged sent by SHL'){  echo "selected"; } } ?>>Unacknowledged sent by SHL </option>
                                        <option value="Unacknowledged sent to SHL" <?php if(!empty($_GET['notes'])){ if($_GET['notes'] == 'Unacknowledged sent to SHL'){  echo "selected"; } } ?>>Unacknowledged sent to SHL </option>
                                        <option value="Unacknowledged sent or received by SHL" <?php if(!empty($_GET['notes'])){ if($_GET['notes'] == 'Unacknowledged sent or received by SHL'){  echo "selected"; } } ?>>Unacknowledged sent or received by SHL </option>
                                        <option value="Any unacknowledged notes" <?php if(!empty($_GET['notes'])){ if($_GET['notes'] == 'Any unacknowledged notes'){  echo "selected"; } } ?>>Any unacknowledged notes</option>
                                       
                                    </select>
                                    <span class="input-group__arrow">
                                      <svg class="icon-icon-keyboard-down">
                                        <use xlink:href="#icon-keyboard-down"></use>
                                      </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                           <div class="row mtb-10">
                            <div class="col-md-5" style="padding-left: 0;"> 
                                <div class="input-group" >
                                    <input type="date" onchange="selectatartdates(this)" name="start_date"  value="<?php if(!empty($_GET['start_date'])){  echo $_GET['start_date']; } ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1 text-center"><label class="form-label">To</label> </div>
                            <div class="col-md-5" style="padding-right: 0;">
                                <div class="input-group" >
                                    <input type="date" onchange="selectdates(this)" name="end_date" value="<?php if(!empty($_GET['end_date'])){  echo $_GET['end_date']; } ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
                <div class="row fiter-section">
                      <div class="col-md-6">
                          <div class="row mtb-10">
                            <div class="col-md-1">   <label class="form-label">Status</label></div>
                            <div class="col-md-2">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="status[]" id="new"  onchange="chkboxstatus(this)" value="New" <?php if(!empty($_GET['status'])){  foreach($_GET['status'] as $item){ if('New' == $item) { echo "checked"; } } } ?>   style="margin: 0px 7px;"><label style="margin: 0px;" for="new"> New </label>
                                  
                                </div>
                            </div>
                             <div class="col-md-3">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="status[]"  onchange="chkboxstatus(this)" id="app" value="Waiting Approval" <?php if(!empty($_GET['status'])){  foreach($_GET['status'] as $item){ if('Waiting Approval' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="app"> Waiting Approval </label>
                                </div>
                            </div>
                             <div class="col-md-2">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="status[]"  onchange="chkboxstatus(this)" id="Started" value="Started"  <?php if(!empty($_GET['status'])){  foreach($_GET['status'] as $item){ if('Started' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="Started"> Started </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="status[]"  onchange="chkboxstatus(this)" id="Completed" value="Completed" <?php if(!empty($_GET['status'])){  foreach($_GET['status'] as $item){ if('Completed' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="Completed"> Completed </label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="status[]"  onchange="chkboxstatus(this)" id="Cancelled" value="Cancelled"  <?php if(!empty($_GET['status'])){  foreach($_GET['status'] as $item){ if('Cancelled' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="Cancelled"> Cancelled </label>
                                </div>
                            </div>
                        </div>
                          
                      </div>
                       <div class="col-md-5">
                           
                           <div class="row mtb-10">
                            <div class="col-md-1">   <label class="form-label">Type</label></div>
                            <div class="col-md-2">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="type[]" id="Scoping"  onchange="chkboxtype(this)" value="Scoping"  <?php if(!empty($_GET['type'])){  foreach($_GET['type'] as $item){ if('Scoping' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="Scoping"> Scoping </label>
                                
                                </div>
                            </div>
                             <div class="col-md-2" >
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="type[]" id="Car" value="Car" onchange="chkboxtype(this)" <?php if(!empty($_GET['type'])){  foreach($_GET['type'] as $item){ if('Car' == $item) { echo "checked"; } } } ?>   style="margin: 0px 7px;"><label style="margin: 0px;" for="Car"> Car </label>
                                </div>
                            </div>
                             <div class="col-md-2" style="padding: 0;">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="type[]" id="Trade" value="Trade" onchange="chkboxtype(this)" <?php if(!empty($_GET['type'])){  foreach($_GET['type'] as $item){ if('Trade' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="Trade"> Trade </label>
                                </div>
                            </div>
                            <div class="col-md-2" style="padding: 0;">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="type[]" id="GGS" value="GGS Only" onchange="chkboxtype(this)" <?php if(!empty($_GET['type'])){  foreach($_GET['type'] as $item){ if('GGS Only' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="GGS"> GGS Only </label>
                                </div>
                            </div>
                            <div class="col-md-2" style="padding: 0;">
                                  <div class="input-group input-group--append" style="margin: 7px;">
                                  <input type="checkbox" name="type[]" id="Left-Card" value="Left Card" onchange="chkboxtype(this)" <?php if(!empty($_GET['type'])){  foreach($_GET['type'] as $item){ if('Left Card' == $item) { echo "checked"; } } } ?>  style="margin: 0px 7px;"><label style="margin: 0px;" for="Left-Card"> Left Card </label>
                                </div>
                            </div>
                        </div>
                       </div>
                         <div class="col-md-1" style="padding-left: 0;">
                             <button type="submit" class="btn btn-primary" style="width: 100%;margin-top: 10px;">Search</button>
                         </div>
                </div>
                </form>
               @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="table-wrapperdfd">
                  
                       <table id="example" class="table table--spaces" style="width:100%">
                            <thead>
                                <tr class="table__row">
                                    <th>Job Id</th>
                                    <th>Order</th>
                                    <th>Job Title</th>
                                    <th>Client</th>
                                    <th>Type</th>
                                    <th>Assigned</th>
                                    <th>From  - To</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($jobs))
                              
                                @foreach($jobs as $job)
                                <tr class="table__row">
                                    <td class="table__td">#<a href="{{route('jobs.show',$job->id)}}">{{$job->id}}</a></td>
                                    <td class="table__td">#<a href="{{route('jobs.show',$job->id)}}">{{$job->order_no}}</a></td>
                                    <td class="table__td"><a href="{{route('jobs.show',$job->id)}}">{{$job->title}}</a></td>
                                    <td class="table__td"><a href="{{route('jobs.show',$job->id)}}">{{$job->client_name}}</a></td>
                                      <td class="table__td">{{$job->type}}</td>
                                    <td class="table__td">{{$job->assigned}}</td>
                                     <td class="table__td">{{$job->from_date}} - {{$job->to_date}}</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> {{$job->status}}</div>
                                        
                                        </td>
                                    <td class="table__td table__actions" >
                                         <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="{{route('jobs.show',$job->id)}}"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                        </li>
                                                          <li class="dropdown-items__item"><a class="dropdown-items__link" href="{{route('jobs.edit',$job->id)}}"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-task"></use>
                                                            </svg></span>Edit</a>
                                                        </li>
                                                 
                                                        <li class="dropdown-items__item">
                                                        
                                                           <form  class="dropdown-items__link" method="POST" action="{{ route('jobs.destroy', $job->id) }}">
                                                                 @csrf 
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    <button type="submit"  class="show_confirm" data-toggle="tooltip" title='Delete' style="display: inline-flex;"> 
                                                                     <span class="dropdown-items__link-icon">
                                                                           <svg class="icon-icon-trash">
                                                                          <use xlink:href="#icon-trash"></use>
                                                                        </svg></span>
                                                                            Delete
                                                                     </button>
                                                                    
                                                                </form>
                                                              
                                                             
                                                            
                                                            
                                                        
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                
                                
                            </tbody>
                           
                        </table>
                   
                
                </div>
          </div>
@stop
@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js" type="module"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js" type="module"></script>
<script type="application/javascript">
/** After windod Load */
$(window).bind("load", function() {
  window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script>
 


// function replaceUrlParam(paramName, paramValue){
//     var url = window.location.href;

//     if (paramValue == null) {
//         paramValue = '';
//     }

//     var pattern = new RegExp('\\b('+paramName+'=).*?(&|#|$)');
//     if (url.search(pattern)>=0) {
//         return url.replace(pattern,'$1' + paramValue + '$2');
//     }

//     url = url.replace(/[?#]$/,'');
//     return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
// }

// function onlyUnique(value, index, self) {
//   return self.indexOf(value) === index;
// }

</script>



<script>
   
    //  var dates = 0;
    // function selectatartdates(this12) {
    //     dates = this12.value;
        
    //   if (dates) {
    //          window.location.href = replaceUrlParam('start_date',dates);
    //     }else{
    //       window.location.href = replaceUrlParam('start_date');  
    //     }
    // }
    
    
    // var edates = 0;
    // function selectdates(this13) {
    //     edates = this13.value;
        
    //   if (edates) {
    //          window.location.href = replaceUrlParam('end_date',edates);
    //     }else{
    //       window.location.href = replaceUrlParam('end_date');  
    //     }
    // }
    
    
    // var priority = 0;
    // function selectpriority(this13) {
    //     priority = this13.value;
    //   if(priority){
    //          window.location.href = replaceUrlParam('priority',priority);
    //     }else{
    //         window.location.href = replaceUrlParam('priority');  
    //     }
    // }
    
    
    
    // var assigned_to = 0;
    // function selectassigned_to(this13) {
    //     assigned_to = this13.value;
    //   if(assigned_to){
    //          window.location.href = replaceUrlParam('assigned',assigned_to);
    //     }else{
    //         window.location.href = replaceUrlParam('assigned');  
    //     }
    // }
    
    
    // var customer = 0;
    // function selectcustomer(this13) {
    //     customer = this13.value;
    //   if(customer){
    //          window.location.href = replaceUrlParam('client_name',customer);
    //     }else{
    //         window.location.href = replaceUrlParam('client_name');  
    //     }
    // }
    
    
    // var notes = 0;
    // function selectnotes(this13) {
    //     notes = this13.value;
    //   if(notes){
    //          window.location.href = replaceUrlParam('notes',notes);
    //     }else{
    //         window.location.href = replaceUrlParam('notes');  
    //     }
    // }
    
    
   
    
    
    
    // const status = new Array();
    // var name3 =  $("input[name='keystatus']").data('status');
    // function chkboxstatus(this22) {
    //     var s22 = this22.value;
        
      
    //     if (this22.checked) {
    //       status.push(s22);
    //     } else {
    //     var index = status.indexOf(s22);
        
       
    //     if (index > -1) {
    //           status.splice(index, 1);
    //         }
    //     }
       
      
    //     if(status == ''){
    //          var trainindIdArray = name3.split(',');
    //          trainindIdArray = jQuery.grep(trainindIdArray, function(value) {
    //           return value != s22;
    //         });
    //          window.location.href = replaceUrlParam('status',trainindIdArray);
    //     }else{
    //         if(name3 ==''){
    //           window.location.href = replaceUrlParam('status',status);  
    //         }else{
    //           window.location.href = replaceUrlParam('status',name3+","+status);;  
    //         }
    //     }
    // }
    
    
    // const type = new Array();
    // var name4 =  $("input[name='keytype']").data('type');
    // function chkboxtype(this5) {
    //     var s3 = this5.value;
        
      
    //     if (this5.checked) {
    //       type.push(s3);
    //     } else {
    //     var index = type.indexOf(s3);
        
       
    //     if (index > -1) {
    //           type.splice(index, 1);
    //         }
    //     }
      
    //     if(type == ''){
    //          var trainindIdArray = name4.split(',');
    //          trainindIdArray = jQuery.grep(trainindIdArray, function(value) {
    //           return value != s3;
    //         });
    //          window.location.href = replaceUrlParam('type',trainindIdArray);
    //     }else{
    //         if(name4 ==''){
    //           window.location.href = replaceUrlParam('type',type);  
    //         }else{
    //           window.location.href = replaceUrlParam('type',name4+","+type);;  
    //         }
    //     }
    // }
    
    
    
   
    
    
    
    
</script>


@stop
