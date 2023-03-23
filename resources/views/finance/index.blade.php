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
                    <h2 class="page-header__title">All Finance</h2>
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">All Finance</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="#"><span class="button-icon__icon">
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
                                    <th>
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input class="js-checkbox-all" type="checkbox" data-checkbox-all="product"><span class="checkbox__marker"><span class="checkbox__marker-icon"><svg viewBox="0 0 14 12">
                                            <path d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z"/>
                                            </svg></span></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th>Finance Name</th>
                                    <th>Location</th>
                                    <th>IRD Number</th>
                                    <th>Phone</th>
                                    <th>Role</th>
                                    <th>Registered</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($users))
                                @foreach($users as $user)
                                <tr class="table__row">
                                    <td class="table__td">
                                        <div class="table__checkbox table__checkbox--all">
                                            <label class="checkbox">
                                                <input type="checkbox" data-checkbox="product"><span class="checkbox__marker"><span class="checkbox__marker-icon"><svg viewBox="0 0 14 12">
                                                <path d="M11.7917 1.2358C12.0798 1.53914 12.0675 2.01865 11.7642 2.30682L5.7036 8.06439C5.40574 8.34735 4.93663 8.34134 4.64613 8.05084L2.22189 5.6266C1.92604 5.33074 1.92604 4.85107 2.22189 4.55522C2.51774 4.25937 2.99741 4.25937 3.29326 4.55522L5.19538 6.45734L10.7206 1.20834C11.024 0.920164 11.5035 0.93246 11.7917 1.2358Z"/>
                                                </svg></span></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <!--<a class="media-item__icon color-red" href="customer-account.html">-->
                                            <!--    <div class="media-item__icon-text">FB</div>-->
                                            <!--    <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#">-->
                                            <!--</a>-->
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="customer-account.html">{{ $user->title }} {{ $user->first_name }} {{ $user->last_name }}</a></h5><a class="text-sm text-grey" href="mailto:#">{{ $user->email }}</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">{{ $user->address }} , {{ $user->city }} , {{ $user->country }}</td>
                                    <td class="table__td text-dark-theme">{{ $user->idr_number }}</td>
                                    <td class="table__td text-light-theme">{{ $user->phone }}</td>
                                    <td class="table__td text-light-theme">
                                        
                                        {{ $user->user_type }}
                                        
                                        
                                        
                                        </td>
                                    <td class="table__td text-light-theme">{{ $user->created_at }}</td>
                                    <td class="table__td d-none d-sm-table-cell">
                                        <div class="table__status"><span class="table__status-icon color-green"></span> Active</div>
                                    </td>
                                    <td class="table__td table__actions">
                                        <div class="items-more">
                                            <button class="items-more__button">
                                                <svg class="icon-icon-more">
                                                    <use xlink:href="#icon-more"></use>
                                                </svg>
                                            </button>
                                            <div class="dropdown-items dropdown-items--right">
                                                <div class="dropdown-items__container">
                                                    <ul class="dropdown-items__list">
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="#"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-view"></use>
                                                            </svg></span>Details</a>
                                                        </li>
                                                 
                                                        <li class="dropdown-items__item">
                                                        
                                                           <form  class="dropdown-items__link" method="POST" action="{{ route('finances.delete', $user->id) }}">
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

<script>
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>

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
@stop
