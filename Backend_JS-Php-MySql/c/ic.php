<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="Style_letter.css">
    <link rel="stylesheet" type="text/css" href="Style_InternCerificate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
        .textEditor{
            margin: auto;
            width: auto;
            height: auto;
        }
        .Options{
            border-bottom: none;
            padding: 10px;
            background-color:#c1e1ec;
            color: white;
            border-radius: 8px 8px 0px 0px;
        }
        .TextArea{
            border: 2px solid #c1e1ec;
            height:auto;
            width: auto;
            background-color: white;
        }

        .frame{
            height: 100%;
            width: 100%;
        }

        .Options button{
            color: white;
            border: none;
            outline: none;
            background-color: transparent;
            cursor: pointer;
        }
        .Options button:hover{
            background-color:#9acee0;
            transition: all 0.3s linear 0s;
        }

        input[type=color] {
            border: none;
            outline: none;
            background-color: transparent;
        }
    </style>

    
     
   
</head>


       <header>
		<div class="main">
			<div class="logo">
				<a href="#"><img src="images/logo.png" height="50" width="70"></a>
			</div>
		<div class="menu-bar">
<ul>
	<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
	<li class="active"><a href="index.php"><i class="fa fa-pencil"></i>Create</a></li>
	
</ul>
</div>
		</div>
	</header>

        <div class="details">
            <div class="form-container">
              <div>
                <img src="images/web.jpg"  class="template">
                <h2 class="text-center"><strong>Add Details</strong></h2><br>
              </div>
                <form method="POST" action="InternshipCertificate.php" enctype="multipart/form-data">
                    
                    
                    <div class="form-group">
                     <div class="form-group">
                        <input class="form-control" type="text" placeholder="Type of Certificate " name="cer" value="INTERNSHIP CERTIFICATE">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Name of the Candidate " name="fullname">
                     
                    </div>
                    <div class="form-group">
                    
                        <input class="form-control" type="email" placeholder="Email ID " name="email" required >
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Name of Company" name="company" value="RoboSlog Pvt. Ltd.">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Reason for Certificate " name="reason" value="has successfully completed internship as">
                    </div>
                    <div class="form-group">
                        <select class="form-control" type="text" placeholder="Job_Profile" name="depart">
                        <option class="form-control" value="Robotics Developer">Robotics Developer</option>
                        <option class="form-control" value="Web Developer">Web Developer</option>
                        <option class="form-control" value="Mobile App Developer">Mobile App Developer </option>
                         <option class="form-control" value="Social/SEO Marketing">Social/SEO Marketing</option>
                        <option class="form-control" value="CAD/Product Designer">CAD/Product Designer </option>
                        <option class="form-control" value="Graphics Designer">Graphics Designer</option>
                         <option class="form-control" value="Game Developer">Game Developer</option>
                        <option class="form-control" value="Python Developer">Python Developer</option>
                         <option class="form-control" value="Electronics Trainee">Electronics Trainee</option>
                        <option class="form-control" value="A.I. Researcher">A.I. Researcher</option>
                        <option class="form-control" value="Data Scientist">Data Scientist</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <input class="form-control" type="text" placeholder="Validity" name="valid" value="Duration : 2 months">
                    </div>
                   <div class="form-group">
                      <input type="date" id="myDate" name="date" class="form-control">
                    </div>
                   
                    <div><p style="padding-left:350px;">
                        <input type="file" name="image"/><br>
                        (size should be 105x120 pixels)
                    </p>
                    </div>
                   
                    <div class="form-group">
                         <button class="btn btn-primary btn-block" type="submit" name="submit">Next</button>
                    </div>
                </form>
            </div>
        </div>
       <script>
           function myFunction() {
           var x = document.getElementById("myDate").value;
           document.getElementById("demo").innerHTML = x;
}
</script>

  
</body>

</html>