
<?php if(!($this->session->userdata('user_id'))){
	redirect('index.php/users/index');
	}?>
<?php echo $title; ?>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>Attendance details table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Reg: No.</th>
                  <th>program</th>
                  <th>Attendance</th>
                  
                  <th>Total Percentage</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Reg: No.</th>
                  <th>Program</th>
                  <th>Attendance</th>
                  
                  <th>Total Percentage</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>Gloria Little</td>
                  <td>2015-04-08524</td>
                  <td>Bcs with</td>
                  <td>59</td>
                  
                  <td> <?php $otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tr>
                
                <tr>
                  <td>Donna Snider</td>
                  <td>2015-04-08516</td>
                  <td>Bsc. in</td>
                  <td>27</td>
                  
                  <td> <?php $otea = rand(00, 100); echo $otea."%" ; ?></td>
                </tr>
              </tbody>
            </table><a href="dayattandance" class="btn btn-primary ">Today attendance</a>
            </table><a href="download" class="btn btn-primary "><i class="fa fa-download"></i>Download Total attendance</a>

          </div>
        </div>
        <div class="card-footer small text-muted">Updated at <?php echo date('y/m/d'); ?></div>
      </div>
    </div>