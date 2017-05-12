@if (Auth::guest())

<ul class="header-bar-nav nav nav-register">
    <li><a href="/portallogin">Login</a></li>
    <li><a href="/buyerseller">Register</a></li>
	<li><a href="/password/reset">Forget Password</a></li>
</ul>

@else
							<ul class="header-bar-nav nav nav-register  flcore">
                            <li>
                                
                                    <a href="/userprofile">{{ Auth::user()->name }}</a> 
									
                                </li>
							<li>
								<a href="/resetpass">Change Password</a>
								</li>

                               
                                    
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" style="color:#fff;">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    
                                
                            
                        @endif
                    </ul>