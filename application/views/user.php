
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
<?php
  $sel_btn_idx = 0;
  $sel_view_text = 0;
?>
    <!-- <p align='right'>
        <button type="button" class="btn btn-primary" data-toggle="modal"
       onclick="onprintexcel(); " >Print</button>
    </p> -->
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th width='40' align='center'><center>No</center></th>
                  <th width='240' align='center'><center>Name</center></th>
                  <th align='center'><center>Secret </center></th>
                  <th width='157' align='center'><center>Context </center></th>
                  <th  align='center'><center>Fullcontact </center></th>
                  <th  align='center'><center>Port</center></th>
                  <th  align='center'><center>qualify </center></th>
                  <th  align='center' width=50><center>Type</center></th>
                  <th  align='center' width=50><center>Allow</center></th>
                  <th  align='center' width=50><center>Ipaddr</center></th>

                </tr>
                </thead>
                <tbody>
<?php
  $j = 0;
  for( $i = 0 ; $i < count($uList) ; $i++ )
  {
      $j++;
      echo "<tr id='ordertabletr$i'>";
      echo "<td align='center'>$j</td>";
      echo "<td align='center'>".$uList[$i]['name']."</td>";
      echo "<td align='center'>".$uList[$i]['secret']."</td>";
      echo "<td align='center'>".$uList[$i]['context']."</td>";
      echo "<td align='center'>".$uList[$i]['fullcontact']."</td>";
      echo "<td align='center' >".$uList[$i]['port']."</td>";
      echo "<td align='center' >".$uList[$i]['qualify']."</td>";
      echo "<td align='center'>".$uList[$i]['type']."</td>";
      echo "<td align='center' >".$uList[$i]['allow']."</td>";
      echo "<td align='center' >".$uList[$i]['ipaddr']."</td>";
      echo "</tr>";
  }
?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
          </div>
    <!-- /.content -->
    </section>
  </div>

<script type="text/javascript">
function onprintexcel()
{
<?php
          echo "window.open(\"".base_url('index.php/user/user_list_print')."\",'print_win');";
?>

}

</script>
