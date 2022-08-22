@extends('admin.layout.admin')

@section('content')
    <style>
        .card .table td, .card .table th {
            white-space: break-spaces;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Size'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">Monthly report summury</div>
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">computer number</td>
                                    <td>:</td>
                                    <td>{{ $report->computer_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">computer present</td>
                                    <td>:</td>
                                    <td>{{ $report->computer_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">mobile number</td>
                                    <td>:</td>
                                    <td>{{ $report->mobile_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">mobile present</td>
                                    <td>:</td>
                                    <td>{{ $report->mobile_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">word number</td>
                                    <td>:</td>
                                    <td>{{ $report->word_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">word present</td> 
                                    <td>:</td>
                                    <td>{{ $report->word_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">excel number</td>
                                    <td>:</td>
                                    <td>{{ $report->excel_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">excel present</td>
                                    <td>:</td>
                                    <td>{{ $report->excel_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">power number</td>
                                    <td>:</td>
                                    <td>{{ $report->power_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">power present</td>
                                    <td>:</td>
                                    <td>{{ $report->power_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">facebook number</td>
                                    <td>:</td>
                                    <td>{{ $report->facebook_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">facebook present</td>
                                    <td>:</td>
                                    <td>{{ $report->facebook_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">twitter number</td>
                                    <td>:</td>
                                    <td>{{ $report->twitter_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">twitter present</td>
                                    <td>:</td>
                                    <td>{{ $report->twitter_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">blog number</td>
                                    <td>:</td>
                                    <td>{{ $report->blog_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">blog present</td>
                                    <td>:</td>
                                    <td>{{ $report->blog_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">wiki number</td>
                                    <td>:</td>
                                    <td>{{ $report->wiki_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">wiki present</td>
                                    <td>:</td>
                                    <td>{{ $report->wiki_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->online_rule_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->online_rule_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->online_security_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->online_security_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->photoshop_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->photoshop_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->illustrator_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->illustrator_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->video_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->video_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->web_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->web_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->app_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->app_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->internet_number }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">online rule number</td>
                                    <td>:</td>
                                    <td>{{ $report->internet_present }}</td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Created at</td>
                                    <td>:</td>
                                    <td>
                                        {{ $report->created_at }}
                                        
                                    </td>
                                    <tr>
                                        <td style="width: 40%">Status</td>
                                        <td>:</td>
                                        <td>{{ $report->status }}</td>
                                    </tr>
                                </tr>
                                <tr>
                                    
                                </tr>
                            </table>
                            <div class="card-footer  d-flex justify-content-between">
                                <div>
                                </div>
                                <div>
                                    <a href="{{ route('report.index') }}" 
                                    class="btn btn-warning">
                                    <i class="fa fa-check"></i>
                                    <span>Ok</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



