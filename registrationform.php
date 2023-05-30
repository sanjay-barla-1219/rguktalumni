<?php
date_default_timezone_set("Asia/Calcutta");
session_start();
session_regenerate_id(true);
$servername = "localhost";
$username = "u479475753_SMS";
$password = "Dileep@123";
$dbname = "u479475753_SMS";
$mysqli = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_errno()){
    echo "Connection Failed".mysqli_connect_error();
    exit;
}
$name = urldecode($_GET["id"]);
$sql = "SELECT * FROM faculty WHERE name ='$name'";
$results = $mysqli->query($sql);
if($results->num_rows > 0){
    $faculty = $results->fetch_assoc();
}
if(isset($faculty)){
    $links = str_replace('<title>','<title>'.strtoupper($facult["name"]).' | ',$links);
}
include "../header.php";
echo $links;
?>
        <style>
            .dataTables_wrapper{
                overflow-x:auto;
            }
            
        </style>
    </head> 
    <body style="overflow-x:hidden">
        <?php
        echo $headertop;
        echo $header;
        echo $navbar;?>
            <div class="p-3 container-fluid" id="myList">
                <?php if(isset($faculty)):?>
                <div class="card mb-2">
                    <div class="card-body">
                        <h3 class="form-label offcanvas-title mb-3 mt-2 text-center" style="font-size:30px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;">Faculty Profile</h3>
                        <div class="d-block d-md-flex justify-content-start">
                            <div class="card-img d-block justify-content-center" style="width:130px;height:130px">
                                <img src="images/<?php echo htmlspecialchars($faculty["imageLink"]);?>" style="height:130px;width:130px">
                            </div>
                            <div class="ms-3">
                                <h1 class="form-label offcanvas-title mb-3 mt-2" style="font-size:20px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;"><?php echo htmlspecialchars(ucwords(strtolower($faculty["name"])));?><sub class="ms-2"><?php echo htmlspecialchars($faculty["qualification"]);?></sub></h1>
                                <h1 class="form-label offcanvas-title mb-3 mt-2" style="font-size:17px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;"><?php echo htmlspecialchars(ucwords(strtolower($faculty["designation"])));?>&nbsp;,&nbsp;&nbsp;<?php echo htmlspecialchars($faculty["department"]);?></h1>
                                <h1 class="form-label offcanvas-title mb-3 mt-2" style="font-size:15px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;"><a href="mailto:<?php echo htmlspecialchars($faculty["mail"]);?>"><?php echo htmlspecialchars($faculty["mail"]);?></a></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header pt-2 pb-2 d-flex justify-content-between" data-bs-toggle="collapse" href="#specialization" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h1 class="form-label offcanvas-title mb-2 mt-2" style="font-size:15px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;">Specialization</h1>
                    </div>
                    <div class="card-body collapse show pb-0" id="specialization">
<p class="card-text m-0 pb-0">
<?php
$id = $faculty["sNo"];
$sql = "SELECT * FROM tblspecialization WHERE sid = '$id'";
$rst = $mysqli->query($sql);
if($rst->num_rows > 0){
    $rost = $rst->fetch_assoc();
    $id = 1;
    echo '<ul><li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
    while($rost = $rst->fetch_assoc()){
        if($id < $rst->num_rows){
            echo '<li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
        }
        $id =$id+1;
}
echo '</ul>';
}else{
    echo 'Not yet Updated.';
}
?></p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header pt-2 pb-2 d-flex justify-content-between" data-bs-toggle="collapse" href="#experience" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h1 class="form-label offcanvas-title mb-2 mt-2" style="font-size:15px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;">Experience</h1>
                    </div>
                    <div class="card-body collapse show pb-0" id="experience">
<p class="card-text m-0 pb-0">
<?php
$id = $faculty["sNo"];
$sql = "SELECT * FROM tblexperience WHERE sid = '$id'";
$rst = $mysqli->query($sql);
if($rst->num_rows > 0){
    $rost = $rst->fetch_assoc();
    $id = 1;
    echo '<ul><li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
    while($rost = $rst->fetch_assoc()){
        if($id < $rst->num_rows){
            echo '<li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
        }
        $id =$id+1;
}
echo '</ul>';
}else{
    echo 'Not yet Updated.';
}
?></p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header pt-2 pb-2 d-flex justify-content-between" data-bs-toggle="collapse" href="#subjectstaught" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h1 class="form-label offcanvas-title mb-2 mt-2" style="font-size:15px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;">Subjects Taught</h1>
                    </div>
                    <div class="card-body collapse show pb-0" id="subjectstaught">
                        <p class="card-text m-0 pb-0">
<?php
$id = $faculty["sNo"];
$sql = "SELECT * FROM tblst WHERE sid = '$id'";
$rst = $mysqli->query($sql);
if($rst->num_rows > 0){
    $rost = $rst->fetch_assoc();
    $id = 1;
    echo '<li>'.ucwords(htmlspecialchars($rost["title"]));
    while($rost = $rst->fetch_assoc()){
        if($id < $rst->num_rows){
            echo ', '.ucwords(htmlspecialchars($rost["title"]));
        }
        $id =$id+1;
}
echo '</li>';
}else{
    echo 'Not yet Updated.';
}
?></p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header pt-2 pb-2 d-flex justify-content-between" data-bs-toggle="collapse" href="#facultyDevelopmentProgram" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h1 class="form-label offcanvas-title mb-2 mt-2" style="font-size:15px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;">Faculty Development Program</h1>
                    </div>
                    <div class="card-body collapse show pb-0" id="facultyDevelopmentProgram">
<p class="card-text m-0 pb-0">
<?php
$id = $faculty["sNo"];
$sql = "SELECT * FROM tblfdp WHERE sid = '$id'";
$rst = $mysqli->query($sql);
if($rst->num_rows > 0){
    $rost = $rst->fetch_assoc();
    $id = 1;
    echo '<ul><li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
    while($rost = $rst->fetch_assoc()){
        if($id < $rst->num_rows){
            echo '<li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
        }
        $id =$id+1;
}
echo '</ul>';
}else{
    echo 'Not yet Updated.';
}
?></p>
                    </div>
                </div>
                <div class="card mb-2">
                    <div class="card-header pt-2 pb-2 d-flex justify-content-between" data-bs-toggle="collapse" href="#Publications" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <h1 class="form-label offcanvas-title mb-2 mt-2" style="font-size:15px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:3px solid #801316;padding-left:10px;">Publications</h1>
                    </div>
                    <div class="card-body collapse show pb-0" id="Publications">
<p class="card-text m-0 pb-0">
<?php
$id = $faculty["sNo"];
$sql = "SELECT * FROM tblpublication WHERE sid = '$id'";
$rst = $mysqli->query($sql);
if($rst->num_rows > 0){
    $rost = $rst->fetch_assoc();
    $id = 1;
    echo '<ul><li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
    while($rost = $rst->fetch_assoc()){
        if($id < $rst->num_rows){
            echo '<li>'.ucwords(htmlspecialchars($rost["title"])).'</li>';
        }
        $id =$id+1;
}
echo '</ul>';
}else{
    echo 'Not yet Updated.';
}
?></p>
                    </div>
                </div>
                <?php else:?>
                <div class="card">
                    <div class="card-header border-bottom">
                        <h1 class="form-label offcanvas-title mb-3 mt-2" style="font-size:30px;text-transform:none;color:#33110e;font-family:'Lato', sans-serif;border-left:4px solid #801316;padding-left:10px;">Faculty Profiles</h1>
                        <div class="d-flex justify-content-between align-items-center row pb-2 gap-3 gap-md-0">
                            <div class="col-md-4 user_role"></div>
                            <div class="col-md-4 user_plan"></div>
                            <div class="col-md-4 user_status"></div>
                        </div>
                    </div>
                    <div class="card-datatable table-responsive pt-0">
                        <table class="sptable table" id="faculty">
                            <thead>
                                <tr>
                                    <th>Faculty Name & Mail</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Qualification</th>
                                    <th>Experience</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
<?php 
$psql = "SELECT * FROM faculty";
$pre = $mysqli->query($psql);
if($pre->num_rows>0){
while($prow = $pre->fetch_assoc()){
 $dae = $prow["DOJ"];
if(empty($dae)){
    $dae = '01-01-2017';
}$dae = strtotime($dae);
if((date('m')-date('m',$dae))<0){
    $year = date('Y')-date('Y',$dae)-1;
    $month = date('m')+12-date('m',$dae);
}else{
    $year = date('Y')-date('Y',$dae);
    $month = abs(date('m')-date('m',$dae));
}$exp =  $year." years, ".$month." months";?>
                                <tr>
                                    <td>
                                        <div class="d-flex">
                                                <img src="https://rguktsklm.ac.in/faculty_profiles/images/<?php echo $prow["imageLink"];?>" alt="Avatar" class="rounded-circle card-img bg-gray" style="height:40px;width:40px">    
                                            <div class="ps-2 justify-content-space-between">
                                                <h6 style="font-family:'Lato',sans-serif;font-size:16px" class="m-0 text-black"><?php echo htmlspecialchars($prow['name']);?></h6>
                                                <p style="font-family:'Lato',sans-serif;font-size:13px" class="m-0 p-0 text-gray"><?php echo htmlspecialchars($prow['mail']);?></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>                                            
                                        <div class="align-items-center">
                                            <h5 style="font-family:'Lato',sans-serif;font-size:16px" class="text-black m-0"><?php echo htmlspecialchars($prow['designation']);?></h5>
                                        </div>
                                    </td>
                                    <td>                                            
                                        <div class="align-items-center">
                                            <h5 style="font-family:'Lato',sans-serif;font-size:16px" class="text-black m-0"><?php echo htmlspecialchars($prow['department']);?></h5>
                                        </div>
                                    </td>
                                    <td>                                            
                                        <div class="align-items-center">
                                            <h5 style="font-family:'Lato',sans-serif;font-size:16px" class="text-black m-0"><?php echo htmlspecialchars($prow['qualification']);?></h5>
                                        </div>
                                    </td>
                                    <td>                                            
                                        <div class="align-items-center">
                                            <h5 style="font-family:'Lato',sans-serif;font-size:16px" class="text-black m-0"><?php echo htmlspecialchars($exp);?></h5>
                                        </div>
                                    </td>
                                    <td>                                            
                                        <div class="align-items-center">
                                            <h5 style="font-family:'Lato',sans-serif" class="text-black m-0"><a href="?id=<?php echo ($prow["name"]);?>"><i class="bi bi-eye"></i></a></h5>
                                        </div>
                                    </td>
                                </tr>
                                <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>
<script>
$(document).ready(function () {
    $('#faculty').DataTable();
});
</script>
                <?php endif;?>
            </div>
            <?php echo $footer;?>
                <link rel="stylesheet" href="https://rguktsklm.ac.in/source/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
                <link rel="stylesheet" href="https://rguktsklm.ac.in/source/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
                <link rel="stylesheet" href="https://rguktsklm.ac.in/source/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css" />
                <link rel="stylesheet" href="https://rguktsklm.ac.in/source/vendor/libs/select2/select2.css" />
                <script src="https://rguktsklm.ac.in/source/vendor/libs/moment/moment.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables/jquery.dataTables.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/jszip/jszip.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/pdfmake/pdfmake.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables-buttons/buttons.html5.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/datatables-buttons/buttons.print.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/select2/select2.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/cleavejs/cleave.js"></script>
                <script src="https://rguktsklm.ac.in/source/vendor/libs/cleavejs/cleave-phone.js"></script>