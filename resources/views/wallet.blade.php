@extends('layouts.app')

@section('content')

@include('panels.header')

@include('panels.sidebar') 

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-6">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header d-block d-sm-flex border-0 pb-0">
										<div>
											<h4 class="fs-20 text-black">My Cards</h4>
											<p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0">
											<ul class="nav nav-tabs tabs-lg" role="tablist">
												<li class="nav-item">
													<a class="nav-link px-3 wspace-no active" data-toggle="tab" href="#Bank-Wallet" role="tab">
														Bank Wallet
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link px-3 wspace-no" data-toggle="tab" href="#Crypto-Wallet" role="tab">
														Crypto Wallet
													</a>
												</li>
												
											</ul>
										</div>
									</div>
									
									<div class="card-body">
										<div class="tab-content">
											<div id="Bank-Wallet" class="tab-pane active">	
												<div class="row">
													<div class="col-sm-5 mb-4">
														<p class="mb-2">Card Name</p>
														<h4 class="text-black">Main Balance</h4>
													</div>
													<div class="col-sm-7 mb-4">
														<p class="mb-2">Bank Name</p>
														<h4 class="text-black">ABC Center Bank</h4>
													</div>
													<div class="col-sm-5 mb-4">
														<p class="mb-2">Card Holder</p>
														<h4 class="text-black">Thomas Aldox</h4>
													</div>
													<div class="col-sm-7 mb-4">
														<p class="mb-2">Card Number</p>
														<h4 class="text-black">**** **** **** 1234</h4>
													</div>
													<div class="col-md-12">
																<a href="javascript:void(0);" class="btn btn-primary d-block rounded-0 mt-3 mt-md-0">
																EDIT
																</a>
															</div>
												</div>
											</div>
											<div id="Crypto-Wallet" class="tab-pane">	
												<div class="row">
													<div class="col-sm-12 mb-4">
														<p class="mb-2">Wallet Address</p>
														<h4 class="text-black">{{ bin2hex(random_bytes(16))}}</h4>
													</div>	
													<div class="col-md-12">
																<a href="javascript:void(0);" class="btn btn-primary d-block rounded-0 mt-3 mt-md-0">
																TRANSFER NOW
																</a>
													</div>
												</div>
											</div>		
										</div>
									</div>
								</div>	
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<div>
											<h4 class="fs-20 text-black">Transfer</h4>
											<p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur</p>
										</div>
									</div>
									<div class="card-body">
										<div class="basic-form">
											<form>
												<div class="form-group">
													<div class="input-group input-group-lg">
														<div class="input-group-prepend">
															<span class="input-group-text bg-white border rounded-0">Amount</span>
														</div>
														<input type="number" class="form-control rounded-0" placeholder="0,000000">
													</div>
												</div>
											</form>
										</div>
										<div class="d-flex justify-content-between align-items-center">
											<h4 class="fs-20 text-black mb-0">Recent Contacts</h4>
											<a href="javascript:void(0);" class="btn btn-link">View more</a>
										</div>
										<div class="testimonial-one owl-right-nav owl-carousel owl-loaded owl-drag">
											<div class="items">
												<div>
													<img class="mb-3" src="images/profile/10.jpg" alt="">
													<h5 class="text-black mb-0">Samuel</h5>
													<span class="fs-12">@sam224</span>
												</div>
											</div>
											<div class="items">
												<div>
													<img class="mb-3" src="images/profile/11.jpg" alt="">
													<h5 class="text-black mb-0">Cindy</h5>
													<span class="fs-12">@cindyss</span>
												</div>
											</div>
											<div class="items">
												<div>
													<img class="mb-3" src="images/profile/12.jpg" alt="">
													<h5 class="text-black mb-0">David</h5>
													<span class="fs-12">@davidxc</span>
												</div>
											</div>
											<div class="items">
												<div>
													<img class="mb-3" src="images/profile/13.jpg" alt="">
													<h5 class="text-black mb-0">Martha </h5>
													<span class="fs-12">@marthaa</span>
												</div>
											</div>
											<div class="items">
												<div>
													<img class="mb-3" src="images/profile/14.jpg" alt="">
													<h5 class="text-black mb-0">Olivia </h5>
													<span class="fs-12">@oliv62</span>
												</div>
											</div>
											<div class="items">
												<div>
													<img class="mb-3" src="images/profile/15.jpg" alt="">
													<h5 class="text-black mb-0">Bella</h5>
													<span class="fs-12">@bellazz</span>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer border-0 pt-0">
										<div class="row align-items-center">
											<div class="col-md-7">
												<p class="mb-0 fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
											</div>
											<div class="col-md-5 text-right">
												<a href="javascript:void(0);" class="btn btn-primary d-block rounded-0 mt-3 mt-md-0">
												TRANSFER NOW
												</a>
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
									<div class="card-header d-block d-sm-flex border-0 pb-0">
										<div>
											<h4 class="fs-20 text-black">My Coin</h4>
											<p class="mb-0 fs-13">Jual atau Beli APENFT</p>
										</div>
										<div class="card-action card-tabs mt-3 mt-sm-0">
											<ul class="nav nav-tabs tabs-lg" role="tablist">
												<li class="nav-item">
													<a class="nav-link px-3 wspace-no active" data-toggle="tab" href="#Buy-Coin" role="tab">
														Beli Token
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link px-3 wspace-no" data-toggle="tab" href="#Sell-Coin" role="tab">
														Jual Token
													</a>
												</li>
												
											</ul>
										</div>
									</div>
									
									<div class="card-body">
										
										<div class="tab-content">
											<div id="Buy-Coin" class="tab-pane active">	
												<div class="row">
													<div class="basic-form">
														<p> 1 APENFT = Rp {{ $buy }}</p>
														<form>
															<div class="form-group">
																<div class="input-group input-group-lg">
																	<div class="input-group-prepend">
																		<span class="input-group-text bg-white border rounded-0">Total Token</span>
																	</div>
																	<input type="number" class="form-control rounded-0" placeholder="0,000000">
																</div>
															</div>
															<div class="col-md-12">
																<a href="javascript:void(0);" class="btn btn-primary d-block rounded-0 mt-3 mt-md-0">
																TRANSFER NOW
																</a>
															</div>
														</form>
													</div>
												</div>
											</div>
											<div id="Sell-Coin" class="tab-pane">	
												<div class="row">
													<div class="basic-form">
														<p> 1 APENFT = Rp {{ $sell }}</p>
														<form>
															<div class="form-group">
																<div class="input-group input-group-lg">
																	<div class="input-group-prepend">
																		<span class="input-group-text bg-white border rounded-0">Total Token</span>
																	</div>
																	<input type="number" class="form-control rounded-0" placeholder="0,000000">
																</div>
															</div>
															<div class="col-md-12">
																<a href="javascript:void(0);" class="btn btn-primary d-block rounded-0 mt-3 mt-md-0">
																TRANSFER NOW
																</a>
															</div>
														</form>
													</div>	
												</div>
											</div>		
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>	
					
					
				</div>
            </div>
        </div>
@endsection		