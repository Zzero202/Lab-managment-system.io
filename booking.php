<?php
ob_start();
include("connection.php");
session_start();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="SemiColonWeb" />

<!-- Stylesheets
============================================= -->
<link rel="stylesheet" href="css/all.css">
<link rel="stylesheet" href="css/hover.css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="css/dark.css" type="text/css" />
<link rel="stylesheet" href="style.css" type="text/css" />
<link rel="stylesheet" href="css/swiper.css" type="text/css" />
<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
<link rel="stylesheet" href="css/animate.css" type="text/css" />
<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

<link rel="stylesheet" href="css/custom.css" type="text/css" />
<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Document Title
============================================= -->
<title>titles</title>
<style>
label{
  text-transform: capitalize;
  color:whitesmoke;
  font-weight: bolder;
  font-size:14px;
}
.revo-slider-emphasis-text {
    font-size: 58px;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: 'Poppins', sans-serif;
    padding: 15px 20px;
    border-top: 2px solid #FFF;
    border-bottom: 2px solid #FFF;
}

.revo-slider-desc-text {
    font-size: 20px;
    font-family: 'Lato', sans-serif;
    width: 650px;
    text-align: center;
    line-height: 1.5;
}

.revo-slider-caps-text {
    font-size: 16px;
    font-weight: 400;
    letter-spacing: 3px;
    font-family: 'Poppins', sans-serif;
}

.tp-video-play-button { display: none !important; }

.tp-caption { white-space: nowrap; }

</style>

</head>
<body class="stretched">

<div id="wrapper" class="clearfix">

<?php
include("header.php");
$id = $_GET['id'];
$qry = mysqli_query($connection,"SELECT * FROM analysis WHERE id='$id'"); // select query
$data = mysqli_fetch_array($qry);
?>

<section style="color:#FFF !important;background-image:linear-gradient(to right,rgba(0,0,0,0.5),rgba(5, 168, 255,0.7)), url(images/slider/swiper/slider1-home.jpg);" id="content">
    <div class="content-wrap">
    <div class="container clearfix">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h2 style="color:#FFF;text-transform:capitalize"><?php echo $data['m3mal_name']?></h2>
            <img src="images/1579700760_Home_Banner50-80.jpg" alt="">
            <p style="font-size:24px;">
            <?php echo $data['analysis_name'] ?> 
            </p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <h2 style="color:beige">Enter your info</h2>
            <form class="booking-form" method="POST">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">your analysis name</label>
                  <input type="text" name="analysis_name" class="form-control" value="<?php echo $data['analysis_name'];?>" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">your lab name</label>
                  <input type="text" name="m3mal_name" class="form-control" value="<?php echo $data['m3mal_name'];?>" id="" aria-describedby="">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">your phone</label>
                  <input type="text" name="phone" class="form-control" id="" aria-describedby="">
                </div>
                
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">your first name</label>
                  <input type="text" name="first" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">your second name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="second" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">your email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Insurance </label>
                    <select class="form-select" name="insurance" id="floatingSelectGrid" aria-label="Floating label select example">
                           <option value="" >Select insurance</option>
<option value='buba'>buba</option>
<option value='Medright'>Medright</option>
<option value='Axa'>Axa</option>
<option value='Wadi El Nile'>Wadi El Nile</option>
<option value='Metlife Alico'>Metlife Alico</option>
<option value='Engineers Syndicate'>Engineers Syndicate</option>
<option value='Egycare'>Egycare</option>
<option value='Mansour Group'>Mansour Group</option>
<option value='Abu Qir Fertilizers'>Abu Qir Fertilizers</option>
<option value='Academy of Haram Talents ِand their Families'>Academy of Haram Talents ِand their Families</option>
<option value='Access'>Access</option>
<option value='Active Company'>Active Company</option>
<option value='Active for Medical Services'>Active for Medical Services</option>
<option value='Agiba Petroleum Company'>Agiba Petroleum Company</option>
<option value='Agricultural Bank of&nbsp;Egypt'>Agricultural Bank of&nbsp;Egypt</option>
<option value='Agricultural Research Center'>Agricultural Research Center</option>
<option value='Agricultural Syndicate'>Agricultural Syndicate</option>
<option value='Agzakhana'>Agzakhana</option>
<option value='Ahly Medical Company (AMC)'>Ahly Medical Company (AMC)</option>
<option value='Air Cairo'>Air Cairo</option>
<option value='Al Baraka Bank   Egypt'>Al Baraka Bank   Egypt</option>
<option value='Al Hayat Insurance Company'>Al Hayat Insurance Company</option>
<option value='Al Mansour International Distribution Company'>Al Mansour International Distribution Company</option>
<option value='Al Mashreq'>Al Mashreq</option>
<option value='Alamal Alsherif plastics'>Alamal Alsherif plastics</option>
<option value='Alashanwladna'>Alashanwladna</option>
<option value='Alexandria Water Company'>Alexandria Water Company</option>
<option value='Alfa Care'>Alfa Care</option>
<option value='Allianz'>Allianz</option>
<option value='Allied Doctors'>Allied Doctors</option>
<option value='Amal Petroleum Company'>Amal Petroleum Company</option>
<option value='AMIS'>AMIS</option>
<option value='Amoun Pharmaceuticals'>Amoun Pharmaceuticals</option>
<option value='Amreya Petroleum'>Amreya Petroleum</option>
<option value='Arab African international bank'>Arab African international bank</option>
<option value='Arab Contractors Co.'>Arab Contractors Co.</option>
<option value='Arab International Bank'>Arab International Bank</option>
<option value='Arab International Organization'>Arab International Organization</option>
<option value='Arco Steel Arab Co. For Special Steel'>Arco Steel Arab Co. For Special Steel</option>
<option value='Badr Petroleum Company'>Badr Petroleum Company</option>
<option value='Badr Petroleum Company'>Badr Petroleum Company</option>
<option value='Bahya Hospital'>Bahya Hospital</option>
<option value='Bank of Egypt Iran'>Bank of Egypt Iran</option>
<option value='Banque du Caire'>Banque du Caire</option>
<option value='Banque Misr'>Banque Misr</option>
<option value='Belayim Petroleum Company'>Belayim Petroleum Company</option>
<option value='Beni Suef University'>Beni Suef University</option>
<option value='Bright Medical Technology Care'>Bright Medical Technology Care</option>
<option value='Bupa Egypt Insurance'>Bupa Egypt Insurance</option>
<option value='Burj Al Arab Petroleum'>Burj Al Arab Petroleum</option>
<option value='Butagasco Company'>Butagasco Company</option>
<option value='Cairo Pyramids Hotel'>Cairo Pyramids Hotel</option>
<option value='Care and Cure'>Care and Cure</option>
<option value='CarePlus'>CarePlus</option>
<option value='Cargas'>Cargas</option>
<option value='Central Auditing Organization'>Central Auditing Organization</option>
<option value='Central Bank of Egypt'>Central Bank of Egypt</option>
<option value='Chamber of Printing and Packaging Industries (Federation of Egyptian Industries)'>Chamber of Printing and Packaging Industries (Federation of Egyptian Industries)</option>
<option value='City Care'>City Care</option>
<option value='Click Mare Health Care'>Click Mare Health Care</option>
<option value='Commerce Syndicate'>Commerce Syndicate</option>
<option value='Conex Company'>Conex Company</option>
<option value='Co operation for petrol'>Co operation for petrol</option>
<option value='Cooperative Association for&nbsp;Housing and Construction (Thomas Sons)'>Cooperative Association for&nbsp;Housing and Construction (Thomas Sons)</option>
<option value='Creative for Medical Services'>Creative for Medical Services</option>
<option value='Dar Petroleum'>Dar Petroleum</option>
<option value='Development and Agricultre Credit Bank'>Development and Agricultre Credit Bank</option>
<option value='Diamond Medical Service'>Diamond Medical Service</option>
<option value='Dubai Foundation for Medical Care and Services'>Dubai Foundation for Medical Care and Services</option>
<option value='East Delta Electricity Company'>East Delta Electricity Company</option>
<option value='East Gas Company'>East Gas Company</option>
<option value='East Zeit Petroleum  ZEITCO'>East Zeit Petroleum  ZEITCO</option>
<option value='Eastern Tobacco Company'>Eastern Tobacco Company</option>
<option value='Easy Care'>Easy Care</option>
<option value='Educational Syndicate'>Educational Syndicate</option>
<option value='Egymed'>Egymed</option>
<option value='Egypt Gas'>Egypt Gas</option>
<option value='Egypt Gym'>Egypt Gym</option>
<option value='Egypt Phosphate'>Egypt Phosphate</option>
<option value='Egyptian Ambulance Organization'>Egyptian Ambulance Organization</option>
<option value='Egyptian Ambulance Organization Employee Syndicate'>Egyptian Ambulance Organization Employee Syndicate</option>
<option value='Egyptian Arab Land Bank'>Egyptian Arab Land Bank</option>
<option value='Egyptian Bahraini Gas Derivatives Co.'>Egyptian Bahraini Gas Derivatives Co.</option>
<option value='Egyptian Company for me'>Egyptian Company for me</option>
<option value='Egyptian Company for Sports Services'>Egyptian Company for Sports Services</option>
<option value='Egyptian Drilling Facilities'>Egyptian Drilling Facilities</option>
<option value='Egyptian Gas Distribution Company'>Egyptian Gas Distribution Company</option>
<option value='Egyptian General Petroleum Corporation (EGPC)'>Egyptian General Petroleum Corporation (EGPC)</option>
<option value='Egyptian Medical Syndicate'>Egyptian Medical Syndicate</option>
<option value='Egyptian Natural Gas Holding Company EGAS'>Egyptian Natural Gas Holding Company EGAS</option>
<option value='Egyptian Nursery Syndicate'>Egyptian Nursery Syndicate</option>
<option value='Egyptian Parliament'>Egyptian Parliament</option>
<option value='Egyptian Petroleum Carriers'>Egyptian Petroleum Carriers</option>
<option value='Egyptian Petroleum Services Company   EPSCO'>Egyptian Petroleum Services Company   EPSCO</option>
<option value='Egyptian Pharmacists  Syndicate'>Egyptian Pharmacists  Syndicate</option>
<option value='Egyptian French Companies Society for the Egyptian Civilian Transport'>Egyptian French Companies Society for the Egyptian Civilian Transport</option>
<option value='El Ahram&nbsp;Establishment'>El Ahram&nbsp;Establishment</option>
<option value='El Gamarek'>El Gamarek</option>
<option value='El Nasr Automotive Company'>El Nasr Automotive Company</option>
<option value='El Pharaonia Insurance Brokerage'>El Pharaonia Insurance Brokerage</option>
<option value='El Wastani Petroleum Co. WASCO'>El Wastani Petroleum Co. WASCO</option>
<option value='Elahly medical'>Elahly medical</option>
<option value='EL Mashreq for Investment'>EL Mashreq for Investment</option>
<option value='Elmothida'>Elmothida</option>
<option value='Embassy Of France In Cairo'>Embassy Of France In Cairo</option>
<option value='Embassy of the Czech Republic in Cairo'>Embassy of the Czech Republic in Cairo</option>
<option value='Emergency Benefits Fund for Workers'>Emergency Benefits Fund for Workers</option>
<option value='Employees for Human Rights Syndicate'>Employees for Human Rights Syndicate</option>
<option value='Enap Sipetrol International'>Enap Sipetrol International</option>
<option value='Enppi   Engineering Co. For The Petroleum and Process Industries'>Enppi   Engineering Co. For The Petroleum and Process Industries</option>
<option value='EPS   Electric Power Systems Engineering Co.'>EPS   Electric Power Systems Engineering Co.</option>
<option value='Eshpetco   Esh El Mallaha Petroleum'>Eshpetco   Esh El Mallaha Petroleum</option>
<option value='Establishment of Arab performers'>Establishment of Arab performers</option>
<option value='Establishment of Eduaction News'>Establishment of Eduaction News</option>
<option value='Estsharion Medical Care Company'>Estsharion Medical Care Company</option>
<option value='ETHYDCO'>ETHYDCO</option>
<option value='Express International Group'>Express International Group</option>
<option value='Extra Care'>Extra Care</option>
<option value='Ezz steel'>Ezz steel</option>
<option value='Faisal Islamic Bank of Egypt'>Faisal Islamic Bank of Egypt</option>
<option value='Family Care Cure'>Family Care Cure</option>
<option value='Fifth Square Al Marasem'>Fifth Square Al Marasem</option>
<option value='Filmmakers Syndicate'>Filmmakers Syndicate</option>
<option value='Fund of Judicial Entities Members'>Fund of Judicial Entities Members</option>
<option value='Ganoub El Wadi Petroleum Holding Co.'>Ganoub El Wadi Petroleum Holding Co.</option>
<option value='Gasco Medical Care Company'>Gasco Medical Care Company</option>
<option value='Gastec   Egyptian&nbsp;International Gas Technology Co.'>Gastec   Egyptian&nbsp;International Gas Technology Co.</option>
<option value='GEMPETCO   Gemsa Petroleum Co'>GEMPETCO   Gemsa Petroleum Co</option>
<option value='General Intelligence'>General Intelligence</option>
<option value='General Organization for Export and Import Control'>General Organization for Export and Import Control</option>
<option value='General Petroleum Company'>General Petroleum Company</option>
<option value='General Syndicate For&nbsp;Sporting Professions'>General Syndicate For&nbsp;Sporting Professions</option>
<option value='General Union of Social Professions'>General Union of Social Professions</option>
<option value='Giza Trade Syndiacte'>Giza Trade Syndiacte</option>
<option value='Globemed'>Globemed</option>
<option value='Gupco'>Gupco</option>
<option value='Hadayek Al Ahram Club'>Hadayek Al Ahram Club</option>
<option value='Hala Trading, Marketing and Medical Services'>Hala Trading, Marketing and Medical Services</option>
<option value='Hazem Hassan'>Hazem Hassan</option>
<option value='Health and Wealth'>Health and Wealth</option>
<option value='Health And Wealth Company'>Health And Wealth Company</option>
<option value='Health care'>Health care</option>
<option value='Health Care Fund'>Health Care Fund</option>
<option value='Health care to the Ministry of Justice'>Health care to the Ministry of Justice</option>
<option value='Healthy Club'>Healthy Club</option>
<option value='Housing and Building National Research Center'>Housing and Building National Research Center</option>
<option value='INAYA Egypt'>INAYA Egypt</option>
<option value='Incoles Company'>Incoles Company</option>
<option value='Information Technology Industry Development Agency'>Information Technology Industry Development Agency</option>
<option value='Interhealth'>Interhealth</option>
<option value='ITIDA'>ITIDA</option>
<option value='Journalists Syndicate'>Journalists Syndicate</option>
<option value='Khalda Petroleum&nbsp;Company'>Khalda Petroleum&nbsp;Company</option>
<option value='Khedmty'>Khedmty</option>
<option value='Kuwait Embassy'>Kuwait Embassy</option>
<option value='Lawyers Syndicate'>Lawyers Syndicate</option>
<option value='Life'>Life</option>
<option value='Life Healthcare'>Life Healthcare</option>
<option value='Life style'>Life style</option>
<option value='Magd Health Care'>Magd Health Care</option>
<option value='Majesty Discount Cards'>Majesty Discount Cards</option>
<option value='Mansour Chevrolet'>Mansour Chevrolet</option>
<option value='Mansour Group families'>Mansour Group families</option>
<option value='Mansoura University'>Mansoura University</option>
<option value='Marasem International For Urban Development'>Marasem International For Urban Development</option>
<option value='Marina Petroleum Company'>Marina Petroleum Company</option>
<option value='Med Alfa'>Med Alfa</option>
<option value='MedCom'>MedCom</option>
<option value='MEDCOM Health care'>MEDCOM Health care</option>
<option value='MedGulf Co.'>MedGulf Co.</option>
<option value='Medi gold'>Medi gold</option>
<option value='Media Syndicate'>Media Syndicate</option>
<option value='Medical Card'>Medical Card</option>
<option value='Medical Services Fund for Workers of the Presidency of the Republic'>Medical Services Fund for Workers of the Presidency of the Republic</option>
<option value='Medical Union Pharmaceuticals  MUP'>Medical Union Pharmaceuticals  MUP</option>
<option value='Medicare'>Medicare</option>
<option value='MediConsult'>MediConsult</option>
<option value='MedNet'>MedNet</option>
<option value='Medshield'>Medshield</option>
<option value='MedSure'>MedSure</option>
<option value='Meridien Hotel'>Meridien Hotel</option>
<option value='MG'>MG</option>
<option value='Middle Delta Electricity Production Company'>Middle Delta Electricity Production Company</option>
<option value='Ministry of Antiquities'>Ministry of Antiquities</option>
<option value='Ministry of Electricity and Renewable Energy'>Ministry of Electricity and Renewable Energy</option>
<option value='Ministry of National Organization For Social Insurance'>Ministry of National Organization For Social Insurance</option>
<option value='Misr Healthcare'>Misr Healthcare</option>
<option value='Misr Service Management and Consultancy'>Misr Service Management and Consultancy</option>
<option value='Misrelhayah'>Misrelhayah</option>
<option value='MOFTUC'>MOFTUC</option>
<option value='MOPCO   Misr&nbsp;Fertilizers Production Co.'>MOPCO   Misr&nbsp;Fertilizers Production Co.</option>
<option value='Mowafer Care'>Mowafer Care</option>
<option value='My Pharmacy for Medical Insurance'>My Pharmacy for Medical Insurance</option>
<option value='Mya Health Care'>Mya Health Care</option>
<option value='National authority of press'>National authority of press</option>
<option value='National Bank of Egypt'>National Bank of Egypt</option>
<option value='National Defense Council   General Secretariat'>National Defense Council   General Secretariat</option>
<option value='National Investment Bank (NIB)'>National Investment Bank (NIB)</option>
<option value='National Misr Insurance'>National Misr Insurance</option>
<option value='National navigation company'>National navigation company</option>
<option value='National Organization for Social Insurance'>National Organization for Social Insurance</option>
<option value='New Urban Communities Authority'>New Urban Communities Authority</option>
<option value='Next care'>Next care</option>
<option value='Nile Group'>Nile Group</option>
<option value='Nile Petroleum Company'>Nile Petroleum Company</option>
<option value='Nilesat'>Nilesat</option>
<option value='Norpetco   North Bahareya Petroleum'>Norpetco   North Bahareya Petroleum</option>
<option value='NPC   Nasr Petroleum Company'>NPC   Nasr Petroleum Company</option>
<option value='NSGB'>NSGB</option>
<option value='Nuclear Stations Organization'>Nuclear Stations Organization</option>
<option value='Nutshell Cuisines'>Nutshell Cuisines</option>
<option value='OAPCO   Oasis Petroleum Co.'>OAPCO   Oasis Petroleum Co.</option>
<option value='Office of the President of the Republic Egypt'>Office of the President of the Republic Egypt</option>
<option value='Oil and Gas Skills OGS'>Oil and Gas Skills OGS</option>
<option value='Okazion Care'>Okazion Care</option>
<option value='Omega Care'>Omega Care</option>
<option value='One Care'>One Care</option>
<option value='OSOCO   Offshore Shukeir Oil Co.'>OSOCO   Offshore Shukeir Oil Co.</option>
<option value='Petro Amir Petroleum'>Petro Amir Petroleum</option>
<option value='Petro Gulf Co.'>Petro Gulf Co.</option>
<option value='Petro Salam'>Petro Salam</option>
<option value='Petro Sila Company'>Petro Sila Company</option>
<option value='Petro trade'>Petro trade</option>
<option value='Petrojet'>Petrojet</option>
<option value='Petroleum Air Services company'>Petroleum Air Services company</option>
<option value='Petroleum Engineers Syndicate'>Petroleum Engineers Syndicate</option>
<option value='Petroleum Gas&nbsp;(Petrogas)'>Petroleum Gas&nbsp;(Petrogas)</option>
<option value='Petroleum Pipes Company   Mostorod'>Petroleum Pipes Company   Mostorod</option>
<option value='Petroshahd Petroleum Company'>Petroshahd Petroleum Company</option>
<option value='Physiotherapy Syndicate'>Physiotherapy Syndicate</option>
<option value='Pico Petroleum'>Pico Petroleum</option>
<option value='Prime Health'>Prime Health</option>
<option value='Professional'>Professional</option>
<option value='Qaroun Petroleum Company'>Qaroun Petroleum Company</option>
<option value='Qatar National Bank (QNB)rashpetco'>Qatar National Bank (QNB)rashpetco</option>
<option value='Rashpetco   Rashid Petroleum'>Rashpetco   Rashid Petroleum</option>
<option value='Real Estate&nbsp;Registration Office'>Real Estate&nbsp;Registration Office</option>
<option value='Rotary'>Rotary</option>
<option value='Royal Care'>Royal Care</option>
<option value='Safe Health Care'>Safe Health Care</option>
<option value='Sedico Pharmaceuticals Company'>Sedico Pharmaceuticals Company</option>
<option value='Sehaty'>Sehaty</option>
<option value='SIAC, Industrial Construction and Engineering Company'>SIAC, Industrial Construction and Engineering Company</option>
<option value='Sianco Egyptian Co.'>Sianco Egyptian Co.</option>
<option value='Sidco'>Sidco</option>
<option value='Sierra Care'>Sierra Care</option>
<option value='Sinai Cement'>Sinai Cement</option>
<option value='Sinai Petroleum and Mining Services'>Sinai Petroleum and Mining Services</option>
<option value='Sinai University'>Sinai University</option>
<option value='SKPC'>SKPC</option>
<option value='Sky Time'>Sky Time</option>
<option value='Smart'>Smart</option>
<option value='Smart Care'>Smart Care</option>
<option value='Smart School'>Smart School</option>
<option value='Social Insurance Box for Employees of the International Commercial Bank'>Social Insurance Box for Employees of the International Commercial Bank</option>
<option value='South Cairo Mills'>South Cairo Mills</option>
<option value='South Dabaah&nbsp;Petroleum Company'>South Dabaah&nbsp;Petroleum Company</option>
<option value='Special Family Care'>Special Family Care</option>
<option value='Suez Canal Authority'>Suez Canal Authority</option>
<option value='Suez Canal Bank Social Insurance Fund for employees'>Suez Canal Bank Social Insurance Fund for employees</option>
<option value='Suez Canal Insurance Company   Employees'>Suez Canal Insurance Company   Employees</option>
<option value='Suez Oil Company'>Suez Oil Company</option>
<option value='Sumed Petroleum Pipelines'>Sumed Petroleum Pipelines</option>
<option value='Syndicate Committee of Hotel InterContinental Cairo Semiramis'>Syndicate Committee of Hotel InterContinental Cairo Semiramis</option>
<option value='Syndicate of Employees in Central Agency For Organization and Administration'>Syndicate of Employees in Central Agency For Organization and Administration</option>
<option value='Syndicate of Employees in Prosecution and Courts of all Egypt Branches'>Syndicate of Employees in Prosecution and Courts of all Egypt Branches</option>
<option value='Syndicate of Scientific Professions'>Syndicate of Scientific Professions</option>
<option value='Takafol Egyptian Life Company'>Takafol Egyptian Life Company</option>
<option value='Tanmia Petroleum Company'>Tanmia Petroleum Company</option>
<option value='Teachers Syndicate'>Teachers Syndicate</option>
<option value='Telecom Egypt'>Telecom Egypt</option>
<option value='Tersana Club from Ahmed Orabi'>Tersana Club from Ahmed Orabi</option>
<option value='Tharwa Petroleum Co.'>Tharwa Petroleum Co.</option>
<option value='The Supreme Constitutional Court'>The Supreme Constitutional Court</option>
<option value='The United Bank'>The United Bank</option>
<option value='The&nbsp;Egyptian Ethylene&nbsp;and&nbsp;Derivatives Company'>The&nbsp;Egyptian Ethylene&nbsp;and&nbsp;Derivatives Company</option>
<option value='Thomas Cook'>Thomas Cook</option>
<option value='Time Health'>Time Health</option>
<option value='Tour Guides Syndicate'>Tour Guides Syndicate</option>
<option value='Town Gas'>Town Gas</option>
<option value='Toyota Company'>Toyota Company</option>
<option value='Trance Globe West Garib Company'>Trance Globe West Garib Company</option>
<option value='Travel Choice'>Travel Choice</option>
<option value='Tricare'>Tricare</option>
<option value='tristar'>tristar</option>
<option value='Tristar Cargo System'>Tristar Cargo System</option>
<option value='Tristar Global Health (Paul Hadad)'>Tristar Global Health (Paul Hadad)</option>
<option value='UBF'>UBF</option>
<option value='UltraVision'>UltraVision</option>
<option value='Unicare'>Unicare</option>
<option value='Unilever'>Unilever</option>
<option value='United Company'>United Company</option>
<option value='United Gas Derivatives Company'>United Gas Derivatives Company</option>
<option value='Vacsera'>Vacsera</option>
<option value='VMEDIX for trading'>VMEDIX for trading</option>
<option value='Wadi Degla'>Wadi Degla</option>
<option value='Watanya Integrated Solutions'>Watanya Integrated Solutions</option>
<option value='WellCare'>WellCare</option>
<option value='WEPCO   Western Desert Operating Petroleum Company'>WEPCO   Western Desert Operating Petroleum Company</option>
<option value='West Bakr Petroleum'>West Bakr Petroleum</option>
<option value='West Giza Teachers Syndicate'>West Giza Teachers Syndicate</option>
<option value='Witch Care'>Witch Care</option>
<option value='X FASTER Medical'>X FASTER Medical</option>




                       </select>
               </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">date</label>
                  <input required type="datetime-local" name="date" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="row mb-3">
                <div class="col-6">
                    <label for="">To: </label>
                <select class="col-12 p-1" name="to" id="">
                <option value="house visit">House visit</option>
                <option value="m3mal visit">Lab visit</option>

                        </select>
                </div>
                
                <div class="col-6">
                    <label for="">Payment: </label>
                <select class="col-12 p-1" name="payment" id="">
                            <option value="visa">visa</option>
                            <option value="cash">cash</option>

                        </select>
                </div>
                <div class="col-12">
                <input type="submit" name="reserve" value="Reserve Now" class="btn btn-primary w-100 mt-3">
                </div>
            </div>
               
              </form>
              <?php
             
              if (isset($_POST['reserve'])) {
                $analysis_name = $_POST['analysis_name'];
                $m3mal_name = $_POST['m3mal_name'];
                $phone = $_POST['phone'];
                $first = $_POST['first'];
                $second = $_POST['second'];
                $email = $_POST['email'];
                $insurance = $_POST['insurance'];
                $date = $_POST['date'];
                $to = $_POST['to'];
                $payment = $_POST['payment'];

    $sql = "INSERT INTO booking_patient (analysis_name,m3mal_name,phone,first_name , second_name ,email, insurance , date,visit,payment) VALUES ('$analysis_name','$m3mal_name','$phone','$first','$second','$email','$insurance','$date','$to','$payment')";
    if (mysqli_query($connection, $sql)) {
        $_SESSION['first']=$first;
        $_SESSION['second']=$second;
        $_SESSION['date']=$date;
        $headers = "From:$email";
        $mailing = mail('ahmedfaisaly2000@gmail.com','Result','Send Result to ',$headers); 
       header('location:success.php');
    } else {
        echo "Time has been taken";
    }
}
if(isset($_GET['home'])){
    session_destroy();
    unset($_SESSION['first']);
    unset($_SESSION['second']);
    unset($_SESSION['date']);
    header("location:index.php");
}
?>

        </div>
    </div>
    
    </div>
    </div>
    </section>
    <!-- #content end -->

    


    <?php include("footer.php")?>
    <?php ob_end_flush()?>
