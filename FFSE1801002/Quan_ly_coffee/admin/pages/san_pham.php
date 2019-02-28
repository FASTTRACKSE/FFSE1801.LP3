<?php
require '../../templates/header.php';
require '../../templates/headerbar.php';
require '../../templates/menubar.php';
?>

<div class="container">

	<div class="col-12 mt-5">
		<div class="card">
			<div class="card-body">
				<h4 class="header-title">Data Table Primary</h4>
				<div class="data-tables datatable-primary">
					<div id="dataTable2_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="dataTable2_length"><label>Show <select name="dataTable2_length" aria-controls="dataTable2" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="dataTable2_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable2"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="dataTable2" class="text-center dataTable no-footer dtr-inline collapsed" role="grid" aria-describedby="dataTable2_info" style="width: 1129px;">
						<thead class="text-capitalize">
							<tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="dataTable2" rowspan="1" colspan="1" style="width: 140px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="dataTable2" rowspan="1" colspan="1" style="width: 276px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="dataTable2" rowspan="1" colspan="1" style="width: 120px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="dataTable2" rowspan="1" colspan="1" style="width: 70px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="dataTable2" rowspan="1" colspan="1" style="width: 135px;" aria-label="Start Date: activate to sort column ascending">Start Date</th><th class="sorting" tabindex="0" aria-controls="dataTable2" rowspan="1" colspan="1" style="width: 100px; display: none;" aria-label="salary: activate to sort column ascending">salary</th></tr>
						</thead>
						<tbody>











							<tr role="row" class="odd">
								<td tabindex="0" class="sorting_1">Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008/11/28</td>
								<td style="display: none;">$162,700</td>
							</tr><tr role="row" class="even">
								<td tabindex="0" class="sorting_1">Angelica Ramos</td>
								<td>Chief Executive Officer (CEO)</td>
								<td>London</td>
								<td>47</td>
								<td>2009/10/09</td>
								<td style="display: none;">$1,200,000</td>
							</tr><tr role="row" class="odd">
								<td tabindex="0" class="sorting_1">Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td style="display: none;">$86,000</td>
							</tr><tr role="row" class="even">
								<td tabindex="0" class="sorting_1">Bradley Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012/10/13</td>
								<td style="display: none;">$132,000</td>
							</tr><tr role="row" class="odd">
								<td tabindex="0" class="sorting_1">Bradley Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012/10/13</td>
								<td style="display: none;">$132,000</td>
							</tr><tr role="row" class="even">
								<td tabindex="0" class="sorting_1">Brenden Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011/06/07</td>
								<td style="display: none;">$206,850</td>
							</tr><tr role="row" class="odd">
								<td tabindex="0" class="sorting_1">Brenden Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011/06/07</td>
								<td style="display: none;">$206,850</td>
							</tr><tr role="row" class="even">
								<td tabindex="0" class="sorting_1">Bruno Nash</td>
								<td>Software Engineer</td>
								<td>Edinburgh</td>
								<td>21</td>
								<td>2012/03/29</td>
								<td style="display: none;">$433,060</td>
							</tr><tr role="row" class="odd">
								<td class="sorting_1" tabindex="0">Bruno Nash</td>
								<td>Software Engineer</td>
								<td>Edinburgh</td>
								<td>21</td>
								<td>2012/03/29</td>
								<td style="display: none;">$433,060</td>
							</tr><tr role="row" class="even">
								<td tabindex="0" class="sorting_1">Caesar Vance</td>
								<td>Pre-Sales Support</td>
								<td>New York</td>
								<td>29</td>
								<td>2011/12/12</td>
								<td style="display: none;">$106,450</td>
							</tr></tbody>
						</table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable2_info" role="status" aria-live="polite">Showing 1 to 10 of 11 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable2_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable2_previous"><a href="#" aria-controls="dataTable2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="dataTable2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="dataTable2_next"><a href="#" aria-controls="dataTable2" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
					</div>
				</div>
			</div>
		</div>
		
	</div>

	<?php
	require '../../templates/footer.php';
	?>