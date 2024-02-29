@extends('layouts.admin.app')

@section('content')

@if(auth()->check())
    @include('includes.sidebar')
@endif

<div class="nk-wrap ">
@if(auth()->check())
    @include('includes.nav')
@endif
<div class="nk-content nk-content-fluid">
<div class="card card-bordered card-preview">
@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card-inner">
    <div class="preview-block">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Create User</h3>
                    <div class="nk-block-des text-soft">
                        <p>fill in the form to add user</p>
                    </div>
                </div><!-- .nk-block-head-content -->

                <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">

                                                <li>
                                                    <a href="{{ route('users.index') }}" class="btn btn-white btn-dim btn-outline-primary">
                                                    <em class="icon ni ni-chevron-left-round-fill"></em>
                                                        <span>back</span>
                                                    </a>
                                                </li>
                                                    <li><a href="{{ url('/admin/home')}}" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-home"></em><span>Home</span></a></li>
                                                    <li class="nk-block-tools-opt">
                                                        <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="{{ route('users.index') }}"><em class="icon ni ni-list"></em><span>User list</span></a></li>
                                                                    <li><a href="#">  <em class="icon ni ni-plus-fill-c"></em><span>Add User</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head-content -->
                                </div><!-- .nk-block-between -->

        @if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" id="phonenumber" name="phonenumber" required>
            </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control" id="age" name="age" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
           
    <div class="form-group">
    <label class="form-label" for="default-01"  for="country">Country</label>
    <div class="form-control-wrap">
    <select id="country" name="country"class="form-select js-select2" data-search="on" data-placeholder="Select Multiple options">
    <option value="ZW" data-capital="Harare">Zimbabwe</option>
    <option value="AF" data-capital="Kabul">Afghanistan</option>
    <option value="AX" data-capital="Mariehamn">Aland Islands</option>
    <option value="AL" data-capital="Tirana">Albania</option>
    <option value="DZ" data-capital="Algiers">Algeria</option>
    <option value="AS" data-capital="Pago Pago">American Samoa</option>
    <option value="AD" data-capital="Andorra la Vella">Andorra</option>
    <option value="AO" data-capital="Luanda">Angola</option>
    <option value="AI" data-capital="The Valley">Anguilla</option>
    <option value="AG" data-capital="St. John's">Antigua and Barbuda</option>
    <option value="AR" data-capital="Buenos Aires">Argentina</option>
    <option value="AM" data-capital="Yerevan">Armenia</option>
    <option value="AW" data-capital="Oranjestad">Aruba</option>
    <option value="AU" data-capital="Canberra">Australia</option>
    <option value="AT" data-capital="Vienna">Austria</option>
    <option value="AZ" data-capital="Baku">Azerbaijan</option>
    <option value="BS" data-capital="Nassau">Bahamas</option>
    <option value="BH" data-capital="Manama">Bahrain</option>
    <option value="BD" data-capital="Dhaka">Bangladesh</option>
    <option value="BB" data-capital="Bridgetown">Barbados</option>
    <option value="BY" data-capital="Minsk">Belarus</option>
    <option value="BE" data-capital="Brussels">Belgium</option>
    <option value="BZ" data-capital="Belmopan">Belize</option>
    <option value="BJ" data-capital="Porto-Novo">Benin</option>
    <option value="BM" data-capital="Hamilton">Bermuda</option>
    <option value="BT" data-capital="Thimphu">Bhutan</option>
    <option value="BO" data-capital="Sucre">Bolivia</option>
    <option value="BA" data-capital="Sarajevo">Bosnia and Herzegovina</option>
    <option value="BW" data-capital="Gaborone">Botswana</option>
    <option value="BR" data-capital="Brasília">Brazil</option>
    <option value="IO" data-capital="Diego Garcia">British Indian Ocean Territory</option>
    <option value="BN" data-capital="Bandar Seri Begawan">Brunei Darussalam</option>
    <option value="BG" data-capital="Sofia">Bulgaria</option>
    <option value="BF" data-capital="Ouagadougou">Burkina Faso</option>
    <option value="BI" data-capital="Bujumbura">Burundi</option>
    <option value="CV" data-capital="Praia">Cabo Verde</option>
    <option value="KH" data-capital="Phnom Penh">Cambodia</option>
    <option value="CM" data-capital="Yaoundé">Cameroon</option>
    <option value="CA" data-capital="Ottawa">Canada</option>
    <option value="KY" data-capital="George Town">Cayman Islands</option>
    <option value="CF" data-capital="Bangui">Central African Republic</option>
    <option value="TD" data-capital="N'Djamena">Chad</option>
    <option value="CL" data-capital="Santiago">Chile</option>
    <option value="CN" data-capital="Beijing">China</option>
    <option value="CX" data-capital="Flying Fish Cove">Christmas Island</option>
    <option value="CC" data-capital="West Island">Cocos (Keeling) Islands</option>
    <option value="CO" data-capital="Bogotá">Colombia</option>
    <option value="KM" data-capital="Moroni">Comoros</option>
    <option value="CK" data-capital="Avarua">Cook Islands</option>
    <option value="CR" data-capital="San José">Costa Rica</option>
    <option value="HR" data-capital="Zagreb">Croatia</option>
    <option value="CU" data-capital="Havana">Cuba</option>
    <option value="CW" data-capital="Willemstad">Curaçao</option>
    <option value="CY" data-capital="Nicosia">Cyprus</option>
    <option value="CZ" data-capital="Prague">Czech Republic</option>
    <option value="CI" data-capital="Yamoussoukro">Côte d'Ivoire</option>
    <option value="CD" data-capital="Kinshasa">Democratic Republic of the Congo</option>
    <option value="DK" data-capital="Copenhagen">Denmark</option>
    <option value="DJ" data-capital="Djibouti">Djibouti</option>
    <option value="DM" data-capital="Roseau">Dominica</option>
    <option value="DO" data-capital="Santo Domingo">Dominican Republic</option>
    <option value="EC" data-capital="Quito">Ecuador</option>
    <option value="EG" data-capital="Cairo">Egypt</option>
    <option value="SV" data-capital="San Salvador">El Salvador</option>
    <option value="GQ" data-capital="Malabo">Equatorial Guinea</option>
    <option value="ER" data-capital="Asmara">Eritrea</option>
    <option value="EE" data-capital="Tallinn">Estonia</option>
    <option value="ET" data-capital="Addis Ababa">Ethiopia</option>
    <option value="FK" data-capital="Stanley">Falkland Islands</option>
    <option value="FO" data-capital="Tórshavn">Faroe Islands</option>
    <option value="FM" data-capital="Palikir">Federated States of Micronesia</option>
    <option value="FJ" data-capital="Suva">Fiji</option>
    <option value="FI" data-capital="Helsinki">Finland</option>
    <option value="MK" data-capital="Skopje">Former Yugoslav Republic of Macedonia</option>
    <option value="FR" data-capital="Paris">France</option>
    <option value="PF" data-capital="Papeete">French Polynesia</option>
    <option value="GA" data-capital="Libreville">Gabon</option>
    <option value="GM" data-capital="Banjul">Gambia</option>
    <option value="GE" data-capital="Tbilisi">Georgia</option>
    <option value="DE" data-capital="Berlin">Germany</option>
    <option value="GH" data-capital="Accra">Ghana</option>
    <option value="GI" data-capital="Gibraltar">Gibraltar</option>
    <option value="GR" data-capital="Athens">Greece</option>
    <option value="GL" data-capital="Nuuk">Greenland</option>
    <option value="GD" data-capital="St. George's">Grenada</option>
    <option value="GU" data-capital="Hagåtña">Guam</option>
    <option value="GT" data-capital="Guatemala City">Guatemala</option>
    <option value="GG" data-capital="Saint Peter Port">Guernsey</option>
    <option value="GN" data-capital="Conakry">Guinea</option>
    <option value="GW" data-capital="Bissau">Guinea-Bissau</option>
    <option value="GY" data-capital="Georgetown">Guyana</option>
    <option value="HT" data-capital="Port-au-Prince">Haiti</option>
    <option value="VA" data-capital="Vatican City">Holy See</option>
    <option value="HN" data-capital="Tegucigalpa">Honduras</option>
    <option value="HK" data-capital="Hong Kong">Hong Kong</option>
    <option value="HU" data-capital="Budapest">Hungary</option>
    <option value="IS" data-capital="Reykjavik">Iceland</option>
    <option value="IN" data-capital="New Delhi">India</option>
    <option value="ID" data-capital="Jakarta">Indonesia</option>
    <option value="IR" data-capital="Tehran">Iran</option>
    <option value="IQ" data-capital="Baghdad">Iraq</option>
    <option value="IE" data-capital="Dublin">Ireland</option>
    <option value="IM" data-capital="Douglas">Isle of Man</option>
    <option value="IL" data-capital="Jerusalem">Israel</option>
    <option value="IT" data-capital="Rome">Italy</option>
    <option value="JM" data-capital="Kingston">Jamaica</option>
    <option value="JP" data-capital="Tokyo">Japan</option>
    <option value="JE" data-capital="Saint Helier">Jersey</option>
    <option value="JO" data-capital="Amman">Jordan</option>
    <option value="KZ" data-capital="Astana">Kazakhstan</option>
    <option value="KE" data-capital="Nairobi">Kenya</option>
    <option value="KI" data-capital="South Tarawa">Kiribati</option>
    <option value="KW" data-capital="Kuwait City">Kuwait</option>
    <option value="KG" data-capital="Bishkek">Kyrgyzstan</option>
    <option value="LA" data-capital="Vientiane">Laos</option>
    <option value="LV" data-capital="Riga">Latvia</option>
    <option value="LB" data-capital="Beirut">Lebanon</option>
    <option value="LS" data-capital="Maseru">Lesotho</option>
    <option value="LR" data-capital="Monrovia">Liberia</option>
    <option value="LY" data-capital="Tripoli">Libya</option>
    <option value="LI" data-capital="Vaduz">Liechtenstein</option>
    <option value="LT" data-capital="Vilnius">Lithuania</option>
    <option value="LU" data-capital="Luxembourg City">Luxembourg</option>
    <option value="MO" data-capital="Macau">Macau</option>
    <option value="MG" data-capital="Antananarivo">Madagascar</option>
    <option value="MW" data-capital="Lilongwe">Malawi</option>
    <option value="MY" data-capital="Kuala Lumpur">Malaysia</option>
    <option value="MV" data-capital="Malé">Maldives</option>
    <option value="ML" data-capital="Bamako">Mali</option>
    <option value="MT" data-capital="Valletta">Malta</option>
    <option value="MH" data-capital="Majuro">Marshall Islands</option>
    <option value="MQ" data-capital="Fort-de-France">Martinique</option>
    <option value="MR" data-capital="Nouakchott">Mauritania</option>
    <option value="MU" data-capital="Port Louis">Mauritius</option>
    <option value="MX" data-capital="Mexico City">Mexico</option>
    <option value="MD" data-capital="Chișinău">Moldova</option>
    <option value="MC" data-capital="Monaco">Monaco</option>
    <option value="MN" data-capital="Ulaanbaatar">Mongolia</option>
    <option value="ME" data-capital="Podgorica">Montenegro</option>
    <option value="MS" data-capital="Little Bay, Brades, Plymouth">Montserrat</option>
    <option value="MA" data-capital="Rabat">Morocco</option>
    <option value="MZ" data-capital="Maputo">Mozambique</option>
    <option value="MM" data-capital="Naypyidaw">Myanmar</option>
    <option value="NA" data-capital="Windhoek">Namibia</option>
    <option value="NR" data-capital="Yaren District">Nauru</option>
    <option value="NP" data-capital="Kathmandu">Nepal</option>
    <option value="NL" data-capital="Amsterdam">Netherlands</option>
    <option value="NZ" data-capital="Wellington">New Zealand</option>
    <option value="NI" data-capital="Managua">Nicaragua</option>
    <option value="NE" data-capital="Niamey">Niger</option>
    <option value="NG" data-capital="Abuja">Nigeria</option>
    <option value="NU" data-capital="Alofi">Niue</option>
    <option value="NF" data-capital="Kingston">Norfolk Island</option>
    <option value="KP" data-capital="Pyongyang">North Korea</option>
    <option value="MP" data-capital="Capitol Hill">Northern Mariana Islands</option>
    <option value="NO" data-capital="Oslo">Norway</option>
    <option value="OM" data-capital="Muscat">Oman</option>
    <option value="PK" data-capital="Islamabad">Pakistan</option>
    <option value="PW" data-capital="Ngerulmud">Palau</option>
    <option value="PA" data-capital="Panama City">Panama</option>
    <option value="PG" data-capital="Port Moresby">Papua New Guinea</option>
    <option value="PY" data-capital="Asunción">Paraguay</option>
    <option value="PE" data-capital="Lima">Peru</option>
    <option value="PH" data-capital="Manila">Philippines</option>
    <option value="PN" data-capital="Adamstown">Pitcairn</option>
    <option value="PL" data-capital="Warsaw">Poland</option>
    <option value="PT" data-capital="Lisbon">Portugal</option>
    <option value="PR" data-capital="San Juan">Puerto Rico</option>
    <option value="QA" data-capital="Doha">Qatar</option>
    <option value="CG" data-capital="Brazzaville">Republic of the Congo</option>
    <option value="RO" data-capital="Bucharest">Romania</option>
    <option value="RU" data-capital="Moscow">Russia</option>
    <option value="RW" data-capital="Kigali">Rwanda</option>
    <option value="BL" data-capital="Gustavia">Saint Barthélemy</option>
    <option value="KN" data-capital="Basseterre">Saint Kitts and Nevis</option>
    <option value="LC" data-capital="Castries">Saint Lucia</option>
    <option value="VC" data-capital="Kingstown">Saint Vincent and the Grenadines</option>
    <option value="WS" data-capital="Apia">Samoa</option>
    <option value="SM" data-capital="San Marino">San Marino</option>
    <option value="ST" data-capital="São Tomé">Sao Tome and Principe</option>
    <option value="SA" data-capital="Riyadh">Saudi Arabia</option>
    <option value="SN" data-capital="Dakar">Senegal</option>
    <option value="RS" data-capital="Belgrade">Serbia</option>
    <option value="SC" data-capital="Victoria">Seychelles</option>
    <option value="SL" data-capital="Freetown">Sierra Leone</option>
    <option value="SG" data-capital="Singapore">Singapore</option>
    <option value="SX" data-capital="Philipsburg">Sint Maarten</option>
    <option value="SK" data-capital="Bratislava">Slovakia</option>
    <option value="SI" data-capital="Ljubljana">Slovenia</option>
    <option value="SB" data-capital="Honiara">Solomon Islands</option>
    <option value="SO" data-capital="Mogadishu">Somalia</option>
    <option value="ZA" data-capital="Pretoria">South Africa</option>
    <option value="KR" data-capital="Seoul">South Korea</option>
    <option value="SS" data-capital="Juba">South Sudan</option>
    <option value="ES" data-capital="Madrid">Spain</option>
    <option value="LK" data-capital="Sri Jayawardenepura Kotte, Colombo">Sri Lanka</option>
    <option value="PS" data-capital="Ramallah">State of Palestine</option>
    <option value="SD" data-capital="Khartoum">Sudan</option>
    <option value="SR" data-capital="Paramaribo">Suriname</option>
    <option value="SZ" data-capital="Lobamba, Mbabane">Swaziland</option>
    <option value="SE" data-capital="Stockholm">Sweden</option>
    <option value="CH" data-capital="Bern">Switzerland</option>
    <option value="SY" data-capital="Damascus">Syrian Arab Republic</option>
    <option value="TW" data-capital="Taipei">Taiwan</option>
    <option value="TJ" data-capital="Dushanbe">Tajikistan</option>
    <option value="TZ" data-capital="Dodoma">Tanzania</option>
    <option value="TH" data-capital="Bangkok">Thailand</option>
    <option value="TL" data-capital="Dili">Timor-Leste</option>
    <option value="TG" data-capital="Lomé">Togo</option>
    <option value="TK" data-capital="Nukunonu, Atafu,Tokelau">Tokelau</option>
    <option value="TO" data-capital="Nukuʻalofa">Tonga</option>
    <option value="TT" data-capital="Port of Spain">Trinidad and Tobago</option>
    <option value="TN" data-capital="Tunis">Tunisia</option>
    <option value="TR" data-capital="Ankara">Turkey</option>
    <option value="TM" data-capital="Ashgabat">Turkmenistan</option>
    <option value="TC" data-capital="Cockburn Town">Turks and Caicos Islands</option>
    <option value="TV" data-capital="Funafuti">Tuvalu</option>
    <option value="UG" data-capital="Kampala">Uganda</option>
    <option value="UA" data-capital="Kiev">Ukraine</option>
    <option value="AE" data-capital="Abu Dhabi">United Arab Emirates</option>
    <option value="GB" data-capital="London">United Kingdom</option>
    <option value="US" data-capital="Washington, D.C.">United States of America</option>
    <option value="UY" data-capital="Montevideo">Uruguay</option>
    <option value="UZ" data-capital="Tashkent">Uzbekistan</option>
    <option value="VU" data-capital="Port Vila">Vanuatu</option>
    <option value="VE" data-capital="Caracas">Venezuela</option>
    <option value="VN" data-capital="Hanoi">Vietnam</option>
    <option value="VG" data-capital="Road Town">Virgin Islands (British)</option>
    <option value="VI" data-capital="Charlotte Amalie">Virgin Islands (U.S.)</option>
    <option value="EH" data-capital="Laayoune">Western Sahara</option>
    <option value="YE" data-capital="Sana'a">Yemen</option>
    <option value="ZM" data-capital="Lusaka">Zambia</option>
    </select>
    @if ($errors->has('country'))
        <span class="help-block">
            <strong>{{ $errors->first('country') }}</strong>
        </span>
    @endif
    </div>
    </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="form-group">
                <label for="is_admin">User Role</label>
                <select class="form-control" id="is_admin" name="is_admin" required>
                    <option value="1">Admin</option>
                    <option value="2">Content Creator</option>
                    <option value="3">Company</option>
                    <option value="0">User</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection