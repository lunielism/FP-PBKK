

          <!-- DataTales Example -->
          <div id="Findings" class="card shadow mb-4">
      
            <div class="card-header py-3">
           
            <!-- Page Heading -->
          <h5 class="mb-2 text-gray-800"> Out patient Examination Results
                  </h5>  

            </div>
            <div class="card-body">

       <div class="container">
            
             </div>

              <div class="table">
                <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
           
                 <?php if($this->session->flashdata('add_multiple_findings')): ?>
          
          <?php echo "<div style='#1cc88a' class='alert alert-success alert-dismissible text-center'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h6><i class='con fa fa-check'></i></h6>".$this->session->flashdata('add_multiple_findings') ."</div>" ?>
          
           <?php endif; ?>

                  <tbody>
                  <?php 
 
                   $this->load->view($opd_form);

                   ?>
		
                  </tbody>

                </table>
              </div>
            </div>
          </div>

