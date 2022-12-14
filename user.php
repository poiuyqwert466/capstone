<?php
   session_start();  
  if(!isset($_SESSION["username"])){
    header("location:login.php");
  }else{
    if($_SESSION["role"]=="Admin"){
      header("location:admin.php");
    }else{
    }
  }       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <link rel="stylesheet" href="./public/css/userpage.css">
    <title>User</title>
</head>
<body>
    <div id="get_account_id">
        <h5><?php echo($_SESSION['id']);?></h5>
      </div>

      <div id="side_bar_menu_show_status" class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div>
              <h3 class="noselect"></h3>
            </div>
          </div>
        </div>
      </div>
      <div id="print_receipt">
        <div id="print_receipt_container" class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h4 id="print_receipt_container_title">Receipt</h4>
              <h4 id="print_receipt_container_btn_exit"><i class="fa-solid fa-xmark"></i></h4>
            </div>
          </div>
          <div  id="print_receipt_container_pdf">
          <div class="row">
            <div class="col-12">
              <img style="height: 200px;margin-left: auto;margin-right: auto;display: block;" src="./public/image/pageIMG/LOGO.png" alt="">
              <h6 class="text-center ">Peas Water Association</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <h4>Contact Info</h4>
              <h5>Address: Peas Road 011 Duale, Limay, Bataan</h5>
              <h5>Email: garciaangelo1224@gmail.com</h5>
              <h5>Mobile#: 0912-385-5787</h5>
              <h6 id="print_receipt_container_line"></h6>
              <h4>Name: Angelo Mark J Garcia</h4>
              <div class="row">
                <div class="col-6">
                  <h4>Month</h4>
                  <h4>Amount</h4>
                  <h4>Payment</h4>
                </div>
                <div class="col-6">
                  <h5>June</h5>
                  <h5>??? 50</h5>
                  <h5>June 5, 2022</h5>
                </div>
              </div>
              <h6 id="print_receipt_container_line"></h6>
              <h5>Please examine your bill carefully. If you have complaints just message and contact us.</h5>
            </div>
          </div>
        </div>
          <div class="row">
            <div class="col-6"></div>
            <div class="col-6">
              <button id="print_receipt_container_btn_print" type="button" class="btn btn-primary">Print</button>
            </div>
          </div>
        </div>
      </div>
      <div id="confirm_payment">
        <div id="confirm_payment_container" class="container-fluid">
          <div class="row">
            <div class="col-12">
              <h4 id="confirm_payment_container_title">Select payment method</h4>
              <h4 id="confirm_payment_container_btn_exit"><i class="fa-solid fa-xmark"></i></h4>
            </div>
          </div>
          <div id="confirm_payment_container_row1" class="row">
            <div id="confirm_payment_container_row1_1" class="col-md-12">
              <h2>GCash</h2>
              <h5>This payment method is not automatic because we use express send, therefore be sure to send a screenshot or image of the GCash transaction after you send the payment to verify it.</h5>
              <h4 id="confirm_payment_container_row1_1_btn">Send</h4>
            </div>
            <div id="confirm_payment_container_row1_2" class="col-md-12">
              <h2>Cash</h2>
              <h5>This payment method use house to house payment collection, so make sure you check out the website for the announcement or text message to your number. Latest schedule:</h5>
              <h4 id="confirm_payment_container_row1_2_btn"></h4>
            </div>
          </div>
            <div id="confirm_payment_container_row2" class="row">
              <div id="confirm_payment_container_row2_1" class="col-md-12">
                <h5 title="Back" id="confirm_payment_container_row2_1_btn_back"><i class="fa-solid fa-arrow-left"></i></h5>
                <h3 id="confirm_payment_container_row2_number">0912-385-5787</h3>
                <h5 id="confirm_payment_container_row2_name">Name: Angelo Garcia</h5>
                <img id="confirm_payment_container_row2_qrcode" src="./public/image/pageIMG/gcash.jpg" alt="" srcset="">
                <h4 id="confirm_payment_container_row2_send">Send image</h4>
              </div>
              <div id="confirm_payment_container_row2_2" class="col-md-12">
                <h5 title="Back" id="confirm_payment_container_row2_2_btn_back"><i class="fa-solid fa-arrow-left"></i></h5>
                <div id="confirm_payment_container_row2_2_scroll">
                  
                  
                </div>
                <div id="confirm_payment_container_row2_2_1" class="row">
                  <div class="col-9">
                    <input id="confirm_payment_container_row2_2_1_image_input" type="file" class="form-control">
                    <input maxlength="255" id="confirm_payment_container_row2_2_1_input" type="text" class="form-control">
                  </div>
                  <div class="col-3">
                      <h5 title="Send image" id="confirm_payment_container_row2_2_1_btn1"><i class="fa-solid fa-camera"></i></h5>
                        <button title="Send" id="confirm_payment_container_row2_2_1_btn3" type="button" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    <div id="community_show_comment">
        <div id="community_show_comment_container" class="container-fluid">
          <div class="col-12">
            <h4 id="community_show_comment_container_title">Comments</h4>
            <h4 id="community_show_comment_container_btn_exit"><i class="fa-solid fa-xmark"></i></h4>
          </div>
          <div id="community_show_comment_container_scroll">
            </div>
        <div id="community_show_comment_container_btn_newmessage">
          <h4>New message!</h4>
        </div>
        <div id="community_show_comment_container_btn" class="row">
          <div class="col-10">
            <input id="community_show_comment_container_input" type="text" class="form-control">
          </div>
            <div class="col-2">
              <button title="Send" id="community_show_comment_container_btn_send" type="button" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i></button>
            </div>
        </div>
        </div>
      </div>
    <div id="side_right_menu">
        <div id="side_right_menu_container" class="container-fluid">
          <div id="side_right_menu_container_account_img_edit_show">
            <input id="side_right_menu_container_account_img_edit_show_input" type="file" class="form-control">
            <div class="row">
              <div class="col-12">
                <h4 id="side_right_menu_container_account_img_edit_show_title">Change account image</h4>
                <h4 id="side_right_menu_container_account_img_edit_show_btn_exit"><i class="fa-solid fa-xmark"></i></h4>
              </div>
            </div>
            <div class="row">
              <div id="side_right_menu_container_account_img_edit" class="col-12">
                <img src="" alt="" srcset="">
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <button id="side_right_menu_container_account_img_edit_btn_change" type="button" class="btn btn-primary">Change</button>
              </div>
              <div class="col-6">
                <button id="side_right_menu_container_account_img_edit_btn_save" type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
          </div>
          <div id="side_right_menu_container_account">
            <div class="row">
              <div class="col-12">
                <h4 id="side_right_menu_container_account_title">Account details</h4>
                <h4 id="side_right_menu_container_account_btn_exit"><i class="fa-solid fa-xmark"></i></h4>
              </div>
            </div>
           <div id="side_right_menu_container_account_scroll">
            <div class="row">
              <div id="side_right_menu_container_account_img" class="col-12">
                <img src="" alt="" srcset="">
                <h5 title="Change image" id="side_right_menu_container_account_img_btn"><i class="fa-solid fa-camera"></i></h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>Name:</h5>
              </div>
              <div class="col-12">
                <h5 id="side_right_menu_container_account_firstname"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_firstnameINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_middlename"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_middlenameINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_lastname"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_lastnameINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>Address:</h5>
              </div>
              <div class="col-12">
                <h5 id="side_right_menu_container_account_houseno"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_housenoINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_street"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_streetINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_brgy"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_brgyINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_municipality"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_municipalityINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_province"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_provinceINPUT" type="text">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>Other details:</h5>
              </div>
              <div class="col-12">
                <h5 id="side_right_menu_container_account_pnumber"></h5>
                <input maxlength="11" class="form-control sentence_case" id="side_right_menu_container_account_pnumberINPUT" type="text" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/\s/g,'');">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_phase"></h5>
                <select class="form-control" id="side_right_menu_container_account_phaseINPUT">
                  <option value="1">Phase 1</option>
                  <option value="2">Phase 2</option>
                  <option value="3">Phase 3</option>
                  <option value="4">Phase 4</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_household"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_householdINPUT" type="number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1').replace(/^0[^.]/, '0');">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5>Account</h5>
              </div>
              <div class="col-12">
                <h5 id="side_right_menu_container_account_username"></h5>
                <input class="form-control sentence_case" id="side_right_menu_container_account_usernameINPUT" type="text" oninput="this.value = this.value.replace(/(\..*?)\..*/g, '$1').replace(/\s/g,'');">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_password"></h5>
                <div style="position: relative;">
                  <i id="side_right_menu_container_account_passwordINPUT_see" class="fa-solid fa-eye-slash"></i>
                  <input class="form-control sentence_case" id="side_right_menu_container_account_passwordINPUT" type="password">
                </div>
                <div style="position: relative;">
                  <i id="side_right_menu_container_account_passwordINPUT_see2" class="fa-solid fa-eye-slash"></i>
                  <input class="form-control sentence_case" id="side_right_menu_container_account_passwordINPUT2" type="password">
                </div>
              </div>
            </div>
            <div id="side_right_menu_container_account_btn" class="row">
              <div class="col-6">
                <button id="side_right_menu_container_account_btn_cancel" type="button" class="btn btn-primary">Cancel</button>
              </div>
              <div class="col-6">
                <button id="side_right_menu_container_account_btn_save" type="button" class="btn btn-primary">Save</button>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <h5 id="side_right_menu_container_account_year">Join in April 24, 2022</h5>
              </div>
            </div>
           </div>
          </div>
          <div id="side_right_menu_container_notification" style="display: none;">
            <div class="row">
              <div class="col-12">
                <h4 id="side_right_menu_container_notification_title">Notification</h4>
                <h4 id="side_right_menu_container_notification_btn_exit"><i class="fa-solid fa-xmark"></i></h4>
              </div>
            </div>
            <div class="row">
              <div class="col-8">
              </div>
              <div class="col-2">
                <button title="Delete all" id="side_right_menu_container_notification_btn_delete" type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                <span id="side_right_menu_container_notification_btn_delete_count">51</span>
              </div>
              <div class="col-2">
                <button title="Read all" id="side_right_menu_container_notification_btn_read" type="button" class="btn btn-primary"><i class="fa-solid fa-book-open"></i></button>
                <span id="side_right_menu_container_notification_btn_read_count">51</span>
              </div>
            </div>
            <div id="side_right_menu_container_notification_scroll">
              <div class="row side_right_menu_container_notification_scroll_show">
                <div class="col-2">
                  <button title="Delete" id="side_right_menu_container_notification_scroll_delete0" type="button" class="btn btn-danger side_right_menu_container_notification_scroll_delete"><i class="fa-solid fa-trash"></i></button>
                </div>
                <div class="col-10">
                  <p>Nakita ko lahat ng bagay sa mundo ang pwdeng...</p>
                </div>
              </div>
              <div class="row side_right_menu_container_notification_scroll_show">
                <div class="col-2">
                  <button title="Delete" id="side_right_menu_container_notification_scroll_delete0" type="button" class="btn btn-danger side_right_menu_container_notification_scroll_delete"><i class="fa-solid fa-trash"></i></button>
                </div>
                <div class="col-10">
                  <p>Nakita ko lahat ng bagay sa mundo ang pwdeng...</p>
                </div>
              </div>
            </div>
          </div>
          <div id="side_right_menu_container_feedback">
            <div class="row">
              <div class="col-12">
                <h4 id="side_right_menu_container_feedback_title">Feedback</h4>
                <h4 id="side_right_menu_container_feedback_btn_exit"><i class="fa-solid fa-xmark"></i></h4>
              </div>
            </div>
            <div id="side_right_menu_container_feedback_scroll">
              <div class="row">
                <input id="side_right_menu_container_feedback_scroll_img_input" type="file" class="form-control">
                <div id="side_right_menu_container_feedback_scroll_img" class="col-12">
                </div>
                <div class="col-12">
                  <button title="Upload image" id="side_right_menu_container_feedback_btn_sendIMG" type="button" class="btn btn-primary">Add image</button>
                </div>
                <div class="col-12">
                  <h6 class="ml-4">Name</h6>
                  <input id="side_right_menu_container_feedback_scroll_name" type="text" placeholder="Name">
                </div>
                <div class="col-12">
                  <h6 class="ml-4">Message</h6>
                  <textarea id="side_right_menu_container_feedback_text_area" name="w3review" rows="7" cols="42"></textarea>
                </div> 
              </div>
              <div class="row">
                <div class="col-12">
                  <h6 class="ml-4">Feedback type</h6>
                </div>
              </div>
              <div class="row">
                <div id="side_right_menu_container_feedback_btn_check1" class="col-lg-4">
                  <h5>Comment</h5>
                </div>
                <div id="side_right_menu_container_feedback_btn_check2" class="col-lg-4">
                  <h5>Bug</h5>
                </div>
                <div id="side_right_menu_container_feedback_btn_check3" class="col-lg-4">
                  <h5>Suggestion</h5>
                </div>
              </div>
              <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                  <button title="Send" id="side_right_menu_container_feedback_btn_send" type="button" class="btn btn-primary">Send</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div id="header_menu_background"></div>
    <div id="header" class="container-fluid">
      <div id="header_menu">
        <div id="header_menu_container" class="container-fluid" style="display: block;">
          <h5 id="title">Menu</h5>
          <div id="header_menu_container_btn1" class="row">
            <div class="col-3">
              <i class="fa-regular fa-circle-user"></i>
            </div>
            <div class="col-9">
              <h5>Personal Information</h5>
            </div>
          </div>
          <div id="header_menu_container_btn2" class="row">
            <div class="col-3">
              <i class="fa-regular fa-comment-dots"></i>
            </div>
            <div class="col-9">
              <h5>Feedback</h5>
            </div>
          </div>
          <div id="header_menu_container_btn3" class="row">
            <div class="col-3">
              <i class="fa-solid fa-right-from-bracket"></i>
            </div>
            <div class="col-9">
              <h5>Logout</h5>
            </div>
          </div>
          <div id="header_menu_container_btn4" class="row">
            <div class="col-12">
              <h5>Close</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-2">
          <a title="Home" href=""><img src="./public/image/pageIMG/LOGO.png" alt="" srcset=""></a>
        </div>
        <div class="col-8">
  
        </div>
        <div id="header_account_notification" class="col-1">
          <h5><i class="fa-solid fa-bell"></i><span class=""></span></h5>
        </div>
        <div id="header_account_img" class="col-1">
          <img src="" alt="" srcset="">
        </div>
      </div>
    </div>
    <div id="menu_btn_background"></div>
     <div id="main" class="container-fluid">
      <div class="row">
        <div id="main_btn" class="col-2">
          <div id="home" title="Home" class="row navigation_btn nav_active">
            <div class="col-6 p-0">
              <i class="fa-solid fa-house"></i>
            </div>
            <div class="col-6 p-0">
              <h5 class="text-left">Home</h5>
            </div>
          </div>
          <div  id="bills" title="Bills" class="row navigation_btn">
            <div class="col-6 p-0">
              <i class="fa-solid fa-wallet"></i>
            </div>
            <div class="col-6 p-0">
              <h5 class="text-left">Bills</h5>
            </div>
          </div>
          <div  id="community" title="Community" class="row navigation_btn">
            <div class="col-6 p-0">
              <i class="fa-solid fa-people-roof"></i>
            </div>
            <div class="col-6 p-0">
              <h5 class="text-left">Community</h5>
            </div>
          </div>
        </div>
        <div id="main_body" class="col-10 p-0">
          <div id="side_bar_background"></div>
          <div id="home_page" class="container-fluid">
            <div class="row">
                <div class="col-md-6 ">
                    <div id="main_announcement" class="">
                        <div class="container-fluid">
                            <div class="row">
                              <div id="main_announcement_btn_menu" class="container-fluid">
                                <h5 id="title">Menu</h5>
                                <div id="main_announcement_btn_menu_1" class="row">
                                  <div class="col-3">
                                    <i class="fa-solid fa-plus"></i>
                                  </div>
                                  <div class="col-9">
                                    <h5>New</h5>
                                  </div>
                                </div>
                                <div id="main_announcement_btn_menu_2" class="row">
                                  <div class="col-3">
                                    <i class="fa-solid fa-cloud"></i>
                                  </div>
                                  <div class="col-9">
                                    <h5>Your save</h5>
                                  </div>
                                </div>
                                <div id="main_announcement_btn_menu_3" class="row">
                                  <div class="col-3">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                  </div>
                                  <div class="col-9">
                                    <h5>Default</h5>
                                  </div>
                                </div>
                                <div id="main_announcement_btn_menu_4" class="row">
                                  <div class="col-12">
                                    <h5>Close</h5>
                                  </div>
                                </div>
                              </div>
                                <div class="col-3">
                                <p id="announcement_time"></p>
                                </div>
                                <div class="col-6">
                                    <h1 id="announcement_title">Payment Schedule</h1>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                                <p title="Next left" id="announcement_image_show_div_btn_left"><i class="fa-solid fa-chevron-left"></i></p>
                              </div>
                              <div id="announcement_image_show_div" class="col-10">
                                  <p id="announcement_image_show_div_img_count"></p>
                                <div id="announcement_image_show_div_container">
    
                                </div>
                              </div>
                              <div class="col-1">
                                <p title="Next right" id="announcement_image_show_div_btn_right"><i class="fa-solid fa-chevron-right"></i></p>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-1">
                              </div>
                              <div class="col-10">
                                <p id="announcement_paragraph"></p>
                              </div>
                              <div class="col-1">
                              </div>
                            </div>
                        </div>
                        <p id="announcement_sched"></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="water_info_page">
                        <div id="water_info" class="container-fluid">
                          <div class="row">
                            <div class="col-3">
                              <p id="water_info_time"></p>
                            </div>
                            <div class="col-6">
                              <h1 id="water_info_title">Water Information</h1>
                            </div>
                          </div>
                        </div>
                        <div class="container-fluid">
                          <div class="row">
                            <div class="col-6">
                              <div id="water_info_phase1" class="row">
                                <div class="col-4">
                                    
                                </div>
                                <div class="col-8">
                                  <h5 id="phase1_title">Phase1</h5>
                                    <h5 id="phase1_time"></h5>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div id="water_info_phase2" class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-8">
                                  <h5 id="phase2_title">Phase2</h5>
                                    <h5 id="phase2_time"></h5>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div id="water_info_phase3" class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-8">
                                  <h5 id="phase3_title">Phase3</h5>
                                    <h5 id="phase3_time"></h5>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div id="water_info_phase4" class="row">
                                <div class="col-4">
                                </div>
                                <div class="col-8">
                                  <h5 id="phase4_title">Phase4</h5>
                                    <h5 id="phase4_time"></h5>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-6">
                              <div id="water_info_pressure" class="row">
                                <div class="col-12">
                                  <h1 id="pressure_title">Pressure</h1>
                                    <img src="./public/image/pageIMG/pressure_gauge.png" alt="">
                                    <p id="pressure_status"></p>
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div id="water_info_level" class="row">
                                <div class="col-12">
                                  <h1 id="level_title">Level</h1>
                                    <img src="./public/image/pageIMG/waterlvl.png" alt="">
                                    <p id="level_status"></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div id="bills_page">
                <div id="bills_info" class="cotainer-fluid">
                    <div class="row">
                        <div class="col-md-4">
                          <div id="bills_table_rate" class="row">
                            <div class="col-6">
                              <h6 class="text-left">Monthly rate:</h6>
                            </div>
                            <div class="col-6">
                              <h6 id="bills_table_rate_count"></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div id="bills_table_summary" class="row">
                            <div class="col-6">
                              <h6 class="text-left">Year summary:</h6>
                            </div>
                            <div class="col-6">
                              <h6 id="bills_table_summary_count"></h6>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div id="bills_table_notpaid" class="row">
                            <div class="col-6">
                              <h6 class="text-left">Balance:</h6>
                            </div>
                            <div class="col-6">
                              <h6 id="bills_table_notpaid_count"></h6>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div id="bills_page_btn" class="container-fluid">
                  <div class="row">
                    <div class="col-2">
                      <select class="form-control" id="bills_year">
                      </select>
                    </div>
                    <div class="col-10">
      
                    </div>
                  </div>
                 </div>
                <div id="bills_page_scroll" class="container-fluid">
                  <div class="row">
                    <div class="col-12 p-0">
                      <table id="bills_table" class="table table-bordered">
                        <thead>
                          <tr>
                            <th>Month</th>
                            <th>Amount</th>
                            <th>Payment Method</th>
                            <th>Confirmation</th>
                            <th>Receipt</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
        </div>
        <div id="community_page" class="container-fluid">
          <div class="row">
              <div id="community_page_show" class="col-lg-6 ">
                 <div id="community_page_show_title" class="col-12">
                    <h4>Community Topic</h4>
                 </div>
                 <div id="community_page_show_row" class="col-12">
                  
                </div>
              </div>
              <div id="community_page_rules_show" class="col-lg-6">
                <div id="community_page_rules_show_title" class="col-12">
                  <h4>Rules and Regulations</h4>
               </div>
               <div id="community_page_rules_show_row" class="col-12">
                
              </div>
              </div>
          </div>
      </div>
        </div>
      </div>
     </div>
   </main>
</body>
<script src="./public/js/userpage.js"></script>
<script src="./public/js/jquery.js"></script>
</html>