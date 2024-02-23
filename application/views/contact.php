<link href="<?php echo base_url(); ?>/assets/css/new.css" rel="stylesheet" />

<div class="get-started-form wf-section container" style="display: flex">
    <div class="form-section-wrapper">
        <div>
            <h3 class="h3 _w-287">
                Get in touch with us to learn more about our products/services
            </h3>
            <p class="p-sm lite mt-16 form">
                We will contact you to schedule a call and answer all questions you may
                have.
            </p>
            <div class="form-form-wrapper">
                <div id="contactForm" class="w-form">
                    <!--<form id="wf-form-Contact-form" name="wf-form-Contact-form" data-name="Contact form" action="<?php echo current_url(); ?>/insert_data" method="post" aria-label="Contact form"> -->
                    <form name="wf-form-Contact-form" data-name="Contact form" action="CTA_mail" method="post"
                        aria-label="Contact form">
                        <div class="div-block-116">
                            <input type="text"
                                class="form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a982928c-a9829288 w-input"
                                maxlength="256" name="First-Name" data-name="First Name" placeholder="First name*"
                                id="First-Name" required="" />
                            <input type="text"
                                class="form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a982928d-a9829288 w-input"
                                maxlength="256" name="Last-Name" data-name="Last Name" placeholder="Last name*"
                                id="Last-Name" required="" />
                            <input type="email"
                                class="form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a982928e-a9829288 w-input"
                                maxlength="256" name="Email" data-name="Work Email" placeholder="Email*" id="Work-Email"
                                required="" />
                            <input type="tel"
                                class="form-fields-items form-fields-items--phone w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a982928f-a9829288 w-input"
                                maxlength="256" name="Phone" data-name="Phone"
                                pattern="^\s*(?:\+?(\d{1,3}))?[-. (]*(\d{3})[-. )]*(\d{3})[-. ]*(\d{4})(?: *x(\d+))?\s*$"
                                placeholder="Phone*" id="Work-Phone" required="" />
                            <input type="text"
                                class="form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a9829290-a9829288 w-input"
                                maxlength="256" name="Company-Name" data-name="Company Name" placeholder="Company name*"
                                id="Company-Name" required="" />
                            <input type="text"
                                class="form-fields-items w-node-_1f672180-0026-414c-1c28-d44d5612d991-a9829288 w-input"
                                maxlength="256" name="Job-Title" data-name="Job Title" placeholder="Job Title*"
                                id="Job-Title" required="" />
                            <input type="text"
                                class="form-fields-items hide w-node-e4dd26f4-66c1-388e-8f9e-74100b56740f-a9829288 w-input"
                                maxlength="256" name="ZipCode" data-name="ZipCode" placeholder="ZipCode*"
                                id="ZipCode" />
                            <select id="dd-country" name="Country" data-name="Country" required=""
                                class="form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a9829291-a9829288 w-select">
                                <option value="DE" disabled="disabled">Country*</option>
                                <option value="IN">India</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia (Plurinational State of)</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="VG">Virgin Islands (British)</option>
                                <option value="VI">Virgin Islands (U.S.)</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cabo Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo (Democratic Republic of the)</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curaçao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and McDonald Islands</option>
                                <option value="VA">Vatican City</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>

                                <option value="ID">Indonesia</option>
                                <option value="CI">Côte d'Ivoire</option>
                                <option value="IR">Iran (Islamic Republic of)</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">North Macedonia</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia (Federated States of)</option>
                                <option value="MD">Moldova (Republic of)</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="KP">
                                    Korea (Democratic People's Republic of)
                                </option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestine, State of</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="XK">Republic of Kosovo</option>
                                <option value="RE">Réunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthélemy</option>
                                <option value="SH">
                                    Saint Helena, Ascension and Tristan da Cunha
                                </option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin (French part)</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten (Dutch part)</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">
                                    South Georgia and the South Sandwich Islands
                                </option>
                                <option value="KR">Korea (Republic of)</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Eswatini</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">
                                    United Kingdom of Great Britain and Northern Ireland
                                </option>
                                <option value="US">United States of America</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela (Bolivarian Republic of)</option>
                                <option value="VN">Vietnam</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                            <input type="text"
                                class="form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a9829292-a9829288 w-input"
                                max="10000000" maxlength="256" name="city" placeholder="City" id="Number-Of-Employees"
                                required="" />
                            <textarea id="Message-2" name="Message-2" maxlength="5000" data-name="Message 2"
                                placeholder="Tell us more*" required=""
                                class="form-fields-items h-min-110 w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a9829293-a9829288 w-input"></textarea>
                            <select id="Area-of-Interest" name="Area-of-Interest" data-name="Area of Interest"
                                required=""
                                class="form-fields-items w-node-_7af54ce5-4ed3-5ad6-f3b6-0f06a9829294-a9829288 w-select">
                                <option value="">Area of interest*</option>
                                <option value="CPO">Connect as CPO</option>
                                <option value="OEMs">Connect as OEMs</option>
                                <option value="Fleet Operators">Connect as Fleet Operators</option>
                                <option value="Other Businesses">Connect as Other Businesses</option>

                            </select>

                        </div>

                        <input type="submit" id="submitBtn" value="Submit" data-wait="Please wait..."
                            class="form-btn-submit w-button " style="margin-top:20px;" />
                        <div>
                            <p class="footer-text">
                                By submitting your contact details to ChargeSol, you agree that we
                                can contact you about marketing offers, newsletters, or to
                                invite you to webinars and events. You can unsubscribe at any
                                time by the link included in our emails. &nbsp;<a
                                    href="<?php echo base_url('Privcey'); ?>" target="_blank" class="link-8"><span
                                        class="text-span-3">Review our privacy policy.</span></a>
                            </p>
                        </div>
                    </form>
                    <div class="success-message w-form-done" tabindex="-1" role="region"
                        aria-label="Contact form success">
                        <div class="p-sm">
                            You will get a message from us very soon and we will talk
                            how ChargeSol can help your business to grow.
                        </div>
                        <a href="#" class="form-submitted w-inline-block">
                            <div>Form-submitted</div>
                        </a>
                    </div>
                    <div class="w-form-fail" tabindex="-1" role="region" aria-label="Contact form failure">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div data-w-id="fc2739be-f9af-8a4b-8c72-72880a084452" class="div-block-1462"></div>
    <div class="form-styles w-embed">

    </div>
</div>