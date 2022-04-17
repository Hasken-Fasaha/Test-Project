<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course Form</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="{{ asset('style.css') }}"> --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        body {
            background-image: linear-gradient(rgba(201, 203, 202, 0.8), rgba(201, 203, 202, 0.8)), url(gsu-logo.PNG);
            background-position: center;
            background-size: cover;
        }

        .container {
            
            margin: 2% auto;
            background: #fff;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        h2 {
            margin-top: 30px;
            text-align: center;
            margin-bottom: 20px;
            color: #777;
            font-weight: bolder;
        }

        small {
            color: #777;
            font-weight: bold;
        }

       

        form input,
        select,
        textarea {
            width: 100%;
            padding: 10px 5px;
            margin: 5px 0;
            border: 0;
            border-bottom: 1px solid #999;
            outline: none;
            background: transparent;
        }

        ::placeholder {
            color: #777;
        }

       

      

        #form2 {
            left: 1000px;
        }

        #form3 {
            left: 1000px;
        }

        #form4 {
            left: 1000px;
        }

        #form5 {
            left: 1000px;
        }

        .step-row {
            width: 800px;
            height: 50px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            box-shadow: 0 -1px 5px -1px #000;
            position: relative;
        }

        .step-col {
            width: 150px;
            text-align: center;
            color: #333;
            position: relative;
        }

        #progress {
            position: absolute;
            height: 100%;
            width: 150px;
            background: linear-gradient(to right, #f24343, #46b17d);
            transition: 1s;
        }

        #progress::after {
            content: '';
            height: 0;
            width: 0;
            border-top: 25px solid transparent;
            border-bottom: 25px solid transparent;
            position: absolute;
            right: -20px;
            top: 0;
            border-left: 20px solid #46b17d;
        }

    </style>
</head>

<body>
    

    <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Courses</h2>
            </div>
            <div class="pull-right">
               <!-- Button trigger modal -->
               <br>
<button type="button" class="btn btn-dark" id="btnid" data-toggle="modal" data-target="#exampleModalCenter">
  Create New Course
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Create Course</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      

<form id="form1" action="{{ route('course.store') }}" method="POST">
     @csrf 
    <h2>Course Information <i class="fa fa-info"></i></h2>
    <input type="text" name="course_code" id="course_code" placeholder="Course Code" required>
    <input type="number" name="credit_unit" id="credit_unit" placeholder="Credit Unit" required>
    <input type="text" name="course_title" id="course_title" placeholder="Course Title" required>
    <input list="semesters" name="semester" id="semester"  placeholder="Which Semester?" />
    <datalist id="semesters">
        <option value="First">First Semester</option>
        <option value="Second">Second Semester</option>
       
    </datalist>
   
    <input list="programs" name="program_id" id="program_id" placeholder="Select Program" /></label>
    <datalist id="programs">
    @foreach($programs as $program )

    <option value="{{$program->program_id}}">{{$program->program_name}}</option>
    @endforeach
    <!-- <option value="Software Engineering">
    <option value="Machine Learning">
    <option value="Data Science">
    <option value="Computer Engineering"> -->
    </datalist>

    <input list="level" name="level" id="level"  placeholder="Which Level?" /></label>
    <datalist id="level">
        <option value="100">100 level</option>
        <option value="200">200 level</option>
        <option value="300">300 level</option>
        <option value="400">400 level</option>
    </datalist>
   
   <hr>
    <div class="btn-box">

        <button type="Submit" class="btn btn-outline-success center form-control" id="LastStep">Submit</button>
    </div>

</form>




  


      </div>
     
    </div>
  </div>
</div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" id="tableid">
        <tr>
            <th>Course Code</th>
            <th>Corse Title</th>
            <th>Credit Unit</th>
            <th>Semester Based</th>
            <th>Program</th>
            <th>Level</th>

            <th width="280px">Action</th>
        </tr>
        @foreach ($courses as $course)
        <tr>
            <td>{{ $course->course_code }}</td>
            <td>{{ $course->course_title }}</td>
            <td>{{ $course->credit_unit }}</td>
            <td>{{ $course->semester }}</td>
            <td>{{ $course->program_id }}</td>
            <td>{{ $course->level }}</td>


            <td>
                {{-- <form action="" method="POST"> --}}
                    <button  style="display:inline; width:auto;" type="button" class="btn btn-info btnshow">Show</button>
                    <a style="display:inline; width:auto;" type="button" class="btn btn-warning "  >Edit</a>

                    {{-- @csrf
                    @method('DELETE') --}}
                    <button type="submit" class="btn btn-danger ">Delete</button>
                {{-- </form> --}}
            </td>
        </tr>
        @endforeach

    </table>
    {{ $courses->links() }}

    </div>



    
    <script>
       // alert("ggghhhh");

       var btn =document.querySelector("#btnid"); 
       btn.onclick= function(){
          document.getElementById("form1").reset();

          document.getElementById("LastStep").style.display ='block';
          
       }
        
        var btnShow=document.querySelector(".btnshow");
       // console.log(btnShow);

        btnShow.onclick= function(){
                var table = document.getElementById("tableid");
            if (table) {
                for (var i = 0; i < table.rows.length; i++) {
                    table.rows[i].onclick = function() {
                    
                    var tableRow = this;
                    var course_code = tableRow.childNodes[1].innerHTML;
                    var course_title = tableRow.childNodes[3].innerHTML;
                    var credit_unit = tableRow.childNodes[5].innerHTML;
                    var semester = tableRow.childNodes[7].innerHTML;
                    var program_id = tableRow.childNodes[9].innerHTML;
                    var level = tableRow.childNodes[11].innerHTML;

                    var course_codeF = document.getElementById("course_code");
                    var course_titleF = document.getElementById("course_title");
                    var credit_unitF = document.getElementById("credit_unit");
                    var semesterF = document.getElementById("semester");
                    var program_idF = document.getElementById("program_id");
                    var levelF = document.getElementById("level");
                    course_codeF.value =course_code;
                    course_codeF.value = course_code;
                    credit_unitF.value =credit_unit;
                    course_titleF.value= course_title;
                    semesterF.value    = semester;
                    program_idF.value  = program_id;
                    levelF.value       = level;


                    document.getElementById("LastStep").style.display ='none';
                $('#exampleModalCenter').modal('show');

                var obj = {'course_code': course_code, 'course_title':course_title,
                            'credit_unit':credit_unit,
                            'semester':semester,'program_id':program_id,'level':level};
                console.log(obj);

                        
                    };
                }
            }

        }
        // var form1 = document.getElementById("form1");
        // var form2 = document.getElementById("form2");
        // var form3 = document.getElementById("form3");
        // var form4 = document.getElementById("form4");
        // var form5 = document.getElementById("form5");

        // var Next1 = document.getElementById("Next1");
        // var Next2 = document.getElementById("Next2");
        // var Back1 = document.getElementById("Back1");
        // var Next3 = document.getElementById("Next3");
        // var Back2 = document.getElementById("Back2");
        // var Next4 = document.getElementById("Next4");
        // var Back3 = document.getElementById("Back3");
        // var Back4 = document.getElementById("Back4");

        // var progress = document.getElementById("progress");

        // var p_text2 = document.getElementById("p-text2");
        // var p_text3 = document.getElementById("p-text3");
        // var p_text4 = document.getElementById("p-text4");
        // var p_text5 = document.getElementById("p-text5");

        // Next1.onclick = function() {
        //     form1.style.left = "-1000px";
        //     form2.style.left = "50px";
        //     progress.style.width = "300px";
        //     p_text2.style.color = "#fff";
        // }

        // Back1.onclick = function() {
        //     form1.style.left = "50px";
        //     form2.style.left = "1000px";
        //     progress.style.width = "150px";
        //     p_text2.style.color = "#777";
        // }

        // Next2.onclick = function() {
        //     form2.style.left = "-1000px";
        //     form3.style.left = "50px";
        //     progress.style.width = "450px";
        //     p_text3.style.color = "#fff";
        // }

        // Back2.onclick = function() {
        //     form2.style.left = "50px";
        //     form3.style.left = "1000px";
        //     progress.style.width = "300px";
        //     p_text3.style.color = "#777";
        // }

        // Next3.onclick = function() {
        //     form3.style.left = "-1000px";
        //     form4.style.left = "50px";
        //     progress.style.width = "600px";
        //     p_text4.style.color = "#fff";
        // }

        // Back3.onclick = function() {
        //     form3.style.left = "50px";
        //     form4.style.left = "1000px";
        //     progress.style.width = "450px";
        //     p_text4.style.color = "#777";
        // }
        // Next4.onclick = function() {
        //     form4.style.left = "-1000px";
        //     form5.style.left = "50px";
        //     progress.style.width = "800px";
        //     p_text5.style.color = "#fff";
        // }

        // Back4.onclick = function() {
        //     form4.style.left = "50px";
        //     form5.style.left = "1000px";
        //     progress.style.width = "600px";
        //     p_text5.style.color = "#777";
        // }

        // $("#LastStep").click(function(e) {
        //     e.preventDefault();
        //     //$("#form1").submit();
        // });
    </script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
