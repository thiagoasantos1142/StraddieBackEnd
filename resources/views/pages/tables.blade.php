
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- PAGE-HEADER -->
                    <div class="page-header d-flex align-items-center justify-content-between border-bottom mb-4">
                        <h1 class="page-title">Default Tables</h1>
                        <div>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Default Tables</li>
                            </ol>
                        </div> 
                    </div>
                    <!-- PAGE-HEADER END -->

                    <!-- CONTAINER -->
                    <div class="main-container container-fluid">

                        <!-- ROW-1 START -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Bordered Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use &nbsp;<code class="highlighter-rouge d-inline-flex">.table-bordered</code>&nbsp;to add zebra-striping to any table row within the &nbsp;<code class="highlighter-rouge d-inline-flex">.tbody</code>&nbsp;.</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Samantha May</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$43,198</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Striped Rows</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use &nbsp;<code class="highlighter-rouge d-inline-flex"> .table-striped</code>&nbsp;to add zebra-striping to any table row within the &nbsp;<code class="highlighter-rouge d-inline-flex">.tbody</code>&nbsp;.</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Samantha May</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$43,198</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-1 END -->

                        <!-- ROW-2 START -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Hoverable Rows Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use&nbsp; <code class="highlighter-rouge d-inline-flex">.table-hover</code>&nbsp;to add zebra-striping to any table row within the &nbsp;<code class="highlighter-rouge d-inline-flex">.tbody</code>&nbsp;.</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-hover mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Samantha May</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$43,198</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Borderless Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use &nbsp;<code class="highlighter-rouge d-inline-flex">.table-borderless</code>&nbsp;to add zebra-striping to any table row within the&nbsp; <code class="highlighter-rouge d-inline-flex">.tbody</code>&nbsp;.</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-borderless mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-2 END -->

                        <!-- ROW-3 START -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Small Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Add&nbsp; <code class="highlighter-rouge d-inline-flex">.table-sm</code>&nbsp; to make any &nbsp;<code class="highlighter-rouge d-inline-flex">.table</code>&nbsp; more compact by cutting all cell &nbsp;<code class="highlighter-rouge d-inline-flex">padding</code>&nbsp; in half.</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-sm mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Samantha May</td>
                                                        <td>Junior Technical Author</td>
                                                        <td>$43,198</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Dark</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use &nbsp;<code class="highlighter-rouge d-inline-flex">.table-dark</code>&nbsp;to add zebra-striping to any table row within the &nbsp;<code class="highlighter-rouge d-inline-flex">.tbody</code>.&nbsp;</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap  table-dark table-striped mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="tx-fixed-white">ID</th>
                                                        <th class="tx-fixed-white">Name</th>
                                                        <th class="tx-fixed-white">Position</th>
                                                        <th class="tx-fixed-white">Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="tx-fixed-white">1</td>
                                                        <td class="tx-fixed-white">Joan Powell</td>
                                                        <td class="tx-fixed-white">Associate Developer</td>
                                                        <td class="tx-fixed-white">$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tx-fixed-white">2</td>
                                                        <td class="tx-fixed-white">Gavin Gibson</td>
                                                        <td class="tx-fixed-white">Account manager</td>
                                                        <td class="tx-fixed-white">$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tx-fixed-white">3</td>
                                                        <td class="tx-fixed-white">Julian Kerr</td>
                                                        <td class="tx-fixed-white">Senior Javascript Developer</td>
                                                        <td class="tx-fixed-white">$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tx-fixed-white">4</td>
                                                        <td class="tx-fixed-white">Cedric Kelly</td>
                                                        <td class="tx-fixed-white">Accountant</td>
                                                        <td class="tx-fixed-white">$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-3 END -->

                        <!-- ROW-4 START -->
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Nested Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Border styles, active styles, and table variants are not inherited by nested tables.</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="4">
                                                            <table class="table border text-nowrap text-md-nowrap  mb-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>Joan Powell</td>
                                                                        <td>Associate Developer</td>
                                                                        <td>$450,870</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>2</td>
                                                                        <td>Gavin Gibson</td>
                                                                        <td>Account manager</td>
                                                                        <td>$230,540</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>3</td>
                                                                        <td>Julian Kerr</td>
                                                                        <td>Senior Javascript Developer</td>
                                                                        <td>$55,300</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>4</td>
                                                                        <td>Cedric Kelly</td>
                                                                        <td>Accountant</td>
                                                                        <td>$234,100</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Samantha May</td>
                                                            <td>Junior Technical Author</td>
                                                            <td>$43,198</td>
                                                        </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Contextual Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use contextual classes to color tables, table rows or individual cells.</p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-default">
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr class="table-primary">
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr class="table-secondary">
                                                        <td>3</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <td>4</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr class="table-danger">
                                                        <td>5</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <td>6</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <td>7</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr class="table-light">
                                                        <td>8</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                    <tr class="table-light">
                                                        <td>9</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-4 END -->

                        <!-- ROW-5 START -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Primary Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge d-inline-flex">.table-primary</code></p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-primary mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Secondary Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge d-inline-flex">.table-secondary</code></p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-secondary mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Success Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge d-inline-flex">.table-success</code></p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-success mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Warning Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge d-inline-flex">.table-warning</code></p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-warning mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Info Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge d-inline-flex">.table-info</code></p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-info mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Danger Table</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Use <code class="highlighter-rouge d-inline-flex">.table-danger</code></p>
                                        <div class="table-responsive">
                                            <table class="table border text-nowrap text-md-nowrap table-danger mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>ID</th>
                                                        <th>Name</th>
                                                        <th>Position</th>
                                                        <th>Salary</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Joan Powell</td>
                                                        <td>Associate Developer</td>
                                                        <td>$450,870</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Gavin Gibson</td>
                                                        <td>Account manager</td>
                                                        <td>$230,540</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Julian Kerr</td>
                                                        <td>Senior Javascript Developer</td>
                                                        <td>$55,300</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Cedric Kelly</td>
                                                        <td>Accountant</td>
                                                        <td>$234,100</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-5 END -->

                        <!-- ROW-6 START -->
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table head Primary</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code class="highlighter-rouge d-inline-flex">.table-primary</code> to <code class="highlighter-rouge d-inline-flex">&lt;thead&gt;</code>
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table head Secondary</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code class="highlighter-rouge d-inline-flex">.table-secondary</code> to <code class="highlighter-rouge d-inline-flex">&lt;thead&gt;</code>
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead class="table-secondary">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table head Warning</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code class="highlighter-rouge d-inline-flex">.table-warning</code> to <code class="highlighter-rouge d-inline-flex">&lt;thead&gt;</code>
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead class="table-warning">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table head Success</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code class="highlighter-rouge d-inline-flex">.table-success</code> to <code class="highlighter-rouge d-inline-flex">&lt;thead&gt;</code>
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead class="table-success">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Head Info</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code class="highlighter-rouge d-inline-flex">.table-info</code> to <code class="highlighter-rouge d-inline-flex">&lt;thead&gt;</code>
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead class="table-info">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Table Head Danger</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>Add <code class="highlighter-rouge d-inline-flex">.table-danger</code> to <code class="highlighter-rouge d-inline-flex">&lt;thead&gt;</code>
                                            <div class="table-responsive">
                                                <table class="table border text-nowrap text-md-nowrap mb-0">
                                                    <thead class="table-danger">
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Name</th>
                                                            <th>Position</th>
                                                            <th>Salary</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Joan Powell</td>
                                                            <td>Associate Developer</td>
                                                            <td>$450,870</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Gavin Gibson</td>
                                                            <td>Account manager</td>
                                                            <td>$230,540</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Julian Kerr</td>
                                                            <td>Senior Javascript Developer</td>
                                                            <td>$55,300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Cedric Kelly</td>
                                                            <td>Accountant</td>
                                                            <td>$234,100</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ROW-6 END -->
                    </div>
                    <!-- CONTAINER CLOSED -->

@endsection

@section('scripts')
	
	

@endsection
