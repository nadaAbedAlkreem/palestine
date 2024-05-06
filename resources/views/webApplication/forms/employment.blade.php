@extends('webApplication.layouts.app')

@section('web_content')


<body>
    <div class="container">

        <div class="card">
            <div class="form">

                 <div class="left-side">
                    <div class="left-heading">
                        
                    </div>
                    <div class="steps-content">
                        <h3><span class="step-number">  </span> {{__('columns.Basic_Information')}} </h3>
               
                    </div>
                    <ul class="progress-bar">
                        <li class="active">{{__('columns.Basic_Information')}}</li>
                        <li> {{__('columns.additional_information')}}</li>
                      
                    </ul> 
                </div>
               
                <div class="right-side">
                <form id ="SubmitFormEmployemnt">
                    @csrf

                 
                    <div class="main active">
                            <div class="text">
                              
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="text" id="first_name" name="first_name"
                                    placeholder="{{__('columns.first_name')}}" >
                                </div>
                                <div class="input-div">
                                    <input type="text" id="father_name" name="father_name"
                                        placeholder="{{__('columns.father_name')}}"  >
                                </div>
                            </div>
                            <div class="input-text">
                            <div class="input-div">
                                 <input type="text" name="grandfather_name"      placeholder="{{__('columns.grandfather_name')}}">
 
                             </div>

                             <div class="input-div"> 
                                 <input type="text"   name="family_name"    placeholder="{{__('columns.family_name')}}">
                             </div>

                            </div>
                            <div class="input-text">
                                <div class="input-div numinputr">
                                    <input type="text" id="mobile" name="mobile"
                                        placeholder="mobile" >
                                </div>
                                <div class="input-div ">
                                    <input type="text" id="email"   name="email"    placeholder="{{__('columns.gmail')}}">
                                </div>
                            </div>
                            <div class="input-text" style="margin-bottom: 10px">
                                <div >
                                    <span>{{__('columns.gender')}}</span>
                                    <div class="input-div" style="top: 10px">
                                        <select style="font-family: 'Cairo', sans-serif;" id="gender" name="gender">
                                            <option value="male" >{{__('columns.male')}}</option>
                                            <option value="female" >{{__('columnsfemale')}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="width: 50%">
                                    <span> </span>
                                    <div class="input-div" style="top: 30px">
                                        <select style="font-family: 'Cairo', sans-serif;" id="qualification"
                                            name="qualification">
                                            <option value="bachelor"> bachelor </option>
                                            <option value="diploma"  > website-requests.diploma </option>
                                            <option value="college_student"> website-requests.college_student
                                            </option>
                                            <option value="high_school" > website-requests.high_school 
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons" style="text-align: left; margin-top:20px;">
                                <button type="button"
                                    class="next_button" > {{__('columns.next')}}</button>
                            </div>
                        </div>
                        <div class="main">
                            <div class="text">
                                <h2> {{__('columns.additional_information')}} </h2>
                                <p>  {{__('columns.fill_out')}}  </p>
                            </div>
                            <div class="input-text">
                                <div class="input-div">
                                    <input type="date" name="Birthday" id="Birthday">
                                    <span>{{__('columns.Birthday')}}</span>
                                </div>
                            </div>
                            <span> {{__('columns.cv')}} </span>
                            <div class="input-text" style="margin-top: 5px;">
                                <div class="input-div fileinput">
                                    <input type="file" name="cv" id="cv">
                                </div>
                            </div>
                            <div class="buttons button_space">
                            <button type="button" class="back_button">{{__('columns.back')}}</button>
                            <button type="button" class="next_button">{{__('columns.register')}}</button>
                        </div>

                        
                        </div>
                    
                    </form>

                    <div class="main">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                        <div class="text congrats">
                                    <h2>{{__('columns.successfully')}}</h2>
                                    <p>{{__('columns.thank_you')}}<span class="shown_name"></span>{{__('columns.done')}}</p>
                                </div>
                    </div>



                </div>
               
             </div>
        </div>
 
    </div>

<script src="{{url('js/jobrequest.js')}}"></script>
<script defer src="{{url('js/jquery library.js')}}"></script>
<!-- <script defer src="{{url('js/bootstrap.min.js')}}"></script>
<script defer src="{{url('js/main.js')}}"></script> -->
</body>

 

@endsection