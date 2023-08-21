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
            <h1 class="m-0">Edit Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">All Posts</a></li>
              <li class="breadcrumb-item"><a href="#">Edit Posts</a></li>
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
          <form method="post">
                <div class="card-body">
                <div class="form-group">
                        <label>Title</label>
                        <input type="hidden" name="post_id" value="<?php echo $fetch_post['id']; ?>">
                        <input type="text" name="title" value="<?php echo $fetch_post['title']; ?>">
    
                      </div>
                      <div class="form-group">
                        <label>Post</label>
                        <textarea name="post" class="form-control" rows="3" ><?php echo $fetch_post['post']; ?></textarea>
                      </div>
                      
                      <div class="form-group">
                        <label>Author</label>
                        <input type="text" name="Author" class="form-control" value="<?php echo $fetch_post['author']; ?>">
                      </div>
                      <div class="form-group">
                        <label>Published</label>
                        <input type="Boolean" name="Published" class="form-control" value="<?php echo $fetch_post['status']; ?>">
                      </div>
                      <div class="form-group">
                      <label for="datepicker">Date:</label>
                      <input type="text" id="datepicker" name="datepicker" class="form-control">
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
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