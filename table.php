<?php 
$menu = "table";
include("head_2.php"); 
include("sidebar.php");
include("navbar.php"); 
?>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous">
    
  </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


<div class="content">

  
<div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Table Example</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <table id="dtBasicExample" class="table table-striped " cellspacing="0" width="100%">
                                    <thead>
                                        <tr role="row" class="info">
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 7%;">ลำดับ</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">ชื่อข่าวสาร</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 15%;">หัวเรื่อง</th>

                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 5%;">รูป</th>
                                            <th  tabindex="0" rowspan="1" colspan="1" style="width: 20%;">จัดการ</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr>
                                                <td>
                                                Test
                                                </td>

                                                <td>
                                                   Test1
                                                </td>

                                                <td>
                                                  Test
                                                </td>

                                                <td>
                                                   <img src="f.png" width="50" class="img-circle elevation-2" alt="User Image">
                                                </td>

                                                <td>
                                                  <a class="btn btn-primary btn-sm" href="#">
                                                  <i class="fas fa-folder">
                                                  </i>
                                                  View
                                              </a>
                                              <a class="btn btn-info btn-sm" href="#">
                                                  <i class="fas fa-pencil-alt">
                                                  </i>
                                                  Edit
                                              </a>
                                              <a class="del-btn btn btn-danger btn-sm" href="table.php">
                                                  <i class="fas fa-trash">
                                                  </i>
                                                  Delete Sweetalert2
                                              </a>
                                                </td>

                                               
                                               
                                            </tr>


                                            <tr>
                                                <td>
                                                Test
                                                </td>

                                                <td>
                                                   Test
                                                </td>

                                                <td>
                                                  Test
                                                </td>

                                                <td>
                                                   <img src="f.png" class="img-circle elevation-2" width="50" alt="User Image">
                                                </td>

                                                <td>
                                                  <a class="btn btn-primary btn-sm" href="#">
                                                    <i class="fas fa-folder">
                                                    </i>
                                                    View
                                                </a>
                                                <a class="btn btn-info btn-sm" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Edit
                                                </a>
                                               <a class="del-btn btn btn-danger btn-sm" href="table.php">
                                                  <i class="fas fa-trash">
                                                  </i>
                                                  Delete Sweetalert2
                                              </a>
                                                </td>

                                                
                                               
                                            </tr>




                                           
                                        </tbody>
                  </table>

                </div>
              </div>
            </div>
            
          </div>
        </div>
       


                  <script>
            $('.del-btn').on('click',function(e){
            e.preventDefault();
            const href = $(this).attr('href') 
            Swal.fire({
                 imageUrl: 'logo_fordev22_2.png',
                imageWidth: 250,
                //imageHeight: 100,
                title: 'หากต้องการตตัวเต็ม ติดต่อที่ 0909591107',
                text: "fordev22.com",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        document.location.href = href;
                        
                    }
                })
         })

        
    </script>


       


          




        




      

</div>




<?php 
include("footer.php"); 

?>