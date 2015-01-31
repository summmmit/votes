@extends('layout.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- start: FORM VALIDATION 1 PANEL -->
        <div class="panel panel-white">
            <div class="panel-heading">
                <h2><i class="fa fa-pencil-square"></i> REGISTER</h2>
                <p>
                    Create one account to manage everything you do with Rapido, from your shopping preferences to your Rapido activity.
                </p>
            </div>
            <div class="panel-body">
                <form action="{{ URL::route('account-create-post') }}" role="form" id="form" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="errorHandler alert alert-danger no-display">
                                <i class="fa fa-times-sign"></i> You have some form errors. Please check below.
                            </div>
                            <div class="successHandler alert alert-success no-display">
                                <i class="fa fa-ok"></i> Your form validation is successful!
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">
                                    First Name <span class="symbol required"></span>
                                </label>
                                <input type="text" placeholder="Insert your First Name" class="form-control" id="firstname" name="first_name" {{ (Input::old('first_name')) ? 'value = "' .e(Input::old('first_name')). '" ':'' }}>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Middle Name
                                </label>
                                <input type="text" placeholder="Insert your Middle Name" class="form-control" id="middlename" name="middle_name" {{ (Input::old('middle_name')) ? 'value = "' .e(Input::old('middle_name')). '" ':'' }}>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Last Name <span class="symbol required"></span>
                                </label>
                                <input type="text" placeholder="Insert your Last Name" class="form-control" id="lastname" name="last_name" {{ (Input::old('last_name')) ? 'value = "' .e(Input::old('last_name')). '" ':'' }}>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Email Address
                                </label>
                                <input type="email" placeholder="Email Address" class="form-control" id="email" name="email" {{ (Input::old('email')) ? 'value = "' .e(Input::old('email')). '" ':'' }}>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Mobile Number <span class="symbol required"></span>
                                </label>
                                <input type="number" placeholder="Mobile Number" class="form-control" id="mobile_number" name="mobile_number" {{ (Input::old('mobile_number')) ? 'value = "' .e(Input::old('mobile_number')). '" ':'' }}>
                            </div>
                            <div class="form-group connected-group">
                                <label class="control-label">
                                    Date of Birth <span class="symbol required"></span>
                                </label>
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="dd" id="dd" class="form-control"  {{ (Input::old('dd')) ? 'value = "' .e(Input::old('dd')). '" ':'' }}>
                                            <option value="">DD</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select name="mm" id="mm" class="form-control" {{ (Input::old('mm')) ? 'value = "' .e(Input::old('mm')). '" ':'' }}>
                                            <option value="">MM</option>
                                            <option value="01">1</option>
                                            <option value="02">2</option>
                                            <option value="03">3</option>
                                            <option value="04">4</option>
                                            <option value="05">5</option>
                                            <option value="06">6</option>
                                            <option value="07">7</option>
                                            <option value="08">8</option>
                                            <option value="09">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" placeholder="YYYY" id="yyyy" name="yyyy" class="form-control" {{ (Input::old('yyyy')) ? 'value = "' .e(Input::old('yyyy')). '" ':'' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Gender <span class="symbol required"></span>
                                </label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="gender" id="gender_female" {{ (Input::old('gender')) ? 'value = "' .e(Input::old('gender')). '" ':'' }}>
                                        Female
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="gender"  id="gender_male" {{ (Input::old('gender')) ? 'value = "' .e(Input::old('gender')). '" ':'' }}>
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Marriage Status <span class="symbol required"></span>
                                </label>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="marriage_status" id="unmarried" {{ (Input::old('marriage_status')) ? 'value = "' .e(Input::old('marriage_status')). '" ':'' }}>
                                        Unmarried
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="marriage_status"  id="married" {{ (Input::old('marriage_status')) ? 'value = "' .e(Input::old('marriage_status')). '" ':'' }}>
                                        Married
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Voter Id of Father / Husband <span class="symbol required"></span>
                                        </label>
                                        <input type="text" placeholder="Voter Id of Father / Husband" class="form-control" id="relative_id" name="relative_id" {{ (Input::old('relative_id')) ? 'value = "' .e(Input::old('relative_id')). '" ':'' }}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Relation With Person <span class="symbol required"></span>
                                        </label>
                                        <div>
                                            <label class="radio-inline">
                                                <input type="radio" class="grey" value="" name="relation_with_person" id="father" {{ (Input::old('relation_with_person')) ? 'value = "' .e(Input::old('relation_with_person')). '" ':'' }}>
                                                Father
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" class="grey" value="" name="relation_with_person"  id="husband" {{ (Input::old('relation_with_person')) ? 'value = "' .e(Input::old('relation_with_person')). '" ':'' }}>
                                                Husband
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">
                                            House Number <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control" type="text" name="house_number" id="house_number" {{ (Input::old('house_number')) ? 'value = "' .e(Input::old('house_number')). '" ':'' }}>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Street Number <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control" type="text" name="street_number" id="street_number" {{ (Input::old('street_number')) ? 'value = "' .e(Input::old('street_number')). '" ':'' }}>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Your Area <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control" type="text" name="area" id="area" {{ (Input::old('area')) ? 'value = "' .e(Input::old('area')). '" ':'' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Town / Village <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control" type="text" name="town" id="town" {{ (Input::old('town')) ? 'value = "' .e(Input::old('town')). '" ':'' }}>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">
                                            City <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control" type="text" name="city" id="city" {{ (Input::old('city')) ? 'value = "' .e(Input::old('city')). '" ':'' }}>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">
                                            Pin Code <span class="symbol required"></span>
                                        </label>
                                        <input class="form-control" type="text" name="zipcode" id="pin_code" {{ (Input::old('zipcode')) ? 'value = "' .e(Input::old('zipcode')). '" ':'' }}>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="control-label">
                                            State <span class="symbol required"></span>
                                        </label>
                                        <select class="form-control" id="state" name="state" {{ (Input::old('state')) ? 'value = "' .e(Input::old('state')). '" ':'' }}>
                                            <option value="">Select...</option>
                                            <option value="up">Uttar Pradesh</option>
                                            <option value="dl">Delhi</option>
                                            <option value="mp">Madhya Pradesh</option>
                                            <option value="raj">Rajasthan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    Country <span class="symbol required"></span>
                                </label>
                                <input class="form-control" type="text" name="country" id="country" {{ (Input::old('country')) ? 'value = "' .e(Input::old('country')). '" ':'' }}>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>
                                                Your Picture
                                            </label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                                                        <input type="file" name="pic" {{ (Input::old('pic')) ? 'value = "' .e(Input::old('pic')). '" ':'' }}>
                                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i> Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label>
                                                Your Father / Husband
                                            </label>
                                            <div class="fileupload fileupload-new" data-provides="fileupload">
                                                <div class="fileupload-new thumbnail"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA?text=no+image" alt=""/>
                                                </div>
                                                <div class="fileupload-preview fileupload-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-light-grey btn-file"><span class="fileupload-new"><i class="fa fa-picture-o"></i> Select image</span><span class="fileupload-exists"><i class="fa fa-picture-o"></i> Change</span>
                                                        <input type="file">
                                                    </span>
                                                    <a href="#" class="btn fileupload-exists btn-light-grey" data-dismiss="fileupload">
                                                        <i class="fa fa-times"></i> Remove
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <hr>
                                <label class="control-label">
                                    <strong>Signup for Rapido Emails</strong> <span class="symbol required"></span>
                                </label>
                                <p>
                                    Would you like to review Rapido emails?
                                </p>
                                <div>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="newsletter" {{ (Input::old('newsletter')) ? 'value = "' .e(Input::old('newsletter')). '" ':'' }}>
                                        No
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" class="grey" value="" name="newsletter" {{ (Input::old('newsletter')) ? 'value = "' .e(Input::old('newsletter')). '" ':'' }}>
                                        Yes
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <span class="symbol required"></span>Required Fields
                                <hr>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <p>
                                By clicking REGISTER, you are agreeing to the Policy and Terms &amp; Conditions.
                            </p>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-yellow btn-block" type="submit">
                                Register <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                    </div>
                    {{ Form::token() }}
                </form>
            </div>
        </div>
        <!-- end: FORM VALIDATION 1 PANEL -->
    </div>
</div>
@stop

@section('scripts')
<!-- Scripts for This page only -->
<script src="{{ URL::asset('assets/js/form-validation.js'); }}"></script>

<script>
jQuery(document).ready(function() {
    Main.init();
    SVExamples.init();
    FormValidator.init();
});
</script>
@stop