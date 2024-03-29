<!DOCTYPE html>

<html lang="en">

    <head>
        <title>NS Insurance</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--TO GET BOOTSTRAP VIA CDN-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!--LINK WITH main.css-->
        <link rel="stylesheet" type="text/css" href="main.css">
        
    </head>

    <body>
        <!--NAVIGATION BAR-->
        <nav class="navbar navbar-expand-md">
            <a class="navbar-brand" href="index.php">NS Insurance</a>
            <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.htm">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ouragents.htm">Our Agents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="gallery.htm">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="interval.htm">Admin</a>
                    </li>
                </ul>
            </div>
              
        </nav>
        <!--PAGE CONTENT CONTAINER + BACKGROUND IMAGE (CSS)-->
        <header class="page-header header container-fluid">
            <!--OVERLAY (Make background image darker)-->
            <div class="overlay"></div>
            <!--PAGE TITLE AND BODY TEXT-->
            <div class="description">
                <h1>Welcome to our websites!</h1>
                <p>“Upload your insurance policy here and we will tell you what your insurance agent didn’t you. You will know if you have overpaid your insurance, and you may cash out what you have paid for the last few years without compromising the protection on your current policy.”</p>
            </div>
            
        </header>
        <!--THREE-COLUMN SECTION-->
        <div class="container features">
            <div class="row">
                <!--1ST COLUMN SECTION-->
                <!--CONTACT FORM-->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Upload your policy and mobile number, our agents will contact you soon.</h3>
                    <p>Terms and Condition:</p>
                    <input type="checkbox"><label for="termcondition"> I have read and agree with the terms and conditions</label><br>
                    <div class="form-group">
                        <label for="Mobile Number">Mobile Number</label>
                        <input type="tel" class="form-control" placeholder="012-3456789" name="Mobile Number" pattern="[0-9]{3}[0-9]{7}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" placeholder="Email Address" name="email">
                    </div>
                    <div class="form-group">
                        <label for="occupation">Occupation</label>
                        <input type="text" class="form-control" placeholder="Occupation" name="occupation">
                    </div>
                    <div class="form-group">
                        <label for="file">Policy Document</label>
                        <input type="file" class="form-control" id="myFile" name="filename">
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" value="Send" name="">
                </div>
                <!--2ND COLUMN SECTION-->
                <!--SEMINAR INFORMATION-->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Join our FREE seminar and let the experts tell you the truth about your insurance policy</h3>
                    <img src="seminar1.png" class="img-fluid">
                    
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Topic</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Venue</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php /*include 'retrieve-data.php'; ?>
                          <?php if ($result->num_rows > 0): ?>
                          <?php while($array=mysqli_fetch_row($result)): ?>
                          <tr>
                              <th scope="row"><?php echo $array[0];?></th>
                              <td><?php echo $array[1];?></td>
                              <td><?php echo $array[2];?></td>
                              <td><?php echo $array[3];?></td>
                          </tr>
                          <?php endwhile; ?>
                          <?php else: ?>
                          <tr>
                             <td colspan="3" rowspan="1" headers="">No Data Found</td>
                          </tr>
                          <?php endif; ?>
                          <?php mysqli_free_result($result); */?>
                        </tbody>
                    </table>
                                        
                </div>
                 <!--3RD COLUMN SECTION-->
                 <!--SHARE-->
                 <div class="col-lg-4 col-md-4 col-sm-12">
                    <h3 class="feature-title">Share with your family and friends</h3>
                    <a href="http://www.facebook.com/sharer/sharer.php?s=100&p%5Btitle%5D=TITLE&p%5Bsummary%5D=DESC&p%5Burl%5D=URL&p%5Bimages%5D%5B0%5D=IMG_PATH" 
                    target="_blank" onclick="return Share.me(this);"><img src="facebook.png" class="img-fluid"></a>
                    <a href="https://www.instagram.com/?url=https://www.drdrop.co/" target="_blank" onclick="return Share.me(this);"><img src="instagram.jpg" class="img-fluid"></a>
                </div>
            </div>
        </div>
        
        <!--INCLUDE JQUERY-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <!--LOAD BOOTSTRAP JAVASCRIPT-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!--LINK WITH main.js-->
        <script src="main.js"></script>
    </body>
    
</html>
