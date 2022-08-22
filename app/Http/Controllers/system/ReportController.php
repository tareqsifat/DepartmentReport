<?php

namespace App\Http\Controllers\system;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $report = Report::where('is_archive',0)->where('status',1)->paginate(15);
        // if(Auth::user()->role_id == 3){}
        return view('admin.system.report.index',compact('report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.system.report.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'month' => 'required',
            'year' => 'required',
            'computer_present' => Rule::requiredIf($request->has('computer_number') && $request->computer_number != null),
            'mobile_present' => Rule::requiredIf($request->has('mobile_number') && $request->mobile_number != null),
            'word_present' => Rule::requiredIf($request->has('word_number') && $request->word_number != null),
            'excel_present' => Rule::requiredIf($request->has('excel_number') && $request->excel_number != null),
            'power_present' => Rule::requiredIf($request->has('power_number') && $request->power_number != null),
            'facebook_present' => Rule::requiredIf($request->has('facebook_number') && $request->facebook_number != null),
            'twitter_present' => Rule::requiredIf($request->has('twitter_number') && $request->twitter_number != null),
            'blog_present' => Rule::requiredIf($request->has('blog_number') && $request->blog_number != null),
            'wiki_present' => Rule::requiredIf($request->has('wiki_number') && $request->wiki_number != null),
            'online_rule_present' => Rule::requiredIf($request->has('online_rule_number') && $request->online_rule_number != null),
            'online_security_present' => Rule::requiredIf($request->has('online_security_number') && $request->online_security_number != null),
            'photoshop_present' => Rule::requiredIf($request->has('photoshop_number') && $request->photoshop_number != null),
            'illustrator_present' => Rule::requiredIf($request->has('illustrator_number') && $request->illustrator_number != null),
            'video_present' => Rule::requiredIf($request->has('video_number') && $request->video_number != null),
            'web_present' => Rule::requiredIf($request->has('web_number') && $request->web_number != null),
            'app_present' => Rule::requiredIf($request->has('app_number') && $request->app_number != null),
            'internet_present' => Rule::requiredIf($request->has('internet_number') && $request->internet_number != null),
        ]);

        $report = new Report();
        $report->month = $request->month;
        $report->year = $request->year;
        $report->computer_number = $request->computer_number;
        $report->computer_present = $request->computer_present;
        $report->mobile_number = $request->mobile_number;
        $report->mobile_present = $request->mobile_present;
        $report->word_number = $request->word_number;
        $report->word_present = $request->word_present;
        $report->excel_number = $request->excel_number;
        $report->excel_present = $request->excel_present;
        $report->power_number = $request->power_number;
        $report->power_present = $request->power_present;
        $report->facebook_number = $request->facebook_number;
        $report->facebook_present = $request->facebook_present;
        $report->twitter_number = $request->twitter_number;
        $report->twitter_present = $request->twitter_present;
        $report->blog_number = $request->blog_number;
        $report->blog_present = $request->blog_present;
        $report->wiki_number = $request->wiki_number;
        $report->wiki_present = $request->wiki_present;
        $report->online_rule_number = $request->online_rule_number;
        $report->online_rule_present = $request->online_rule_present;
        $report->online_security_number = $request->online_security_number;
        $report->online_security_present = $request->online_security_present;
        $report->photoshop_number = $request->photoshop_number;
        $report->photoshop_present = $request->photoshop_present;
        $report->illustrator_number = $request->illustrator_number;
        $report->illustrator_present = $request->illustrator_present;
        $report->video_number = $request->video_number;
        $report->video_present = $request->video_present;
        $report->web_number = $request->web_number;
        $report->web_present = $request->web_present;
        $report->app_number = $request->app_number;
        $report->app_present = $request->app_present;
        $report->internet_number = $request->internet_number;
        $report->internet_present = $request->internet_present;

        $report->creator = Auth::user()->id;
        $report->slug = Str::slug(Auth::user()->name . '_' .  Str::random(10));
        $report->save();

        return redirect()->route('report.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $report = Report::find($id);
        return view('admin.system.report.view', compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report = Report::find($id);
        return view('admin.system.report.edit', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'month' => 'required',
            'year' => 'required',
            'computer_present' => Rule::requiredIf($request->has('computer_number') && $request->computer_number != null),
            'mobile_present' => Rule::requiredIf($request->has('mobile_number') && $request->mobile_number != null),
            'word_present' => Rule::requiredIf($request->has('word_number') && $request->word_number != null),
            'excel_present' => Rule::requiredIf($request->has('excel_number') && $request->excel_number != null),
            'power_present' => Rule::requiredIf($request->has('power_number') && $request->power_number != null),
            'facebook_present' => Rule::requiredIf($request->has('facebook_number') && $request->facebook_number != null),
            'twitter_present' => Rule::requiredIf($request->has('twitter_number') && $request->twitter_number != null),
            'blog_present' => Rule::requiredIf($request->has('blog_number') && $request->blog_number != null),
            'wiki_present' => Rule::requiredIf($request->has('wiki_number') && $request->wiki_number != null),
            'online_rule_present' => Rule::requiredIf($request->has('online_rule_number') && $request->online_rule_number != null),
            'online_security_present' => Rule::requiredIf($request->has('online_security_number') && $request->online_security_number != null),
            'photoshop_present' => Rule::requiredIf($request->has('photoshop_number') && $request->photoshop_number != null),
            'illustrator_present' => Rule::requiredIf($request->has('illustrator_number') && $request->illustrator_number != null),
            'video_present' => Rule::requiredIf($request->has('video_number') && $request->video_number != null),
            'web_present' => Rule::requiredIf($request->has('web_number') && $request->web_number != null),
            'app_present' => Rule::requiredIf($request->has('app_number') && $request->app_number != null),
            'internet_present' => Rule::requiredIf($request->has('internet_number') && $request->internet_number != null),
        ]);

        $report = Report::find($id);
        $report->month = $request->month;
        $report->year = $request->year;
        $report->computer_number = $request->computer_number;
        $report->computer_present = $request->computer_present;
        $report->mobile_number = $request->mobile_number;
        $report->mobile_present = $request->mobile_present;
        $report->word_number = $request->word_number;
        $report->word_present = $request->word_present;
        $report->excel_number = $request->excel_number;
        $report->excel_present = $request->excel_present;
        $report->power_number = $request->power_number;
        $report->power_present = $request->power_present;
        $report->facebook_number = $request->facebook_number;
        $report->facebook_present = $request->facebook_present;
        $report->twitter_number = $request->twitter_number;
        $report->twitter_present = $request->twitter_present;
        $report->blog_number = $request->blog_number;
        $report->blog_present = $request->blog_present;
        $report->wiki_number = $request->wiki_number;
        $report->wiki_present = $request->wiki_present;
        $report->online_rule_number = $request->online_rule_number;
        $report->online_rule_present = $request->online_rule_present;
        $report->online_security_number = $request->online_security_number;
        $report->online_security_present = $request->online_security_present;
        $report->photoshop_number = $request->photoshop_number;
        $report->photoshop_present = $request->photoshop_present;
        $report->illustrator_number = $request->illustrator_number;
        $report->illustrator_present = $request->illustrator_present;
        $report->video_number = $request->video_number;
        $report->video_present = $request->video_present;
        $report->web_number = $request->web_number;
        $report->web_present = $request->web_present;
        $report->app_number = $request->app_number;
        $report->app_present = $request->app_present;
        $report->internet_number = $request->internet_number;
        $report->internet_present = $request->internet_present;

        $report->creator = Auth::user()->id;
        $report->slug = Str::slug(Auth::user()->name . '_' .  Str::random(10));
        $report->save();

        return redirect()->route('report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = Report::find($id);
        if(isset($report) && $report->status == 1){
            $report->status = 0;
            $report->save();
        }
        

        return redirect()->route('report.index');
    }
}
