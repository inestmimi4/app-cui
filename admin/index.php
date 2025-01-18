
<script src="assets/js/chartsJS.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
<?php include('partials/menuu.php'); ?>
<?php 
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                ?>
            <!-- ======================= Cards ================== -->
            
            <div class="cardBox">
                <div class="card">
                <a href="manage-recette.php" class="cardLink">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM recette";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>
                    <div>
                        <div class="numbers"><?php echo $count; ?></div>
                        <div class="cardName">Receipes</div>
                    </div></a>

                    
                </div>
               
                 
                <div class="card">
                <a href="manage-ingredient.php" class="cardLink">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM ingredient";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>
                    <div>
                        <div class="numbers"><?php echo $count; ?></div>
                        <div class="cardName">Ingredient</div>
                    </div></a>

                    <div class="iconBx">
                        <ion-icon name="ingredient"></ion-icon>

                    
                </div></div></a>
               
               
                <div class="card">
                <a href="manage-equipement.php" class="cardLink">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM equipement";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>
                    <div>
                        <div class="numbers"><?php echo $count; ?></div>
                        <div class="cardName">Equipement</div>
                    </div></a>

                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outlinee"></ion-icon>
                    </div>
                </div>
                
            
                <div class="card">
                <a href="manage-instructions.php" class="cardLink">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM instructions";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>
                    <div>
                        <div class="numbers">8</div>
                        <div class="cardName">Instructions</div>
                    </div></a>

                    <div class="iconBx">
                        <ion-icon name="cash-outlinee"></ion-icon>
                    </div>
                
            </div></a>
            
            </div>
            <div class="chartsBx">
                <div class="chart"> <canvas id="chart-1"></canvas> </div>
                <div class="chart"> <canvas id="chart-2"></canvas> </div>
            </div>
            

            <!-- ================ Order Details List ================= -->
            <div class="details">
                <div class="recentOrders">
                    <div class="cardHeader">
                        <h2>Recent comments</h2>
                        <a href="#" class="btn">View All</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td> user Name</td>
                                <td>comments</td>
                                <td>Content</td>
                                
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>sofia</td>
                                <td>Step-by-step guides make cooking a breeze!</td>
                                
                                <td><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Lina</td>
                                <td>Perfect for both beginners and pros!</td>
                                
                                <td><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Ines</td>
                                <td>Recipes for every craving, love it!</td>
                                
                                <td><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Rima</td>
                                <td>Love exploring new dishes here!</td>
                                
                                <td></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>
                            <tr>
                                <td>bella</td>
                                <td>Beautiful photos, easy to follow instructions!</td>
                                
                                <td><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Fatma</td>
                                <td>Great app for home chefs of all levels!</td>
                                
                                <td><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>Emma</td>
                                <td>Healthy and delicious recipes at my fingertips!</td>
                                
                                <td><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>

                            <tr>
                                <td>lulu</td>
                                <td>Inspirational recipes, just a tap away!</td>
                                
                                <td><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon><ion-icon name="star-outline"style="color: gold;"></ion-icon></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- ================= New Customers ================ -->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Recent Users</h2>
                    </div>

                    <table>
                        <tr>
                            <td width="60px">
                                <div class=><ion-icon name="person"></ion-icon></div>
                            </td>
                            <td>
                                <h4>Fatma<br> <span>Tunisia</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <div class=><ion-icon name="person"></ion-icon></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <div class=><ion-icon name="person"></ion-icon></div>
                            </td>
                            <td>
                                <h4>yasim<br> <span>Tunisia</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <div class=><ion-icon name="person"></ion-icon></div>
                            </td>
                            <td>
                                <h4>Lilya<br> <span>India</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <div class=><ion-icon name="person"></ion-icon></div>
                            </td>
                            <td>
                                <h4>David <br> <span>Italy</span></h4>
                            </td>
                        </tr>

                        <tr>
                            <td width="60px">
                            <div class=><ion-icon name="person"></ion-icon></div>
                            </td>
                            <td>
                                <h4>Amit <br> <span>India</span></h4>
                            </td>
                        </tr>

                        

                       
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include('partials/footer1.php') ?>