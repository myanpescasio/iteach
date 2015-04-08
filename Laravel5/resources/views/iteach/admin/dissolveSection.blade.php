@extends('iteach.admin.dash-admin')

@section('content')
    <!--
        TODO
            Delete Section Stuff
     -->

	 <div class="row">
	 	<div class="col-lg-12">
	 		<h1 class="page-header">
	 			Dissolve Section <small>Admin {{ Auth::user()->username }}</small>
	 		</h1>
	 	</div>
	 </div>

	 <div class="row">
	 	<form role="role" class="form-horizontal" method="post" action="#">
	        <div class="form-group">
	            <label for="inputCourseNumber" class="col-lg-2 control-label">Course Number</label>
	            <div class="col-lg-4">
					<select class="form-control">
					    <option value="null" selected></option>

					    <!-- 
							TODO
								Make this part dynamic based on the current courses stored in the database/
								Add values to options for server-side processing.
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
	        </div>

	        <div class="form-group">
	            <label for="inputCourseSection" class="col-lg-2 control-label">Course Section</label>
	            <div class="col-lg-4">
					<select class="form-control">
					    <option value="null" selected></option>

					    <!-- 
							TODO
								Make this part dynamic based on the sections mapped to the course number.
					     -->

					    <option>CD-1L</option>
					    <option>CD-2L</option>
					    <option>CD-3L</option>
					    <option>CD-4L</option>
					    <option>CD-5L</option>
					    <option>CD-6L</option>
					</select>
	            </div>
	        </div>

	        <div class="form-group">
	        	<div class="col-lg-offset-2 col-lg-4">
                	<button type="submit" class="btn btn-default">Submit</button>
                	<button type="reset" class="btn btn-default">Clear</button>
	        	</div>
	        </div>

	 	</form>
	 </div>
@endsection

