
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
                  <th width='240' align='center'><center>context</center></th>
                  <th align='center'><center>exten</center></th>
                  <th width='157' align='center'><center>priority</center></th>
                  <th  align='center'><center>app</center></th>
                  <th  align='center'><center>appdata</center></th>

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
      echo "<td align='center'>".$uList[$i]['context']."</td>";
      echo "<td align='center'>".$uList[$i]['exten']."</td>";
      echo "<td align='center'>".$uList[$i]['priority']."</td>";
      echo "<td align='center'>".$uList[$i]['app']."</td>";
      echo "<td align='center' >".$uList[$i]['appdata']."</td>";
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
