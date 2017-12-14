<?php




include "header.php";

?>



<?php

if(isset($_POST['attdate']))
{
    $attdate=$_POST['attdate'];
}
else if(isset($_GET['attdate']))
{
    $attdate=$_GET['attdate'];
}
else
{
    echo "<script>alert('Please Select Date First');window.location.assign('selectdateviewatt.php')</script>";
}











$sqlq="SELECT empattn.empid,empattn.sl,addemployee.fname,addemployee.lname,addemployee.mname from empattn,addemployee WHERE empattn.attdate='$attdate' AND addemployee.empid=empattn.empid";




$result=$conn->query($sqlq);

$count=0;

?>
<title>View Attendance | Smart Solar  </title>
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title m-b-0">Attendance For <?php echo $attdate?></h3>
            <p class="text-muted m-b-30">Data table example</p>
            <div class="table-responsive">
                <table id="" class="table table-striped">
                    <thead align='center'>

                    <tr >
                        <td align='center'><b>EMPID</b></td>
                        <td align='center'><b>NAME</b></td>
                        <td align="center"><b>STATUS</b></td>
                        <td align="center"><b>EDIT</b></td>
                    </tr>

                    </thead>
                    <tbody>


                    <?php

                    $abseids="";

                    while ($row=$result->fetch_assoc())

                    {$requid=$row['sl'];


                        $count++;

                        echo "<tr >";

                        echo "<td align='center'>";

                        echo $row['empid'];
                        $abseids.="empattn.empid!=".$row['empid']." ";
                        echo "</td>";

                        echo "<td align='center'>".$row['fname']." ".$row['mname']." ".$row['lname']."</td>";

                        echo "<td align='center' ><button class='btn btn-warning editdata' >Absent</button></td>";





                        echo "<td align='center'><button class='fcbtn btn btn-outline btn-primary btn-1d btn-success editdata' id='$requid' onclick='DB(this.id)'>Present</button></td>";
                        echo "</tr>";
                    }


                    echo "<script>alert('$abseids')</script>";
                    if($count==0)
                    {
                        $allemp="SELECT empid,fname,mname,lname FROM addemployee";
                    }
                    else
                    {
                        echo "<script>alert('2nd')</script>";
                        $allemp="SELECT addemployee.empid,fname,lname,mname FROM addemployee,empattn WHERE empattn.empid!=addemployee.empid AND empattn.attdate='$attdate'";
                    }

                    $allempresult=$conn->query($allemp);

                    while ($allemprow=$allempresult->fetch_assoc())
                    {
                        $req=$allemprow['empid'];
                        echo "<tr >";

                        echo "<td align='center'>";
                        echo $allemprow['empid'];
                        echo "</td>";

                        echo "<td align='center'>".$allemprow['fname']." ".$allemprow['mname']." ".$allemprow['lname']."</td>";

                        echo "<td align='center' ><button class='btn btn-success editdata' >Present</button></td>";
                        echo "<td align='center'><button class='fcbtn btn btn-danger btn-outline btn-1d' id='$req' onclick='DB2(this.id)'>Absent</button></td>";

                        echo "</tr>";



                    }









                    ?>







                    </tbody>

                </table>
            </div>
        </div>
    </div>



</div>


<script type="application/javascript">



    var reqdate= "<?php echo $attdate?>";


    function DB(btnid,mydate)
    {

        var editlink="../php/editattcontroller.php?empid="+btnid+"&attdate="+reqdate;

        window.location.assign(editlink);




    }


    function DB2(presbtnid)
    {
        var editlink="../php/editattabscontroller.php?empid="+presbtnid+"&attdate="+reqdate;

        window.location.assign(editlink);
    }


</script>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>





<!-- /.container-fluid -->
<footer class="footer text-center"> &copy Smart Solar</footer>

<!-- /#page-wrapper -->

<!-- /#wrapper -->
<!-- jQuery -->
<script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="js/waves.js"></script>
<!-- Custom Theme JavaScript -->
<script src="js/custom.min.js"></script>
<script src="../plugins/bower_components/datatables/jquery.dataTables.min.js"></script>
<!-- start - This is for export functionality only -->
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
<!-- end - This is for export functionality only -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
</script>
<!--Style Switcher -->
<script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>






