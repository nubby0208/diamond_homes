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
                    <h2 class="page-header__title">All Info</h2>
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">All Info</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="{{url('info/create')}}"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-plus"></use>
                      </svg></span></a>
                            </div>
                            
                             <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-print">
                        <use xlink:href="#icon-print"></use>
                      </svg></span></a>
                            </div>
                            <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
                      <svg class="icon-icon-import">
                        <use xlink:href="#icon-import"></use>
                      </svg></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row fiter-section">
                    <div class="col-md-3" >
                        <div class="row mtb-10">
                            <div class="col-md-4">   <label class="form-label">Job Category</label></div>
                            <div class="col-md-8" style="padding-right: 0;">
                                  <div class="input-group input-group--append" >
                                    <select class="input js-input-select input--fluid" onchange="selectpriority(this)"  name="job_category" data-placeholder="">
                                        <option value="0" selected="selected">All </option>
                                        <option value="Scoping"  <?php if(!empty($_GET['job_category'])){ if($_GET['job_category'] == 'Scoping'){  echo "selected"; } } ?>>Scoping </option>
                                        <option value="Car" <?php if(!empty($_GET['job_category'])){ if($_GET['job_category'] == 'Car'){  echo "selected"; } }?>>Car </option>
                                        <option value="Trade" <?php if(!empty($_GET['job_category'])){ if($_GET['priority'] == 'Trade'){  echo "selected"; } }?>>Trade </option>
                                        <option value="GGS Only" <?php if(!empty($_GET['job_category'])){ if($_GET['job_category'] == 'GGS Only'){  echo "selected"; } }?>>GGS Only </option>
                                        <option value="Left Card" <?php if(!empty($_GET['job_category'])){ if($_GET['job_category'] == 'Left Card'){  echo "selected"; } }?>>Left Card </option>
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
                            <div class="col-md-4 text-center">   <label class="form-label">Version</label></div>
                            <div class="col-md-8">
                                  <div class="input-group input-group--append" >
                                    <select class="input js-input-select input--fluid" onchange="selectassigned_to(this)" name="version" data-placeholder="">
                                        <option value="0" selected="selected">All </option>
                                            <option value="2020" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2020'){  echo "selected"; } } ?>>2020</option>
                                            <option value="2021" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2021'){  echo "selected"; } } ?>>2021</option>
                                            <option value="2022" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2022'){  echo "selected"; } } ?>>2022</option>
                                            <option value="2023" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2023'){  echo "selected"; } } ?>>2023</option>
                                            <option value="2024" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2024'){  echo "selected"; } } ?>>2024</option>
                                            <option value="2025" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2025'){  echo "selected"; } } ?>>2025</option>
                                            <option value="2026" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2026'){  echo "selected"; } } ?>>2026</option>
                                            <option value="2027" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2027'){  echo "selected"; } } ?>>2027</option>
                                            <option value="2028" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2028'){  echo "selected"; } } ?>>2028</option>
                                            <option value="2029" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2029'){  echo "selected"; } } ?>>2029</option>
                                            <option value="2030" <?php if(!empty($_GET['version'])){ if($_GET['version'] == '2030'){  echo "selected"; } } ?>>2029</option>
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
                            <div class="col-md-3">   <label class="form-label">Area</label></div>
                            <div class="col-md-9">
                                  <div class="input-group input-group--append" >
                                    <select class="input js-input-select input--fluid" onchange="selectcustomer(this)" name="area" data-placeholder="">
                                       <option value="0" selected="selected">All</option>
                                        <option value="Ellerslie" <?php if(!empty($_GET['area'])){ if($_GET['area'] == 'Ellerslie'){  echo "selected"; } } ?>>Ellerslie</option>
                                        
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
                            <div class="col-md-"> 
                                <div class="input-group" >
                                    <input type="date" onchange="selectatartdates(this)"  value="<?php if(!empty($_GET['start_date'])){  echo $_GET['start_date']; } ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1 text-center"><label class="form-label">To</label> </div>
                            <div class="col-md-5">
                                <div class="input-group" >
                                    <input type="date" onchange="selectdates(this)" value="<?php if(!empty($_GET['end_date'])){  echo $_GET['end_date']; } ?>" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                   
                </div>
               
               @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="table-wrapperdfd">
                  
                       <table id="example" class="table table--spaces" style="width:100%">
                            <thead>
                                <tr class="table__row">
                                    <th>Info Id</th>
                                    <th>Job Code</th>
                                    <th>UOM</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($jobs))
                              
                                @foreach($jobs as $job)
                                <tr class="table__row">
                                    <td class="table__td">#{{$job->id}}</td>
                                    <td class="table__td">#{{$job->job_code}}</td>
                                    <td class="table__td">{{$job->uom}}</td>
                                    <td class="table__td">{{$job->title}}</td>
                                    <td class="table__td">{{$job->description}}</td>
                                   
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
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="{{route('info.show',$job->id)}}"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                        </li>
                                                          <li class="dropdown-items__item"><a class="dropdown-items__link" href="{{route('info.edit',$job->id)}}"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-task"></use>
                                                            </svg></span>Edit</a>
                                                        </li>
                                                 
                                                        <li class="dropdown-items__item">
                                                        
                                                           <form  class="dropdown-items__link" method="POST" action="{{ route('info.destroy', $job->id) }}">
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
 


function replaceUrlParam(paramName, paramValue){
    var url = window.location.href;

    if (paramValue == null) {
        paramValue = '';
    }

    var pattern = new RegExp('\\b('+paramName+'=).*?(&|#|$)');
    if (url.search(pattern)>=0) {
        return url.replace(pattern,'$1' + paramValue + '$2');
    }

    url = url.replace(/[?#]$/,'');
    return url + (url.indexOf('?')>0 ? '&' : '?') + paramName + '=' + paramValue;
}

function onlyUnique(value, index, self) {
  return self.indexOf(value) === index;
}

</script>



<script>
   
     var dates = 0;
    function selectatartdates(this12) {
        dates = this12.value;
        
      if (dates) {
             window.location.href = replaceUrlParam('start_date',dates);
        }else{
           window.location.href = replaceUrlParam('start_date');  
        }
    }
    
    
    var edates = 0;
    function selectdates(this13) {
        edates = this13.value;
        
      if (edates) {
             window.location.href = replaceUrlParam('end_date',edates);
        }else{
          window.location.href = replaceUrlParam('end_date');  
        }
    }
    
    
    var jobcategory = 0;
    function selectpriority(this13) {
        jobcategory = this13.value;
      if(jobcategory){
             window.location.href = replaceUrlParam('jobcategory',jobcategory);
        }else{
            window.location.href = replaceUrlParam('jobcategory');  
        }
    }
    
    
    
    var version = 0;
    function selectassigned_to(this13) {
        version = this13.value;
      if(version){
             window.location.href = replaceUrlParam('version',version);
        }else{
            window.location.href = replaceUrlParam('version');  
        }
    }
    
    
    var area = 0;
    function selectcustomer(this13) {
        area = this13.value;
      if(area){
             window.location.href = replaceUrlParam('area',area);
        }else{
            window.location.href = replaceUrlParam('area');  
        }
    }
    
    
   
    
    
    
</script>


@stop
