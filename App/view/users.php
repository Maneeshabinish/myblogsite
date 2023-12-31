<?php

include('App\view\partials\header.php'); 

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Users List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">All Posts</a></li>
           
              <li class="breadcrumb-item"><a href="#">Users</a></li>

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          <div class="card">
              <div class="card-header">
                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Username</th>
                      <th>Status</th>
                      <th>Role</th>
                      <th>Member for </th>
                      <th>Last Access</th>
                      <th>Operations</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Alan</td>
                      <td>Active</td>
                      <td>Authenticated user</td>
                      <td><span class="tag tag-success"> 3days and 4hours</span></td>
                      <td><span class="tag tag-success"></span> 14/8/23</td>
                      
                      <td>
                        <button type="button" class="btn btn-xs btn-outline-primary">Edit</button>
                        <button type="button" class="btn btn-xs btn-outline-primary">Delete</button>
                      </td>
                    </tr>
                    
                      
                   </tbody>
                </table>
              </div>
            
          </div>
          
            
        
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include('App\view\partials\footer.php'); ?>