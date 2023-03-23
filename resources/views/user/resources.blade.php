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
                    <h2 class="page-header__title">{{ $title }}</h2>
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
                                    <li class="breadcrumbs__item active"><span class="breadcrumbs__link">{{ $title }}</span>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="page-tools__right">
                        <div class="page-tools__right-row">
                            <div class="page-tools__right-item"><a class="button-icon" href="{{url('info-resources/create')}}"><span class="button-icon__icon">
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
                <p class="alert alert-2 {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="table-wrapperdfd">
                  
                       <table id="example" class="table table--spaces" style="width:100%">
                            <thead>
                                <tr class="table__row">
                                    <th>Sr. No      </th>
                                    <th>Name</th>
                                    <th>File Name</th>
                                    <th>File Type</th>
                                    <th>Resources</th>
                                    
                                    <th>Uploaded Date</th>
                                    <th>Expires Date</th>
                                   
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($info_data))
                                <?php $i = 1; ?>
                                @foreach($info_data as $user)
                                <tr class="table__row">
                                    <td class="table__td">
                                      {{ $i }}
                                    </td>
                                    <td class="table__td">
                                        <div class="media-item media-item--medium">
                                            <!--<a class="media-item__icon color-red" href="customer-account.html">-->
                                            <!--    <div class="media-item__icon-text">FB</div>-->
                                            <!--    <img class="media-item__thumb" src="img/content/humans/item-1.jpg" alt="#">-->
                                            <!--</a>-->
                                            <div class="media-item__right">
                                                <h5 class="media-item__title"><a href="javascript:;">{{ $user->name }} </a></h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="table__td text-light-theme">{{ $user->file_name }} </td>
                                    <td class="table__td text-dark-theme">{{ $user->file_type }}</td>
                                    <td class="table__td text-dark-theme">{{ $user->resources_type }}</td>
                                   
                                    <td class="table__td text-light-theme">{{ $user->created_at }}</td>
                                    <td class="table__td text-light-theme">{{ $user->expires }}</td>
                                   
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
                                                        <li class="dropdown-items__item"><a class="dropdown-items__link" href="{{ route('inforesources.edit', $user->id) }}"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-task"></use>
                                                            </svg></span>Edit</a>
                                                        </li>
                                                         <li class="dropdown-items__item"><a class="dropdown-items__link" onclick="return confirm('Are you sure delete this?')" href="{{ route('inforesources.delete', $user->id) }}"><span class="dropdown-items__link-icon">
                                                            <svg class="icon-icon-view">
                                                              <use xlink:href="#icon-trash"></use>
                                                            </svg></span>Delete</a>
                                                        </li>
                                                 
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                 <?php $i++; ?>
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
    $(".alert-2").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 4000);
});
</script>

<script type="text/javascript">
    $('.show_confirm').click(function(e) {
        if(!confirm('Are you sure you want to delete this?')) {
            e.preventDefault();
        }
    });
</script>

<script>
$(".userType").change(function(){
   
     var dataurl = jQuery(this).data('url');
     var id = jQuery(this).data('id');
       jQuery.ajax({
          url: dataurl+"/"+id,
          method: 'get',
          data: {
             user_type: jQuery(this).val()
          },
         success: function(result){
              $(".roles").show();
              setTimeout(function() {
                     location.reload();
            }, 2500);
            
             console.log(result);
           
         }
           
       });
       
            
  
    
});
</script>


@stop
