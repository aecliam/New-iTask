<meta charset="UTF-8">
        <!--<title>  </title>-->
        <link rel="stylesheet" type="text/css" href="css/index-new.css"/>

<div>
	<div>
		<div>
			<form action="" id="manage-project">

        <input type="hidden" name="id">
		<div>
			<div class="text">
				<div>
					<label for=""> Name </label>
					<input type="text" name="name">
				</div>
			</div>

          	<div>
				<div>
					<label for=""> Status </label>
					    <select name="status" id="status">
						    <option value="0"> Pending </option>
						    <option value="3"> On-Hold </option>
						    <option value="5"> Done </option>
					    </select>
				</div>
			</div>
		</div>

		<div>
			<div>
            <div>
              <label for=""> Start Date </label>
              <input type="date" autocomplete="off" name="start_date">
            </div>
          </div>

          <div>
            <div>
              <label for=""> End Date </label>
              <input type="date" autocomplete="off" name="end_date">
            </div>
          </div>
		</div>

        <div>
           <div>
            <div>
              <label for=""> Project Manager </label>
              <select name="manager_id">
              	<option></option>
            
              	<option></option>

              </select>
            </div>
          </div>

      	<input type="hidden" name="manager_id">

          <div>
            <div>
              <label for=""> Project Team Members </label>
              
            </div>
          </div>
        </div>
		<div>
			<div>
				<div>
					<label for=""> Description </label>
					<textarea name="description" id="" cols="30" rows="10" class="summernote form-control">
						
					</textarea>
				</div>
			</div>
		</div>
        </form>
    	</div>
    	<div>
    		<div>
    			<button form="manage-project"> Save </button>
    			<button type="button" onclick="location.href='index.php?page=project_list'"> Cancel </button>
    		</div>
    	</div>
	</div>
</div>
