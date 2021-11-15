@extends('layouts.app')

@section('content')

@include('panels.header')

@include('panels.sidebar') 

<div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-6 col-xxl-12 col-lg-8">
						<div class="card">
							<div class="card-header border-0 pb-0 d-block d-md-flex">
								<div>
									<h4 class="fs-20 text-black">Quick Trade</h4>
									<p class="fs-13">Lorem ipsum dolor sit amet, consectetur</p>
								</div>
								<div class="dropdown custom-dropdown d-block mt-3 mt-sm-0">
									<div class="btn bgl-light d-flex align-items-center rounded-0 svg-btn btn-md" data-toggle="dropdown">
										<i class="fa fa-angle-down scale5 mr-3"></i>
										<div class="text-left ml-3">
											<span class="d-block fs-16 text-black">561,511 Btc</span>
										</div>
										<svg class="ml-3" width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M28.5001 16.5002C28.4987 14.844 27.1561 13.5018 25.5003 13.5H16.5002V19.4999H25.5003C27.1561 19.4985 28.4987 18.1559 28.5001 16.5002Z" fill="#FFAB2D"></path>
											<path d="M16.5002 28.5H25.5003C27.157 28.5 28.5001 27.157 28.5001 25.5003C28.5001 23.8432 27.157 22.5001 25.5003 22.5001H16.5002V28.5Z" fill="#FFAB2D"></path>
											<path d="M20.9999 0.00012207C9.40201 0.00012207 0 9.40213 0 21C0 32.5979 9.40201 41.9999 20.9999 41.9999C32.5978 41.9999 41.9998 32.5979 41.9998 21C41.9865 9.40762 32.5923 0.0133972 20.9999 0.00012207ZM31.5001 25.4998C31.496 28.8122 28.8121 31.4961 25.5002 31.4998V32.9998C25.5002 33.8284 24.8282 34.4999 24.0001 34.4999C23.1715 34.4999 22.5 33.8284 22.5 32.9998V31.4998H19.5003V32.9998C19.5003 33.8284 18.8283 34.4999 18.0002 34.4999C17.1716 34.4999 16.5001 33.8284 16.5001 32.9998V31.4998H12.0003C11.1717 31.4998 10.5002 30.8282 10.5002 30.0001C10.5002 29.1716 11.1717 28.5 12.0003 28.5H13.4999V13.5H12.0003C11.1717 13.5 10.5002 12.8285 10.5002 11.9999C10.5002 11.1714 11.1717 10.4998 12.0003 10.4998H16.5001V9.00021C16.5001 8.17166 17.1716 7.50012 18.0002 7.50012C18.8287 7.50012 19.5003 8.17166 19.5003 9.00021V10.4998H22.5V9.00021C22.5 8.17166 23.1715 7.50012 24.0001 7.50012C24.8286 7.50012 25.5002 8.17166 25.5002 9.00021V10.4998C28.7997 10.4861 31.4859 13.1494 31.5001 16.4489C31.5074 18.1962 30.7498 19.8593 29.4264 21C30.7375 22.128 31.4941 23.77 31.5001 25.4998Z" fill="#FFAB2D"></path>
										</svg>
									</div>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="javascript:void(0);">4 June 2020 - 4 July 2020</a>
										<a class="dropdown-item" href="javascript:void(0);">5 july 2020 - 4 Aug 2020</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<div class="basic-form">
                                    <form>
                                        <div class="form-group">
											<div class="input-group input-group-lg">
												<div class="input-group-prepend">
													<span class="input-group-text bg-white border rounded-0">Amount BTC</span>
												</div>
												<input type="number" class="form-control rounded-0" placeholder="0,000000">
											</div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
												<div class="input-group-prepend">
													<span class="input-group-text bg-white border  rounded-0">Price BPL</span>
												</div>
												<input type="number" class="form-control rounded-0" placeholder="0,000000">
											</div>
                                        </div>
										<div class="form-group">
                                            <div class="input-group input-group-lg">
												<div class="input-group-prepend">
													<span class="input-group-text bg-white border rounded-0">Fee (1%)</span>
												</div>
												<input type="number" class="form-control rounded-0" placeholder="0,000000">
											</div>
                                        </div>
										<div class="form-group">
											<div class="input-group input-group-lg">
												<div class="input-group-prepend">
													<span class="input-group-text bg-white border rounded-0">Total BPL</span>
												</div>
												<input type="number" class="form-control rounded-0" placeholder="0,000000">
											</div>
                                        </div>
                                    </form>
                                </div>
							</div>
							<div class="card-footer border-0 pt-0">
								<div class="row align-items-center">
									<div class="col-md-5">
										<p class="mb-0 fs-13">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
									</div>
									<div class="col-md-7 text-left mt-3 mt-sm-0 text-sm-right">
										<a href="javascript:void(0);" class="btn btn-success rounded-0 mb-2">
										BUY
											<svg class="ml-4 scale3" width="16" height="16" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M16.9638 11.5104L16.9721 14.9391L3.78954 1.7565C3.22815 1.19511 2.31799 1.19511 1.75661 1.7565C1.19522 2.31789 1.19522 3.22805 1.75661 3.78943L14.9392 16.972L11.5105 16.9637L11.5105 16.9637C10.7166 16.9619 10.0715 17.6039 10.0696 18.3978C10.0677 19.1919 10.7099 19.8369 11.5036 19.8388L11.5049 19.3388L11.5036 19.8388L18.3976 19.8554L18.4146 19.8555L18.4159 19.8555C18.418 19.8555 18.42 19.8555 18.422 19.8555C19.2131 19.8533 19.8528 19.2114 19.8555 18.4231C19.8556 18.4196 19.8556 18.4158 19.8556 18.4117L19.8389 11.5035L19.8389 11.5035C19.8369 10.7097 19.1919 10.0676 18.3979 10.0695C17.604 10.0713 16.9619 10.7164 16.9638 11.5103L16.9638 11.5104Z" fill="white" stroke="white"></path>
											</svg>
										</a>
										<a href="javascript:void(0);" class="btn ml-3 btn-danger rounded-0 mb-2">
										SELL
										<svg class="ml-4 scale5" width="16" height="16" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M5.35182 13.4965L5.35182 13.4965L5.33512 6.58823C5.33508 6.5844 5.3351 6.58084 5.33514 6.57759M5.35182 13.4965L5.83514 6.58306L5.33514 6.58221C5.33517 6.56908 5.33572 6.55882 5.33597 6.5545L5.33606 6.55298C5.33585 6.55628 5.33533 6.56514 5.33516 6.57648C5.33515 6.57684 5.33514 6.57721 5.33514 6.57759M5.35182 13.4965C5.35375 14.2903 5.99878 14.9324 6.79278 14.9305C7.58669 14.9287 8.22874 14.2836 8.22686 13.4897L8.22686 13.4896L8.21853 10.0609M5.35182 13.4965L8.21853 10.0609M5.33514 6.57759C5.33752 5.789 5.97736 5.14667 6.76872 5.14454C6.77041 5.14452 6.77217 5.14451 6.77397 5.14451L6.77603 5.1445L6.79319 5.14456L13.687 5.16121L13.6858 5.66121L13.687 5.16121C14.4807 5.16314 15.123 5.80809 15.1211 6.6022C15.1192 7.3961 14.4741 8.03814 13.6802 8.03626L13.6802 8.03626L10.2515 8.02798L23.4341 21.2106C23.9955 21.772 23.9955 22.6821 23.4341 23.2435C22.8727 23.8049 21.9625 23.8049 21.4011 23.2435L8.21853 10.0609M5.33514 6.57759C5.33513 6.57959 5.33514 6.58159 5.33514 6.5836L8.21853 10.0609M6.77407 5.14454C6.77472 5.14454 6.77537 5.14454 6.77603 5.14454L6.77407 5.14454Z" fill="white" stroke="white"></path>
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
@endsection		