@extends('iteach.admin.dash-admin')

@section('content')
    <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Section <small>Admin {{ Auth::user()->username }}</small>
                        </h1>
                        
                    </div>
                    
                    <div class="col-lg-12">
                        <form role="form">
                            <h3>Courses</h3>
                            <div class="form-group col-lg-12">
                                <label>Select Course:</label>
                                <select class="form-control">

                                    <!--  
                                        TODO:
                                            Make this dynamic based on the courses stored in the database.
                                            Also, include the course title in the list.
                                            Include a "value" attribute for server-side processing.
                                    -->

                                    <option>CMSC 2</option>
                                    <option>CMSC 11</option>
                                    <option>CMSC 21</option>
                                    <option>CMSC 22</option>
                                    <option>CMSC 56</option>
                                    <option>CMSC 57</option>
                                    <option>CMSC 100</option>
                                    <option>CMSC 123</option>
                                    <option>CMSC 124</option>
                                    <option>CMSC 125</option>
                                    <option>CMSC 127</option>
                                    <option>CMSC 128</option>
                                    <option>CMSC 129</option>
                                    <option>CMSC 130</option>
                                    <option>CMSC 131</option>
                                    <option>CMSC 132</option>
                                    <option>CMSC 137</option>
                                    <option>CMSC 141</option>
                                    <option>CMSC 142</option>
                                    <option>CMSC 150</option>
                                    <option>CMSC 161</option>
                                    <option>CMSC 165</option>
                                    <option>CMSC 170</option>
                                    <option>CMSC 190</option>
                                    <option>CMSC 198</option>
                                    <option>CMSC 199</option>
                                </select>                                
                            </div>
                            
                            <h3>Lecture</h3>
                            <div class="form-group col-lg-2">
                                <label>Section: </label>
                                <input type="text" class="form-control" placeholder="UV">
                            </div>

                            <div class="form-group col-lg-2">
                                <label># of Days:</label>
                                <div class="radio"> 
                                    <label><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" > 1 </label>
                                </div>      
                                <div class="radio">
                                    <label> <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" > 2 </label>
                                </div>                      
                            </div>

                            <div class="form-group col-lg-2">
                                <label>First Day:</label>
                                <select class="form-control" id="lectureDay1">
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                </select>                                
                            </div>

                            <div class="form-group col-lg-2">
                                <label>Second Day:</label>
                                <select class="form-control" id="lectureDay2">
                                    <option value="null" selected> </option>
                                    <option>Monday</option>
                                    <option>Tuesday</option>
                                    <option>Wednesday</option>
                                    <option>Thursday</option>
                                    <option>Friday</option>
                                </select>                                
                            </div>

                            <div class="form-group col-lg-4">
                                <label>Timeslot:</label>
                                <select class="form-control">
                                    <option value="null" selected></option>
                                    <option value="1">07:00 AM - 08:00 AM</option>
                                    <option value="2">08:00 AM - 09:00 AM</option>
                                    <option value="3">09:00 AM - 10:00 AM</option>
                                    <option value="4">10:00 AM - 11:00 AM</option>
                                    <option value="5">11:00 AM - 12:00 PM</option>
                                    <option value="6">12:00 PM - 01:00 PM</option>
                                    <option value="7">01:00 PM - 02:00 PM</option>
                                    <option value="8">02:00 PM - 03:00 PM</option>
                                    <option value="9">03:00 PM - 04:00 PM</option>
                                    <option value="10">04:00 PM - 05:00 PM</option>
                                    <option value="11">05:00 PM - 06:00 PM</option>
                                    <option value="12">06:00 PM - 07:00 PM</option>                           
                                </select>                                
                            </div>

                            <div class="form-group col-lg-4">
                                <label>Instructor:</label>
                                <select class="form-control">

                                    <!--  
                                        TODO:
                                            Make this dynamic based on the instructors stored in the database.
                                            Include a "value" attribute for server-side processing.
                                    -->

                                    <option value="null" selected></option>

                                    <!-- Senior Faculty Members -->
                                    <optgroup label="Senior Faculty">
                                        <option></option>
                                    </optgroup>

                                    <!-- Junior Faculty Members -->
                                    <optgroup label="Junior Faculty">
                                        <option>RNCRecario</option>
                                        <option>MAADClari&ntilde;o</option>
                                        <option>MMMSandoval</option>
                                    </optgroup>
                                </select>                                
                            </div>

                            <div class="form-group col-lg-4">
                                <label>Room:</label>
                                <select class="form-control">
                                    <!--  
                                        TODO:
                                            Make this dynamic based on the lecture halls stored in the database.
                                            Include a "value" attribute for server-side processing.
                                    -->

                                    <option value="null" selected></option>
                                    <option>ICS Mega Lecture Hall</option>
                                    <option>ICS Lecture Hall 3</option>
                                    <option>ICS Lecture Hall 4</option>
                                </select>                                
                            </div>
                            
                            <h3>Laboratory</h3>
                            <div class="form-group col-lg-2">
                                <label>Sections:</label>
                                <input class="form-control" id="1L" type="text" placeholder="1L" disabled> 
                            </div>
                            <div class="form-group col-lg-2">
                                <label>Day:</label>
                                <input class="form-control" id="Mon" type="text" placeholder="Mon" disabled>                                
                            </div>
                            <div class="form-group col-lg-2">
                                <label>Timeslot:</label>
                               <input class="form-control" id="14pm" type="text" placeholder="1 - 4pm" disabled>
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Instructor:</label>
                                <select class="form-control">
                                    <!--  
                                        TODO:
                                            Make this dynamic based on the instructors stored in the database.
                                            Include a "value" attribute for server-side processing.
                                    -->

                                    <option>Recario</option>
                                    <option>Clarino</option>
                                    <option>Sandoval</option>
                                </select>     
                            </div>
                            <div class="form-group col-lg-3">
                                <label>Room:</label>
                                <select class="form-control">
                                    <!--  
                                        TODO:
                                            Make this dynamic based on the lecture halls stored in the database.
                                            Include a "value" attribute for server-side processing.
                                    -->

                                    <option>ICS MH</option>
                                    <option>ICS LH3</option>
                                    <option>ICS LH4</option>
                                </select>                                
                            </div>                  

                             <div class="form-group col-lg-12">
                                <button type="button" class="btn btn-default" id="addLabSection">Add Lab Section </button>
                                <button type="button" class="btn btn-default" id="removeLabSection" disabled>Remove Lab Section </button>
                            </div>
                            
                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-default">Submit </button>
                                <button type="reset" class="btn btn-default">Reset </button>
                            </div>

                        </form>
                    </div>


<!-- 
    This scripts makes add section page by adjusting to the entered specifications of the user.
-->
<script>
    $(document).ready(function(){
        var numberOfLabSectionsToAdd = 0;

        $('#addLabSection').click(function() {
            numberOfLabSectionsToAdd++;
            /*
                TODO:
                    If the user clicks the button another row should be added
            */

            if(numberOfLabSectionsToAdd > 0) $('#removeLabSection').removeAttr('disabled');
        });

        $('#removeLabSection').click(function() {
            numberOfLabSectionsToAdd--;
            /*
                TODO:
                    If the user clicks the button a row should be removed.
            */

            if(numberOfLabSectionsToAdd <= 0) {
                numberOfLabSectionsToAdd = 0;
                $('#removeLabSection').attr('disabled', 'true');
            }

            console.log(numberOfLabSectionsToAdd);
        });

        $('input:radio').click(function() {
            if($('#optionsRadios1').is(':checked')) {
                $('#lectureDay2').attr("disabled", "true");
            }

            else if($('#optionsRadios2').is(':checked')) {
                $('#lectureDay2').removeAttr("disabled");

            }
        });
    });
</script>


@endsection
