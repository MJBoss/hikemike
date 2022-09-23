<?php
include_once '../templates/header.php';
include_once("../includes/connect.php");


// if(isset($_SESSION['u_id']) && !empty($_SESSION['u_id'])) {
//   //echo 'Set and not empty, and no undefined index error!';
// }else{
//   header("location:../admin/index.php?error=nopass");
// }

//var_dump($_SESSION);


?>

  <!-- ================ Hero sm Banner start =================     -->
  <section class="mb-30px">
    <div class="container">
      <div class="hero-banner hero-banner--sm">
        <div class="hero-banner__content">
          <h1>Empty Page</h1>
          <nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Create your Account</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--================ Hero sm Banner end =================-->    





  <!--================ Start Blog Post Area =================-->
    <section class="section-margin--small section-margin">
        <div class="container">


      

        <div id="wrap">
            <div class="container">
                <div class="row">
                    <form class="form-horizontal" action="functions.php" method="post" name="upload_excel" enctype="multipart/form-data">
                        <fieldset>
                            <!-- Form Name -->
                            <legend>Users</legend>
                            <div class="prompt"><?php echo $message ?></div>
                            <!-- File Button -->
                            <div class="form-group">
                            
                                <label class="col-md-4 control-label" for="filebutton">Select File</label>
                                
                                <div class="col-md-4">
                                    <input type="file" name="file" id="file" class="input-large"> 
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group" style="margin-bottom: 6px;margin-top: 5px;">
                                    <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Import</button>
                            </div>
                            
                        </fieldset>
                      </form>
                </div>


                <?php	

  define("ROW_PER_PAGE",10);
	$search_keyword = '';
	if(!empty($_POST['search']['keyword'])) {
		$search_keyword = $_POST['search']['keyword'];
	}
	$sql = 'SELECT * FROM tbl_user WHERE firstName LIKE :keyword OR lastName LIKE :keyword OR email LIKE :keyword ORDER BY user_id ASC ';
	
	/* Pagination Code starts */
	$per_page_html = '';
	$page = 1;
	$start=0;
	if(!empty($_POST["page"])) {
		$page = $_POST["page"];
		$start=($page-1) * ROW_PER_PAGE;
	}
	$limit=" limit " . $start . "," . ROW_PER_PAGE;
	$pagination_statement = $conn->prepare($sql);
	$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pagination_statement->execute();

	$row_count = $pagination_statement->rowCount();
	if(!empty($row_count)){
		$per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
		$page_count=ceil($row_count/ROW_PER_PAGE);
		if($page_count>1) {
			for($i=1;$i<=$page_count;$i++){
				if($i==$page){
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current" />';
				} else {
					$per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page" />';
				}
			}
		}
		$per_page_html .= "</div>";
	}
	
	$query = $sql.$limit;
	$pdo_statement = $conn->prepare($query);
	$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>

                    <form name='frmSearch' action='' method='post'>
                        <div class='table-responsive'><!--input type='text' name='search[keyword]' value="< ?php echo $search_keyword; ?>" id='keyword' maxlength='25'--></div>
                            <table id='myTable' class='table table-striped table-bordered'>
                                <thead>
                                    <tr>
                                        <th>User ID</th>
                                        <th>FirstName</th>
                                        <th>LastName</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody id='table-body'>
                                    <?php if(!empty($result)) { foreach($result as $row) { ?>
                                    <tr class='table-row'>
                                        <td><?php echo $row['user_id']; ?></td>
                                        <td><?php echo $row['firstName']; ?></td>
                                        <td><?php echo $row['lastName']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                    </tr>   
                            <?php
                                }
                                }
                            ?>
                            </tbody>
                            </table>
                        <?php echo $per_page_html; ?>
                    </form>
            </div>
        </div>
        </div>
    </section>
    <!--================ End Blog Post Area =================-->
    </main>

    <?php 
    include_once '../templates/footer.php';
    ?>