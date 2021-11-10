@extends('layouts.app')

@section('content')

@include('panels.header')

@include('panels.sidebar') 

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
										<div class="media profile-bx row">
											<img src="https://i.pravatar.cc/100?u=fake@pravatar.co" alt="" style="width:180px;height:180px">
											<div class="media-body align-items-center">
												<h2 class="text-black font-w600">{{Auth::user()->name}}</h2>
												<div class="d-flex">
													<code class="mb-2" id="content">{{ Auth::user()->referral_link }}</code><button class="copy-text btn btn-outline-dark mx-2 px-2 py-1" data-clipboard-target="#content" ><i class="fa fa-clipboard"></i></button>
												</div>
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
					<div class="col-xl-12 col-lg-12">
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
												<h1 class="text-white mb-0">{{$btc->DISPLAY->ETH->USD->PRICE}}</h1>
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
												<h1 class="text-white mb-0">{{$btc->DISPLAY->XRP->USD->PRICE}}</h1>
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
												<h5 class="text-white fs-20">APENFT</h5>
												<h1 class="text-white mb-0">{{$btc->DISPLAY->NFT->USD->PRICE}}</h1>
											</div>
											<div class="currency-icon">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="45" height="45" fill="#6e6e6e" viewBox="0 0 512 512" ><g><g><path d="M256,0C114.624,0,0,114.624,0,256s114.624,256,256,256s256-114.624,256-256S397.376,0,256,0z M272,208
					M3076 5250 c-621 -78 -1128 -486 -1316 -1060 -78 -236 -75 -173 -75
-1650 l0 -1315 1583 -3 1583 -2 -4 1357 -3 1358 -22 97 c-67 293 -200 535
-407 744 -60 61 -150 141 -200 178 -176 130 -438 242 -655 281 -109 19 -383
28 -484 15z m505 -99 c628 -135 1089 -619 1181 -1241 10 -65 13 -379 13 -1345
l0 -1260 -1508 -3 -1508 -2 4 1297 c4 1441 0 1354 72 1570 169 504 615 892
1135 987 130 24 143 24 335 21 134 -3 204 -9 276 -24z
M3150 4990 c-316 -31 -606 -171 -820 -397 -178 -189 -282 -382 -347
-648 -15 -64 -17 -180 -20 -1257 l-4 -1188 1316 0 1316 0 -4 1163 c-3 1048 -5
1170 -21 1247 -93 461 -398 835 -815 1000 -94 37 -241 69 -366 79 -130 12
-125 12 -235 1z m-670 -494 c0 -2 -8 -10 -17 -17 -16 -13 -17 -12 -4 4 13 16
21 21 21 13z m-30 -39 c0 -2 -10 -12 -22 -23 l-23 -19 19 23 c18 21 26 27 26
19z m345 -76 c198 -49 354 -117 518 -225 197 -131 350 -318 418 -513 54 -156
52 -123 56 -1059 l4 -870 -53 -16 c-113 -35 -175 -43 -338 -43 -149 0 -176 3
-273 28 -359 93 -638 321 -796 649 -43 89 -85 222 -101 321 -6 36 -10 286 -10
590 0 491 1 536 20 628 37 178 111 348 213 484 l51 68 85 -6 c47 -4 140 -20
206 -36z m-385 25 c0 -2 -8 -10 -17 -17 -16 -13 -17 -12 -4 4 13 16 21 21 21
13z m-85 -126 c-9 -16 -18 -30 -21 -30 -2 0 2 14 11 30 9 17 18 30 21 30 2 0
-2 -13 -11 -30z m-37 -65 c-6 -14 -13 -23 -15 -21 -5 5 15 46 22 46 3 0 -1
-11 -7 -25z m-49 -114 c-6 -18 -13 -30 -15 -28 -2 2 1 18 7 36 6 18 13 30 15
28 2 -2 -1 -18 -7 -36z m-42 -123 c-3 -8 -6 -5 -6 6 -1 11 2 17 5 13 3 -3 4
-12 1 -19z m-10 -40 c-3 -8 -6 -5 -6 6 -1 11 2 17 5 13 3 -3 4 -12 1 -19z
m-13 -67 c-4 -23 -9 -40 -11 -37 -3 3 -2 23 2 46 4 23 9 39 11 37 3 -2 2 -23
-2 -46z m-17 -123 c-2 -13 -4 -3 -4 22 0 25 2 35 4 23 2 -13 2 -33 0 -45z
m-10 -741 c-1 -127 -2 -23 -2 233 0 256 1 360 2 232 2 -127 2 -337 0 -465z
m10 -329 c-2 -13 -4 -3 -4 22 0 25 2 35 4 23 2 -13 2 -33 0 -45z m10 -65 c-3
-10 -5 -4 -5 12 0 17 2 24 5 18 2 -7 2 -21 0 -30z m10 -55 c-3 -7 -5 -2 -5 12
0 14 2 19 5 13 2 -7 2 -19 0 -25z m10 -40 c-3 -8 -6 -5 -6 6 -1 11 2 17 5 13
3 -3 4 -12 1 -19z m10 -40 c-3 -8 -6 -5 -6 6 -1 11 2 17 5 13 3 -3 4 -12 1
-19z m103 -242 c0 -12 -5 -7 -19 24 -11 24 -11 24 3 6 9 -11 16 -24 16 -30z
m124 -185 l36 -49 -2 -213 -3 -214 -2 214 -3 214 -36 48 c-20 27 -33 49 -31
49 3 0 21 -22 41 -49z m147 -157 c59 -63 217 -166 329 -215 l65 -28 -217 -1
-218 0 0 135 c0 74 4 135 8 135 5 0 19 -12 33 -26z
M3175 3710 c-58 -18 -140 -75 -174 -122 l-35 -47 -32 34 c-55 60
-135 82 -168 46 -23 -25 -7 -58 32 -67 115 -25 132 -96 132 -539 0 -167 -4
-306 -8 -309 -25 -15 -102 72 -102 117 0 55 -60 80 -81 33 -9 -18 -7 -37 5
-77 66 -226 378 -230 438 -7 17 66 3 103 -37 103 -31 0 -36 -8 -50 -79 -6 -30
-55 -86 -75 -86 -8 0 -10 101 -8 368 3 354 4 368 25 407 28 52 77 102 127 128
58 30 166 30 222 0 79 -42 135 -116 149 -198 11 -65 15 -74 36 -80 32 -11 49
12 49 66 0 111 -85 236 -195 289 -55 26 -195 37 -250 20z
M3221 3377 c-74 -23 -139 -134 -111 -187 21 -39 80 -19 80 26 0 39
42 78 85 78 43 0 85 -39 85 -78 0 -46 52 -62 85 -26 37 41 -9 139 -85 178 -48
24 -85 26 -139 9z"/>
</g></g></svg>
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
												<svg width="25" height="27" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512.001 512.001;" xml:space="preserve">
<g>
	<path style="fill:#6418C3;" d="M3.921,126.715c-0.225,0.334-0.419,0.68-0.622,1.022c-0.183,0.309-0.377,0.611-0.549,0.929
		c-0.188,0.352-0.348,0.714-0.517,1.071c-0.155,0.329-0.32,0.653-0.461,0.991c-0.144,0.351-0.261,0.709-0.388,1.066
		c-0.13,0.36-0.268,0.715-0.38,1.083c-0.107,0.36-0.188,0.725-0.281,1.088c-0.093,0.372-0.197,0.742-0.273,1.12
		c-0.085,0.424-0.135,0.85-0.194,1.277c-0.047,0.326-0.109,0.645-0.143,0.974c-0.15,1.53-0.15,3.07,0,4.6
		c0.034,0.329,0.095,0.649,0.143,0.974c0.059,0.427,0.109,0.853,0.194,1.277c0.076,0.38,0.18,0.748,0.273,1.12
		c0.093,0.363,0.172,0.728,0.281,1.088c0.112,0.368,0.25,0.723,0.38,1.083c0.127,0.355,0.244,0.714,0.388,1.066
		c0.141,0.338,0.306,0.663,0.461,0.991c0.169,0.358,0.329,0.72,0.517,1.071c0.171,0.318,0.365,0.619,0.549,0.929
		c0.205,0.343,0.399,0.689,0.622,1.022c0.23,0.346,0.487,0.673,0.74,1.005c0.205,0.273,0.394,0.554,0.613,0.821
		c0.489,0.594,1.002,1.168,1.547,1.711L123.18,272.456c4.544,4.546,10.501,6.817,16.457,6.817c5.956,0,11.913-2.271,16.455-6.817
		c9.089-9.087,9.089-23.824,0-32.912L79.458,162.91h409.27c12.853,0,23.273-10.42,23.273-23.273s-10.42-23.273-23.273-23.273H79.458
		l76.634-76.636c9.089-9.087,9.089-23.824,0-32.912c-9.087-9.089-23.824-9.089-32.912,0L6.821,123.177
		c-0.545,0.543-1.06,1.116-1.547,1.711c-0.22,0.267-0.41,0.548-0.613,0.821C4.41,126.041,4.152,126.369,3.921,126.715z"/>
	<path style="fill:#6418C3;" d="M511.743,369.091c-0.059-0.427-0.109-0.853-0.194-1.277c-0.076-0.38-0.18-0.748-0.273-1.12
		c-0.093-0.363-0.172-0.728-0.281-1.088c-0.112-0.368-0.25-0.723-0.38-1.083c-0.127-0.355-0.244-0.714-0.388-1.064
		c-0.141-0.338-0.306-0.663-0.461-0.991c-0.169-0.358-0.329-0.72-0.517-1.071c-0.171-0.318-0.365-0.619-0.549-0.929
		c-0.205-0.343-0.399-0.689-0.622-1.022c-0.23-0.346-0.487-0.673-0.74-1.005c-0.205-0.273-0.394-0.554-0.614-0.821
		c-0.487-0.594-1.002-1.168-1.547-1.711L388.818,239.548c-9.087-9.089-23.823-9.089-32.912,0c-9.089,9.087-9.089,23.824,0,32.912
		l76.637,76.631H23.273C10.42,349.092,0,359.512,0,372.364c0,12.853,10.42,23.273,23.273,23.273h409.27l-76.636,76.636
		c-9.089,9.087-9.089,23.824,0,32.912c4.544,4.544,10.501,6.816,16.457,6.816s11.913-2.271,16.455-6.817l116.359-116.359
		c0.545-0.543,1.06-1.116,1.547-1.711c0.22-0.267,0.41-0.548,0.614-0.821c0.251-0.332,0.509-0.659,0.74-1.005
		c0.225-0.334,0.419-0.681,0.622-1.022c0.183-0.309,0.377-0.611,0.549-0.929c0.188-0.352,0.348-0.712,0.517-1.071
		c0.155-0.329,0.32-0.653,0.461-0.991c0.144-0.351,0.261-0.709,0.388-1.066c0.13-0.36,0.268-0.715,0.38-1.083
		c0.107-0.36,0.188-0.725,0.281-1.088c0.093-0.372,0.197-0.742,0.273-1.12c0.085-0.424,0.135-0.85,0.194-1.277
		c0.047-0.326,0.109-0.645,0.143-0.974c0.15-1.53,0.15-3.07,0-4.6C511.851,369.735,511.789,369.415,511.743,369.091z"/>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
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
{{--
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
--}}
@endsection
