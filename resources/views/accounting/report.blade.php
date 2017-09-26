@extends ('layouts.master')
@section ('content')
<div class="row">
    <div class="col-lg-12">
        <div class="page-title">
            <h1>
                Invoice
            </h1>
            <ol class="breadcrumb">
                <li><i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">Accounting Reports</li>
            </ol>
        </div>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->

<div class="row">
    <div class="col-lg-8 col-lg-offset-2 col-md-12">
        <div class="portlet portlet-default">
            <div class="portlet-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Reports</h3>
                        <p>
                            From February 19 2017 to March 19 2017
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Quantity</th>
                                        <th>Item Price</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Setup Fee</td>
                                        <td>Setup fee for the hosting package purchased on 12/19/13.</td>
                                        <td>$25.00</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Basic Hosting Package</td>
                                        <td>Basic hosting package. Includes 5GB storage space, 400GB monthly bandwidth, and forum support.</td>
                                        <td>$29.00</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>Billed Support Hours</td>
                                        <td>Additional tech support purchased outside of the basic hosting package.</td>
                                        <td>$15.00</td>
                                    </tr>
                                    <tr class="text-red">
                                        <td></td>
                                        <td></td>
                                        <td class="text-right"><strong>Total Amount</strong>
                                        </td>
                                        <td><strong>$282.48</strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->
                        <br>
                        <a class="btn btn-green"><i class="fa fa-print"></i> Print Reports</a>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>
</div>
@endsection