<?php  
 $connect = mysqli_connect("localhost", "root", "", "user");  
 $output = '';  
 $sql = "SELECT * FROM userbet ORDER BY ID";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered" style="table-layout: fixed; width: 100%;">  
                <thead>
                <tr>
                <th>No</th>
                <th>下注号码</th>
                <th>大 (RM)<br/></th>
                <th>小 (RM)<br/></th>
                <th>头奖 (RM)<br/></th>
                <th>二奖 (RM)<br/></th>
                <th>三奖 (RM)<br/></th>
                <th>特别奖(RM)<br/></th>
                <th>安慰奖(RM)<br/></th>
                <th>三个字(RM)<br/></th>
                <th>两个字(RM)<br/></th>
                <th bgcolor="#FFD700"><img class="logoposition" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/magicon-e1495971860698.png"><br/><center><input type="checkbox" id="magnum_master" class="checkboxposition" onchange="togglecheckboxes1(this, "mag2")"></center></th>
                <th bgcolor="#0000CD"><img class="logoposition" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/pmpicon-e1495971840647.png"><br/><center><input type="checkbox" class="checkboxposition" id="pmp_master" onchange="togglecheckboxes1(this, "pmp2")"></center></th>
                <th bgcolor="#DC143C"><img class="logoposition" src="https://www.ltttry8899.com/wp-content/uploads/2017/05/toticon-e1495971826239.png"><br/><center><input type="checkbox" class="checkboxposition" id="pmp_master" onchange="togglecheckboxes1(this, "tot2")"></center></th>
                </thead>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      
      $output .= '  
           <tr>  
                <td></td>  
                <td id="user" contenteditable></td>  
                <td id="betNo" contenteditable></td>
                <td id="big" contenteditable></td>
                <td id="small" contenteditable></td>
                <td id="firstprize" contenteditable></td>
                <td id="secondprize" contenteditable></td>
                <td id="thirdprize" contenteditable></td>
                <td id="excellence" contenteditable></td>
                <td id="three" contenteditable></td>
                <td id="two" contenteditable></td>
                <td><input type="checkbox" value="1" id="magnum" ></td>
                <td><input type="checkbox" value="1" id="damacai" ></td>
                <td><input type="checkbox" value="1" id="toto" ></td>
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>