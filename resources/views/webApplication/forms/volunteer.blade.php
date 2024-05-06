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
                        <h3><span class="step-number"> {{__('columns.Basic_Information')}} </span>  </h3>
               
                    </div>
                    <ul class="progress-bar">
                        <li class="active">{{__('columns.Basic_Information')}}</li>
                        <li> {{__('columns.additional_information')}}</li>
                      
                    </ul> 
                </div>
               
                <div class="right-side">
                <form id ="SubmitFormVolunteer">
                    @csrf

                    <div class="main active">

                        <div class="text">
                            <h2 style="font-weight: bold;">{{__('setting.Volunteer_order')}}</h2>
                            <p>{{__('columns.fill_out')}}</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" required require  name ="name" id="user_name" placeholder="{{__('columns.full_name')}}">

                            </div>
                            <div class="input-div">
                                <input type="number" name="mobile"   
                                    placeholder="{{__('columns.mobile')}}">

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text"  name="email" required require id="user_name" placeholder="{{__('columns.email')}}">

                            </div>
                            <div class="input-div">
                                <input name="address" type="text" required  placeholder="{{__('columns.address')}}">

                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <select  name="volunteered">
                                    <option selected hidden>{{__('columns.volunteered_before')}}</option>
                                    <option value = "1" >{{__('columns.yes')}}</option>
                                    <option value= "0" >{{__('columns.no')}}</option>
                                </select>

                            </div>

                        </div>
                        <div class="input-text">

                            <div class="input-div">
                                <input type="text"  name="volunteered_place" required require  placeholder="{{__('columns.if_yes')}}">
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">

                                <select  name="skills">
                                    <option  selected hidden>{{__('columns.specific_skills')}}</option>
                                    <option value = "1" >{{__('columns.yes')}}</option>
                                    <option value= "0" >{{__('columns.no')}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-text">

                            <div class="input-div">
                                <input type="text" name="volunteer_skills" required require  placeholder="{{__('columns.if_yes')}}">
                            </div>
                        </div>
                        <div class="buttons" >
                            <button class="next_button">{{__('columns.next')}}</button>
                        </div>


                    </div>
                    <div class="main">

                        <div class="text">
                            <h2>{{__('columns.additional_information')}}</h2>
                            <p>{{__('columns.fill_out')}} </p> 
                        </div>



                        <div class="input-text">
                            <div class="input-div">
                                <input type="date"  name="beginning_volunteering">
                                <span>{{__('columns.beginning_volunteering')}}</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="date" name="end_volunteering" >
                                <span>{{__('columns.end_volunteering')}}</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="study_experience_volunteer"   require id="user_name"
                                    style="height: 93px;">
                                <span>{{__('columns.study_experience_volunteer')}}</span>
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div fileinput">
                                <input type="file" name="cv_volunteer" >
                                <span>{{__('columns.cv_volunteer')}}</span>
                            </div>
                        </div>

                        <div class="buttons button_space">
                            <button class="back_button">{{__('columns.back')}}</button>
                            <button class="next_button">{{__('columns.register')}}</button>
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

  
    <script src="{{url('js/volunteerrequest.js')}}"></script>
<script defer src="{{url('js/jquery_library.js')}}"></script>
<!-- <script defer src="{{url('js/bootstrap.min.js')}}"></script>
<script defer src="{{url('js/main.js')}}"></script> -->
</body>

 

@endsection