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
                    <h2 class="page-header__title">All Card Left</h2>
                </div>
                <div  class="page-tools">
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
                                    <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link" href="#"><span>Dashboard</span>
                                                <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                                  <use xlink:href="#icon-keyboard-right"></use>
                                                </svg></a>
                                    </li>
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">All Card Left</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="{{url('cardlefts/create')}}"><span class="button-icon__icon">
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
                @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="table-wrapperdfd">
                  
                       <table id="example" class="table table--spaces" style="width:100%">
                            <thead>
                                <tr class="table__row">
                                    <th>Id</th>
                                    <th>Photo</th>
                                    <th>Title</th>
                                    <th>Assigned To</th>
                                    <th>Lattitude</th>
                                    <th>Longitude</th>
                                    <th>Distance</th>
                                    <th>Reason</th>
                                    <th>Create Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($notes))
                              
                                @foreach($notes as $note)
                                <tr class="table__row">
                                    <td class="table__td">#{{$note->id}}</td>
                                    <td class="table__td">#{{$note->photo}}</td>
                                    <td class="table__td">{{$note->action}}</td>
                                    <td class="table__td">{{$note->assigned_to}}</td>
                                   
                                    <td class="table__td">{{$note->lattitude}}</td>
                                    <td class="table__td">{{$note->longitude}}</td>
                                    <td class="table__td">{{$note->distance}}</td>
                                    <td class="table__td">{{$note->reason}}</td>
                                    <td class="table__td">{{$note->created_at}}</td>
                                   
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
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="{{route('cardlefts.edit',$note->id)}}"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-view"></use>
                                                            </svg></span>Edit</a>
                                                        </li>
                                                 
                                                        <li class="dropdown-items__item">
                                                        
                                                           <form  class="dropdown-items__link" method="POST" action="{{ route('cardlefts.destroy', $note->id) }}">
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


@stop
