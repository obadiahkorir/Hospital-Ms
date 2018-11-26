<div class="container-fluid padded">

	<div class="row-fluid">

        <div class="span30">

            <!-- find me in partials/action_nav_normal -->

            <!--big normal buttons-->

            <div class="action-nav-normal">

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_doctor">

                        <i class="icon-user-md"></i>

                     

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_patient">

                        <i class="icon-user"></i>

                      

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_nurse">

                        <i class="icon-plus-sign-alt"></i>

                       

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_pharmacist">

                        <i class="icon-medkit"></i>

                      

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_laboratorist">

                        <i class="icon-beaker"></i>

                   

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_accountant">

                        <i class="icon-money"></i>

                       

                        </a>

                    </div>

                </div>

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_appointment">

                        <i class="icon-exchange"></i>

                      

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_payment">

                        <i class="icon-credit-card"></i>

                      

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_blood_bank">

                        <i class="icon-tint"></i>


                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_medicine">

                        <i class="icon-medkit"></i>


                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_report/operation">

                        <i class="icon-reorder"></i>

                       

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_report/birth">

                        <i class="icon-github-alt"></i>


                        </a>

                    </div>

                </div>

                <div class="row-fluid">

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_report/death">

                        <i class="icon-minus-sign"></i>


                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/view_bed_status">

                        <i class="icon-hdd"></i>

                        

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_noticeboard">

                        <i class="icon-columns"></i>

                      
                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/system_settings">

                        <i class="icon-h-sign"></i>

                        

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/manage_language">

                        <i class="icon-globe"></i>

                       

                        </a>

                    </div>

                    <div class="span2 action-nav-button">

                        <a href="index.php?admin/backup_restore">

                        <i class="icon-download-alt"></i>

                        

                        </a>

                    </div>

                </div>

            </div>

        </div>

        <!---DASHBOARD MENU BAR ENDS HERE-->

    </div>

    <hr />

    <div class="row-fluid">

    

    	<!-----CALENDAR SCHEDULE STARTS-->

        <div class="span6">

            <div class="box">

                <div class="box-header">

                    <div class="title">

                        <i class="icon-calendar"></i> 
                    </div>

                </div>

                <div class="box-content">

                    <div id="schedule_calendar">

                    </div>

                </div>

            </div>

        </div>

    	<!-----CALENDAR SCHEDULE ENDS-->

        

    	<!-----NOTICEBOARD LIST STARTS-->

        <div class="span6">

            <div class="box">

                <div class="box-header">

                    <span class="title">

                        <i class="icon-reorder"></i> 
                    </span>

                </div>

                <div class="box-content scrollable" style="max-height: 500px; overflow-y: auto">

                

                   

                    <div class="box-section news with-icons">

                        <div class="avatar blue">

                            <i class="icon-tag icon-2x"></i>

                        </div>

                        <div class="news-time">

                           

                        </div>

                        <div class="news-content">

                            <div class="news-title">

                               

                            </div>

                            <div class="news-text">

                                 

                            </div>

                        </div>

                    </div>

                  

                </div>

            </div>

        </div>

    	<!-----NOTICEBOARD LIST ENDS-->

    </div>

</div>



  

  

  <script>

  $(document).ready(function() {



    // page is now ready, initialize the calendar...



    $("#schedule_calendar").fullCalendar({

            header: {

                left: "prev,next",

                center: "title",

                right: "month,agendaWeek,agendaDay"

            },

            editable: 0,

            droppable: 0,

            events: [

					<?php 

					

                    $notices	=	$this->db->get('noticeboard')->result_array();

                    foreach($notices as $row):

                    ?>

					{

						title: "<?php echo $row['notice_title'];?>",

						start: new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>),

						end:	new Date(<?php echo date('Y',$row['create_timestamp']);?>, <?php echo date('m',$row['create_timestamp'])-1;?>, <?php echo date('d',$row['create_timestamp']);?>)  

            		},

					<?php

					endforeach;

					?>

					]

        })



});

  </script>