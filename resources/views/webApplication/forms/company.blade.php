@extends('webApplication.layouts.app')

@section('web_content')
<link rel="stylesheet" href="{{url('build/css/demo.css')}}">

   
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
                        <li class="active">{{__('columns.general_info')}}</li>
                        <li>{{__('columns.additional_information')}} </li>
                        <li>{{__('columns.additional_information')}}</li>
                        <li>{{__('columns.center_info')}}</li>
                        <li>{{__('columns.domin_instution')}}</li>
                        <li>{{__('columns.domin_instution')}}</li>
                    </ul> 
                </div>
                <div class="right-side">

                <form id="formCompany">
                    @csrf
                    <div class="main active">
                         <div class="text">
                            <h2>{{__('columns.general_info')}}</h2>
                            <p>{{__('columns.fill_out')}}</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="organization_name" id="organization_name" style=" font-size: 12px;" placeholder="{{__('columns.organization_name')}}">
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" style="top: -10px;">
                                <select name="organization_type" id="organization_type" >
                                    <option selected hidden >{{__('columns.organization_type')}}</option>
                                    <option  value="Cultural Center">مركز ثقافي وفني</option>
                                    <option value="Educational or Higher Education Institution">مؤسسة تعليمية أو تعليم عالي</option>
                                    <option value ="Governmental Entity">جهة حكومية</option>
                                    <option value="International Non-Governmental Organization">منظمة غير حكومية دولية</option>
                                    <option value="Media and Press Organization">منظمة اعلام وصحافة </option>
                                    <option value="Non-Governmental Organization">منظمة غير حكومية </option>
                                    <option value="Organizations persons with disabilities">منظمات الأشخاص ذوي الإعاقة</option>
                                    <option value="private company">شركة خاصة </option>
                                    <option value="research and advocacy centre">مركز بحوث ومناصرة </option>
                                    <option value="social institution">مؤسسة اجتماعية</option>
                                    <option value="technical or vocational education institute">معهد تعليم تقني أو مهني</option>
                                    <option value="youth group">مجموعة شبابية</option>
                                    <option value="youth training centre">مركز تدريب الشباب</option>
                                </select>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="main_branch_address" id="main_branch_address"  placeholder="{{__('columns.main_branch_address')}}">
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                    <input type="date"  name="year_founded">
                                    <span > {{__('columns.year_founded')}}</span>
                             </div>
                        </div>

                        <div class="buttons button_space">
                                <button type="button"  class="next_button">{{__('columns.next')}} </button>
                                </div>
                    </div>

                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>{{__('columns.additional_information')}}</h2>
                            <!-- --------------------------- -->
                            <p>{{__('columns.fill_out')}}</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="email"  placeholder="{{__('columns.email')}}">
                            </div>

                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text"  name="instagram" placeholder="{{__('columns.instagram')}}">
                               
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <input type="text" name="facebock"   placeholder="{{__('columns.facebock')}}">
                            
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div"  >
                                <input type="number"  name="annual_budget"  placeholder="{{__('columns.annual_budget')}}">
                                
                            </div>
                            <div class="input-div" >
                                <input type="number"  name="number_of_centers"  placeholder="{{__('columns.number_of_centers')}}">
                              
                            </div>
                            <div class="input-div" >
                                <input type="number"name="number_of_employees" placeholder="{{__('columns.number_of_employees')}}">
              
                            </div>
                        </div>
                        <div class="buttons button_space" >
                            <button  type="button" class="back_button"  >{{__('columns.back')}}</button>
                            <button type="button" class="next_button">{{__('columns.next')}}</button>
                        </div>
                    </div>
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>{{__('columns.additional_information')}}</h2>
                            <p> {{__('columns.additional_information')}}</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <textarea class="form-control" id="center_locations" name="center_locations" rows="4" placeholder="{{__('columns.center_locations')}}" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <input type="number" name="registration_number_ministry_interior" placeholder = "{{__('columns.registration_number_ministry_interior')}}" >
                               
                            </div>
                        
                        </div>
                        <div class="input-text">
                            <div class="input-div"  >
                                <input type="number"   name="registration_number_ministry_Finance" placeholder="{{__('columns.registration_number_ministry_Finance')}}" >
                              
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button type="button" class="back_button" >{{__('columns.back')}}</button>
                            <button type="button"  class="next_button">{{__('columns.next')}}</button>
                        </div>
                    </div>
                    <!-- ----------------------------- -->
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>{{__('columns.domin_instution')}}</h2>
                            <p>{{__('columns.fill_out')}}</p>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <input type="number"  name="Number_current_projects" placeholder="{{__('columns.Number_current_projects')}}">
                          
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control"   name="main_donors_projects" id="message" name="message" rows="4" placeholder="{{__('columns.main_donors_projects')}}" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control" name="number_employees_organization" name="message" rows="4" placeholder="{{__('columns.number_employees_organization')}}" style="height: 100px;" style="font-family: 'Cairo', sans-serif;"></textarea>
                                
                            </div>
                        </div>
                     
                        <div class="buttons button_space">
                            <button type="button" class="back_button" >{{__('columns.back')}}</button>
                            <button type="button" class="next_button"> {{__('columns.next')}}</button>
                        </div>
                    </div>
                     <!-- ---------------- -->
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                            <h2>{{__('columns.domin_instution')}}</h2>
                            <p>{{__('columns.fill_out')}}</p>
                        </div>
                       
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control" id="message" rows="4" name="nationalities_of_beneficiaries" placeholder="{{__('columns.nationalities_of_beneficiaries')}}" style="height: 100px;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div" >
                                <textarea class="form-control" id="message" name="age_group_beneficiaries" rows="4" placeholder="{{__('columns.age_group_beneficiaries')}}" style="height: 100px;"></textarea>
                                
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div">
                                <textarea class="form-control" id="message" name="strategic_goals" rows="4" placeholder="{{__('columns.strategic_goals')}}" style="height: 100px;"></textarea>
                                
                            </div>
                        </div>
                     
                        <div class="buttons button_space">
                            <button type="button" class="back_button" >{{__('columns.back')}}</button>
                            <button type="button" class="next_button">{{__('columns.next')}}</button>
                        </div>
                    </div>
                     <!-- ---------------- -->
                     <!-- ---------------- -->
                    <div class="main">
                        <!-- <small><i class="fa fa-smile-o"></i></small> -->
                        <div class="text">
                        <h2>{{__('columns.domin_instution')}}</h2>
                            <p>{{__('columns.fill_out')}}</p>
                        </div>
                       
                        <div class="input-text">
                            <div class="input-div fileinput">
                                <input type="file" name="registration_certificate_ministry_interior" >
                                <span>{{__('columns.registration_certificate_ministry_interior')}}</span>
                            </div>
                        </div>
                        <div class="input-text">
                            <div class="input-div fileinput">
                                <input type="file" name="company_organizational_structure" >
                                <span>{{__('columns.company_organizational_structure')}}</span>
                            </div>
                        </div>
                        <div class="buttons button_space">
                            <button type="button"   class="back_button">{{__('columns.back')}}</button>
                            <button type="button"  class="next_button"> {{__('columns.next')}}</button>
                        </div>
                    </div>

                    </form>
              
                    <div class="main">
                        <svg class="checkmark"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0
                            52 52">
                            <circle class="checkmark__circle" cx="26"
                                cy="26" r="25" fill="none" />
                                <path class="checkmark__check" fill="none"
                                    d="M14.1 27.2l7.1 7.2 16.7-16.8" />
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

            <script src="{{url('assets/js/scripts.bundle.js')}}"></script>  
    <script src="{{url('js/companyrequest.js')}}"></script>
<script defer src="{{url('js/jquery library.js')}}"></script>
<!-- <script defer src="{{url('js/bootstrap.min.js')}}"></script>
<script defer src="{{url('js/main.js')}}"></script> -->


@endsection