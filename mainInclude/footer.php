 <!-- Start Footer -->
 <footer class="container-fluid bg-dark text-center p-2">
     <small class="text-white">Copyright &copy; 2023 || Designed By The DBMS Enchanters ||<a href="#login" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter"> Admin Login</a> </small>
 </footer>
 <!-- end footer -->



 <!-- Modal -->
 <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">

                 <!-- Start Student Registration Form -->
                 <?php include('studentRegistration.php');?>
                 <!-- End Student Registration Form -->

             </div>
             <div class="modal-footer">
                 <span id="successMsg"></span>
                 <button type="button" class="btn btn-primary" onclick="addStu()" id="signup">Sign Up</button>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             </div>
         </div>
     </div>
 </div>


 <!-- Start Student LOGIN Form -->
 <!-- Modal -->
 <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Student Login</h1>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form" id="stuLoginForm">

                     <div class="form-group">
                         <i class="fas fa-envelope"></i>
                         <label for="stuLogemail" class="pl-2 font-weight-bold" style="margin-bottom: 10px;">Email</label>
                         <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">

                     </div>
                     <div class="form-group">
                         <i class="fas fa-key"></i>
                         <label for="stuLogpass" class="pl-2 font-weight-bold" style="margin-bottom: 10px;">Password</label>
                         <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
                     </div>
                     </form>
             </div>
             <div class="modal-footer">
                <small id="statusLogMsg"></small>
                 <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
             </div>
         </div>
     </div>
 </div>
 <!-- End Student LOGIN Form -->



 <!-- Start Admin LOGIN Form -->
 <!-- Admin Login Modal -->
 <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" role="dialog" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 <form id="adminLoginForm">

                     <div class="form-group">
                         <i class="fas fa-envelope"></i>
                         <label for="adminLogEmail" class="pl-2 font-weight-bold">Email</label>
                         <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
                     </div>
                     <div class="form-group">
                         <i class="fas fa-key"></i>
                         <label for="adminLogPass" class="pl-2 font-weight-bold">Password</label>
                         <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
                     </div>
                 </form>
             </div>
             <div class="modal-footer">
             <button type="button" id="adminLoginBtn" class="btn btn-primary" onclick="checkAdminLogin()">Login</button>                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
             </div>
         </div>
     </div>
 </div>
 <!-- End Admin LOGIN Form -->









 <!-- jquery and Bootstrap JavaScript -->

 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <!-- Font Awesome JS -->
 <script src="js/all.min.js"></script>

 <!-- Student Ajax Call Javascript -->
 <script type="text/javascript" src="js/ajaxrequest.js"></script>

  <!-- Admin Ajax Call Javascript -->

 <script type="text/javascript" src="js/adminajaxrequest.js"></script>



 </body>

 </html>