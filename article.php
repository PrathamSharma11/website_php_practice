<!-- <!-- <!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Social post</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Concert+One&family=Roboto&display=swap');

    body {
      background: #72031a;
      font-family: 'Roboto', sans-serif;
    }

    .sel-channel {
      background: transparent;
      border: 2px #ad9440 solid;
      border-radius: 5px;
      color: #ad9440;
      height: 24px;
      width: 200px;
      position: relative;
      left: 50%;
      transform: translateX(-50%);
    }

    .sel-date-med {
      background-color: transparent;
      color: #ad9440;
      border: 2px #ad9440 solid;
      border-radius: 5px;
      height: 24px;
      width: 200px;
    }

    .date-button,
    .insight-button,
    #submitInsightBtn,
    .form-button {
      position: relative;
      left: 50%;
      transform: translateX(-100%);
      margin-top: 5px;
      border-radius: 5px;
      height: 34px;
      width: 100px;
      background: #ad9440;
      color: #000;
      border: none;
      cursor: pointer;
    }

    .label-text {
      color: #ad9440;
      font-weight: bold;
      text-align: right;
      margin-right: 30px;
    }

    .label-sep {
      margin-left: -100px;
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      grid-gap: 10px;
    }

    .post-container {
      padding: 0 50px;
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      grid-gap: 10px;
    }

    .postbox {
      padding: 10px 20px;
      border: 2px #ad9440 solid;
      border-radius: 10px;
    }

    img {
      position: relative;
      left: 50%;
      transform: translateX(-50%);
      max-width: 300px;
    }

    p {
      color: #ad9440;
    }

    .modal {
      display: none;
      position: fixed;
      z-index: 9999;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      color: #ad9440;
      background-color: #800000;
      margin: 15% auto;
      padding: 20px;
      border: 2px solid #ad9440;
      width: 80%;
    }

    .close,
    .close-insight {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
      cursor: pointer;
      margin-top: -15px;
    }

    .close:hover,
    .close:focus,
    .close-insight:hover,
    .close-insight:focus {
      color: #ad9440;
      text-decoration: none;
      cursor: pointer;
    }

    /* Input field styles */
    input[type="text"] {
      width: 93%;
      padding: 10px;
      margin-bottom: 10px;
      background: transparent;
      border: 2px solid #ad9440;
      color: #ad9440;
      border-radius: 4px;
      box-sizing: border-box;
    }

    /* Add and remove button styles */
    .add-btn,
    .remove-btn {
      background-color: #ad9440;
      color: white;
      border: none;
      padding: 8px 12px;
      font-size: 16px;
      cursor: pointer;
    }

    .add-btn {
      margin-bottom: 10px;
    }

    .remove-btn {
      /* float: right; */
      margin-left: 5px;
    }

    /* .append{
      display: flex;
    }

    .staff-input{
      flex: 1;
    } */

    .ins-cen {
      width: 30%;
      position: relative;
      left: 50%;
      transform: translateX(-50%);
    }

    .staff-t-cen {
      text-align: center;
      text-decoration: underline;
    }

    .ins-gap {
      line-height: 5px;
      display: flex;
      justify-content: space-between;
    }

    .top-count-table {
      width: 60%;
      border: 2px #ad9440 solid;
      text-align: center;
      position: relative;
      left: 50%;
      transform: translateX(-50%);
    }

    .top-count-table th {
      background: #800000;
      color: #ad9440;
    }

    .top-count-table th,
    td {
      border: 2px #ad9440 solid;
      padding: 5px 20px;
      color: #ad9440;
    }

    /* Responsive layout */
    @media (max-width: 600px) {
      .modal-content {
        width: 100%;
      }
    }

    @media (max-width: 450px) {
      .post-container {
        padding: 0 0;
      }
    }

    .form-btn {
      position: relative;
      left: 90%;
      margin-bottom: 1rem;
      transform: translateX(-100%);
      margin-top: 5px;
      border-radius: 5px;
      height: 34px;
      width: 100px;
      background: #ad9440;
      color: #000;
      border: none;
      cursor: pointer;
    }

    .classdate {
      width: 93%;
      padding: 10px;
      margin-bottom: 10px;
      background: transparent;
      border: 2px solid #ad9440;
      color: #ad9440;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .classtime {
      width: 93%;
      padding: 10px;
      margin-bottom: 10px;
      background: transparent;
      border: 2px solid #ad9440;
      color: #ad9440;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .form {
      text-align: center;
    }

    .cb {
      accent-color: #ad9440;
      background-color: #ad9440;
    }
    .edit-btn {
        position: relative;
        left: 95%;
        margin-bottom: 1rem;
        transform: translateX(-100%);
        margin-top: 5px;
        border-radius: 5px;
        height: 34px;
        width: 50px;
        background:transparent;
        color:#ad9440;
        border: none;
        cursor: pointer;

      }
      .delete-btn{
        position: relative;
        left: 85%;
        margin-bottom: 1rem;
        transform: translateX(-100%);
        margin-top: 5px;
        border-radius: 5px;
        height: 34px;
        width: 50px;
        background:transparent;
        color:#ad9440;
        border: none;
        cursor: pointer;

      }
  </style>
</head>

<body>
  <div class="select-date">
    <span class="label-sep" style="margin-top: 10px;">
      <label class="label-text" for="">start date</label>
      <input class="sel-date-med" type="date">
    </span>
    <span class="label-sep" style="margin-top: 10px;">
      <label class="label-text" for="">end date</label>
      <input class="sel-date-med" type="date">
    </span>
    <br>
    <button class="form-button" onclick="">submit</button>
    <button class="form-button">CSV</button>
  </div>

  <!-- Modal button -->
  <button class="form-btn" onclick="showModal('.form_data')">Backlog</button>

  <!-- Modal content -->
  <div id="form" class="modal">
    <div class="modal-content">
      <span onclick="hideModal()" style="float: right; cursor: pointer;">X</span>

      <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">-->
      <div class="append form_data">
        <h1 class="form">Backlog form</h1>
        <input type="date" name="date" class="classdate" placeholder="select-date">
        <input type="text" name="day" class="staff-input-day" placeholder="Enter-day">
        <input type="time" name="time" class="classtime staff-input-time" placeholder="Select-time">
        <input type="text" name="post_title" class="staff-input-post-title" placeholder="post-title">
        <input type="text" name="hashtag" class="hashtag" placeholder="hastags">
        <input type="text" name="tags" class="tags" placeholder="tags">
        <input type="file" name="chfile" class="staff-input-img" id="file_upl" placeholder="choosefile">
      </div>
      <input type="submit" name="submit" class="form-button sub" value="Submit">
      <!-- </form> -->
    </div>
  </div>
  <?php



  ?>
  <!-- Modal content -->
  <div id="editform" class="modal">
    <div class="modal-content">
      <span onclick="hideEditModal()" style="float: right; cursor: pointer;">X</span>

      <!-- <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"> -->
      <div class="append editform_data">
        <h1 class="editform" style="text-align:center">Backlog form</h1>
        <input type="date" name="date" class="classdate" placeholder="select-date">
        <input type="text" name="day" class="staff-input-day" placeholder="Enter-day">
        <input type="time" name="time" class="classtime staff-input-time" placeholder="Select-time">
        <input type="text" name="post_title" class="staff-input-post-title" placeholder="post-title">
        <input type="text" name="hashtag" class="hashtag" placeholder="hastags">
        <input type="text" name="tags" class="tags" placeholder="tags">
        <input type="file" name="chfile" class="staff-input-img" id="file_upl" placeholder="choosefile">
      </div>
      <input type="submit" name="submit" class="form-button sub" value="Submit">
      <!-- </form> -->
    </div>
  </div>
  <br>
  <div class="post-container"></div>

  <!-- The Modal -->
  <!-- <div id="myModal" class="modal">
    <div class="modal-content">
      <span class="close">&times;</span>
      <div id="staffContainer">
        <div class="append">
          <h2>hastag</h2>
          <p>72 dragons</p>
          <h2>tag</h2>
          <p>72 dragons</p>
        </div>

      </div>
    </div>
  </div> -->

  <!-- Add the modal for insight -->
  <div id="insightModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content model-cen">
      <span class="close-insight">&times;</span>
      <!-- <h2  class="staff-t-cen">Insight</h2> -->
      <!-- <div class="ins-cen">
      <span class="ins-gap"><span>Likes:</span> <span>25</span></span> <br>
      <span class="ins-gap"><span>Comments:</span> <span>25</span></span> <br>
      <span class="ins-gap"><span>Reach:</span> <span>25</span></span> <br>
      <span class="ins-gap"><span>Impression:</span> <span>25</span></span> <br>
    </div> -->
      <span>
        <h2 class="staff-t-cen">Staff</h2>
        <table class="top-count-table">
          <tr>
            <th>Saff work</th>
            <th>check box</th>
            <th>date</th>
            <!-- <th>Edit</th>
          <th>Delete</th> -->
          </tr>
          <tr>
            <td>grammer check</td>
            <td><input class="cb" type="checkbox"></td>
            <td>date:mm/dd/yyyy</td>
            <!-- <td><i class="fa-regular fa-pen-to-square"></i></td>
          <td><i class="fa-sharp fa-solid fa-trash"></i></td> -->
          </tr>
          <tr>
            <td>vulgarity check</td>
            <td><input class="cb" type="checkbox"></td>
            <td>date:mm/dd/yyyy</td>
            <!-- <td><i class="fa-regular fa-pen-to-square"></i></td>
          <td><i class="fa-sharp fa-solid fa-trash"></i></td> -->
          </tr>
          <tr>
            <td>sensitivity check</td>
            <td><input class="cb" type="checkbox"></td>
            <td>date:mm/dd/yyyy</td>
            <!-- <td><i class="fa-regular fa-pen-to-square"></i></td>
          <td><i class="fa-sharp fa-solid fa-trash"></i></td> -->
          </tr>
          <tr>
            <td>picture refrence</td>
            <td><input class="cb" type="checkbox"></td>
            <td>date:mm/dd/yyyy</td>
            <!-- <td><i class="fa-regular fa-pen-to-square"></i></td>
          <td><i class="fa-sharp fa-solid fa-trash"></i></td> -->
          </tr>
          <tr>
            <td>hashtag risk</td>
            <td><input class="cb" type="checkbox"></td>
            <td>date:mm/dd/yyyy</td>
            <!-- <td><i class="fa-regular fa-pen-to-square"></i></td>
          <td><i class="fa-sharp fa-solid fa-trash"></i></td> -->
          </tr>
        </table>
      </span>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  <script>

    // Delete user row
    $('.sub').on('click', function () {
      //alert("fads");
      var classdate = $('.classdate').val();
      var staff_input_day = $('.staff-input-day').val();
      var staff_input_time = $('.staff-input-time').val();
      var staff_input_post_title = $('.staff-input-post-title').val();
      var hashtag = $('.hashtag').val();
      var tags = $('.tags').val();
      var file_upl = $('#file_upl').val();
      //console.log(file_upl);

      var totalfiles = document.getElementById('file_upl').files.length;
      var formData = new FormData();
      formData.append('classdate', classdate);
      formData.append('staff_input_day', staff_input_day);
      formData.append('staff_input_time', staff_input_time);
      formData.append('staff_input_post_title', staff_input_post_title);
      formData.append('hashtag', hashtag);
      formData.append('tags', tags);


      for (var index = 0; index < totalfiles; index++) {
        formData.append("fileToUpload", document.getElementById('file_upl').files[index]);
      }


      $.ajax({
        type: 'POST',
        url: 'config.php?api=day_task_list',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (data) {
          console.log(data);
          if (data) {
            alert("Submitted");
            window.location.reload();
          }
          else {
            alert("Not Submitted");
          }
        },
        error: function (data) {
          console.log(data);
          alert(
            "An error has occcured while deleteing user. Please try again"
          );
        }
      });
 --> --> -->