<?php include 'header.php'; ?>

<!--     start main area -->
<div class="main-area">
    <div class="container">
        <div class="main">
            <div class="row">
                <div class="col-4 col-md-2">
                    <div class="left-sideber">
                        <div class="search-make">
                            <dl class="Search-border">
                                <dt>Search By Make</dt>
                                <dd>
                                    <ul>
                                        <li>
                                            <a href="single.php">
                                                <img class="rounded-circle search-img" src="assets/images/icon/sr1.png" alt="" width="34" height="25">
                                                Toyota(8049)

                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="rounded-circle search-img" src="assets/images/icon/sr2.png" alt="" width="34" height="25">
                                                Mercedes(3529)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="rounded-circle search-img" src="assets/images/icon/sr3.png" alt="" width="34" height="25">
                                                Nissan(2360)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="rounded-circle search-img" src="assets/images/icon/sr4.png" alt="" width="34" height="25">
                                                Bmw(1294)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="rounded-circle search-img" src="assets/images/icon/sr5.png" alt="" width="34" height="25">
                                                Honda(1266)
                                            </a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>

                        <div class="search-price">
                            <dl class="Search-border">
                                <dt>Search By Price</dt>
                                <dd>
                                    <ul>
                                        <li>
                                            <a href="single.php">Under $500</a>
                                        </li>
                                        <li>
                                            <a href="single.php">Under $1000</a>
                                        </li>single.php
                                        <li>
                                            <a href="single.php">Under $1500</a>
                                        </li>
                                        <li>
                                            <a href="single.php">Under $2000</a>
                                        </li>
                                        <li>
                                            <a href="single.php">Under $2500</a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>

                        <div class="search-discount">
                            <dl class="Search-border">
                                <dt>Search By Discount</dt>
                                <dd>
                                    <ul>
                                        <li>
                                            <a href="single.php">90%~ OFF</a>
                                        </li>
                                        <li>
                                            <a href="single.php">80%~89% OFF</a>
                                        </li>
                                        <li>
                                            <a href="single.php">70%~79% OFF</a>
                                        </li>
                                        <li>
                                            <a href="single.php">60%~69% OFF</a>
                                        </li>
                                        <li>
                                            <a href="single.php">50%~59% OFF</a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>

                        <div class="search-year">
                            <dl class="Search-border">
                                <dt>Search By Year</dt>
                                <dd>
                                    <ul>
                                        <li>
                                            <a href="single.php"> Under 2003 (634)</a>
                                        </li>
                                        <li>
                                            <a href="single.php"> 2004 Onwards (217)</a>
                                        </li>
                                        <li>
                                            <a href="single.php"> 2005 Onwards (274)</a>
                                        </li>
                                        <li>
                                            <a href="single.php"> 2006 Onwards (417)</a>
                                        </li>
                                        <li>
                                            <a href="single.php"> 2007 Onwards (277)</a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>

                        <div class="search-make">
                            <dl class="Search-border">
                                <dt>Search By Make</dt>
                                <dd>
                                    <ul>
                                        <li>
                                            <a href="single.php">
                                                <img class="search-img" src="assets/images/icon/icar1.png" alt="" width="34" height="25">
                                                Sedan (49)

                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="search-img" src="assets/images/icon/icar2.png" alt="" width="34" height="25">
                                                Convertible (529)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="search-img" src="assets/images/icon/icar3.png" alt="" width="34" height="25">
                                                Mini Van (260)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="search-img" src="assets/images/icon/icar4.png" alt="" width="34" height="25">
                                                Bus (124)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single.php">
                                                <img class="search-img" src="assets/images/icon/icar5.png" alt="" width="34" height="25">
                                                Motorcycle (235)
                                            </a>
                                        </li>
                                    </ul>
                                </dd>
                            </dl>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-8 col-md-10">
                    <div class="mid-area">
                        <nav class="breadcrumb breadcrumb-area">
                            <a class="breadcrumb-item" href="#">Home</a>
                            <a class="breadcrumb-item active" href="category.php">Category</a>
                            <a class="breadcrumb-item" href="single.php">Single</a>
                        </nav>
                        <div class="top-search-single-car">
                            <form action="">
                                <div class="top-search " style="margin-bottom: 8px;">
                                    <label class="top-search-label col-3">Search Cars</label>

                                    <input name="keyword" id="keyword" placeholder="Stock Id or Keywords" class="top-search-input col-8" value="" autocomplete="off" style="width: 539px;" type="text">

                                    <a href="#" class="top-search-button"><i class="fa fa-search" aria-hidden="true"></i></a>
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                        <div class="country-area">
                            <div class="coantainer-fluid">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="country-area-left">
                                            <h2>Used cars for BANGLADESH</h2>
                                            <p><a href="#">Car Network Bangladesh (Dhaka)</a> <br> Phone : +880-0000000000 <br> Email : info@carnetwork.com
                                            </p>
                                        </div>

                                    </div>
                                    <div class="col-8 country-col">
                                        <div class="country-logo">
                                            <img src="assets/images/logo/county.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="multi-search-area">
                            <div class="container-fluid multi-search-container">
                                <div class="innerSearchBoxMiddle" style="padding: 3px 0 6px 3px;"><!-- innerSearchBoxMiddle Start -->
                                    <table class="searchItemTable table">
                                        <!-- SEARCH-BOX First Line Start -->
                                        <tbody>
                                            <tr>
                                                <td id="MakePart">
                                                    <select name="make" id="make" style="width:235px;">
                                                        <option value="">Make:</option>
                                                        <option value="toyota">Toyota - 8339</option>
                                                        <option value="mercedes">Mercedes - 2960</option>
                                                        <option value="nissan">Nissan - 2568</option>
                                                        <option value="honda">Honda - 1364</option>
                                                        <option value="bmw">Bmw - 1349</option>
                                                    </select>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <span id="ModelPart">
                                                        <select name="model" id="model" style="width:235px;">
                                                            <option value="" selected="selected">Car Name:</option>
                                                            <option value="4runner">4runner - 31</option>
                                                            <option value="86">86 - 1</option>
                                                            <option value="allex">Allex - 108</option>
                                                            <option value="allion">Allion - 216</option>
                                                            <option value="alphard">Alphard - 150</option>
                                                            <option value="altezza">Altezza - 38</option>
                                                        </select></span>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <span id="ModelCodePart">
                                                        <select name="model_code" id="model_code" style="width:235px;">
                                                            <option value="" selected="selected">Model Code:</option>
                                                            <option value="Nhp10">Nhp10 - 146</option>
                                                        </select>
                                                    </span>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td class="Steering-area">
                                                    <dl>
                                                        <dt>Steering:</dt>
                                                        <dd>
                                                            <ul>
                                                                <li>
                                                                    <label for="steering_all"><input id="steering_all" name="steering" value="all" type="radio"><span>Any</span></label>
                                                                </li>
                                                                <li>
                                                                    <label for="steering_rhd"><input id="steering_rhd" name="steering" value="right-hand-drive" checked="checked" type="radio"><span>RHD</span></label>
                                                                </li>
                                                                <li>
                                                                    <label for="steering_lhd"><input id="steering_lhd" name="steering" value="left-hand-drive" type="radio"><span>LHD</span></label>
                                                                </li>
                                                            </ul>
                                                        </dd>
                                                    </dl>
                                                </td>
                                            </tr>
                                            <!-- SEARCH-BOX First Line End -->
                                            <!-- SEARCH-BOX Second Line Start -->
                                            <tr class="rrr" style="border-bottom: 1px #808080 solid; margin-bottom: 10px">
                                                <td class="borderAboveFirst">
                                                    <select name="type" id="type" style="width:235px;">
                                                        <option value="0" selected="selected">Body Type:</option>
                                                        <option value="sedan">Sedan</option>
                                                        <option value="coupe">Coupe</option>
                                                        <option value="hatchback">Hatchback</option>
                                                        <option value="other">Other</option>
                                                    </select>                        
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td id="SubBodyTypePart" class="borderAboveFirst">
                                                    <select name="sub_body_type" id="sub_body_type" style="width:220px;">
                                                        <option value="">Sub Body Type:</option>
                                                        <option value="aluminum-wing">Aluminum Wing</option>
                                                        <option value="hood-wing">Hood Wing</option>
                                                        <option value="aluminum-van">Aluminum Van</option>
                                                    </select>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td class="borderAboveFirst">
                                                    <select name="drive" id="drive" style="width:220px;">
                                                        <option value="0" selected="selected">
                                                            Drive:</option>
                                                        <option value="199">2WD</option>
                                                        <option value="200">4WD</option>
                                                        <option value="596">4-2</option>
                                                    </select>                        
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td class="borderAboveFirst">
                                                    <select name="year_f" id="year_f" style="width: 58px;">
                                                        <option value="">Year:</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                        <option value="2015">2015</option>
                                                    </select>
                                                    <select name="month_f" id="month_f" style="width: 52px;">
                                                        <option value="">Mon:</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                    ~
                                                    <select name="year_t" id="year_t" style="width: 58px;">
                                                        <option value="">Year:</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                    </select>
                                                    <select name="month_t" id="month_t" style="width: 52px;">
                                                        <option value="">Mon:</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!-- SEARCH-BOX Second Line End -->
                                            <!-- SEARCH-BOX Third Line Start -->
                                            <tr>
                                                <td class="borderBelow">
                                                    <select name="price_f" id="price_f" class="selectWidthM " style="width:110px;">
                                                        <option value="" selected="">Price:</option>
                                                        <option value="1">US$ 1</option>
                                                        <option value="11">US$ 11</option>
                                                        <option value="101">US$ 101</option>
                                                        <option value="201">US$ 201</option>
                                                        <option value="90001">US$ 90,001</option>
                                                    </select>
                                                    ~
                                                    <select name="price_t" id="price_t" style="width:110px;">
                                                        <option value="" selected="">Price:</option>
                                                        <option value="10">US$ 10</option>
                                                        <option value="100">US$ 100</option>
                                                        <option value="200">US$ 200</option>
                                                        <option value="300">US$ 300</option>
                                                        <option value="400">US$ 400</option>
                                                        <option value="500">US$ 500</option>
                                                    </select>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td class="borderBelow">
                                                    <select name="cc_f" id="cc_f" style="width:102px;">
                                                        <option value="0" selected="">CC:</option>
                                                        <option value="660">660 cc</option>
                                                        <option value="1000">1000 cc</option>
                                                        <option value="1500">1500 cc</option>
                                                        <option value="1800">1800 cc</option>
                                                        <option value="2000">2000 cc</option>
                                                        <option value="2500">2500 cc</option>
                                                        <option value="4000">4000 cc</option>
                                                    </select>
                                                    ~
                                                    <select name="cc_t" id="cc_t" style="width:103px;">
                                                        <option value="0" selected="">CC:</option>
                                                        <option value="660">660 cc</option>
                                                        <option value="1000">1000 cc</option>
                                                        <option value="1500">1500 cc</option>
                                                        <option value="1800">1800 cc</option>
                                                        <option value="2000">2000 cc</option>
                                                        <option value="2500">2500 cc</option>
                                                        <option value="4000">4000 cc</option>
                                                    </select>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td class="borderBelow">
                                                    <select name="mile_f" id="mile_f" style="width:102px;">
                                                        <option value="0" selected="">Mileage:</option>
                                                        <option value="10">10,000 km</option>
                                                        <option value="30">30,000 km</option>
                                                        <option value="50">50,000 km</option>
                                                        <option value="80">80,000 km</option>
                                                        <option value="500">500,000 km</option>
                                                    </select>
                                                    ~
                                                    <select name="mile_t" id="mile_t"style="width:103px;">
                                                        <option value="0" selected="">Mileage:</option>
                                                        <option value="10">10,000 km</option>
                                                        <option value="30">30,000 km</option>
                                                        <option value="50">50,000 km</option>
                                                        <option value="80">80,000 km</option>
                                                    </select>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td class="borderBelow">
                                                    <select name="trans" id="trans" style="width:247px;">
                                                        <option value="0" selected="selected">Transmission:</option>
                                                        <option value="6">Automatic</option>
                                                        <option value="7">Manual</option>
                                                        <option value="64">Smoother</option>
                                                        <option value="65">Semi AT</option>
                                                        <option value="66">Inomat</option>
                                                        <option value="67">Duonic</option>
                                                        <option value="68">Escot</option>
                                                        <option value="69">Proshift</option>
                                                    </select>                       
                                                </td>
                                            </tr>
                                            <!-- SEARCH-BOX Third Line End -->
                                            <!-- SEARCH-BOX Fourth Line Start -->
                                            <tr>
                                                <td>
                                                    <select name="savel" id="savel" style="width:110px;">
                                                        <option value="0">Discount:</option>
                                                        <option value="1">1%</option>
                                                        <option value="10">10%</option>
                                                        <option value="20">20%</option>
                                                        <option value="30">30%</option>
                                                        <option value="90">90%</option>
                                                    </select>
                                                    ~
                                                    <select name="saveu" id="saveu"style="width:110px;">
                                                        <option value="0">Discount:</option>
                                                        <option value="9">9%</option>
                                                        <option value="19">19%</option>
                                                        <option value="29">29%</option>
                                                        <option value="39">39%</option>
                                                    </select>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <select name="fuel" id="fuel" style="width: 220px;">
                                                        <option value="0" selected="selected">Fuel:</option>
                                                        <option value="1">Petrol</option>
                                                        <option value="2">Diesel</option>
                                                        <option value="3">LPG</option>
                                                    </select>                        
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <select name="color" id="color" style="width:220px;">
                                                        <option value="0" selected="selected">Color:</option>
                                                        <option value="244">Beige</option>
                                                        <option value="245,252">Black</option>
                                                        <option value="256,265,266">Other</option>
                                                    </select>                        
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <a style="color: #FFF" class="btn btn-primary" id="Example22">
                                                        More Details
                                                    </a>
                                                </td>
                                            </tr>
                                            <!-- SEARCH-BOX Fourth Line End -->

                                            <!-- SEARCH-BOX Fifth Line Start -->
                                            <tr id="collapseExample1" style="display: none">
                                                <td>
                                                    <select name="bodyLength" id="bodyLength" class="selectWidthM " style="width:235px;">
                                                        <option value="0" selected="selected">Body Length:</option>
                                                        <option value="1">Under 3400mm</option>
                                                        <option value="2">3400 to 4000mm</option>
                                                        <option value="3">4000 to 4500mm</option>
                                                    </select>
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <select name="loadClass" id="loadClass" style="width:220px;">
                                                        <option value="0" selected="selected">Loading Capacity:</option>
                                                        <option value="1">Under 1 ton</option>
                                                        <option value="2">1 to 2 ton</option>
                                                        <option value="3">2 to 2.5 ton</option>
                                                    </select>                        
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <select name="engineType" id="engineType"style="width:220px;">
                                                        <option value="0" selected="selected">Engine Type:</option>
                                                        <option value="1044">1044</option>
                                                        <option value="10PE1">10pe1</option>
                                                        <option value="1114">1114</option>
                                                        <option value="111M20">111m20</option>
                                                        <option value="112">112</option>
                                                    </select>                        
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td>
                                                    <select name="p_year_f" id="p_year_f" style="width:115px;">
                                                        <option value="0">Prod Year:</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                    </select>
                                                    ~
                                                    <select name="p_year_t" id="p_year_t"style="width:115px;">
                                                        <option value="0">Prod Year:</option>
                                                        <option value="2018">2018</option>
                                                        <option value="2017">2017</option>
                                                        <option value="2016">2016</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!-- SEARCH-BOX Fifth Line End -->
                                            <!-- SEARCH-BOX Sixth Line Start -->
                                            <tr id="collapseExample2" style="display: none">
                                                <td class="borderAboveSecond">
                                                    <select name="truck_size" id="truck_size" style="width:235px;">
                                                        <option value="">Truck Size:</option>
                                                        <option value="large">Large Truck</option>
                                                        <option value="medium">Medium Truck</option>
                                                        <option value="small">Small Truck</option>
                                                        <option value="multicab">Multicab</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <!-- SEARCH-BOX Fifth Line End -->
                                            <!-- SEARCH-BOX Sixth Line Start -->
                                            <tr id="collapseExample3" style="border-top: 1px solid rgb(128, 128, 128); display: none;">
                                                <td class="borderBelow">
                                                    <select name="location" id="location" style="width:235px;">
                                                        <option value="0" selected="selected">Location</option>
                                                        <option value="japan">Japan</option>
                                                        <option value="korea">Korea</option>
                                                    </select>                        
                                                </td>
                                                <td class="narrowTD">&nbsp;</td>
                                                <td class="borderBelow">
                                                    <select name="port" id="port" style="width:220px;">
                                                        <option value="0">Port:</option>
                                                    </select>
                                                </td>
                                                <td class="borderBelow" colspan="4"></td>
                                            </tr>
                                            <!-- SEARCH-BOX Sixth Line End -->
                                        </tbody></table>


                                    <div id="collapseExample4" class="accessories" style="margin: 5px 0px 0px; display: none;"> 
                                        <table class="clearfix" style="width:100%; border-spacing: 0">
                                            <tbody>
                                                <tr style="height: 25px;">
                                                    <td>
                                                        <input name="AB" value="1" id="AB" type="checkbox">&nbsp;
                                                        <label for="AB">Air Bag</label>
                                                    </td>
                                                    <td>
                                                        <input name="ABS" value="1" id="ABS" type="checkbox">&nbsp;
                                                        <label for="ABS">Anti-Lock Brake System</label>
                                                    </td>
                                                    <td><input name="AC" value="1" id="AC" type="checkbox">&nbsp;<label for="AC">Air Conditioner</label></td>
                                                    <td>
                                                        <input name="AW" value="1" id="AW" type="checkbox">&nbsp;
                                                        <label for="AW">Alloy Wheels</label>
                                                    </td>
                                                    <td>
                                                        <input name="BT" value="1" id="BT" type="checkbox">&nbsp;
                                                        <label for="BT">Back Tire</label>
                                                    </td>
                                                    <td>
                                                        <input name="FOG" value="1" id="FOG" type="checkbox">&nbsp;
                                                        <label for="FOG">Fog Lights</label>
                                                    </td>
                                                </tr>
                                                <tr style="height: 25px;">
                                                    <td>
                                                        <input name="GG" value="1" id="GG" type="checkbox">&nbsp;
                                                        <label for="GG">Grill Guard</label>
                                                    </td>
                                                    <td>
                                                        <input name="LS" value="1" id="LS" type="checkbox">&nbsp;
                                                        <label for="LS">Leather Seats</label>
                                                    </td>
                                                    <td>
                                                        <input name="NV" value="1" id="NV" type="checkbox">&nbsp;
                                                        <label for="NV">Navigation</label>
                                                    </td>
                                                    <td>
                                                        <input name="PS" value="1" id="PS" type="checkbox">&nbsp;
                                                        <label for="PS">Power Steering</label>
                                                    </td>
                                                    <td>
                                                        <input name="PW" value="1" id="PW" type="checkbox">&nbsp;
                                                        <label for="PW">Power Windows</label></td>
                                                    <td>
                                                        <input name="RR" value="1" id="RR" type="checkbox">&nbsp;
                                                        <label for="RR">Roof Rails</label></td>
                                                </tr>
                                                <tr style="height: 25px;">
                                                    <td>
                                                        <input name="RS" value="1" id="RS" type="checkbox">&nbsp;
                                                        <label for="RS">Rear Spoiler</label>
                                                    </td>
                                                    <td>
                                                        <input name="SR" value="1" id="SR" type="checkbox">&nbsp;
                                                        <label for="SR">Sun Roof</label>
                                                    </td>
                                                    <td>
                                                        <input name="TV" value="1" id="TV" type="checkbox">&nbsp;
                                                        <label for="TV">TV</label>
                                                    </td>
                                                    <td>
                                                        <input name="WAB" value="1" id="WAB" type="checkbox">&nbsp;
                                                        <label for="WAB">Dual Air Bags</label>
                                                    </td>
                                                </tr>                    
                                            </tbody>
                                        </table>
                                    </div>


                                    <div class="searchIconArea clearfix" style="margin: 3px 0 5px 0;">
                                        <table class="searchItemTable">
                                            <tbody>
                                                <tr>
                                                    <td colspan="14" align="left">

                                                        <input name="sale" value="1" id="sale" onclick="$('#sort').val(2);" type="checkbox">

                                                        <label for="sale" style="margin-bottom: 3px;">
                                                            <span style="letter-spacing: 0em;background: #37F5D4;">
                                                                15th Anniv. Sale </span>
                                                        </label>
                                                        <input name="dealer_stock" value="japan_truck" id="dealer_stock" type="checkbox">

                                                        <label for="dealer_stock">
                                                            <span style="background: #FF9E00">Dealer Stocks</span>
                                                        </label>

                                                        <input name="new_arrival" value="1" id="new_arrival" style="" type="checkbox">

                                                        <label for="new_arrival">
                                                            <span style="background: #f9f2f1">New Arrival</span>
                                                        </label>

                                                        <input name="three_emission_code" value="1" id="three_emission_code" type="checkbox">

                                                        <label for="three_emission_code">
                                                            <span style="background: #FFE930">3 Emission Code</span>
                                                        </label>

                                                        <input name="bid_machine" value="1" id="bid_machine" type="checkbox">

                                                        <label for="bid_machine">
                                                            <span style="background: #39CC6A">Machinery Auction</span>
                                                        </label>

                                                        <input name="bid_damaged" value="1" id="bid_damaged" type="checkbox">

                                                        <label for="bid_damaged">
                                                            <span style="background: #D1BD84">Damaged Car Auction</span>
                                                        </label>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="searchOptionMainSmall" align="center">
                                        <div id="snake" class="searchSnake" style="display: none;">&nbsp;</div>
                                    </div>
                                    <div style="height: 28px;">
                                        <a href="#" class="searchButtonResetLink">
                                            <button type="button" class="searchButtonReset">Reset</button>
                                        </a>
                                        <a href="" class="searchButtonLink">
                                            <button type="button" class="searchButton">Search</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end multi-search-area-->
                        <!--                                single product area-->
                        <div class="clearfix"></div>
                        <!--                                pagination area-->
                        <div class="container-fluid pagination-container">
                            <div class="" id="pagi-to" data-toggle="sticky-onscroll">
                                <div class="row">
                                    <div class="col-3">
                                        <p> <span style="color: #e61616;font-size: 22px;">138</span> Cars found </p>
                                    </div>
                                    <div class="col-6">
                                        <p class="show-par-page">
                                            Cars Per Page:
                                            <a href="">25</a>
                                            <a href="">50</a>
                                            <a href="">75</a>
                                            <a href="">100</a>
                                        </p>
                                        <ul class="page-num">
                                            <li class="active"><a href="">1</a></li>
                                            <li><a href="">2</a></li>
                                            <li><a href="">3</a></li>
                                            <li><a href="">3</a></li>
                                            <li><a href="">5</a></li>
                                            <li><a href="">Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3" style="padding-right: 0px">
                                        <p class="carlist_select">
                                            <label><span>Sort by :</span>
                                                <select class="bodytext" id="sort" name="sort">
                                                    <option value="0">Select</option>
                                                    <option value="3">Car Name - A to Z</option>
                                                    <option value="4">Car Name - Z to A</option>
                                                    <option value="35">Model - A to Z</option>
                                                    <option value="36">Model - Z to A</option>
                                                    <option value="1">Year - New to Old</option>
                                                    <option value="2">Year - Old to New</option>
                                                    <option value="15">Mileage - Low to High</option>
                                                    <option value="16">Mileage - High to Low</option>
                                                    <option value="7">CC - Low to High</option>
                                                    <option value="8">CC - High to Low</option>
                                                    <option value="5" selected="">Price - Low to High</option><option value="6">Price - High to Low</option>
                                                    <option value="38">Recently Discounted</option>
                                                </select>                    
                                            </label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--                              end  pagination area-->

                        <!--                               car-list-view-->
                        <div class="car-list-view">
                            <div class="container-fluid car-list-container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="car-img">
                                            <a href="single.php">
                                                <img class="img-fluid" src="assets/images/mostPopuler/Screenshot_1.png" alt="">
                                            </a>
                                            <span>Stock Id : RZ4987</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <!--                                                                <div class="col-12">-->
                                            <div class="col-8">
                                                <h2 class="float-left"><a href="single.php">2013/1 TOYOTA AQUA S</a> </h2>
                                            </div>
                                            <div class="col-4 float-right ">
                                                <p class="float-right ">
                                                    <i style="color: #51A4E6" class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="">Add to Favorite</a>
                                                </p>
                                            </div>
                                            <!--                                                                </div>-->
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p style="line-height: 30px">price : <span style="color: #E60012;font-size: 28px;font-weight: 700;">$4,500</span></p>
                                                <p style="line-height: 0px;margin-top: 20px;">Total price : <span style="color: #E60012;font-size: 20px;font-weight: 700;">$4,500</span></p>
                                            </div>
                                            <div class="col-8">
                                                <table class="table table-striped table-bordered car-list-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Poduction Year</th>
                                                            <th>Mileage</th>
                                                            <th>Engine</th>
                                                            <th>Trans</th>
                                                        </tr>
                                                        <tr>
                                                            <td>2012</td>
                                                            <td>101,000</td>
                                                            <td>1,500cc( - )</td>
                                                            <td>AT</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="speclist">
                                                    <li>
                                                        <a  href="#">DAA-NHP10</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">HYBRID(PETROL)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">RHD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2WD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Seats</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Doors</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        <div class="car_listitem_footer action">
                                            <span class="acc_list ">Power Steering</span>
                                            <span class="acc_list ">Air Conditioner</span>
                                            <span class="acc_list ">Rear Spoiler</span>
                                            <span class="acc_list ">Navigation</span>
                                            <span class="acc_list ">Air Bag</span> 
                                            <span class="acc_list last">Power Windows</span>
                                            <span class="absolute_existence"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                               car-list-view-->


                        <!--                               car-list-view-->
                        <div class="car-list-view">
                            <div class="container-fluid car-list-container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="car-img">
                                            <a href="single.php">
                                                <img class="img-fluid" src="assets/images/mostPopuler/Screenshot_1.png" alt="">
                                            </a>
                                            <span>Stock Id : RZ4987</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <!--                                                                <div class="col-12">-->
                                            <div class="col-8">
                                                <h2 class="float-left"><a href="single.php">2013/1 TOYOTA AQUA S</a> </h2>
                                            </div>
                                            <div class="col-4 float-right ">
                                                <p class="float-right ">
                                                    <i style="color: #51A4E6" class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="">Add to Favorite</a>
                                                </p>
                                            </div>
                                            <!--                                                                </div>-->
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p style="line-height: 30px">price : <span style="color: #E60012;font-size: 28px;font-weight: 700;">$4,500</span></p>
                                                <p style="line-height: 0px;margin-top: 20px;">Total price : <span style="color: #E60012;font-size: 20px;font-weight: 700;">$4,500</span></p>
                                            </div>
                                            <div class="col-8">
                                                <table class="table table-striped table-bordered car-list-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Poduction Year</th>
                                                            <th>Mileage</th>
                                                            <th>Engine</th>
                                                            <th>Trans</th>
                                                        </tr>
                                                        <tr>
                                                            <td>2012</td>
                                                            <td>101,000</td>
                                                            <td>1,500cc( - )</td>
                                                            <td>AT</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="speclist">
                                                    <li>
                                                        <a  href="#">DAA-NHP10</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">HYBRID(PETROL)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">RHD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2WD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Seats</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Doors</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        <div class="car_listitem_footer action">
                                            <span class="acc_list ">Power Steering</span>
                                            <span class="acc_list ">Air Conditioner</span>
                                            <span class="acc_list ">Rear Spoiler</span>
                                            <span class="acc_list ">Navigation</span>
                                            <span class="acc_list ">Air Bag</span> 
                                            <span class="acc_list last">Power Windows</span>
                                            <span class="absolute_existence"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                               car-list-view-->


                        <!--                               car-list-view-->
                        <div class="car-list-view">
                            <div class="container-fluid car-list-container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="car-img">
                                            <a href="single.php">
                                                <img class="img-fluid" src="assets/images/mostPopuler/Screenshot_1.png" alt="">
                                            </a>
                                            <span>Stock Id : RZ4987</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <!--                                                                <div class="col-12">-->
                                            <div class="col-8">
                                                <h2 class="float-left"><a href="single.php">2013/1 TOYOTA AQUA S</a> </h2>
                                            </div>
                                            <div class="col-4 float-right ">
                                                <p class="float-right ">
                                                    <i style="color: #51A4E6" class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="">Add to Favorite</a>
                                                </p>
                                            </div>
                                            <!--                                                                </div>-->
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p style="line-height: 30px">price : <span style="color: #E60012;font-size: 28px;font-weight: 700;">$4,500</span></p>
                                                <p style="line-height: 0px;margin-top: 20px;">Total price : <span style="color: #E60012;font-size: 20px;font-weight: 700;">$4,500</span></p>
                                            </div>
                                            <div class="col-8">
                                                <table class="table table-striped table-bordered car-list-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Poduction Year</th>
                                                            <th>Mileage</th>
                                                            <th>Engine</th>
                                                            <th>Trans</th>
                                                        </tr>
                                                        <tr>
                                                            <td>2012</td>
                                                            <td>101,000</td>
                                                            <td>1,500cc( - )</td>
                                                            <td>AT</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="speclist">
                                                    <li>
                                                        <a  href="#">DAA-NHP10</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">HYBRID(PETROL)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">RHD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2WD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Seats</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Doors</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        <div class="car_listitem_footer action">
                                            <span class="acc_list ">Power Steering</span>
                                            <span class="acc_list ">Air Conditioner</span>
                                            <span class="acc_list ">Rear Spoiler</span>
                                            <span class="acc_list ">Navigation</span>
                                            <span class="acc_list ">Air Bag</span> 
                                            <span class="acc_list last">Power Windows</span>
                                            <span class="absolute_existence"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                               car-list-view-->


                        <!--                               car-list-view-->
                        <div class="car-list-view">
                            <div class="container-fluid car-list-container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="car-img">
                                            <a href="single.php">
                                                <img class="img-fluid" src="assets/images/mostPopuler/Screenshot_1.png" alt="">
                                            </a>
                                            <span>Stock Id : RZ4987</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <!--                                                                <div class="col-12">-->
                                            <div class="col-8">
                                                <h2 class="float-left"><a href="single.php">2013/1 TOYOTA AQUA S</a> </h2>
                                            </div>
                                            <div class="col-4 float-right ">
                                                <p class="float-right ">
                                                    <i style="color: #51A4E6" class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="">Add to Favorite</a>
                                                </p>
                                            </div>
                                            <!--                                                                </div>-->
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p style="line-height: 30px">price : <span style="color: #E60012;font-size: 28px;font-weight: 700;">$4,500</span></p>
                                                <p style="line-height: 0px;margin-top: 20px;">Total price : <span style="color: #E60012;font-size: 20px;font-weight: 700;">$4,500</span></p>
                                            </div>
                                            <div class="col-8">
                                                <table class="table table-striped table-bordered car-list-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Poduction Year</th>
                                                            <th>Mileage</th>
                                                            <th>Engine</th>
                                                            <th>Trans</th>
                                                        </tr>
                                                        <tr>
                                                            <td>2012</td>
                                                            <td>101,000</td>
                                                            <td>1,500cc( - )</td>
                                                            <td>AT</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="speclist">
                                                    <li>
                                                        <a  href="#">DAA-NHP10</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">HYBRID(PETROL)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">RHD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2WD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Seats</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Doors</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        <div class="car_listitem_footer action">
                                            <span class="acc_list ">Power Steering</span>
                                            <span class="acc_list ">Air Conditioner</span>
                                            <span class="acc_list ">Rear Spoiler</span>
                                            <span class="acc_list ">Navigation</span>
                                            <span class="acc_list ">Air Bag</span> 
                                            <span class="acc_list last">Power Windows</span>
                                            <span class="absolute_existence"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                               car-list-view-->


                        <!--                               car-list-view-->
                        <div class="car-list-view">
                            <div class="container-fluid car-list-container">
                                <div class="row">
                                    <div class="col-3">
                                        <div class="car-img">
                                            <a href="single.php">
                                                <img class="img-fluid" src="assets/images/mostPopuler/Screenshot_1.png" alt="">
                                            </a>
                                            <span>Stock Id : RZ4987</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="row">
                                            <!--                                                                <div class="col-12">-->
                                            <div class="col-8">
                                                <h2 class="float-left"><a href="single.php">2013/1 TOYOTA AQUA S</a> </h2>
                                            </div>
                                            <div class="col-4 float-right ">
                                                <p class="float-right ">
                                                    <i style="color: #51A4E6" class="fa fa-star" aria-hidden="true"></i>
                                                    <a href="">Add to Favorite</a>
                                                </p>
                                            </div>
                                            <!--                                                                </div>-->
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <p style="line-height: 30px">price : <span style="color: #E60012;font-size: 28px;font-weight: 700;">$4,500</span></p>
                                                <p style="line-height: 0px;margin-top: 20px;">Total price : <span style="color: #E60012;font-size: 20px;font-weight: 700;">$4,500</span></p>
                                            </div>
                                            <div class="col-8">
                                                <table class="table table-striped table-bordered car-list-table">
                                                    <tbody>
                                                        <tr>
                                                            <th>Poduction Year</th>
                                                            <th>Mileage</th>
                                                            <th>Engine</th>
                                                            <th>Trans</th>
                                                        </tr>
                                                        <tr>
                                                            <td>2012</td>
                                                            <td>101,000</td>
                                                            <td>1,500cc( - )</td>
                                                            <td>AT</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <ul class="speclist">
                                                    <li>
                                                        <a  href="#">DAA-NHP10</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">HYBRID(PETROL)</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">RHD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">2WD</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Seats</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">5 Doors</a>
                                                    </li>

                                                </ul>

                                            </div>
                                        </div>
                                        <div class="car_listitem_footer action">
                                            <span class="acc_list ">Power Steering</span>
                                            <span class="acc_list ">Air Conditioner</span>
                                            <span class="acc_list ">Rear Spoiler</span>
                                            <span class="acc_list ">Navigation</span>
                                            <span class="acc_list ">Air Bag</span> 
                                            <span class="acc_list last">Power Windows</span>
                                            <span class="absolute_existence"> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--                               car-list-view-->

                        <div class="container-fluid pagination-container">
                            <div class="pagi-footer">
                                <div class="row">
                                    <div class="col-3"> </div>
                                    <div class="col-6">
                                        <ul class="page-num">
                                            <li class="active"><a href="">1</a></li>
                                            <li><a href="">2</a></li>
                                            <li><a href="">3</a></li>
                                            <li><a href="">3</a></li>
                                            <li><a href="">5</a></li>
                                            <li><a href="">Next</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-3"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--                               end CALCULATOR area-->
                </div>
            </div>
        </div>
    </div>
</div><!-- end main-area-->

<?php include 'footer.php'; ?>