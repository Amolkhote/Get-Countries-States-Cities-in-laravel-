<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <title>Document</title>

</head>
<body>
    @include('head.header')
    <form method="POST" id="new_user" name="new_user" action="{{ url('submit-user-data') }}" oncopy="return false" oncut="return false" onpaste="return false">
            @csrf
        {{-- Container For Basic Information  --}}
        <div class="container card" style="padding:10px 10px 10px 10px;margin-top:15px;">
            <p class="card-title mb-2" style="margin-bottom:10px">Basic Information :-</p>
            {{-- Start Of 1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="name">Name *:</label>
                        <input type="text" autocomplete="off" class="form-control" id="name" placeholder="Enter name" name="name">
                        <span id="name_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('name') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="Lname">Last name *:</label>
                        <input type="text" autocomplete="off" class="form-control" id="last_name" placeholder="Enter Last name" name="last_name" required>
                          <span id="last_name_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('last_name') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            {{-- End Of 1 Row --}}
            {{-- ***************** --}}
            {{-- Start Of 2 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="name">Mobile *:</label>
                        <input type="number" size="10" autocomplete="off" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile_no" required>
                          <span id="mobile_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('mobile_no') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="name">Birth Date *:</label>
                        <input type="date" autocomplete="off" class="form-control" id="date" placeholder="Select Birth Date" name="dob" data-date-format="DD MMMM YYYY" required>
                        <span id="date_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('dob') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            {{-- End Of 2 Row --}}
            {{-- ***************** --}}
            {{-- Start Of 3 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="email">Email *:</label>
                        <input type="email" autocomplete="off" class="form-control" id="email" placeholder="Enter Your Email" name="email" required>
                        <span id="email_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('email') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="gender">Select Gender *:</label>
                        <select class="form-control" name="gender" id="gender" required>
                            <option value="0">-- Select Gender -- </option>
                            <option value="male">male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                        </select>
                        <span id="gender_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('gender') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            {{-- End Of 3 Row --}}
            {{-- ***************** --}}
            {{-- Start Of 4 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="email"> Do you want to join our Job WhatsApp Group :</label><br>
                        <input type="radio" class="custom-radio" name="yes" id="yes" value="yes">YES
                        <input type="radio" required name="yes" id="no" class="custom-radio" value="no" style="margin-left:15px;">NO
                        <br><br> 
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('yes') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4" id="show_wp_mobile">
                    <div class="form-group" id="enter_whatsapp_no">


                    </div>
                </div>
            </div>
            {{-- End Of 4 Row --}}
        </div> {{-- End Of Basic Information Container --}}
{{-- ******************************************************************************************
**********************************************************************************************--}}
        {{-- Container for Skills --}}
        <div class="container card" style="padding:10px 10px 10px 10px;margin-top:15px;">
            <p class="card-title mb-2" style="margin-bottom:10px"> Skills :-</p>
            {{-- Start Of 2.1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4"> {{-- Start OF col-md --}}
                    <div class="form-group">
                        <label for="gender"> Primary Skills 1*:</label>
                        <select class="form-control" name="primary_skills1" id="primary_skills1" required>
                            <option value="0">-- Select Primary Skills --</option>
                            <option value="any_technology">Any Technology</option>
                            <option value=".net">.Net</option>
                            <option value="android_development">Android Development</option>
                            <option value="appian">Appian</option>
                            <option value="artificial_intelligence">Artificial Intelligence</option>
                            <option value="big_data">Big Data</option>
                            <option value="c">C</option>
                            <option value="c++">C++</option>
                            <option value="cad_cam_cae">CAD_CAM_CAE</option>
                            <option value="calidus">Calidus</option>
                            <option value="cloud">Cloud</option>
                            <option value="data_warehouse">Data Warehouse</option>
                            <option value="database">Database</option>
                            <option value="devops">DevOps</option>
                            <option value="e_workforce_management">e-Workforce Management</option>
                            <option value="enterprise_digital_transformation">Enterprise Digital Transformation</option>
                            <option value="finance">Finance</option>
                            <option value="human_resource">Human Resource</option>
                            <option value="information_security">Information Security</option>
                            <option value="internet_of_things">Internet of Things</option>
                            <option value="iOS_developer">iOS Developer</option>
                            <option value="java">Java</option>
                            <option value="jenkins">Jenkins</option>
                            <option value="linux_uniz_administration">Linux-Unix Administration</option>
                            <option value="machine_learning">Machine Learning</option>
                            <option value="marketing">Marketing</option>
                            <option value="network_security">Network Security</option>
                            <option value="networking">Networking</option>
                            <option value="office_tool">Office Tool</option>
                            <option value="operating_system">Operating System</option>
                            <option value="oracle_fusion_applications">Oracle Fusion Applications</option>
                            <option value="performance_engineering">Performance Engineering</option>
                            <option value="performance_testing">Performance Testing</option>
                            <option value="project_management">Project Management</option>
                            <option value="qe_automation">QE-Automation</option>
                            <option value="qe_server">QE-Server</option>
                            <option value="qe_manual">QE-Manual</option>
                            <option value="qe_manual_adn_automation">QE-Manual & Automation</option>
                            <option value="resource_management">Resource Management</option>
                            <option value="salesforce">Salesforce</option>
                            <option value="sap">SAP</option>
                            <option value="sap_manual_testing">SAP Manual Testing</option>
                            <option value="software_configuration_management">Software Configuration Management</option>
                            <option value="support">Support</option>
                            <option value="training">Training</option>
                        </select>
                        <span id="primary_skills1_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('primary_skills1') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div> {{-- End Of Col-md --}}
                <div class="col-sm-4 col-md-4 col-lg-4"> {{-- Start OF col-md --}}
                    <div class="form-group">
                        <label for="email"> Primary Skills 2 * :</label>
                        <select class="form-control" name="primary_skills2" id="primary_skills2" required>
                            <option value="0">-- Select Primary Skills --</option>
                            <option value="any_technology">Any Technology</option>
                            <option value=".net">.Net</option>
                            <option value="android_development">Android Development</option>
                            <option value="appian">Appian</option>
                            <option value="artificial_intelligence">Artificial Intelligence</option>
                            <option value="big_data">Big Data</option>
                            <option value="c">C</option>
                            <option value="c++">C++</option>
                            <option value="cad_cam_cae">CAD_CAM_CAE</option>
                            <option value="calidus">Calidus</option>
                            <option value="cloud">Cloud</option>
                            <option value="data_warehouse">Data Warehouse</option>
                            <option value="database">Database</option>
                            <option value="devops">DevOps</option>
                            <option value="e_workforce_management">e-Workforce Management</option>
                            <option value="enterprise_digital_transformation">Enterprise Digital Transformation</option>
                            <option value="finance">Finance</option>
                            <option value="human_resource">Human Resource</option>
                            <option value="information_security">Information Security</option>
                            <option value="internet_of_things">Internet of Things</option>
                            <option value="iOS_developer">iOS Developer</option>
                            <option value="java">Java</option>
                            <option value="jenkins">Jenkins</option>
                            <option value="linux_uniz_administration">Linux-Unix Administration</option>
                            <option value="machine_learning">Machine Learning</option>
                            <option value="marketing">Marketing</option>
                            <option value="network_security">Network Security</option>
                            <option value="networking">Networking</option>
                            <option value="office_tool">Office Tool</option>
                            <option value="operating_system">Operating System</option>
                            <option value="oracle_fusion_applications">Oracle Fusion Applications</option>
                            <option value="performance_engineering">Performance Engineering</option>
                            <option value="performance_testing">Performance Testing</option>
                            <option value="project_management">Project Management</option>
                            <option value="qe_automation">QE-Automation</option>
                            <option value="qe_server">QE-Server</option>
                            <option value="qe_manual">QE-Manual</option>
                            <option value="qe_manual_adn_automation">QE-Manual & Automation</option>
                            <option value="resource_management">Resource Management</option>
                            <option value="salesforce">Salesforce</option>
                            <option value="sap">SAP</option>
                            <option value="sap_manual_testing">SAP Manual Testing</option>
                            <option value="software_configuration_management">Software Configuration Management</option>
                            <option value="support">Support</option>
                            <option value="training">Training</option>
                        </select>
                        <span id="primary_skills2_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('primary_skills2') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div> {{-- End Of Col-md --}}
            </div>
            {{-- End Of 2.1 row --}}
            {{-- ***************** --}}
            {{-- Start Of 2.2 Row --}}
            <div class="row"> {{-- Start Of 2.1 Row --}}
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="other_skills">Other Skills  :</label>
                        <input type="text" size="6"  autocomplete="off" class="form-control" id="other_skills" placeholder="Other Skiils Only 6 Word" name="other_skills" required>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('other_skills') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <span id="other_skills_error"></span>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="form-group">
                            <label for="experience">Experience * :</label>
                            <select name="experience" id="experience" class="form-control" required>
                                <option value="0">-- Select Experience --</option>
                                <option value="fresher">Fresher</option>
                                <option value="<1">< 1</option>
                                <option value="1_to_2_year">1 to 2 Year</option>
                                <option value="2_to_3_year">2 to 3 Year</option>
                                <option value="3_to_4_year">3 to 4 Year</option>
                                <option value="4_to_5_year">4 to 5 Year</option>
                                <option value="5_to_6_year">5 to 6 Year</option>
                                <option value="6_to_7_year">6 to 7 Year</option>
                                <option value="7_to_8_year">7 to 8 Year</option>
                                <option value="8_to_10_year">8 to 10 Year</option>
                                <option value=">10">> 10 Year</option>
                            </select>
                            <span id="experience_error"></span>
                            @if ($errors->any())
                                <ul>
                                    @foreach ($errors->GET('experience') as $error)
                                    <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                    </div>
            </div>
            {{-- End Of 2.2 Row --}}
             {{-- ***************** --}}
            {{-- Start Of 2.3 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="working_company_info">Working company if any :</label>
                        <textarea type="text" autocomplete="off" class="form-control" id="working_company_info" placeholder="Working Company If any " name="working_company_info" required></textarea>
                        <span id="company_info_error"></span>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('working_company_info') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                </div>
            </div>{{-- End Of 2.3 Row --}}
        </div> {{-- End Of Skills Contaioner --}}
{{-- ************************************************************************************
******************************************************************************************--}}
        {{-- Container for Education --}}
        <div class="container card" style="padding:10px 10px 10px 10px;margin-top:15px;">
            <p class="card-title mb-2" style="margin-bottom:10px"> Education :-</p>
            {{-- Start Of 3.1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-6 col-md-6 col-lg-6" >
                    <div class="form-group">
                        <label for="education">Select Your Highest Education :</label><br>
                        <input type="radio" name="education" id="diploma"  value="diploma" required>Diploma
                        <input type="radio" name="education" id="graduation" value="graduation" required style="margin-left:15px;">Graduation
                        <input type="radio" name="education" id="post_graduation" value="post_graduation" required style="margin-left:15px;">Post Graduation
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('education') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="offset-sm-6 offset-md-6 offset-lg-6"></div>
            </div>
            <div id="show_data">

            </div>
            <span class="text-center" id="education_error"></span>
            </div>

            {{-- End Of Diploma --}}
            {{-- ********************************************************************************** --}}
            {{-- For graduation --}}

            {{-- ********************************************************************************** --}}
            {{-- For Post- Graduation Specialization --}}

{{-- ***********************************************************************************************
    ********************************************************************************* --}}
        {{-- Container for Address Information --}}
        <div class="container card" style="padding:10px 10px 10px 10px;margin-top:15px;">
            <p class="card-title mb-2" style="margin-bottom:10px">Address Information :-</p>
            {{-- Start Of 1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="name">Select Country *:</label>
                        <select class="form-control" name="country" onchange="myfunction(this.value)" required>
                            <option value="0">-- Select Your Country -- </option>
                            @foreach ($country_data as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('country') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                    </div>
                </div>
            </div>
            {{-- End Of 1 Row --}}
            {{-- ***************** --}}
            {{-- Start Of 2 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="name">Select State *:</label>
                        <select class="form-control" onchange="selectstate(this.value)" name="state" id="state" required>
                            <option value="0">-- Select Your State -- </option>
                        </select>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('state') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="city">Select City *:</label>
                        <select class="form-control" name="city" id="city" required>
                          <option value="0">-- Select Your City -- </option>
                        </select>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('city') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
            {{-- End Of 2 Row --}}
        </div>
        {{-- Container for Upload Resume --}}
        <div class="container card" style="padding:10px 10px 10px 10px;margin-top:15px;">
            <p class="card-title mb-2" style="margin-bottom:10px">Upload Resume :-</p>
            {{-- Start Of 1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="name">Upload Resume *:</label>
                        <input type="file" name="resume" accept=".pdf,.docx,.doc,.rtf,.txt" value="Select File" required>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('resume') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                    </div>
                </div>
            </div>
        </div>
        {{-- End Of Upload Resume Container --}}
        {{-- Start Of Select service Free/ Paid:  --}}
        <div class="container card" style="padding:10px 10px 10px 10px;margin-top:15px;">
          <p class="card-title mb-2" style="margin-bottom:10px">Upload Resume :-</p>
          {{-- Start Of 1 Row --}}
          <div class="row">
            <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
                <label for="name">Select service Free/ Paid *:</label>
                <br><input type="radio" name="service" required value="Free" id="free_service">Free
                <input type="radio" name="service" required value="paid" onclick="document.getElementById('id02').style.display='block'" id="paid_service">Paid
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->GET('service') as $error)
                        <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4">
              <div class="form-group">
              </div>
            </div>
          </div>
          <div id="id02" class="modal">
            <section class="pricing py-5 ">
              <div class="container animate">
                <div class="row">
                  <span onclick="document.getElementById('id02').style.display='none'" id="close_btn">&times;</span>
                  {{-- 1 priceing col --}}
                  <div class="col-lg-4 col-sm-4 col-md-4">
                    <div class="card mb-5 mb-lg-0">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Minimal</h5>
                        <h6 class="card-price text-center"> Rs 0<span class="period">/month</span></h6>
                        <hr>
                        <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Single User</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>5GB Storage</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Public Projects</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Unlimited Private Projects</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Dedicated Phone Support</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Free Subdomain</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Monthly Status Reports</li>
                        </ul>
                        <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                      </div>
                    </div>
                  </div>
                  {{-- 2 Priceing col --}}
                  <div class="col-lg-4 col-sm-4 col-md-4">
                    <div class="card mb-5 mb-lg-0">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Standard</h5>
                        <h6 class="card-price text-center"> Rs 0<span class="period">/month</span></h6>
                        <hr>
                        <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Single User</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>5GB Storage</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Public Projects</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Unlimited Private Projects</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Dedicated Phone Support</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Free Subdomain</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Monthly Status Reports</li>
                        </ul>
                        <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                      </div>
                    </div>
                  </div>
                  {{-- End Of 2 Priceing col --}}
                  <div class="col-lg-4 col-sm-4 col-md-4">
                    <div class="card mb-5 mb-lg-0">
                      <div class="card-body">
                        <h5 class="card-title text-muted text-uppercase text-center">Premium</h5>
                        <h6 class="card-price text-center"> Rs 0<span class="period">/month</span></h6>
                        <hr>
                        <ul class="fa-ul">
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Single User</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>5GB Storage</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Unlimited Public Projects</li>
                          <li><span class="fa-li"><i class="fa fa-check"></i></span>Community Access</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Unlimited Private Projects</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Dedicated Phone Support</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Free Subdomain</li>
                          <li class="text-muted"><span class="fa-li"><i class="fa fa-times"></i></span>Monthly Status Reports</li>
                        </ul>
                        <a href="#" class="btn btn-block btn-primary text-uppercase">Button</a>
                      </div>
                    </div>
                  </div>
                  {{-- End Of 3 Priceing col --}}
                </div>
              </div>
            </section>
            {{-- End of Select service Free/ Paid:  --}}
          </div>
        </div>
        <div class="container card" style="padding:10px 10px 10px 10px;margin-top:15px;">
            <p class="card-title mb-2" style="margin-bottom:10px">Captcha :-</p>
            {{-- Start Of 1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-1 col-md-1 col-lg-2 text-center">
                  <div class="img-fluid">
                    <span id="abc">{!! captcha_img('flat') !!}</span>
                  </div>
                </div>
                <div class="col-sm-2 col-md-2 col-lg-2 text-center">
                    <button type="button" id="refresh_captcha" class="btn btn-refresh"><i class="fa fa-refresh" ></i></button>
                </div>
            </div>
            {{-- End Of 1 Row --}}
            {{-- ***************** --}}
            {{-- Start Of 1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    <div class="form-group">
                        <label for="name">Enter Captch Here *:</label>
                        <input id="captcha" type="text" autocomplete="off" class="form-control" placeholder="Enter Captcha" name="captcha" required>
                        @if ($errors->any())
                            <ul>
                                @foreach ($errors->GET('captcha') as $error)
                                <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            {{-- End Of 1 Row --}}
            {{-- ***************** --}}
        </div>
        <div class="container " style="padding:10px 10px 10px 10px;margin-top:15px;">
            <!-- <p class="card-title mb-2" style="margin-bottom:10px">Captcha :-</p> -->
            {{-- Start Of 1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                  <div class="form-group">
                    <input type="checkbox" name="accept" value="accept" required> <a href="#">I accept</a> Terms And Condition
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->GET('accept') as $error)
                            <li style="color:red;list-style:none;background:none;"><i class="fa fa-exclamation-circle" style="padding-right:5px"></i>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                  </div>
                </div>
                <div class="col-sm-5 col-md-5 col-lg-5 text-center">

                </div>
            </div>
            {{-- End Of 1 Row --}}
            {{-- ***************** --}}
            {{-- Start Of 1 Row --}}
            <div class="row">
                <div class="offset-sm-2 offset-md-2 offset-lg-2"></div>
                <div class="col-sm-5 col-md-5 col-lg-5 text-center">
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary lg form-control" name="submit" value="Submit">
                    </div>
                </div>
            {{-- End Of 1 Row --}}
            {{-- ***************** --}}
        </div>

      </form>

          {{-- End Of Diploma --}}
    </div>{{-- End Of Education Container  --}}




</body>
</html>
