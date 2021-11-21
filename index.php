<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking System</title>

    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fontawesome.com/icons/linkedin" rel="stylesheet">
    <link href="https://fontawesome.com/icons/linkedin" rel="stylesheet">
    <link href="https://www.w3schools.com/icons/tryit.asp?icon=fas_fa-map-marker-alt&unicon=f3c5" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
.user:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
</head>

<body>
    <div class="bank-container">
        <div class="content">
            <!--logo-->
            <div class="logo">
                <img src="banl.jpeg">
                <h3><span>Sparks Foundation</span> Bank</h3>
            </div>
            <!--navbar-->
            <nav class="navbar">
                <ul>
                    <li>
                        <span class="icon active"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title" style="margin-right: -10rem;">Home</span>
                    </li>
                   
                    <li>
                        <span class="icon"><a href="transfermoney.php" style="color:black; text-decoration:none;"><i class="fa fa-university" aria-hidden="true"></i></a></span>
                        <span class="title" style="margin-right: -14.6rem;">Transfer money</span>
                    </li>
                    <li>
                        <span class="icon"><a href="transactionhis.php" style="color:black; text-decoration:none;"><i class="fa fa-exchange" aria-hidden="true"></i></a></span>
                        <span class="title">History</span>
                    </li>
                    <li>
                        <span class="icon"><a href="https://www.linkedin.com/company/the-sparks-foundation/mycompany/"><i style="font-size:24px;text-decoration:none;color:black;" class="fa" aria-hidden="true">&#xf08c;</i></span>
                        <span class="title">Social</span>
                    </li>
                    <li>
                        <span class="icon"><a href="https://www.google.com/maps?ll=1.29234,103.775766&z=10&t=m&hl=en-US&gl=SG&mapclient=embed&cid=18404201396953959899"><i style="font-size:36px;margin:-18px;color:black;text-decoration:none; " class="material-icons">&#xe52e;</i></span>
                        <span class="title">Map</span>
                    </li>
                    
                    
                </ul>
            </nav>
            <!--Slogan-->
            <div class="slogan">
                <p><span>Sparks Foundation</span> India's International Bank Offers Internet Banking Services, Mobile Banking Services, Accounts, Loans, Financial Services</p>
            </div>
            <div class="main">
                

                
                <a href="transfermoney.php">
                    <div class="user">
                        <img src="transfermoneys.jpeg" alt="" style="margin-left:-190px;">
                        <p style="margin-left:-190px;">Transfer Money</p>
                    </div>
                </a>

                <a href="transactionhis.php">
                    <div class="user">
                        <img src="money-transfer-mobile-banking.jpg" alt="" style="margin-left:-30px;">
                        <p style="margin-left:-30px;">Transaction History</p>
                    </div>
                </a>
                <a href="https://www.thesparksfoundationsingapore.org/">
                    <div class="user">
                        <img src="about us.jpg" alt="">
                        <p>About us</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>

</html>