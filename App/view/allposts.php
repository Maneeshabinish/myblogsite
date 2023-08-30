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
            <h1 class="m-0">All Posts</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/allposts">All Posts</a></li>
              <li class="breadcrumb-item"><a href="/addpost">Add Posts</a></li>
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
          <div class="row">
          <div class="col-12">
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
                      <th>Title</th>
                      <th>Author</th>
                      <th>Status</th>
                      <th>Updated</th>
                      <th>Operations</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($posts as $post): ?>
                        <tr>
                            <td><?php echo $post->title; ?></td>
                            <td><?php echo $post->author; ?></td>
                            <td><?php echo $post->status; ?></td>
                            <td><?php echo $post->updated_date; ?></td>
                            <td>
                              <form method="get">
                                <a href="/editpost?id=<?php echo $post->id; ?>">
                                <input type="hidden" name="id" value="<?php echo $post->id; ?>"/>
                                <button type="button" class="btn btn-xs btn-outline-primary">Edit</button></a>
                                                            
                                <a href="/deletepost?id=<?php echo $post->id; ?>">
                                <input type="hidden" name="id" value="<?php echo $post->id; ?>"/>
                                <button type="button" class="btn btn-xs btn-outline-primary">Delete</button>
                              </form>
                            </td>
                        </tr>
                    <?php endforeach;?>                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
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