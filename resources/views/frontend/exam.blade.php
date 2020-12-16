@extends('layouts.frontend.app')
@section('title')
<title>Crypto Cipher</title>
@endsection

@section('css')
<style>
  .table-striped tbody tr:nth-of-type(odd){
    background-color: transparent;
  }
  .table-striped tbody tr:nth-of-type(even){
    background-color: #E5E5ED;
  }
  .bg-light-grey{
    background-color: #E5E5ED;
  }
  th{
    font-family: 'Roboto-Bold';
    font-size: 13px;
  }
  td{
    font-family: 'Roboto-Bold';
    font-size: 13px;
    color: #6D7178;
    border-right: 1px solid #fff;
  }
  th{
    border-right: 1px solid #fff;
  }
</style>
@endsection


@section('content')
<div class="bg-theme1 main-inner">
    <section class="container slider-header">
        <!-- title -->
        <div class="px-3 pt-4 media-pt-0">
            <h6 class="font-regular text-grey2 pl-2 pb-0 font-13 inner-title uppercase">Exam structure & certification</h6>
            <h4 class="font-black text-black font-35 marT-10">Exam Details</h4>
        </div>
        <!-- content -->
        <div class="row px-3 pb-4" style="margin-bottom: -18px;">
            <div class="col-md-12 my-3">
                <div class="slider-header py-4 px-3">
                    <div class="table-responsive px-3">
                      <table class="table table-striped">
                        <thead>
                          <tr class="uppercase bold font-regular bg-light-grey">
                            <th class="bold">Modules</th>
                            <th class="bold">Exam Structure</th>
                            <th class="bold">Full Marks</th>
                            <th class="bold">Credit Division</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bold font-regular">
                            <td>Music Production</td>
                            <td>Written Exam</td>
                            <td>150 Marks</td>
                            <td>6 Credits</td>
                          </tr>
                          <tr>
                            <td>Music Theory & Arrangements</td>
                            <td>Written Exam</td>
                            <td>100 Marks</td>
                            <td>4 Credits</td>
                          </tr>
                          <tr>
                            <td>Recording</td>
                            <td>Practical Workshop</td>
                            <td>100 Marks (Based on Attendance)</td>
                            <td>4 Credits</td>
                          </tr>
                          <tr>
                            <td>Audio System Design</td>
                            <td>Written Exam + 2 Assignments</td>
                            <td>100 Marks (Written Exam) + 50 Marks (Assignments)</td>
                            <td>4 Credits + 2 Credits</td>
                          </tr>







                          <tr>
                            <td>Music Theory & Arrangements</td>
                            <td>Written Exam</td>
                            <td>100 Marks</td>
                            <td>4 Credits</td>
                          </tr>
                          <tr>
                            <td>Recording</td>
                            <td>Practical Workshop</td>
                            <td>100 Marks (Based on Attendance)</td>
                            <td>4 Credits</td>
                          </tr>
                          <tr>
                            <td>Audio System Design</td>
                            <td>Written Exam + 2 Assignments</td>
                            <td>100 Marks (Written Exam) + 50 Marks (Assignments)</td>
                            <td>4 Credits + 2 Credits</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
            <div class="col-md-12 px-5 pt-3">
                <h6 class="font-medium font-13 text-black">Total Credits - 64 Credits</h6>
                <h6 class="font-medium font-13 text-black">Credits Required for Certification - 40 Credits (minimum)</h6>
                <h6 class="font-medium font-13 text-black">Credits Required for Enrolment into Crypto Cipher Internship Program - 50 Credits (minimum)</h6>
                <h6 class="font-regular font-13 text-grey2">* The end credits of a student are calculated on the basis of their credit score throughout the module. Credits acquired in each module will be added up for the total credit score of a student. </h6>
            </div>
        </div>
    </section>
</div>
@endsection


@section('script')
@endsection