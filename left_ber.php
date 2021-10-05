

<nav class='sb-sidenav accordion sb-sidenav-dark' id='sidenavAccordion' style='background-color: #023B54; '>
                    <div class='sb-sidenav-menu'>
                        <div class='nav'>
                            <div class='sb-sidenav-menu-heading'><?php echo $role.' Menu' ; ?></div>

                            <?php 
                            if($role=='Admin') {

                            echo"<a class='nav-link' href='deshboard.php'>
                                <div class='sb-nav-link-icon'><i class='fas fa-tachometer-alt'></i></div>
                                Dashboard
                            </a>
                            
                           
                          

                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#collapseLayouts' aria-expanded='false' aria-controls='collapseLayouts'>
                                <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                                Courses
                                <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                            </a>
                            <div class='collapse' id='collapseLayouts' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                                <nav class='sb-sidenav-menu-nested nav'>
                                    <a class='nav-link' href='add_course.php'>Add New Courses</a>
                                    <a class='nav-link' href='courses_list.php'>Courses List</a>

                                </nav>
                            </div>
                       


                         
                           <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#Teacher' aria-expanded='false' aria-controls='Teacher'>
                                <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                                Teacher
                                <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                            </a>
                            <div class='collapse' id='Teacher' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                                <nav class='sb-sidenav-menu-nested nav'>
                                    <a class='nav-link' href='add_teacher.php'>Add New Teacher</a>
                                    <a class='nav-link' href='teacher_list.php'>Teacher List</a>
                                    <a class='nav-link' href='courses_assign.php'>Courses Assign</a>
                                </nav>
                            </div>
                            

                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#Student' aria-expanded='false' aria-controls='Student'>
                                <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                                Student
                                <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                            </a>
                            <div class='collapse' id='Student' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                                <nav class='sb-sidenav-menu-nested nav'>
                                    <a class='nav-link' href='add_student.php'>Add New Student</a>
                                    <a class='nav-link' href='student_list.php'>Student List</a>
                                    <a class='nav-link' href='courses_reg.php'>Courses Registration</a>
                                </nav>
                            </div>


                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#Attendance' aria-expanded='false' aria-controls='Attendance'>
                                <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                                Attendance
                                <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                            </a>
                            <div class='collapse' id='Attendance' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                                <nav class='sb-sidenav-menu-nested nav'>
                                    
                                    <a class='nav-link' href='attendance_reports.php'>Records</a>
                                    
                                </nav>
                            </div>


                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#Evaluate' aria-expanded='false' aria-controls='Evaluate'>
                                <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                                Teacher Evaluate
                                <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                            </a>
                            <div class='collapse' id='Evaluate' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                                <nav class='sb-sidenav-menu-nested nav'>
                                    
                                    <a class='nav-link' href='evaluate_reports.php'>Records</a>
                                    
                                </nav>
                            </div>

                            "; } ?>


                            <?php 
                            if($role=='Teacher') {

                            echo"
                            <a class='nav-link' href='teacher_deshboard.php'>
                                <div class='sb-nav-link-icon'><i class='fas fa-tachometer-alt'></i></div>
                                Dashboard
                            </a>

                            <a class='nav-link' href='teacher_all_courses.php'>
                                <div class='sb-nav-link-icon'><i class='fas fa-book'></i></div>
                                Courses
                            </a>

            

                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#Student' aria-expanded='false' aria-controls='Student'>
                                <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                                Student
                                <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                            </a>
                            <div class='collapse' id='Student' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                                <nav class='sb-sidenav-menu-nested nav'>
                                    <a class='nav-link' href='teacher_all_student.php'> Student</a>
                                   
                                    <a class='nav-link' href='courses_reg.php'>Courses Registration</a>
                                </nav>
                            </div>
                            
                 

                            <a class='nav-link collapsed' href='#' data-toggle='collapse' data-target='#Attendance' aria-expanded='false' aria-controls='Attendance'>
                                <div class='sb-nav-link-icon'><i class='fas fa-columns'></i></div>
                                Attendance
                                <div class='sb-sidenav-collapse-arrow'><i class='fas fa-angle-down'></i></div>
                            </a>
                            <div class='collapse' id='Attendance' aria-labelledby='headingOne' data-parent='#sidenavAccordion'>
                                <nav class='sb-sidenav-menu-nested nav'>
                                    <a class='nav-link' href='attendance_take.php'>Take Attendance</a>
                                    <a class='nav-link' href='attendance_reports.php'>Records</a>
                                    
                                </nav>
                            </div>


                            
                            "; } ?>


                            <?php 
                            if($role=='Student') {

                            echo"
                            <a class='nav-link' href='student_deshboard.php'>
                                <div class='sb-nav-link-icon'><i class='fas fa-tachometer-alt'></i></div>
                                Dashboard
                            </a>

                            <a class='nav-link' href='student_all_courses.php'>
                                <div class='sb-nav-link-icon'><i class='fas fa-book'></i></div>
                                My Courses
                            </a>

                            <a class='nav-link' href='teacher_evaluate.php'>
                                <div class='sb-nav-link-icon'><i class='fas fa-star'></i></div>
                                Evaluate
                            </a>

            

                            

                            
                            "; } ?>

                           







                        </div>
                    </div>
                    
                </nav>