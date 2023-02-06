<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>
                            <!-- pdf download -->
                            <div class="d-flex">
                                <input type="button" class="btn btn-outline-primary mb-2" id="btnExport" value="Download" onclick="Export()" />
                                <select class="ml-auto form-select form-select-lg mb-3" aria-label="" name="eventfilter">
                                <option disabled="disabled" selected="selected">filter</option>
                                <?php
                                     $sql="select event_name from events";
                                     $result=mysqli_query($con,$sql);
                                     if($result){
                                        while($row=mysqli_fetch_assoc($result)){
                                            $eventfilt=$row['event_name'];
                                             echo '<option>'.$eventfilt.'</option>';
                                        }
                                      }
                                ?>
                                </select>

                            </div>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Participation list</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                
                                </div>                                    
                                    <thead>
                                        <tr>
                                            
                                            <th>Name</th>
                                            <th>Reg no</th>
                                            <th>Email</th>
                                            <th>clg_Name</th>
                                            <th>Dept</th>
                                            <th>Event Name</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Reg no</th>
                                            <th>Email</th>
                                            <th>clg_Name</th>
                                            <th>Dept</th>
                                            <th>Event Name</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                        $sql="select user.std_name,user.std_regno,user.mobile,user.email,user.clg_name,user.dept,events.event_name from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id);";
                        $result=mysqli_query($con,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $name=$row['std_name'];
                                $regno=$row['std_regno'];
                                $mobile=$row['mobile'];
                                $email=$row['email'];
                                $clgname=$row['clg_name'];
                                $dept=$row['dept'];
                                $eventname=$row['event_name'];     
                                
                                echo '
                                <tr>
                                            <td>'.$name.'</td>
                                            <td>'.$regno.'</td>
                                            <td>'.$email.'</td>
                                            <td>'.$clgname.'</td>
                                            <td>'.$dept.'</td>
                                            <td>'.$eventname.'</td>
                                        </tr>
                                ';
                            }
                        }
                                            ?>
                                       <!--  
                                        <tr>
                                            <td>Donna Snider</td>
                                            <td>Customer Support</td>
                                            <td>New York</td>
                                            <td>27</td>
                                            <td>2011/01/25</td>
                                            <td>$112,000</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>