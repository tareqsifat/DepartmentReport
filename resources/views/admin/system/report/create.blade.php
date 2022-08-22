@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'Create'])
            <div class="row">
                <div class="col-12">
                    {{-- <div class="card">
                        <div class="card-body">
                            <div class="card-heder d-flex justify-content-between">
                                <div class="card-title">Add new Report</div>
                                <a href="{{ route('report.index') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Back</a>
                            </div>
                            <hr />
                            <form method="POST" action="{{ route('report.store') }}">
                                <div class="preloader"></div>
                                @csrf
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" />
                                        <span class="text-danger name"></span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="icon" class="form-control" id="input-21"/>
                                        <span class="text-danger icon"></span>
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> ADD</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}

                </div>
                @php
                 $months = array('january', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'Octobeer', 'November', 'December');
                @endphp
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Add New Report</div>
                        <div class="card-body">
                            <form action="{{ route('report.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">month</label>
                                            <select class="custom-select" name="month" id="inputGroupSelect01">
                                                <option value="{{ Carbon\Carbon::now()->format('F') }}" selected>{{ Carbon\Carbon::now()->format('F') }}</option>
                                                @foreach ($months as $month)
                                                    <option value="{{ $month }}">{{ $month }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">year</label>
                                        <input type="text" name="year" class="form-control form-control-rounded" id="input-7" value="{{ Carbon\Carbon::now()->format('Y') }}"/>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">computer number</label>
                                        <input type="text" name="computer_number"  class="form-control form-control-rounded" id="input-6" value="{{old('computer_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">computer present</label>
                                        <input type="text" name="computer_present" class="form-control form-control-rounded" id="input-7" value="{{old('computer_present')}}"/>
                                        @error('computer_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">mobile number</label>
                                        <input type="text" name="mobile_number"  class="form-control form-control-rounded" id="input-6" value="{{old('mobile_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">mobile present</label>
                                        <input type="text" name="mobile_present" class="form-control form-control-rounded" id="input-7" value="{{old('mobile_present')}}"/>
                                        @error('mobile_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">word number</label>
                                        <input type="text" name="word_number"  class="form-control form-control-rounded" id="input-6" value="{{old('word_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">word present</label>
                                        <input type="text" name="word_present" class="form-control form-control-rounded" id="input-7" value="{{old('word_present')}}"/>
                                        @error('word_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">excel number</label>
                                        <input type="text" name="excel_number"  class="form-control form-control-rounded" id="input-6" value="{{old('excel_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">excel present</label>
                                        <input type="text" name="excel_present" class="form-control form-control-rounded" id="input-7" value="{{old('excel_present')}}"/>
                                        @error('excel_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">power number</label>
                                        <input type="text" name="power_number"  class="form-control form-control-rounded" id="input-6" value="{{old('power_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">power present</label>
                                        <input type="text" name="power_present" class="form-control form-control-rounded" id="input-7" value="{{old('power_present')}}"/>
                                        @error('power_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">facebook number</label>
                                        <input type="text" name="facebook_number"  class="form-control form-control-rounded" id="input-6" value="{{old('facebook_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">facebook present</label>
                                        <input type="text" name="facebook_present" class="form-control form-control-rounded" id="input-7" value="{{old('facebook_present')}}"/>
                                        @error('facebook_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">twitter number</label>
                                        <input type="text" name="twitter_number"  class="form-control form-control-rounded" id="input-6" value="{{old('twitter_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">twitter present</label>
                                        <input type="text" name="twitter_present" class="form-control form-control-rounded" id="input-7" value="{{old('twitter_present')}}"/>
                                        @error('twitter_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">blog number</label>
                                        <input type="text" name="blog_number"  class="form-control form-control-rounded" id="input-6" value="{{old('blog_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">blog present</label>
                                        <input type="text" name="blog_present" class="form-control form-control-rounded" id="input-7" value="{{old('blog_present')}}"/>
                                        @error('blog_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">wiki number</label>
                                        <input type="text" name="wiki_number"  class="form-control form-control-rounded" id="input-6" value="{{old('wiki_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">wiki present</label>
                                        <input type="text" name="wiki_present" class="form-control form-control-rounded" id="input-7" value="{{old('wiki_present')}}"/>
                                        @error('wiki_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">online rule number</label>
                                        <input type="text" name="online_rule_number"  class="form-control form-control-rounded" id="input-6" value="{{old('online_rule_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">online rule present</label>
                                        <input type="text" name="online_rule_present" class="form-control form-control-rounded" id="input-7" value="{{old('online_rule_present')}}"/>
                                        @error('online_rule_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">online security number</label>
                                        <input type="text" name="online_security_number"  class="form-control form-control-rounded" id="input-6" value="{{old('online_security_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">online security present</label>
                                        <input type="text" name="online_security_present" class="form-control form-control-rounded" id="input-7" value="{{old('online_security_present')}}"/>
                                        @error('online_security_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">photoshop number</label>
                                        <input type="text" name="photoshop_number"  class="form-control form-control-rounded" id="input-6" value="{{old('photoshop_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">photoshop present</label>
                                        <input type="text" name="photoshop_present" class="form-control form-control-rounded" id="input-7" value="{{old('photoshop_present')}}"/>
                                        @error('photoshop_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">illustrator number</label>
                                        <input type="text" name="illustrator_number"  class="form-control form-control-rounded" id="input-6" value="{{old('illustrator_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">illustrator present</label>
                                        <input type="text" name="illustrator_present" class="form-control form-control-rounded" id="input-7" value="{{old('illustrator_present')}}"/>
                                        @error('illustrator_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">video number</label>
                                        <input type="text" name="video_number"  class="form-control form-control-rounded" id="input-6" value="{{old('video_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">video present</label>
                                        <input type="text" name="video_present" class="form-control form-control-rounded" id="input-7" value="{{old('video_present')}}"/>
                                        @error('video_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">web number</label>
                                        <input type="text" name="web_number"  class="form-control form-control-rounded" id="input-6" value="{{old('web_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">web present</label>
                                        <input type="text" name="web_present" class="form-control form-control-rounded" id="input-7" value="{{old('web_present')}}"/>
                                        @error('web_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">app number</label>
                                        <input type="text" name="app_number"  class="form-control form-control-rounded" id="input-6" value="{{old('app_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">app present</label>
                                        <input type="text" name="app_present" class="form-control form-control-rounded" id="input-7" value="{{old('app_present')}}"/>
                                        @error('app_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6">
                                        <label for="input-6">Internet number</label>
                                        <input type="text" name="internet_number"  class="form-control form-control-rounded" id="input-6" value="{{old('internet_number')}}"/>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="input-7">Internet present</label>
                                        <input type="text" name="internet_present" class="form-control form-control-rounded" id="input-7" value="{{old('internet_present')}}"/>
                                        @error('internet_present')
                                            <span class="text-danger">This field is required</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-lg-5">
                                    <button type="submit" class="btn btn-light btn-round px-5"><i class="icon-lock"></i> Register</button>
                                </div>
                            </form>
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



