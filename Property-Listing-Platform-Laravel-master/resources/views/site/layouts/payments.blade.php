@extends('site.base')

@section('title') Payments | @endsection
@section('content')



<link href="https://cdn01.jotfor.ms/static/formCss.css?3.3.40563" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="https://cdn03.jotfor.ms/themes/CSS/54be8d1c700cc4d5368b4567.css?v=3.3.40563&amp;themeRevisionID=58edd4087dc7585e5471dad1">

<div role="main" class="form-all" style="margin-left: 25%; margin-top: 20px; margin-bottom: 20px;">
   
      <li id="cid_28" class="form-input-wide" data-type="control_head">
        <div class="form-header-group  header-default">
          <div class="header-text httac htvam">
            <h2 id="header_28" class="form-header" data-component="header">Client Information for Real Estate</h2>
            <div id="subHeader_28" class="form-subHeader">Please complete all questions.</div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_fullname" id="id_4"><label class="form-label form-label-left form-label-auto" id="label_4" for="first_4"> Name<span class="form-required">*</span> </label>
        <div id="cid_4" class="form-input jf-required">
          <div data-wrapper-react="true" class="extended"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="first"><input type="text" id="first_4" name="q4_name[first]" class="form-textbox validate[required]" data-defaultvalue="" autocomplete="section-input_4 given-name" size="10" value="" data-component="first" aria-labelledby="label_4 sublabel_4_first" required=""><label class="form-sub-label" for="first_4" id="sublabel_4_first" style="min-height:13px" aria-hidden="false">First Name</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="middle"><input type="text" id="middle_4" name="q4_name[middle]" class="form-textbox" data-defaultvalue="" autocomplete="section-input_4 additional-name" size="10" value="" data-component="middle" aria-labelledby="label_4 sublabel_4_middle" required=""><label class="form-sub-label" for="middle_4" id="sublabel_4_middle" style="min-height:13px" aria-hidden="false">Middle Name</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="last"><input type="text" id="last_4" name="q4_name[last]" class="form-textbox validate[required]" data-defaultvalue="" autocomplete="section-input_4 family-name" size="15" value="" data-component="last" aria-labelledby="label_4 sublabel_4_last" required=""><label class="form-sub-label" for="last_4" id="sublabel_4_last" style="min-height:13px" aria-hidden="false">Last Name</label></span></div>
        </div>
      </li>
      <li class="form-line" data-type="control_address" id="id_5"><label class="form-label form-label-left form-label-auto" id="label_5" for="input_5_addr_line1"> Address </label>
        <div id="cid_5" class="form-input">
          <div summary="" class="form-address-table jsTest-addressField">
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_5_addr_line1" name="q5_address[addr_line1]" class="form-textbox form-address-line" data-defaultvalue="" autocomplete="section-input_5 address-line1" value="" data-component="address_line_1" aria-labelledby="label_5 sublabel_5_addr_line1"><label class="form-sub-label" for="input_5_addr_line1" id="sublabel_5_addr_line1" style="min-height:13px" aria-hidden="false">Street Address</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-street-line jsTest-address-lineField"><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_5_addr_line2" name="q5_address[addr_line2]" class="form-textbox form-address-line" data-defaultvalue="" autocomplete="section-input_5 address-line2" value="" data-component="address_line_2" aria-labelledby="label_5 sublabel_5_addr_line2"><label class="form-sub-label" for="input_5_addr_line2" id="sublabel_5_addr_line2" style="min-height:13px" aria-hidden="false">Street Address Line 2</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-city-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_5_city" name="q5_address[city]" class="form-textbox form-address-city" data-defaultvalue="" autocomplete="section-input_5 address-level2" value="" data-component="city" aria-labelledby="label_5 sublabel_5_city"><label class="form-sub-label" for="input_5_city" id="sublabel_5_city" style="min-height:13px" aria-hidden="false">City</label></span></span><span class="form-address-line form-address-state-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_5_state" name="q5_address[state]" class="form-textbox form-address-state" data-defaultvalue="" autocomplete="section-input_5 address-level1" value="" data-component="state" aria-labelledby="label_5 sublabel_5_state"><label class="form-sub-label" for="input_5_state" id="sublabel_5_state" style="min-height:13px" aria-hidden="false">State / Province</label></span></span></div>
            <div class="form-address-line-wrapper jsTest-address-line-wrapperField"><span class="form-address-line form-address-zip-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><input type="text" id="input_5_postal" name="q5_address[postal]" class="form-textbox form-address-postal" data-defaultvalue="" autocomplete="section-input_5 postal-code" value="" data-component="zip" aria-labelledby="label_5 sublabel_5_postal"><label class="form-sub-label" for="input_5_postal" id="sublabel_5_postal" style="min-height:13px" aria-hidden="false">Postal / Zip Code</label></span></span><span class="form-address-line form-address-country-line jsTest-address-lineField "><span class="form-sub-label-container" style="vertical-align:top"><select class="form-dropdown form-address-country" name="q5_address[country]" id="input_5_country" data-component="country" required="" aria-labelledby="label_5 sublabel_5_country" autocomplete="section-input_5 country">
                    <option value="">Please Select</option>
                    <option selected="" value="United States">Philippines</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                  
                  </select><label class="form-sub-label" for="input_5_country" id="sublabel_5_country" style="min-height:13px" aria-hidden="false">Country</label></span></span></div>
          </div>
        </div>
      </li>
      <li class="form-line jf-required" data-type="control_email" id="id_10"><label class="form-label form-label-left form-label-auto" id="label_10" for="input_10"> E-mail<span class="form-required">*</span> </label>
        <div id="cid_10" class="form-input jf-required"> <input type="email" id="input_10" name="q10_email10" class="form-textbox validate[required, Email]" data-defaultvalue="" size="32" value="" placeholder="ex: myname@example.com" data-component="email" aria-labelledby="label_10" required=""> </div>
      </li>
      <li class="form-line" data-type="control_phone" id="id_6" style="z-index: 0;"><label class="form-label form-label-left form-label-auto" id="label_6" for="input_6_area"> Home Number </label>
        <div id="cid_6" class="form-input">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode"><input type="tel" id="input_6_area" name="q6_homeNumber[area]" class="form-textbox" data-defaultvalue="" autocomplete="section-input_6 tel-area-code" value="" data-component="areaCode" aria-labelledby="label_6 sublabel_6_area"><span class="phone-separate" aria-hidden="true">&nbsp;-</span><label class="form-sub-label" for="input_6_area" id="sublabel_6_area" style="min-height:13px" aria-hidden="false">Area Code</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone"><input type="tel" id="input_6_phone" name="q6_homeNumber[phone]" class="form-textbox" data-defaultvalue="" autocomplete="section-input_6 tel-local" value="" data-component="phone" aria-labelledby="label_6 sublabel_6_phone"><label class="form-sub-label" for="input_6_phone" id="sublabel_6_phone" style="min-height:13px" aria-hidden="false">Phone Number</label></span></div>
        </div>
      <div class="form-description" style="display: none;"><div class="form-description-arrow"></div><div class="form-description-arrow-small"></div><div class="form-description-content">Ex: 5125568585<br>No dashes or parentheses necessary.</div></div></li>
      <li class="form-line" data-type="control_phone" id="id_7" style="z-index: 0;"><label class="form-label form-label-left form-label-auto" id="label_7" for="input_7_area"> Cellular Number </label>
        <div id="cid_7" class="form-input">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode"><input type="tel" id="input_7_area" name="q7_cellularNumber[area]" class="form-textbox" data-defaultvalue="" autocomplete="section-input_7 tel-area-code" value="" data-component="areaCode" aria-labelledby="label_7 sublabel_7_area"><span class="phone-separate" aria-hidden="true">&nbsp;-</span><label class="form-sub-label" for="input_7_area" id="sublabel_7_area" style="min-height:13px" aria-hidden="false">Area Code</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone"><input type="tel" id="input_7_phone" name="q7_cellularNumber[phone]" class="form-textbox" data-defaultvalue="" autocomplete="section-input_7 tel-local" value="" data-component="phone" aria-labelledby="label_7 sublabel_7_phone"><label class="form-sub-label" for="input_7_phone" id="sublabel_7_phone" style="min-height:13px" aria-hidden="false">Phone Number</label></span></div>
        </div>
      <div class="form-description" style="display: none;"><div class="form-description-arrow"></div><div class="form-description-arrow-small"></div><div class="form-description-content">Ex: 5125568585<br>No dashes or parentheses necessary.</div></div></li>
      <li class="form-line" data-type="control_phone" id="id_9" style="z-index: 0;"><label class="form-label form-label-left form-label-auto" id="label_9" for="input_9_area"> Work Number </label>
        <div id="cid_9" class="form-input">
          <div data-wrapper-react="true"><span class="form-sub-label-container" style="vertical-align:top" data-input-type="areaCode"><input type="tel" id="input_9_area" name="q9_workNumber[area]" class="form-textbox" data-defaultvalue="" autocomplete="section-input_9 tel-area-code" value="" data-component="areaCode" aria-labelledby="label_9 sublabel_9_area"><span class="phone-separate" aria-hidden="true">&nbsp;-</span><label class="form-sub-label" for="input_9_area" id="sublabel_9_area" style="min-height:13px" aria-hidden="false">Area Code</label></span><span class="form-sub-label-container" style="vertical-align:top" data-input-type="phone"><input type="tel" id="input_9_phone" name="q9_workNumber[phone]" class="form-textbox" data-defaultvalue="" autocomplete="section-input_9 tel-local" value="" data-component="phone" aria-labelledby="label_9 sublabel_9_phone"><label class="form-sub-label" for="input_9_phone" id="sublabel_9_phone" style="min-height:13px" aria-hidden="false">Phone Number</label></span></div>
        </div>
      <div class="form-description" style="display: none;"><div class="form-description-arrow"></div><div class="form-description-arrow-small"></div><div class="form-description-content">Ex: 5125568585<br>No dashes or parentheses necessary.</div></div></li>
      <li class="form-line" data-type="control_divider" id="id_33">
        <div id="cid_33" class="form-input-wide">
          <div class="divider" data-component="divider" style="border-bottom-width:1px;border-bottom-style:solid;border-color:#e6e6e6;height:1px;margin-left:0px;margin-right:0px;margin-top:5px;margin-bottom:5px"></div>
        </div><br>
        <div class="col-md-5">
                            <div class="input-group">
                                <div class="custom-file">
                                <input type="file" name="image_six" class="custom-file-input">
                                <label for="image_six" class="custom-file-label">Choose Image</label>                              
                                </div>
                            </div>
                            <div class="input-group" style="margin-left: 146%; margin-top: -38px;">
                                <div class="custom-file">
                                <input type="file" name="image_six" class="custom-file-input">
                                <label for="image_six" class="custom-file-label">Choose Image</label>                              
                                </div>
                            </div>
                        </div><br>
      </li>
      <button type="submit" class="btn-primary" style="margin-left: 40%; margin-top: 2px; margin-bottom: 10px; height: 30px;">&nbspSubmit Form&nbsp</button>
</div>

@endsection