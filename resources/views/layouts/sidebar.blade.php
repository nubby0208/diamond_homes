 <div class="sidebar__backdrop"></div>
            <div class="sidebar__container">
                <div class="sidebar__top">
                    <div class="container container--sm">
                        <a class="sidebar__logo" href="{{ url('dashboard') }}">
                            <img class="sidebar__logo-icon" src="{{asset('img/content/dlogo.png')}}" alt="#" width="44" />
                            <div class="sidebar__logo-text">Diamond Homes</div>
                        </a>
                    </div>
                </div>
                <div class="sidebar__content" data-simplebar="data-simplebar">
                    <nav class="sidebar__nav">
                    @if(!empty(Auth::user()->user_type))
                        <ul class="sidebar__menu">
                            <li class="sidebar__menu-item"><a class="sidebar__link active" href="{{ url('dashboard') }}" aria-expanded="true"><span class="sidebar__link-icon">
                              <svg class="icon-icon-dashboard">
                                <use xlink:href="#icon-dashboard"></use>
                              </svg></span><span class="sidebar__link-text">Dashboard</span></a>
                            </li>
                            
                           @if(Auth::user()->user_type == 'superadmin')
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#E-Commerce" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-cart">
                                <use xlink:href="#icon-user"></use>


                              </svg></span><span class="sidebar__link-text">Users</span><span class="sidebar__link-arrow">
                                  <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                  </svg></span></a>
                          
                          
                                <div class="collapse" id="E-Commerce">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('users')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">ALL Users</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('admins')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Admin List</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('finances')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Finance List</span></a>
                                        </li>
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('contractors')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Contractor List</span></a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                  </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#view-jobs" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-cart">
                                <use xlink:href="#icon-calendar"></use>


                              </svg></span><span class="sidebar__link-text">Jobs</span><span class="sidebar__link-arrow">
                                  <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                  </svg></span></a>
                          
                                <div class="collapse" id="view-jobs">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('jobs')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">View Jobs</span></a>
                                        </li>
                                        <!-- <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('jobs')}}?status=Completed"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Complete Jobs</span></a>-->
                                        <!--</li>-->
                                          <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('jobdetails')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Job Details</span></a>
                                        </li>
                                         <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('exemptions')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Exemption</span></a>
                                        </li>
                                        
                                         <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('contact-info')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Contact Info</span></a>
                                        </li>
                                          <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('notes')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Notes</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('logs')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Log</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('timespents')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Time Spent</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('orders')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Date</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('documents')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Documents</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('cardlefts')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Card Left</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('tenants')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Tenants</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('otherworks')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Other work</span></a>
                                        </li>
                                    </ul>
                                </div>
                        </li> 
                              
                        
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('info')}}" aria-expanded="false"><span class="sidebar__link-icon">
                                  <svg class="icon-icon-email">
                                    <use xlink:href="#icon-email"></use>
                                  </svg></span><span class="sidebar__link-text">Info</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-chat">
                                <use xlink:href="#icon-chat"></use>
                              </svg></span><span class="sidebar__link-text">Payment Enquiry</span></a>
                            </li>
                           @endif
                        
                           @if(Auth::user()->user_type == 'admin')
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#E-Commerce" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-cart">
                                <use xlink:href="#icon-user"></use>


                              </svg></span><span class="sidebar__link-text">Users</span><span class="sidebar__link-arrow">
                                  <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                  </svg></span></a>
                                <div class="collapse" id="E-Commerce">
                                    <ul class="sidebar__collapse-menu">
                                       
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link" href="{{url('contractors')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Contractor List</span></a>
                                        </li>
                                        
                                         <li class="sidebar__menu-item">
                                            <a class="sidebar__link" href="{{url('employees')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Employees List</span></a>
                                        </li>
                                       
                                    </ul>
                                </div>
                                </li>
                                
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('info')}}" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-email">
                                <use xlink:href="#icon-email"></use>
                              </svg></span><span class="sidebar__link-text">Info</span></a>
                            </li>
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('downloads')}}" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-download">
                                <use xlink:href="#icon-download"></use>
                              </svg></span><span class="sidebar__link-text">Downloads</span></a>
                            </li>
                                
                                
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#view-jobs" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-cart">
                                <use xlink:href="#icon-calendar"></use>
                              </svg></span><span class="sidebar__link-text">Jobs</span><span class="sidebar__link-arrow">
                                  <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                  </svg></span></a>
                          
                                <div class="collapse" id="view-jobs">
                                    <ul class="sidebar__collapse-menu">
                                        <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('jobs')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">View Jobs</span></a>
                                        </li>
                                        <!-- <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('jobs')}}?status=Completed"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Complete Jobs</span></a>-->
                                        <!--</li>-->
                                          <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('jobdetails')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Job Details</span></a>
                                        </li>
                                         <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('exemptions')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Exemption</span></a>
                                        </li>
                                        
                                         <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('contact-info')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Contact Info</span></a>
                                        </li>
                                          <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('notes')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Notes</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('logs')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Log</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('timespents')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Time Spent</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('orders')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Order Date</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('documents')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Documents</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('cardlefts')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Card Left</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('tenants')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Tenants</span></a>
                                        </li>
                                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('otherworks')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Other work</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li> 
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('job-completed')}}" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-email">
                                <use xlink:href="#icon-calendar"></use>
                              </svg></span><span class="sidebar__link-text">Completed Jobs</span></a>
                            </li>
                              
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#i-Commerce" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-cart">
                                <use xlink:href="#icon-user"></use>


                              </svg></span><span class="sidebar__link-text">Information & Resources</span><span class="sidebar__link-arrow">
                                  <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                  </svg></span></a>
                                <div class="collapse" id="i-Commerce">
                                    <ul class="sidebar__collapse-menu">
                                       
                                        <li class="sidebar__menu-item">
                                            <a class="sidebar__link" href="{{url('info-resources')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Resources List</span></a>
                                        </li>
                                        
                                        
                                       
                                    </ul>
                                </div>
                            </li>
                         
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" aria-expanded="false"><span class="sidebar__link-icon">
                              <svg class="icon-icon-chat">
                                <use xlink:href="#icon-chat"></use>
                              </svg></span><span class="sidebar__link-text">Payment Enquiry</span></a>
                            </li>
                                
                            
                           @endif
                           
                           
                          @if(Auth::user()->user_type == 'finances')
                            <li class="sidebar__menu-item"><a class="sidebar__link" href="#" data-toggle="collapse" data-target="#E-Commerce" aria-expanded="false">
                                <span class="sidebar__link-icon">
                                  <svg class="icon-icon-cart">
                                    <use xlink:href="#icon-user"></use>
                                  </svg>
                                </span>
                                <span class="sidebar__link-text">Users</span>
                                <span class="sidebar__link-arrow">
                                  <svg class="icon-icon-keyboard-down">
                                    <use xlink:href="#icon-keyboard-down"></use>
                                  </svg></span></a>
                                <div class="collapse" id="E-Commerce">
                                    <ul class="sidebar__collapse-menu">
                                         <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('admins')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Admin List</span></a>
                                        </li>
                                        
                                       <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('contractors')}}"><span class="sidebar__link-signal"></span><span class="sidebar__link-text">Contractor List</span></a>
                                        </li>
                                      
                                       
                                    </ul>
                                </div>
                            </li>
                           @endif
                             
                        
                          
                          @if(Auth::user()->user_type == 'contractors')
                             <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('contractors/details',Auth::user()->id)}}" aria-expanded="false"><span class="sidebar__link-icon">
                                  <svg class="icon-icon-contacts">
                                    <use xlink:href="#icon-contacts"></use>
                                  </svg></span><span class="sidebar__link-text">Details</span></a>
                            </li>
                            
                            
                              <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('job-timesheets')}}" aria-expanded="false"><span class="sidebar__link-icon">
                                  <svg class="icon-icon-calendar">
                                    <use xlink:href="#icon-calendar"></use>
                                  </svg></span><span class="sidebar__link-text">Jobs Time Sheet </span></a>
                            </li>
                          @endif
                          
                           <li class="sidebar__menu-item"><a class="sidebar__link" href="{{url('tradies-directory')}}" aria-expanded="false"><span class="sidebar__link-icon">
                                  <svg class="icon-icon-phone">
                                    <use xlink:href="#icon-phone"></use>
                                  </svg></span><span class="sidebar__link-text">Tradies directory </span></a>
                            </li>
                    
                    
                      
                           

                      
                        </ul>
                    @endif
                    </nav>
                </div>
            </div>