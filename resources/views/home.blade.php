@extends('layouts.app')

@section('content')

<div class="nav-header">
            <a href="{{route('home')}}" class="brand-logo">
                <img class="brand-title" src="http://sipitung88.com/images/loga1.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
</div>

<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Dashboard
                            </div>
                        </div>

                        <ul class="navbar-nav header-right">
						{{--
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link  ai-icon" href="#" role="button" data-toggle="dropdown">
                                    <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M21.75 14.8385V12.0463C21.7471 9.88552 20.9385 7.80353 19.4821 6.20735C18.0258 4.61116 16.0264 3.61555 13.875 3.41516V1.625C13.875 1.39294 13.7828 1.17038 13.6187 1.00628C13.4546 0.842187 13.2321 0.75 13 0.75C12.7679 0.75 12.5454 0.842187 12.3813 1.00628C12.2172 1.17038 12.125 1.39294 12.125 1.625V3.41534C9.97361 3.61572 7.97429 4.61131 6.51794 6.20746C5.06159 7.80361 4.25291 9.88555 4.25 12.0463V14.8383C3.26257 15.0412 2.37529 15.5784 1.73774 16.3593C1.10019 17.1401 0.751339 18.1169 0.75 19.125C0.750764 19.821 1.02757 20.4882 1.51969 20.9803C2.01181 21.4724 2.67904 21.7492 3.375 21.75H8.71346C8.91521 22.738 9.45205 23.6259 10.2331 24.2636C11.0142 24.9013 11.9916 25.2497 13 25.2497C14.0084 25.2497 14.9858 24.9013 15.7669 24.2636C16.548 23.6259 17.0848 22.738 17.2865 21.75H22.625C23.321 21.7492 23.9882 21.4724 24.4803 20.9803C24.9724 20.4882 25.2492 19.821 25.25 19.125C25.2486 18.117 24.8998 17.1402 24.2622 16.3594C23.6247 15.5786 22.7374 15.0414 21.75 14.8385ZM6 12.0463C6.00232 10.2113 6.73226 8.45223 8.02974 7.15474C9.32723 5.85726 11.0863 5.12732 12.9212 5.125H13.0788C14.9137 5.12732 16.6728 5.85726 17.9703 7.15474C19.2677 8.45223 19.9977 10.2113 20 12.0463V14.75H6V12.0463ZM13 23.5C12.4589 23.4983 11.9316 23.3292 11.4905 23.0159C11.0493 22.7026 10.716 22.2604 10.5363 21.75H15.4637C15.284 22.2604 14.9507 22.7026 14.5095 23.0159C14.0684 23.3292 13.5411 23.4983 13 23.5ZM22.625 20H3.375C3.14298 19.9999 2.9205 19.9076 2.75644 19.7436C2.59237 19.5795 2.50014 19.357 2.5 19.125C2.50076 18.429 2.77757 17.7618 3.26969 17.2697C3.76181 16.7776 4.42904 16.5008 5.125 16.5H20.875C21.571 16.5008 22.2382 16.7776 22.7303 17.2697C23.2224 17.7618 23.4992 18.429 23.5 19.125C23.4999 19.357 23.4076 19.5795 23.2436 19.7436C23.0795 19.9076 22.857 19.9999 22.625 20Z" fill="#6418C3"/>
									</svg>
									<span class="badge light text-white bg-primary">12</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div id="DZ_W_Notification1" class="widget-media dz-scroll p-3 height380">
										<ul class="timeline">
											<li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-info">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-success">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											 <li>
												<div class="timeline-panel">
													<div class="media mr-2">
														<img alt="image" width="50" src="images/avatar/1.jpg">
													</div>
													<div class="media-body">
														<h6 class="mb-1">Dr sultads Send you Photo</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-danger">
														KG
													</div>
													<div class="media-body">
														<h6 class="mb-1">Resport created successfully</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
											<li>
												<div class="timeline-panel">
													<div class="media mr-2 media-primary">
														<i class="fa fa-home"></i>
													</div>
													<div class="media-body">
														<h6 class="mb-1">Reminder : Treatment Time!</h6>
														<small class="d-block">29 July 2020 - 02:26 PM</small>
													</div>
												</div>
											</li>
										</ul>
									</div>
                                    <a class="all-notification" href="#">See all notifications <i class="ti-arrow-right"></i></a>
                                </div>
                            </li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell bell-link" href="#">
                                    <svg width="23" height="22" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M20.4604 0.848877H3.31682C2.64742 0.849612 2.00565 1.11586 1.53231 1.58919C1.05897 2.06253 0.792727 2.7043 0.791992 3.3737V15.1562C0.792727 15.8256 1.05897 16.4674 1.53231 16.9407C2.00565 17.4141 2.64742 17.6803 3.31682 17.6811C3.53999 17.6812 3.75398 17.7699 3.91178 17.9277C4.06958 18.0855 4.15829 18.2995 4.15843 18.5227V20.3168C4.15843 20.6215 4.24112 20.9204 4.39768 21.1818C4.55423 21.4431 4.77879 21.6571 5.04741 21.8009C5.31602 21.9446 5.61861 22.0128 5.92292 21.9981C6.22723 21.9834 6.52183 21.8863 6.77533 21.7173L12.6173 17.8224C12.7554 17.7299 12.9179 17.6807 13.0841 17.6811H17.187C17.7383 17.68 18.2742 17.4994 18.7136 17.1664C19.1531 16.8335 19.472 16.3664 19.6222 15.8359L22.8965 4.05011C22.9998 3.67481 23.0152 3.28074 22.9413 2.89856C22.8674 2.51637 22.7064 2.15639 22.4707 1.84663C22.2349 1.53687 21.9309 1.28568 21.5822 1.11263C21.2336 0.939571 20.8497 0.849312 20.4604 0.848877ZM21.2732 3.60304L18.0005 15.3847C17.9499 15.5614 17.8432 15.7168 17.6964 15.8275C17.5496 15.9381 17.3708 15.9979 17.187 15.9978H13.0841C12.5855 15.9972 12.098 16.1448 11.6836 16.4219L5.84165 20.3168V18.5227C5.84091 17.8533 5.57467 17.2115 5.10133 16.7382C4.62799 16.2648 3.98622 15.9986 3.31682 15.9978C3.09365 15.9977 2.87966 15.909 2.72186 15.7512C2.56406 15.5934 2.47534 15.3794 2.47521 15.1562V3.3737C2.47534 3.15054 2.56406 2.93655 2.72186 2.77874C2.87966 2.62094 3.09365 2.53223 3.31682 2.5321H20.4604C20.5905 2.53243 20.7187 2.56277 20.8352 2.62076C20.9516 2.67875 21.0531 2.76283 21.1318 2.86646C21.2104 2.97008 21.2641 3.09045 21.2886 3.21821C21.3132 3.34597 21.3079 3.47766 21.2732 3.60304Z" fill="#6418C3"/>
										<path d="M5.84161 8.42333H10.0497C10.2729 8.42333 10.4869 8.33466 10.6448 8.17683C10.8026 8.019 10.8913 7.80493 10.8913 7.58172C10.8913 7.35851 10.8026 7.14445 10.6448 6.98661C10.4869 6.82878 10.2729 6.74011 10.0497 6.74011H5.84161C5.6184 6.74011 5.40433 6.82878 5.2465 6.98661C5.08867 7.14445 5 7.35851 5 7.58172C5 7.80493 5.08867 8.019 5.2465 8.17683C5.40433 8.33466 5.6184 8.42333 5.84161 8.42333Z" fill="#6418C3"/>
										<path d="M13.4161 10.1066H5.84161C5.6184 10.1066 5.40433 10.1952 5.2465 10.3531C5.08867 10.5109 5 10.725 5 10.9482C5 11.1714 5.08867 11.3855 5.2465 11.5433C5.40433 11.7011 5.6184 11.7898 5.84161 11.7898H13.4161C13.6393 11.7898 13.8534 11.7011 14.0112 11.5433C14.169 11.3855 14.2577 11.1714 14.2577 10.9482C14.2577 10.725 14.169 10.5109 14.0112 10.3531C13.8534 10.1952 13.6393 10.1066 13.4161 10.1066Z" fill="#6418C3"/>
									</svg>
									<span class="badge light text-white bg-primary">5</span>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
									<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M22.625 5.12506H21.75V1.62506C21.75 1.47268 21.7102 1.32295 21.6345 1.19068C21.5589 1.05841 21.45 0.948189 21.3186 0.870929C21.1873 0.79367 21.0381 0.75205 20.8857 0.750187C20.7333 0.748325 20.5831 0.786285 20.4499 0.860311L13 4.99915L5.55007 0.860311C5.41688 0.786285 5.26667 0.748325 5.11431 0.750187C4.96194 0.75205 4.8127 0.79367 4.68136 0.870929C4.55002 0.948189 4.44113 1.05841 4.36547 1.19068C4.28981 1.32295 4.25001 1.47268 4.25 1.62506V5.12506H3.375C2.67904 5.12582 2.01181 5.40263 1.51969 5.89475C1.02757 6.38687 0.750764 7.0541 0.75 7.75006V10.3751C0.750764 11.071 1.02757 11.7383 1.51969 12.2304C2.01181 12.7225 2.67904 12.9993 3.375 13.0001H4.25V22.6251C4.25076 23.321 4.52757 23.9882 5.01969 24.4804C5.51181 24.9725 6.17904 25.2493 6.875 25.2501H19.125C19.821 25.2493 20.4882 24.9725 20.9803 24.4804C21.4724 23.9882 21.7492 23.321 21.75 22.6251V13.0001H22.625C23.321 12.9993 23.9882 12.7225 24.4803 12.2304C24.9724 11.7383 25.2492 11.071 25.25 10.3751V7.75006C25.2492 7.0541 24.9724 6.38687 24.4803 5.89475C23.9882 5.40263 23.321 5.12582 22.625 5.12506ZM20 5.12506H16.3769L20 3.11256V5.12506ZM6 3.11256L9.62311 5.12506H6V3.11256ZM6 22.6251V13.0001H12.125V23.5001H6.875C6.64303 23.4998 6.42064 23.4075 6.25661 23.2434C6.09258 23.0794 6.0003 22.857 6 22.6251ZM20 22.6251C19.9997 22.857 19.9074 23.0794 19.7434 23.2434C19.5794 23.4075 19.357 23.4998 19.125 23.5001H13.875V13.0001H20V22.6251ZM23.5 10.3751C23.4997 10.607 23.4074 10.8294 23.2434 10.9934C23.0794 11.1575 22.857 11.2498 22.625 11.2501H3.375C3.14303 11.2498 2.92064 11.1575 2.75661 10.9934C2.59258 10.8294 2.5003 10.607 2.5 10.3751V7.75006C2.5003 7.51809 2.59258 7.2957 2.75661 7.13167C2.92064 6.96764 3.14303 6.87536 3.375 6.87506H22.625C22.857 6.87536 23.0794 6.96764 23.2434 7.13167C23.4074 7.2957 23.4997 7.51809 23.5 7.75006V10.3751Z" fill="#3E4954"/>
									</svg>
									<span class="badge light text-white bg-primary">2</span>
                                </a>
								<div class="dropdown-menu dropdown-menu-right">
									<div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 ps ps--active-y p-3 height370">
                                    <ul class="timeline">
                                        <li>
                                            <div class="timeline-badge primary"></div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>10 minutes ago</span>
                                                <h6 class="mb-0">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge info">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">New order placed <strong class="text-info">#XF-2356.</strong></h6>
												<p class="mb-0">Quisque a consequat ante Sit amet magna at volutapt...</p>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge danger">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>30 minutes ago</span>
                                                <h6 class="mb-0">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge success">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>15 minutes ago</span>
                                                <h6 class="mb-0">StumbleUpon is acquired by eBay. </h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge warning">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <div class="timeline-badge dark">
                                            </div>
                                            <a class="timeline-panel text-muted" href="#">
                                                <span>20 minutes ago</span>
                                                <h6 class="mb-0">Mashable, a news website and blog, goes live.</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
								</div>
							</li>
							--}}
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
									<div class="header-info">
										<span class="text-black">Hello, <strong>{{Auth::user()->name}}</strong></span>
										<p class="fs-12 mb-0">Super Admin</p>
									</div>
                                    <img src="https://i.pravatar.cc/100" width="20" alt=""/>

                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
									 <a class="dropdown-item ai-icon" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
										 <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
			 
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a href="./page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

 <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                        <ul aria-expanded="false">
							<li><a href="{{route('home')}}">Dashboard</a></li>
							<li><a href="my-wallet.html">My Wallet</a></li>
							<li><a href="coin-details.html">Coin Details</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="transactions.html">Transactions</a></li>
							<li><a href="market-capital.html">Market Capital</a></li>
						</ul>
                    </li>
					{{--				
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Apps</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">Profile</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Email</a>
                                <ul aria-expanded="false">
                                    <li><a href="./email-compose.html">Compose</a></li>
                                    <li><a href="./email-inbox.html">Inbox</a></li>
                                    <li><a href="./email-read.html">Read</a></li>
                                </ul>
                            </li>
                            <li><a href="./app-calender.html">Calendar</a></li>
							<li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Shop</a>
                                <ul aria-expanded="false">
                                    <li><a href="./ecom-product-grid.html">Product Grid</a></li>
									<li><a href="./ecom-product-list.html">Product List</a></li>
									<li><a href="./ecom-product-detail.html">Product Details</a></li>
									<li><a href="./ecom-product-order.html">Order</a></li>
									<li><a href="./ecom-checkout.html">Checkout</a></li>
									<li><a href="./ecom-invoice.html">Invoice</a></li>
									<li><a href="./ecom-customers.html">Customers</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-controls-3"></i>
							<span class="nav-text">Charts</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./chart-flot.html">Flot</a></li>
                            <li><a href="./chart-morris.html">Morris</a></li>
                            <li><a href="./chart-chartjs.html">Chartjs</a></li>
                            <li><a href="./chart-chartist.html">Chartist</a></li>
                            <li><a href="./chart-sparkline.html">Sparkline</a></li>
                            <li><a href="./chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-internet"></i>
							<span class="nav-text">Bootstrap</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./ui-accordion.html">Accordion</a></li>
                            <li><a href="./ui-alert.html">Alert</a></li>
                            <li><a href="./ui-badge.html">Badge</a></li>
                            <li><a href="./ui-button.html">Button</a></li>
                            <li><a href="./ui-modal.html">Modal</a></li>
                            <li><a href="./ui-button-group.html">Button Group</a></li>
                            <li><a href="./ui-list-group.html">List Group</a></li>
                            <li><a href="./ui-media-object.html">Media Object</a></li>
                            <li><a href="./ui-card.html">Cards</a></li>
                            <li><a href="./ui-carousel.html">Carousel</a></li>
                            <li><a href="./ui-dropdown.html">Dropdown</a></li>
                            <li><a href="./ui-popover.html">Popover</a></li>
                            <li><a href="./ui-progressbar.html">Progressbar</a></li>
                            <li><a href="./ui-tab.html">Tab</a></li>
                            <li><a href="./ui-typography.html">Typography</a></li>
                            <li><a href="./ui-pagination.html">Pagination</a></li>
                            <li><a href="./ui-grid.html">Grid</a></li>

                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-heart"></i>
							<span class="nav-text">Plugins</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./uc-select2.html">Select 2</a></li>
                            <li><a href="./uc-nestable.html">Nestedable</a></li>
                            <li><a href="./uc-noui-slider.html">Noui Slider</a></li>
                            <li><a href="./uc-sweetalert.html">Sweet Alert</a></li>
                            <li><a href="./uc-toastr.html">Toastr</a></li>
                            <li><a href="./map-jqvmap.html">Jqv Map</a></li>
                        </ul>
                    </li>
                    <li><a href="widget-basic.html" class="ai-icon" aria-expanded="false">
							<i class="flaticon-381-settings-2"></i>
							<span class="nav-text">Widget</span>
						</a>
					</li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Forms</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./form-element.html">Form Elements</a></li>
                            <li><a href="./form-wizard.html">Wizard</a></li>
                            <li><a href="./form-editor-summernote.html">Summernote</a></li>
                            <li><a href="form-pickers.html">Pickers</a></li>
                            <li><a href="form-validation-jquery.html">Jquery Validate</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-network"></i>
							<span class="nav-text">Table</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="table-bootstrap-basic.html">Bootstrap</a></li>
                            <li><a href="table-datatable-basic.html">Datatable</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
          --}}  
				<div class="add-menu-sidebar">
					<p>Generate Monthly Credit Report</p>
					<a href="javascript:void(0);">
					<svg width="24" height="12" viewBox="0 0 24 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M23.725 5.14889C23.7248 5.14861 23.7245 5.14828 23.7242 5.148L18.8256 0.272997C18.4586 -0.0922062 17.865 -0.0908471 17.4997 0.276184C17.1345 0.643169 17.1359 1.23675 17.5028 1.602L20.7918 4.875H0.9375C0.419719 4.875 0 5.29472 0 5.8125C0 6.33028 0.419719 6.75 0.9375 6.75H20.7917L17.5029 10.023C17.1359 10.3882 17.1345 10.9818 17.4998 11.3488C17.865 11.7159 18.4587 11.7172 18.8256 11.352L23.7242 6.477C23.7245 6.47672 23.7248 6.47639 23.7251 6.47611C24.0923 6.10964 24.0911 5.51414 23.725 5.14889Z" fill="white"/>
					</svg>
					</a>
				</div>
				<div class="copyright">
					<p><strong>Chrev - Crypto Admin Dashboard</strong> © 2020 All Rights Reserved</p>
					<p>Made with <i class="fa fa-heart"></i> by DexignZone</p>
				</div>
			</div>
</div>

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
				<div class="row">
				
				<div class="col-xl-12 col-lg-12">
								<div class="card mb-4 mb-xl-0">
									<div class="card-header border-0  pb-0">
										<div>
											<h4 class="text-black fs-20">My Profile</h4>
											<p class="fs-12 mb-0">Lorem ipsum dolor sit amet, consectetur</p>
										</div>
										<div class="dropdown custom-dropdown mb-0">
											<div class="btn sharp pr-0 tp-btn" data-toggle="dropdown">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
														<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
												</svg>
											</div>
											<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="javascript:void(0);">Details</a>
												<a class="dropdown-item text-danger" href="javascript:void(0);">Cancel</a>
											</div>
										</div>
									</div>
									<div class="card-body bg-white border-bottom">
										<div class="media profile-bx">
											<img src="https://i.pravatar.cc/100" alt="" style="width:180px;height:180px">
											<div class="media-body align-items-center">
												<h2 class="text-black font-w600">{{Auth::user()->name}}</h2>
												<p class="mb-2" id="content"><small>{{ Auth::user()->referral_link }}</small></p><a class="copy-text" data-clipboard-target="#content" href="#">copy Text</a>
												<p class="text-black">Join on {{ \Carbon\Carbon::parse(Auth::user()->created_at)->diffForHumans() }}</p>
												<div class="social-icons">
													<a href="javascript:void(0);" class="iconbx fa fa-phone"></a>
													<a href="javascript:void(0);" class="iconbx fa fa-envelope"></a>
													<a href="javascript:void(0);" class="iconbx fa fa-facebook"></a>
													<a href="javascript:void(0);" class="btn btn-outline-dark">Edit Profile</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
					<div class="col-xl-12 col-lg-6">
						<div class="card">
							<div class="card-header pb-0 border-0">
										<h4 class="mb-0 text-black fs-20">Coin Price</h4>
							</div>
							<div class="card-body row">
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 ">
								<div class="card currency-bx overflow-hidden relative bg-warning">
									<div class="card-body p-4">
										<div class="media align-items-center">
											<div class="media-body">
												<h5 class="text-white fs-20">Bitcoin</h5>
												<h1 class="text-white mb-0">{{$btc->DISPLAY->BTC->USD->PRICE}}</h1>
											</div>
											<div class="currency-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" x="0px" y="0px" fill="#ffab2d" viewBox="0 0 512 512"><g><g><path d="M296,272h-16h-88v80h104c22.048,0,40-17.952,40-40C336,289.952,318.048,272,296,272z"/></g></g><g><g><path d="M280,160h-88v80h88c22.048,0,40-17.952,40-40C320,177.952,302.048,160,280,160z"/></g></g><g><g><path d="M256,0C114.624,0,0,114.624,0,256s114.624,256,256,256s256-114.624,256-256S397.376,0,256,0z M296,384h-8v16 c0,8.832-7.168,16-16,16c-8.832,0-16-7.168-16-16v-16h-32v16c0,8.832-7.168,16-16,16c-8.832,0-16-7.168-16-16v-16h-16 c-8.832,0-16-7.168-16-16V144c0-8.832,7.168-16,16-16h16v-16c0-8.832,7.168-16,16-16c8.832,0,16,7.168,16,16v16h32v-16 c0-8.832,7.168-16,16-16c8.832,0,16,7.168,16,16v16.8c35.904,4.032,64,34.24,64,71.2c0,19.392-7.776,36.928-20.288,49.856 C353.28,262.336,368,285.344,368,312C368,351.712,335.68,384,296,384z"/></g></g></svg>
											</div>
										</div>
									</div>
									<img class="bg-img" src="images/money/bitcoin.svg" alt=""/>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 ">
								<div class="card currency-bx overflow-hidden relative bg-secondary">
									<div class="card-body p-4">
										<div class="media align-items-center">
											<div class="media-body">
												<h5 class="text-white fs-20">Ethereum</h5>
												<h1 class="text-white mb-0">{{$eth->DISPLAY->ETH->USD->PRICE}}</h1>
											</div>
											<div class="currency-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45" height="45" fill="#dc3ccc"  viewBox="0 0 512 512"><g><g><path d="M256,0C114.624,0,0,114.624,0,256s114.624,256,256,256s256-114.624,256-256S397.376,0,256,0z M272,366.72V384
					c0,8.832-7.168,16-16,16c-8.832,0-16-7.168-16-16v-17.344c-16.384-2.688-31.392-9.376-42.624-19.328
					c-6.624-5.888-7.2-15.968-1.344-22.592c5.856-6.624,15.968-7.168,22.592-1.344C227.648,331.392,241.28,336,256,336
					c26.016,0,48-14.656,48-32s-21.984-32-48-32c-44.096,0-80-28.704-80-64c0-30.912,27.52-56.768,64-62.72V128
					c0-8.832,7.168-16,16-16c8.832,0,16,7.168,16,16v17.344c16.384,2.688,31.392,9.376,42.624,19.328
					c6.592,5.888,7.232,16,1.344,22.592s-15.968,7.168-22.592,1.344C284.352,180.608,270.72,176,256,176c-26.016,0-48,14.656-48,32
					s21.984,32,48,32c44.128,0,80,28.704,80,64C336,334.912,308.48,360.768,272,366.72z"/></g></g></svg>

											</div>
										</div>
									</div>
									<img class="bg-img" src="images/money/dollar.svg" alt=""/>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 ">
								<div class="card currency-bx overflow-hidden relative bg-info">
									<div class="card-body p-4">
										<div class="media align-items-center">
											<div class="media-body">
												<h5 class="text-white fs-20">Ripple</h5>
												<h1 class="text-white mb-0">{{$xrp->DISPLAY->XRP->USD->PRICE}}</h1>
											</div>
											<div class="currency-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45" height="45" fill="#319bd7" viewBox="0 0 512 512" ><g><g><path d="M256,0C114.624,0,0,114.624,0,256s114.624,256,256,256s256-114.624,256-256S397.376,0,256,0z M272,208
					c8.832,0,16,7.168,16,16c0,8.832-7.168,16-16,16h-78.656c-0.736,5.216-1.344,10.528-1.344,16s0.608,10.784,1.344,16H256
					c8.832,0,16,7.168,16,16c0,8.832-7.168,16-16,16h-52.864c13.856,28.544,39.392,48,68.864,48c13.952,0,27.072-4.128,39.008-12.256
					c7.264-4.928,17.248-3.104,22.208,4.192c4.96,7.296,3.104,17.248-4.224,22.24C311.904,377.824,292.192,384,272,384
					c-46.88,0-87.008-33.184-103.68-80H144c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h17.408
					c-0.576-5.312-1.408-10.528-1.408-16s0.832-10.688,1.408-16H144c-8.832,0-16-7.168-16-16c0-8.832,7.168-16,16-16h24.32
					c16.672-46.816,56.8-80,103.68-80c20.192,0,39.904,6.176,56.992,17.824c7.328,4.992,9.184,14.944,4.224,22.24
					c-4.96,7.36-14.976,9.152-22.208,4.192C299.072,164.128,285.952,160,272,160c-29.472,0-55.008,19.456-68.864,48H272z"/></g></g></svg>
											</div>
										</div>
									</div>
									<img class="bg-img" src="images/money/euro.svg" alt=""/>
								</div>
							</div>
							<div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6 ">
								<div class="card currency-bx overflow-hidden relative bg-dark">
									<div class="card-body p-4">
										<div class="media align-items-center">
											<div class="media-body">
												<h5 class="text-white fs-20">NFT</h5>
												<h1 class="text-white mb-0">{{$nft->DISPLAY->NFT->USD->PRICE}}</h1>
											</div>
											<div class="currency-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="45" height="45" fill="#5f5f5f" x="0px" y="0px" viewBox="0 0 512 512"><g><g><path d="M256,0C114.624,0,0,114.624,0,256s114.624,256,256,256s256-114.624,256-256S397.376,0,256,0z M381.408,312.704
												c-41.568,63.968-101.632,71.968-129.152,71.968c-8.448,0-13.792-0.736-14.656-0.864c-7.808-1.184-13.6-7.904-13.6-15.808v-91.52
												l-44.128,11.04c-1.28,0.32-2.592,0.48-3.872,0.48c-7.2,0-13.696-4.832-15.52-12.128c-2.144-8.544,3.072-17.248,11.648-19.392
												L224,243.52v-31.04l-44.128,11.04c-1.28,0.32-2.592,0.48-3.872,0.48c-7.2,0-13.696-4.832-15.52-12.128
												c-2.144-8.544,3.072-17.248,11.648-19.392L224,179.52V144c0-8.832,7.168-16,16-16c8.832,0,16,7.168,16,16v27.52l44.128-11.04
												c8.384-2.24,17.248,3.072,19.392,11.648c2.112,8.576-3.072,17.248-11.648,19.392L256,204.48v31.04l44.128-11.04
												c8.384-2.208,17.248,3.072,19.392,11.648c2.112,8.576-3.072,17.248-11.648,19.392L256,268.48v84.192
												c22.24-0.704,66.944-8.704,98.592-57.408c4.832-7.392,14.816-9.44,22.112-4.672C384.128,295.392,386.208,305.312,381.408,312.704z
												"/></g></g></svg>
											</div>
										</div>
									</div>
									<img class="bg-img" src="images/money/turkish-lira.svg" alt=""/>
								</div>
								</div>
							</div>
						</div>	
					</div>
					
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body p-0">
										<div class="media p-4 top-up-bx col-md-12 align-items-center bg-secondary">
											<div class="media-body">
												<h3 class="fs-20 text-white">Total Bonus</h3>
												<p class="text-white font-w200 mb-0 fs-14">{{ rupiah($total_comission) ?? '0' }}</p>
											</div>
											<a href="javascript:void(0);" class="icon-btn ml-3">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 6.23198L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23201L11.2311 8.66231L11.2311 8.66232C11.7911 9.22502 12.7013 9.22719 13.264 8.66716C13.8269 8.107 13.8288 7.1968 13.2689 6.6342L12.9145 6.98689L13.2689 6.63419L8.3939 1.73557L8.38872 1.73036L8.38704 1.72877C7.82626 1.17279 6.92186 1.17467 6.36301 1.72875L6.36136 1.73031L6.35609 1.73561L1.48109 6.63424L1.48108 6.63425C0.921124 7.19694 0.9232 8.10708 1.48597 8.66719C2.04868 9.22724 2.95884 9.22508 3.51889 8.66237L3.51891 8.66235L5.9375 6.23198Z" fill="#6418C3" stroke="#6418C3"></path>
												</svg>
											</a>
										</div>
										<div class="media p-4 top-up-bx col-md-6 align-items-center bg-warning">
											<div class="media-body">
												<h3 class="fs-20 text-white">Join Bonus</h3>
												<p class="text-white font-w200 mb-0 fs-14">{{ rupiah($join_comission) ?? '0' }}</p>
											</div>
											<a href="javascript:void(0);" class="icon-btn ml-3">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 6.23198L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23201L11.2311 8.66231L11.2311 8.66232C11.7911 9.22502 12.7013 9.22719 13.264 8.66716C13.8269 8.107 13.8288 7.1968 13.2689 6.6342L12.9145 6.98689L13.2689 6.63419L8.3939 1.73557L8.38872 1.73036L8.38704 1.72877C7.82626 1.17279 6.92186 1.17467 6.36301 1.72875L6.36136 1.73031L6.35609 1.73561L1.48109 6.63424L1.48108 6.63425C0.921124 7.19694 0.9232 8.10708 1.48597 8.66719C2.04868 9.22724 2.95884 9.22508 3.51889 8.66237L3.51891 8.66235L5.9375 6.23198Z" fill="#6418C3" stroke="#6418C3"></path>
												</svg>
											</a>
										</div>
										<div class="media p-4 withdraw-bx col-md-6 align-items-center bg-success">
											<div class="media-body">
												<h3 class="fs-20 text-white">Level Bonus</h3>
												<p class="text-white font-w200 mb-0 fs-14">{{ rupiah($bonus_comission) ?? '0' }}</p>
											</div>
											<a href="javascript:void(0);" class="icon-btn ml-3">
												<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 20.768L5.9375 2.125C5.9375 1.33108 6.58107 0.6875 7.375 0.6875C8.16892 0.6875 8.8125 1.33108 8.8125 2.125L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3658L1.48108 20.3658C0.921124 19.8031 0.9232 18.8929 1.48597 18.3328C2.04868 17.7728 2.95884 17.7749 3.51889 18.3376L3.51891 18.3377L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 d-sm-flex d-block">
										<div>
											<h4 class="fs-20 text-black">Wallet Activity</h4>
											<p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0">
											<ul class="nav nav-tabs" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-toggle="tab" href="#monthly" role="tab" aria-selected="true">
														Monthly	
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Weekly" role="tab" aria-selected="false">
														Weekly
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-toggle="tab" href="#Today" role="tab" aria-selected="false">
														Today
													</a>
												</li>
											</ul>
										</div>
									</div>
									<div class="card-body p-0 tab-content card-table">
										<div class="tab-pane fade active show" id="monthly">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z" fill="#6418C3" stroke="#6418C3"></path>
																		</svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Topup</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">+$5,553</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z" fill="#6418C3" stroke="#6418C3"></path>
																		</svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Topup</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">+$5,553</td>
															<td><a class="btn-link text-dark float-right" href="javascript:void(0);">PENDING</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-dark float-right" href="javascript:void(0);">PENDING</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z" fill="#6418C3" stroke="#6418C3"></path>
																		</svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Topup</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">+$5,553</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-danger float-right" href="javascript:void(0);">CANCELED</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="Weekly">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-dark float-right" href="javascript:void(0);">PENDING</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z" fill="#6418C3" stroke="#6418C3"></path>
																		</svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Topup</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">+$5,553</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-danger float-right" href="javascript:void(0);">CANCELED</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
										<div class="tab-pane" id="Today">
											<div class="table-responsive">
												<table class="table">
													<tbody>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																			<path d="M5.9375 6.23199L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23202L11.2311 8.66232L11.2311 8.66234C11.7911 9.22504 12.7013 9.2272 13.264 8.66717C13.8269 8.10701 13.8288 7.19681 13.2689 6.63421L12.9145 6.9869L13.2689 6.6342L8.3939 1.73558L8.38872 1.73037L8.38704 1.72878C7.82626 1.1728 6.92186 1.17468 6.36301 1.72877L6.36136 1.73033L6.35609 1.73563L1.48109 6.63425L1.48108 6.63426C0.921124 7.19695 0.9232 8.10709 1.48597 8.6672C2.04868 9.22725 2.95884 9.22509 3.51889 8.66238L3.51891 8.66236L5.9375 6.23199Z" fill="#6418C3" stroke="#6418C3"></path>
																		</svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Topup</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">+$5,553</td>
															<td><a class="btn-link text-success float-right" href="javascript:void(0);">COMPLETED</a></td>
														</tr>
														<tr>
															<td>
																<div class="media">
																	<span class="bgl-primary p-3 mr-3">
																		<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M5.9375 20.768L5.9375 2.12498C5.9375 1.33106 6.58107 0.687485 7.375 0.687485C8.16892 0.687485 8.8125 1.33106 8.8125 2.12499L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3657L1.48108 20.3657C0.921124 19.803 0.9232 18.8929 1.48597 18.3328C2.04868 17.7727 2.95884 17.7749 3.51889 18.3376L3.51891 18.3376L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path></svg>
																	</span>
																	<div class="media-body align-self-center">
																		<h5 class="font-w600 text-black">Withdraw</h5>
																		<p class="mb-0 fs-15">4/5/2020 06:24 AM</p>
																	</div>
																</div>
															</td>
															<td class="font-w600 text-center">-$2,000</td>
															<td><a class="btn-link text-danger float-right" href="javascript:void(0);">CANCELED</a></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body p-0">
										<div class="media p-4 top-up-bx col-md-12 align-items-center bg-info">
											<div class="media-body">
												<h3 class="fs-20 text-white">Coin Holding</h3>
												<p class="text-white font-w200 mb-0 fs-14">{{ __('NFT 5.000.000') }}</p>
											</div>
											<a href="javascript:void(0);" class="icon-btn ml-3">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 6.23198L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23201L11.2311 8.66231L11.2311 8.66232C11.7911 9.22502 12.7013 9.22719 13.264 8.66716C13.8269 8.107 13.8288 7.1968 13.2689 6.6342L12.9145 6.98689L13.2689 6.63419L8.3939 1.73557L8.38872 1.73036L8.38704 1.72877C7.82626 1.17279 6.92186 1.17467 6.36301 1.72875L6.36136 1.73031L6.35609 1.73561L1.48109 6.63424L1.48108 6.63425C0.921124 7.19694 0.9232 8.10708 1.48597 8.66719C2.04868 9.22724 2.95884 9.22508 3.51889 8.66237L3.51891 8.66235L5.9375 6.23198Z" fill="#6418C3" stroke="#6418C3"></path>
												</svg>
											</a>
										</div>
										<div class="media p-4 top-up-bx col-md-6 align-items-center">
											<div class="media-body">
												<h3 class="fs-20 text-white">TOP UP</h3>
												<p class="text-white font-w200 mb-0 fs-14">Tambah dana</p>
											</div>
											<a href="javascript:void(0);" class="icon-btn ml-3">
												<svg width="15" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 6.23198L5.9375 24.875C5.9375 25.6689 6.58107 26.3125 7.375 26.3125C8.16892 26.3125 8.8125 25.6689 8.8125 24.875L8.8125 6.23201L11.2311 8.66231L11.2311 8.66232C11.7911 9.22502 12.7013 9.22719 13.264 8.66716C13.8269 8.107 13.8288 7.1968 13.2689 6.6342L12.9145 6.98689L13.2689 6.63419L8.3939 1.73557L8.38872 1.73036L8.38704 1.72877C7.82626 1.17279 6.92186 1.17467 6.36301 1.72875L6.36136 1.73031L6.35609 1.73561L1.48109 6.63424L1.48108 6.63425C0.921124 7.19694 0.9232 8.10708 1.48597 8.66719C2.04868 9.22724 2.95884 9.22508 3.51889 8.66237L3.51891 8.66235L5.9375 6.23198Z" fill="#6418C3" stroke="#6418C3"></path>
												</svg>
											</a>
										</div>
										<div class="media p-4 withdraw-bx col-md-6 align-items-center">
											<div class="media-body">
												<h3 class="fs-20 text-white">WITHDRAW</h3>
												<p class="text-white font-w200 mb-0 fs-14">Tarik dana</p>
											</div>
											<a href="javascript:void(0);" class="icon-btn ml-3">
												<svg width="27" height="27" viewBox="0 0 15 27" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M5.9375 20.768L5.9375 2.125C5.9375 1.33108 6.58107 0.6875 7.375 0.6875C8.16892 0.6875 8.8125 1.33108 8.8125 2.125L8.8125 20.768L11.2311 18.3377L11.2311 18.3377C11.7911 17.775 12.7013 17.7728 13.264 18.3328C13.8269 18.893 13.8288 19.8032 13.2689 20.3658L12.9145 20.0131L13.2689 20.3658L8.3939 25.2644L8.38872 25.2696L8.38704 25.2712C7.82626 25.8272 6.92186 25.8253 6.36301 25.2712L6.36136 25.2697L6.35609 25.2644L1.48109 20.3658L1.48108 20.3658C0.921124 19.8031 0.9232 18.8929 1.48597 18.3328C2.04868 17.7728 2.95884 17.7749 3.51889 18.3376L3.51891 18.3377L5.9375 20.768Z" fill="#6418C3" stroke="#6418C3"></path>
												</svg>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
					
				</div>
			
				
				
			</div>	
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
					
					
    <ul class="list-group mt-3">
        <li class="list-group-item">Referral code: {{ Auth::user()->username }}</li>
        <li class="list-group-item">Email: {{ Auth::user()->email }}</li>
        <li class="list-group-item">Referral link: <code>{{ Auth::user()->referral_link }}</code></li>
        <li class="list-group-item">Referrer: {{ Auth::user()->referrer->name ?? 'Not Specified' }}</li>
        <li class="list-group-item">Refferal count: {{ count(Auth::user()->referrals)  ?? '0' }}</li>
        <li class="list-group-item">Refferal bonus: {{ rupiah($total_comission) ?? '0' }}</li>
        <li class="list-group-item">Join bonus: {{ rupiah($join_comission) ?? '0' }}</li>
        <li class="list-group-item">Level bonus: {{ rupiah($bonus_comission) ?? '0' }}</li>
        
    </ul>
	


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
