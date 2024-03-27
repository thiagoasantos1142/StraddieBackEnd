
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Invoice</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Extension</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                            </ol>
                        </div>
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <div class="container">
                            <!-- ROW-1 OPEN -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="avatar-md">
                                                <img src="{{asset('build/assets/images/brand/toggle-logo.png')}}" alt="brand-logo">
                                            </div>
                                            <div class="ms-2">
                                                <div class="h6 mb-0">
                                                    INVOICE DETAILS : <span class="text-primary">#458-522</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row pt-3 justify-content-between">
                                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                    <p class="text-muted mb-2">
                                                        Billing From :
                                                    </p>
                                                    <p class="fw-bold mb-1">
                                                        Vexel Solutions
                                                    </p>
                                                    <p class="mb-1 text-muted">
                                                        Mig-1-11,Aloka-X street
                                                    </p>
                                                    <p class="mb-1 text-muted">
                                                        New city, New york, 225441
                                                    </p>
                                                    <p class="mb-1 text-muted">
                                                        vexelsol.vexel@gmail.com
                                                    </p>
                                                    <p class="mb-1 text-muted">
                                                        (545) 212-2121
                                                    </p>
                                                    <p class="text-muted">For more information check for <a href="javascript:void(0);" class="text-primary fw-semibold"><u>GSTIN</u></a> Details.</p>
                                                </div>
                                                <div class="col-lg-3 float-end">
                                                    <p class="text-muted mb-2">
                                                        Billing To :
                                                    </p>
                                                    <p class="fw-bold mb-1">
                                                        Rox Umpire
                                                    </p>
                                                    <p class="text-muted mb-1">
                                                        Mig-21-5,36 Old Honkong Place
                                                    </p>
                                                    <p class="text-muted mb-1">
                                                        New Flame spot UK London,53562
                                                    </p>
                                                    <p class="text-muted mb-1">
                                                        Roxyark3321@gmail.com
                                                    </p>
                                                    <p class="text-muted">
                                                        +2 542-421-3511
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="row my-4">
                                                <div class="col-xl-3">
                                                    <p class="fw-semibold text-muted mb-1">Invoice ID :</p>
                                                    <p class="fs-15 mb-1">#VXL445545451</p>
                                                </div>
                                                <div class="col-xl-3">
                                                    <p class="fw-semibold text-muted mb-1">Date Issued :</p>
                                                    <p class="fs-15 mb-1">26,Jun 2023 - <span class="text-muted fs-12">12:42PM</span></p>
                                                    </div>
                                                <div class="col-xl-3">
                                                    <p class="fw-semibold text-muted mb-1">Due Date :</p>
                                                    <p class="fs-15 mb-1">31,May 2024</p>
                                                </div>
                                                <div class="col-xl-3">
                                                    <p class="fw-semibold text-muted mb-1">Due Amount :</p>
                                                    <p class="fs-16 mb-1 fw-semibold">$5,451.21</p>
                                                </div>
                                            </div>
                                            <div class="table-responsive push">
                                                <table class="table table-bordered text-nowrap">
                                                    <tbody>
                                                        <tr class="table-primary bg-primary">
                                                            <th class="text-center tx-fixed-white">SL</th>
                                                            <th class="tx-fixed-white">Item description</th>
                                                            <th class="text-center tx-fixed-white">Quantity</th>
                                                            <th class="text-end tx-fixed-white">Unit Price</th>
                                                            <th class="text-end tx-fixed-white">Total</th>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td>
                                                                <p class="font-w600 mb-1">Logo Design</p>
                                                                <div class="text-muted">
                                                                    <div class="text-muted">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">2</td>
                                                            <td class="text-end">$674</td>
                                                            <td class="text-end">$1,308</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">2</td>
                                                            <td>
                                                                <p class="font-w600 mb-1">Website wireframe for 2 pages</p>
                                                                <div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</div>
                                                            </td>
                                                            <td class="text-center">4</td>
                                                            <td class="text-end">$1,500</td>
                                                            <td class="text-end">$6,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">3</td>
                                                            <td>
                                                                <p class="font-w600 mb-1">PSD to HTML coding</p>
                                                                <div class="text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</div>
                                                            </td>
                                                            <td class="text-center">3</td>
                                                            <td class="text-end">$530</td>
                                                            <td class="text-end">$1,690</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">4</td>
                                                            <td>
                                                                <p class="font-w600 mb-1">E-commerce Development</p>
                                                                <div class="text-muted">When our power of choice is untrammelled and when nothing prevents our being able</div>
                                                            </td>
                                                            <td class="text-center">2</td>
                                                            <td class="text-end">$800</td>
                                                            <td class="text-end">$1,600</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">5</td>
                                                            <td>
                                                                <p class="font-w600 mb-1">Design and layout of 2 pages in Photoshop</p>
                                                                <div class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</div>
                                                            </td>
                                                            <td class="text-center">2</td>
                                                            <td class="text-end">$720</td>
                                                            <td class="text-end">$1,440</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <div class="col-lg-3 float-end">
                                                    <table class="table table-borderless mb-0 text-nowrap">
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-start fw-semibold p-1">Sub Total :</td>
                                                                <td class="fw-bold text-end p-1">$12,038</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-start fw-semibold p-1">Tax ( VAT 10%) :</td>
                                                                <td class="fw-bold text-end p-1">$2,038</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-start fw-semibold p-1">Avail Discount :</td>
                                                                <td class="fw-bold text-end p-1">$22.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-start fw-semibold p-1">Coupon Discount(15%) :</td>
                                                                <td class="fw-bold text-end p-1">$500.23</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-start fw-semibold p-1 text-danger">Discount 50% :</td>
                                                                <td class="fw-bold text-end p-1 text-danger">$1066</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot class="border-top-0">
                                                            <tr>
                                                                <td class="text-start fw-semibold p-2 text-primary">Total :</td>
                                                                <td class="fw-bold text-end p-2 text-primary">$23,897</td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-xl-12">
                                                <div>
                                                    <label for="invoice-note" class="form-label">Note:</label>
                                                    <textarea class="form-control bg-light overflow-auto" id="invoice-note" rows="3">Once the invoice has been verified by the accounts payable team and recorded, the only task left is to send it for approval before releasing the payment</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-end">
                                            <button type="button" class="btn btn-primary mb-1 d-inline-flex"><i class="si si-cloud-download me-1 lh-base"></i> Download</button>
                                            <button type="button" class="btn btn-secondary mb-1 d-inline-flex"><i class="si si-paper-plane me-1 lh-base"></i> Send Invoice</button>
                                            <button type="button" class="btn btn-info mb-1 d-inline-flex" onclick="javascript:window.print();"><i class="si si-printer me-1 lh-base"></i> Print Invoice</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                            </div>
                            <!-- ROW-1 CLOSED -->
                        </div>
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
