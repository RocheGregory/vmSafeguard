<?php 
require('../controller.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>vmSafeguard | Backup Single VM</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/favicon.png" />
</head>

<body>
<?php
include('scripts-menu-header-top-left.php');
?>     <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Backup Single VM</h4>
                  <p class="card-description">
                    <?php
          			if (isset($_POST['answer'])) {
                        if ($_POST['answer'] == "yes" OR ($_POST['answer'] == "YES")) {
                        echo "<pre>".shell_exec("sudo ssh -p $PORT root@$HOST 'sh -s' < PoolVMBackup.sh &")."</pre>";
                        }
                        else {
                          echo "<pre> Error, answer \"yes\" to valide the backup pool process ! </pre>";
                        }
          			}
          			else {
          				echo "<pre> Error, answer \"yes\" to valide the backup pool process from index.php ! /<pre>";
          			}	
                    ?>
                  </p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
<?php include('scripts-footer.php') ?>