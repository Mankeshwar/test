<!DOCTYPE html>  
<html >
  
<head>  
   <title>Baby Form Add</title>  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
  .form-control {
  
   
   margin-top: -24px;
       margin-left: 294px;
	   width: 70%;
  }
  .col-form-label{
	  
	  text-align:left;
	  font-weight: bold !important;
    text-align: left;
	margin-left: -33PX;
	
  }

  </style>  
<body> 
<div class="container" style="margin:30px">
  <div class="row" style="margin:50px" >

<form method="post" action="<?php echo base_url(('Test_controller/adddata'));?>">
  <div class="form-group" >
  <table>
    <label class="col-xs-12 col-sm-5 col-form-label">Arrival Date</label> 
    <select class="form-control" name="arrival_date" id="exampleFormControlSelect1">
      <option>Select Date</option>
	  <option>2</option>
	  <option>4</option>
	   <option>5</option>
	    <option>6</option>
		 <option>7</option>
		  <option>8</option>
		   <option>9</option>
		    <option>10</option>
      
    </select>
 </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1" style="font-weight: bold !important; margin-left: -33PX;  ">Number of Rooms</label>
	
	
    <select class="form-control" id="exampleFormControlSelect1" name="num_of_room">
      <option>Select Number Of Rooms</option>
      <option>1</option>
      <option>2</option>
     
    </select>
  </div>
  <br><br><label for="exampleFormControlSelect1" style=" margin-left: -33PX;  ">
	* This form only allows for booking up to two rooms at a time</label>
  <div class="form-group">
  
    <label for="exampleFormControlSelect2" style="font-weight: bold !important;  margin-left: -33PX;">Preferred means of contact</label>
     <select class="form-control" id="exampleFormControlSelect1" name="phone">
      <option>Phone</option>
      <option>Email</option>
     
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2" style="font-weight: bold !important; margin-left: -33PX; ">How did you first hear about us?</label>
     <select class="form-control" id="exampleFormControlSelect1" name="contact_us">
      <option>--Select--</option>
      <option>Reapet Guest</option>
      <option>Google</option>
	  <option>Bing</option>
	  <option>Yahoo</option>
	  <option>MSN</option>
	  <option>Print Advertising</option>
	  <option>Refferd By a Person</option>
	  <option>Refferd By a Listing</option>
	  <option>AOL</option>
	  <option>Other Search Engine</option>
	  <option>Web Banner Advertising</option>
	  <option>Other</option>
			  
    </select>
  </div>
  <div class="form-group row" name="term_condition">
                     <!--<label  class="col-xs-12 col-sm-12 col-form-label" style="font-weight: bold;font-size: 20px; text-align: center;">Terms & Conditions</label>-->
                     <div class="col-xs-12 col-sm-12">
                       <div name="terms_area" id="terms_area" onfocus="this.style.height='210px';" style="height:300px; width:100%; overflow:auto; border:1px  solid #7F9DB9 ; padding:5px' onmousedown='return false;" onselectstart="return false;" name="term_condition"><style>
.tab-margin{padding-left:5px; padding-right:5px;}
a .tab-festival{background-color:#f5f5f5; border:1px solid #e0e0e0; text-align: center; padding-top: 15px; padding-bottom: 15px; color:#000; font-size:14px; text-decoration:none;}
a:hover .tab-festival{background-color:#fff; text-decoration:none;}
a:hover{text-decoration:none;}

@media screen and (min-width:768px) and (max-width:1024px){
a .tab-festival{font-size:14px !important;}
}

</style>


<div align="center" class="col-md-12 etitxtredfont" style="padding:0px;">
<div align="center"><h1 class="heading">Terms &amp; Conditions for Tours</h1>
<p align="center" style="text-align:center; font-size:14px;">India, Nepal, Bhutan, Sri Lanka</p>
</div>

<div class="etitxtredfont" align="justify" style="padding-top:20px;">
<p><strong>COAP:</strong> The term COAP as used in this section applies to Confirmation of Availability Package. This is the unique (for each reservation) binding and legal electronic contract to which a unique link is e-mailed to each guest when they are ready  to finalize their reservation. Once a guest electronically accepts the COAP and  pays their initial deposit, all the terms and conditions listed below apply and are the sole terms and conditions that the Contract between Easy Tours and the  Guest will be governed by.</p>
<br></div>

<div class="row row-padding">
<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Travel_Insurance"><div class="tab-festival"><strong>Travel Insurance</strong></div></a>
</div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Privacy_Policy"><div class="tab-festival"><strong>Privacy Policy</strong></div></a>
</div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Visa_Information"><div class="tab-festival"><strong>Visa Information</strong></div></a>
</div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Financial_Liability"><div class="tab-festival"><strong>Financial Liability of Easy Tours</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#International_Airline_Tickets"><div class="tab-festival"><strong>International Airline Tickets</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Flights_Delays"><div class="tab-festival"><strong>Flights Delays and Cancellations</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Tour_Availability"><div class="tab-festival"><strong>Tour Availability &amp; Modifications</strong></div></a>
</div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Prices"><div class="tab-festival"><strong>Prices</strong></div></a>
</div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Deposits_and_Payments"><div class="tab-festival"><strong>Payments</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Non_Payment"><div class="tab-festival"><strong>Non-Refundable Charges</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Cancellations"><div class="tab-festival"><strong>Cancellations and Refunds</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/terms-india.htm#Guaranteed_Departures"><div class="tab-festival"><strong>Guaranteed Departures &amp; Cancellation</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Release_of_liability"><div class="tab-festival"><strong>Release of liability</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Shopping_in_India"><div class="tab-festival"><strong>Shopping in India</strong></div></a></div>

<div class="col-md-4 col-sm-4 col-xs-12 tab-margin" style="margin-top:10px;">
<a href="https://www.easytours.travel/india/terms-india.htm#Site_Content"><div class="tab-festival"><strong>Site Content</strong></div></a></div>
<div class="clearfix"></div>

</div>


<div class="etitxtredfont" align="justify"><br><br>
<p><strong> Your Payments are Protected - </strong>Easy Tours transfers all guest payments into a trust account with Chase  Bank. All guest payments go directly to this account. From there, payments are disbursed to the vendors providing different services during your upcoming visit.<br>
<br>
<strong>Easy Tours Liability Insurance: </strong>We maintain a USD $3,000,000 Professional Liability Policy through Zurich (backed by AIG).<br>
<br>
<a id="Travel_Insurance"></a>
<strong>Travel Insurance: </strong>We offer a variety of policies (to US residents) from one of the largest Travel Insurers in the United States, Allianz Global Assist, and are on their covered suppliers list, a distinction enjoyed by few companies. Allianz Global Assistance can offer you a variety of coverage options and we can guide you in  selecting the plan that is best for you. Bear in mind that cancellation  of a tour requires a large amount of documentation which covers each hotel, flight, and ground service segment of your tour that got canceled. If you  purchase insurance through us we know what Allianz Global Assistance wants, and  they are familiar with our documents, thereby saving you time and effort. As with all types of insurance, terms, conditions, and exclusions apply.<br><br>
<a id="Privacy_Policy"></a>
<strong>Privacy Policy:</strong> Easy Tours will not share your personal information with any outside person or agency, except for  the purpose of (1) making various reservations for your visit to South Asia; (2) processing your payments through the Banks and Credit Card transaction  institutions (all located in the United States) that we deal with. You will need our assistance to obtain a Bhutan visa, in which the pertinent information will be shared with the Consulate and/or Embassy. From time to time, we may send you information on our specials. You will always have the option to stop that whenever you choose.<br>
<br>
<a id="Visa_Information"></a>
<strong>Visa Information - </strong>there is a visa required to enter India, Nepal, &amp; Bhutan, and  most other countries in South Asia. Links to the online visa on arrival process and all the Consulates for India can be found on our information page. We assist our guests in obtaining their Bhutan Visa, and the Nepalese Visa can be obtained upon arrival at Kathmandu airport. Although Easy Tours’ does its best to provide the most current information on our site and in our correspondence, we do not guarantee the accuracy of such information and it is solely the traveler’s responsibility  to acquire their visa(s). Charges for the Visa or a current passport are not included in quoted tour costs.<br>
<br>
<strong>Applicable Laws </strong>during your travels. While traveling you are subject to the laws, customs and regulations  of the nation that you are visiting, and the relevant local Governments in the  areas where these services are rendered.<br>
<br>
<a id="Financial_Liability"></a>
<strong>Financial Liability of Easy Tours:</strong> Easy Tours Inc.'s liability in any and all cases will be limited  to a refund of the payments made directly by you to us, subject to our cancellation and refund policies. Your acceptance of our "Confirmation of Availability Package" is also  your legal, binding, and unconditional acceptance of the preceding statement.<br>
<br>
By accepting the COAP (Confirmation of Availability package) you are guaranteeing that you accept the sole responsibility  of the fact that you, and everyone listed as a fellow traveler on your COAP, is in good enough health to participate in the tour/visit. You also accept that  you are aware that the infrastructure and other conditions in South Asia are not as advanced as the United States and that you are consciously accepting, for you and everyone listed as a fellow traveler on your COAP, any and all risks  associated with traveling in South Asia. Facilities for the handicapped are grossly  inadequate, except for in a few select areas.<br>
<br>
<a id="International_Airline_Tickets"></a><strong>International Airline Tickets: </strong>Easy Tours does not issue tickets for your travel to, and from South  Asia, unless the flights are a part of a multi-nation tour that we are  facilitating. For you international flights to and from South Asia, we have the  expertise to offer you advice on the best combinations of airlines, travel  durations, and values, for the regions we offer, and can introduce you to  airfare consolidators that offer discounted pricing on international airfare to  South Asia in First, Business &amp; Coach class.<br>
<br>
Please note that Easy Tours is only providing advice and, upon a guest’s  request, introducing you to airfare consolidator(s). We accept no responsibility  for the actions and inactions of the consolidator(s) or other service providers  we refer you to, or for any changes in quality and/or service schedule by the  airlines/flights that we recommend. Easy Tours does not accept commissions from  airlines or other service providers. It is the guest's responsibility to confirm, pay for, and process all transactions concerning travel to and from South Asiadirectly with the service provider.<br>
<br>
Easy Tours and its affiliates are not responsible, in any sense of the term, for hardship or loss (financial or otherwise) caused by delays, cancellations, and any changes in the international flight or airline requirements, or by a  traveler wanting to change or cancel their international travel and being  unable to do so. Neither Easy Tours, nor any of its affiliates, are party to, or responsible for, any and all events or circumstances relating to this  travel.<br>
<br>
If you choose to arrange your own international air travel, we recommend that you arrive at least a day before your tour begins, and leave at least a day  after the tour ends. This protects you in case of flight delays and cancellations and also allows you to spend additional time in Delhi (or your  port of embarkation/disembarkation), giving you a chance to absorb the local  culture and other attractions without the constraints of a fixed itinerary. We can offer you our pre-negotiated rates on your choice of accommodation for the  extra days upon request.<br>
<br>
<a id="Flights_Delays"></a><strong>Flights Delays and Cancellations:</strong> We strongly recommend that you secure travel insurance for your time in  South Asia. If your international arrival is delayed, there are no last minute  refunds for missed hotel nights. Guests that feel that they can pressure a  hotelier into issuing a refund or credit for a missed night need to understand  that the contract for their hotel reservations is between Easy Tours and the  Hotelier and we do not wish to harm our relationships with the Hoteliers.<br>
<br>
If you miss any domestic flights due to this delay, the Smart Fares we book are refundable with minimal cancellation charges but the new tickets that you will  need to book are going to be significantly higher as they will be secured at  the last minute. Although Easy Tours only uses South Asia’s best airlines and  makes every effort to use domestic flights that offer back-ups with later  flights in case of a cancellation or significant delay, this is not always  possible in every itinerary. If a domestic flight is cancelled and re-booking  alternative flights (or using alternate means of transportation) is more or  less expensive, a debit or credit will be issued to the guest. Hotel nights lost due to domestic travel cancellations have no last minute refunds for  missed hotel nights.<br>
<br>
<a id="Tour_Availability"></a><strong>Tour Availability &amp;  Modifications:</strong> Easy Tours receives  requests for tour reservations from many time zones and parts of the world. To preserve the quality of our tours and the level of service provided, we limit  the number of guests per tour to what the available facilities can easily withstand. We do not ask for any <a href="https://www.easytours.travel/india/terms-india.htm#Deposits_and_Payments">payment</a> until your acceptance of our " <a href="https://www.easytours.travel/india/coap.htm">Confirmation of Availability Package</a> "(C.O.A.P.). If we are unable to satisfy you on the dates you've requested, we'll offer you some alternate dates.<br>
<br>
Hotels and flights can get over-booked or fail to provide contracted services  for other reasons. Easy Tours reserves the right to substitute equivalent grades of accommodations and switch travel itineraries around to respond to these situations, although for our Hotel reservations this is highly unusual and  occurs less than 0.01% of the time. Weather related issues and technical problems with airlines do occur on occasion.<br>
<br>
Tours begin &amp; end on the days specified. Airline &amp; hotel reservations  are made well in advance by Easy Tours. Please make sure that you make room for  delays, both at the START, and the END of your tour. You can lose out on part, or all, of your tour (depending on how tardy you are). Any guest that is not at their chosen starting point (airport, hotel or similar location) at the  scheduled time, is considered a "<a href="https://www.easytours.travel/india/terms-india.htm#No_Show">no show</a>"*.<br>
<br>
Easy Tours will do it's best to keep to the itinerary you  choose. If circumstances beyond our control force us to deviate from the original plans, we will provide you with a choice between comparable values and a refund of the relevant fees.<br>
<br>
<strong>Prices:</strong> All rates quoted are per person, based on double occupancy, and  in US dollars. If not listed, single supplements are available upon request. All  prices, except for when a guest has accepted their electronic contract and paid their initial deposit, are subject to change at any time at the sole discretion of Easy Tours.<br>
<br>
Unlike some tour operators, tour costs include accommodations and all taxes and surcharges on them, meals as listed in the inclusions of your itinerary (in  some tours, such as the Indian Cuisines Tours, all 3 meals are included) tours  of all the sights and monuments as per your itinerary, safe bottled water as  per your needs, as well as the best English speaking guides and visit  facilitators during your visit. All our tours include entrance fees to all the  monuments on your itinerary. They also include THREE EXCURSIONS (subject to  park schedules) if you have chosen a <a href="https://www.easytours.travel/india/wildlife-parks.htm">wildlife tour</a> on your itinerary. Additional visits certain ancillary charges (including video and movie cameras) will incur additional charges that guests are responsible for.<br>
<br>
Quoted tour costs do not include hotel stays before and after your tour, unless specified  on your itinerary. Those costs can be quoted on request. Except for specified meals and snacks between destinations, most meals are not included in private tour  costs. Small Group Tours usually include all breakfasts and lunches. Excess baggage charges are not included - it is the guests’ responsibility to ascertain that their baggage dimensions and weight comply with the airline requirements. Gratuities to guides, staff belonging to airlines, chauffeurs, or  hotels and restaurants (none of which are mandatory if the availed services are  part of the tour) are not included. The cost of personal items such as laundry  and dry cleaning, drinks, and incidentals are not included. Cost of Visas and  Passports is not included.<br>

------------------<br>
<strong>Part, or all of your travel dates fall during Peak Season, as defined by India’s leading Hotels. The deposit and cancellation terms are  different from our regular terms, and are outlined below. Peak Season Includes:</strong><br>
<strong>Dec. 20th - Jan. 5th every year</strong><br>
<strong>Pushkar Festival Dates:</strong><br>
<strong>2019: 29th October - 19th November <br>
2020: 16th November - 7th December</strong><br>
<br>
<a id="Deposits_and_Payments"></a><strong>Payments: </strong>ALL PAYMENTS, DEPOSITS &amp; OTHER MONETARY SUMS ARE QUOTED PER PERSON IN ALL STATEMENTS THAT FOLLOW. We require a payment of $1000.00 per person + Domestic flight supplement (per small  group tour &amp; vacation packages) as an initial deposit for most tours, but  this changes due to seasonal and other special circumstances.<br>
For online reservations the initial deposit can be made by credit card only. If you would rather use another form of payment for the initial deposit, please call us or use the contact us form.<br>
<br>
<strong>Deposit Details for Peak Season - </strong><br>
If the total tour cost (including domestic flights) is between $5000 to $7500 per  person, then the deposit will be $1500 per person (Plus domestic flights per above).<br>
If the total tour cost (including domestic flights) is between $7500 to $10,000  per person, then the deposit will be $2000 per person (Plus domestic flights  per above).<br>
If  the total tour cost (including domestic flights) is above 10,000 per person,  then the deposit will be 20% of the total tour cost (Plus domestic flights per above).<br>
<br>

Reservations that include a hotel  stay during the period between <strong>Dec 20th and Jan 5th</strong>, <strong>the month  of February, and the 3 week period surrounding the Pushkar Camel Festival</strong> (from mid-October to mid November, varies yearly), 100% of the cost of your  tour is due 120 days before your tour begins.<br>
<br>
For all other travel dates, the  balance of the cost of your tour (after subtracting your initial deposit) is  required at least 95 days prior to the start of your tour. Reservations made  with less than 95 days remaining will require immediate payment of all dues.<br>
<br>
<a id="Prices"></a>
<strong>Prices: </strong>All rates quoted are per person, based on double occupancy, and in US  dollars. If not listed, single supplements are available upon request in the  'Comments" section in each 'Reservation Inquiry Form'. All prices, except for when a deposit has been accepted by Easy Tours, Inc., on a <a href="https://www.easytours.travel/india/coap.htm">C.O.A.P.</a> submitted to the guest, are subject to change at any time at the sole  discretion of Easy Tours, Inc.<br><br>
<a id="Non_Payment"></a><strong>On-Tour Flight Non-Refundable charges:</strong> Airline tickets (purchased by Easy Tours, for travel within Southeast Asia) cancellations will  incur charges as levied by the airline. Restricted fares will have higher costs  while smart fares have a charge of $20 to $35 per segment.<br>
<br>
<a name="Cancellations" id="Cancellations"></a><strong>Cancellations </strong>are processed as detailed below. If Easy Tours  does not receive, or is unable to process any of your payments within as per  the schedule outlined above, we will cancel your reservation and process a refund of your total payments, after adjusting for the agreed upon <a href="https://www.easytours.travel/india/terms-india.htm#Cancellations">Cancellation Costs</a>. We use secure  servers to process your electronic payments.<br>
<br>
<strong>Cancellations - </strong>A request for cancellation will only be considered  valid if it is processed by either of the following two means-<br>
<br>
(a) Received by our web site (easytours.travel), submitted on the appropriate form (link provided as part of the C.O.A.P. at the time of initial confirmation of your order).<br>
<br>
(b) by registered mail or delivery service (with proof of in-person delivery) at our US mailing address - Easy Tours, Inc., Ste 180, 16238 RR, 620 North #F Austin, TX 78717.<br>
<br>
<strong>Within 2 business days </strong>of receiving your request for cancellation  request, Easy Tours will send you a link to your Cancellation Agreement which  details the exact amount refundable to you, if any, as per your original  contract (COAP). Once we receive your acceptance of this agreement, Easy Tours  will process your refund promptly as described in the <strong>Refund</strong> section below.<br>
<br>
<strong>Discount Airfares</strong> to &amp; from South Asia are usually not cancelable. If you asked Easy  Tours to refer you to a consolidator or airline, <a href="https://www.easytours.travel/india/terms-india.htm#International_Airline_Tickets">we cannot refund any charges you paid</a> for the airline tickets or any other fees tendered to them. For the payments made to Easy Tours, and only for those payments, the following cancellation terms and charges apply:<br>
<br>
<a id="Cancellations"></a><strong>Cancellation  Costs</strong></p>
<p><strong><u>Air Travel Cancellation  Costs</u></strong><br>
  Airline ticket (purchased by Easy  Tours, for travel within South Asia) cancellations will incur charges as levied  by the airline. Restricted fares will have higher costs while smart fares have  a charge of $30 to $45 per segment.<br>
  <u><br>
  <strong>Land Cancellation Costs (except for Dec  20th to Jan 5th &amp; 3 weeks surrounding Pushkar Fair,  mid Oct. to Mid Nov, varies yearly):</strong><br>
</u></p>
<ul>
  <li style="list-style:none;">(a) Cancellations received by us at least 95 days  before your tour originates, are charged the higher amount (per person) out of  US $250.00, or 5% of the total cost of your visit.<br>
    <br>
    (b) Cancellations received by us between 95 days and 65 days remaining till  your visit begins are charged the higher amount (per person) out of US $500.00,  or 15% of the total cost of your visit.<br>
    <br>
    (c) Cancellations received between 65 days and 35 days remaining till your  visit begins, are charged the higher amount (per person) of US $1000, or 35% of  the total cost of your visit.<br>
    <br>
    (d) Cancellations received between thirty five days and seven days remaining  till your visit begins, are charged the higher amount (per person) of $1500.00, or 75% of the total cost of your visit.<br>
    <br>
    (e) If less than 7 days remain, a cancellation is considered a "no  show"* and does not qualify for a refund except at the sole discretion of  Easy Tours.</li>
</ul>
<p><strong><u>Land Cancellation Costs for Dec 20th to Jan 5th &amp; 3 weeks surrounding Pushkar  Fair in Mid Oct. to Mid Nov. – varies yearly:<br>
  </u></strong><br>
  (a) Cancellations received by us with more than 105 days remaining until  your visit begins are charged 20% of the total cost of your visit.<br>
  <br>
  (b) Cancellations received by us between 105 days and 65 days remaining until  your visit begins are charged (per person) 75% of the total cost of your visit. <br>
  <br>
  
  (c) Cancellations received after 65 days remaining until your visit begins are  100% Non-Refundable.</p>

<p>Please note that <strong>International Airline tickets will incur Cancellation &amp; Change  Charges</strong> as specified by the Airlines &amp; Consolidators. Please bear in  mind that certain airfares cannot be cancelled. Domestic airfare purchased by  Easy Tours as part of your tour with us will be subject to the following  Cancellation &amp; Change terms: Prior to 7 Business Days before the beginning  of your tour you will incur charges as levied by the airline + a $10 Service  Fee per segment. If less than 7 Business Days remain till the beginning of your  tour all domestic fares are non-refundable &amp; cannot be changed.<br>
  <br>
 <strong>Changes</strong> - Changes to your tour package after your acceptance of the "<a href="https://www.easytours.travel/india/coap.htm">Confirmation  of Availability Package</a>" are done at the sole discretion of Easy Tours. You can request them by  mail or by accessing our <a href="https://www.easytours.travel/india/alter_plans.htm">Alter Plans Form</a>. If we are unable  to make your desired changes, we'll offer you the option for a refund as  defined in our "<a href="https://www.easytours.travel/india/terms-india.htm#Cancellations">Cancellations</a>" section.<br>
  <br>
  Very infrequently, small changes may be made to your travel arrangements which  we reserve the right to do so at any time, and we will advise you at the  earliest possible date. These changes may be the result of Force Majeure or other similar reasons that are beyond our control, such as weather conditions, delays in departures, strikes or riots, overbooking's or closure of a hotel,  decisions taken by Tourist Organizations and/or State Governments, etc. This  may result in an alteration of the itinerary, omission of a destination, or  changing the time spent in a particular destination. If it is possible we will  provide you with alternative arrangements, and if not, give you a refund as per our policies defined in the <u>"refund section"</u>.<br>
  <br>
 <strong>Refunds: -</strong> All payments for transportation, or travel service, not provided to the  passenger shall be promptly refunded, in accordance with the agreed-to terms and conditions, unless the passenger otherwise instructs the Easy Tours in  writing.<br>
  <br>
  If you cancel your tour, or <a href="https://www.easytours.travel/india/terms-india.htm#Deposits_and_Payments">do not make payments as per the agreed upon schedule</a>, Easy Tours shall process your refund (after  deducting the agreed upon <a href="https://www.easytours.travel/india/terms-india.htm#Cancellations">cancellation costs</a>) in less than thirty days from the earliest of the following dates:<br>
  <br>
  (1) The scheduled date of departure.<br>
  <br>
  (2) The day the passenger requests a refund by cancelling as per the policy  defined in the cancellation section.<br>
  <br>
  (3) The day of cancellation by Easy Tours.<br>
  <br>
  In the unlikely event that we are unable to provide the tour package, we will  process the refund of all your payments within three days from the day that we  become aware of this inability.<br>
  <br>
  In the event of cancellation due to unforeseeable circumstances beyond Easy  Tours's control (such as a natural disaster), Easy Tours will refund all your  money within 30 days of cancellation, after adjusting for any unrecoverable  payments already tendered to our suppliers, of which we will provide you with  concrete evidence. In over 10 years of operations, we have never had to take  such a step.<br>
  <br>
  <a id="Release_of_liability"></a><strong>Release  of liability</strong> - Besides looking  after your comfort and enjoyment, we do our best to ensure that you travel, explore, and reside in a safe and risk free environment. However, Easy Tours is  not responsible, in any sense of the term, for the safety, health, and/or  condition, of any guests person, their wards, or their property. Your  acceptance of our "Confirmation Of Availability Package" is also your  legal, binding, &amp; unconditional acceptance of the preceding statement.<br>
  <br>
  You, and each party traveling in your tour expressly acknowledge that you are  cognizant of all risks of travel and arrangements for trips of this nature and  fully disclaim, waive and discharge Easy Tours, Inc. (including it's  shareholders, management, directors, and employees) from any and all liability, claims. damages, loss, or responsibilities (including damage to or loss of your  property, or your injury or death) with regard to the proposed tour and/or  visit, and arrangements made with respect there to, even if caused by the negligence  of any airlines, transportation companies, hotels, restaurants, or any other  party providing services or accommodations included in the tour/visit.<br>
  <br>
  Easy Tours will similarly not be liable for any claims, losses, damages for  delayed or lost baggage or other property, or any loss of intangibles such as  pleasure, or feelings of disappointment, distress, or frustration, whether  mental or physical, which may have resulted from any act or omission of any  other party providing services to you during your tour/visit.<br>
  <br>
  <a id="Guaranteed_Departures"></a>
  
</p><p><strong>GUARANTEED DEPARTURES &amp; CANCELLATION OF A TOUR BY THE TOUR OPERATOR</strong></p>

<p>A departure date for a Tour offered by the Easy Tours will become a guaranteed departure when at least one booking secured by a valid deposit has been made on that departure.<br>
Easy Tours has No Minimum Group Size Requirements for our Guaranteed Departures. You may be the Only Travelers on your Group Tour Departure Date. Easy Tours does not cancel their guaranteed departures once a booking has been secured and payments made for any Group Departure date.<br>
Easy Tours guarantees that all scheduled Tour departures booked and secured with a valid deposit will depart as indicated on the applicable confirmation, subject to reasonably itinerary changes as described in these Terms or good faith health and safety concerns. This guarantee is not applicable in the case of Force Majeure. Up to date Tour and itinerary information is available on the Easy Tours’ website or by contacting Easy Tours. Brochures and other printed materials displaying Tour information and departure dates are subject to change may not be relied upon for purposes of this guarantee.<br>
If a Tour is cancelled by Easy Tours before the date of departure for reasons other than Force Majeure and the cancellation is not caused by your fault or negligence, you will have the choice of accepting from Easy Tours:</p>

<p>(a) a substitute Tour of equivalent or superior value; or<br><br>

(b) a substitute Tour of lesser value if no Tour of equivalent or superior value is reasonably available and to recover from Easy Tours the difference in price between the price of the Tour originally purchased and the substitute Tour; or<br><br>

(c) a full refund of all monies paid for the cancelled Tour.<br><br>
Easy Tours is not responsible for any incidental expenses or consequential losses that you incur as a result of the cancelled booking including visas, vaccinations, non-refundable flights or rail, nonrefundable car parking or other fees, loss of earnings, or loss of enjoyment, Easy Tours reserves the right to issue a full refund in lieu of the choices above, in its sole discretion. Where a significant element of a Tour as described cannot be provided after departure, Easy Tours will make suitable alternative arrangements where possible. If it is not possible to provide a suitable alternative or if you reasonably reject any suitable alternatives, Easy Tours may provide you with a refund for unused products or services as determined in its discretion.<br><br>
</p>

  
  
  
  
  
  
  <a id="Shopping_in_India"></a>
 <p> <strong>About shopping in  India -</strong><br>
  <br>
  India offers remarkable values on a large variety of hand crafted items, ranging from exquisite jewelry to fine apparel woven from the highest quality  fabrics; from beautiful carpets to inlayed treasures in marble, wood, and  various other materials; as well as a multitude of other unique and high quality products.<br>
  <br>
  Along with innumerable choices on where to shop, you will be offered a plethora  of unsolicited advice about how to shop and how to avoid commissions. Easy  Tours encourages you to use your best judgment on how and where you shop, but  we would like to offer you some basic information.<br>
  <br>
  You are usually best of letting someone make a small commission, especially if  you are shopping for items other then casual and inexpensive souvenirs. If you  arrive unescorted and without a referral, almost all stores will quote you  absurdly high pricing (many items are not visibly marked with the price). You  will then go through a negotiating process that would put used car dealers in  the United States to shame.<br>
  <br>
  The Luxury hotels will tell you not to follow your guide’s or escorts  recommendations and cite the fact that they get commissions from the stores.  They will not mention (and may even deny) the fact that the hoteliers themselves  get the largest financial kickbacks from the stores that they recommend, and  the prices you will pay at their recommended or in-house stores are usually  among the highest you will find. This may be in the form of contracted  commission structures, expensive gifts to their management/owners, or in the  shape of the exorbitant lease charges the store owners pay to exhibit their  wares in the hotels in-house stores. It is usually a combination of the above.<br>
  <br>
  Easy Tours has established a relationship with a couple of large and reputable stores in most cities on your itinerary. These stores have committed to us that  will offer a quality product and a low-pressure environment. They have also  agreed to do their best to ensure guest satisfaction by offering reasonable  pricing (albeit with some room for negotiation) and secure, timely shipping if  the guest requires those services. They also will offer refund and exchange  options, but bear in mind that itinerary logistics dictate that these options are usually constrained to the short period that you will spend at that  particular destination.<br>
  <br>
  Your guides, escorts, or chauffeurs are often paid commissions by these stores, and this will usually provide you with a less stressful shopping environment. In the majority of instances, the final price that you end up with will be  better then what you would have negotiated if you had gone through the process by yourself.<br>
  <br>
  Easy Tours will perform no functions, or accept any responsibility for, purchases made at any store not on our recommended list. In case of a  disagreement between one of our clients and one of our recommended stores, we  will do our best to ensure a timely and equitable resolution.<br>
  <br>
  These efforts do not obligate us to offer any compensation for a real or perceived  loss (of any kind) that a guest may experience in their dealings with our  recommended stores. We also do not expressly warranty the products or services  of our recommended stores. However, our past experience with them tells us that they offer you the safest option of acquiring a quality product.<br>
  <br>
  <strong><u>Financial Liability:  Easy Tours Inc.'s liability in any and all cases will be limited to a refund of the payments made directly by you to us,</u></strong><br>
  <u>subject to our cancellation and refund policies. Your acceptance of our  "Confirmation of Availability Package" is also your legal, binding, and unconditional acceptance of the preceding statement.</u><br>
  <br>
  <a id="Site_Content"></a><strong>Site Content:</strong> The descriptions and views expressed on this web site are based on the knowledge and opinions of the principals of Easy Tours. There is no guarantee of accuracy, implied or otherwise, in these descriptions and views.<br>
  <br>
  <a id="No_Show"></a>
  <strong>*No Show's, </strong>as defined above, do not qualify for any refunds, for any part of their tour, except at the sole  discretion of Easy Tours.</p><p></p>
</div>
</div></div>
                     </div>
        </div>
<div class="form-check" name="term_condition">
  <label class="form-check-label  margin-left: -101PX;" name="term_condition">
    <input type="checkbox" class="form-check-input" value=""> I accept the Terms and Conditions.
  </label>
</div>
<br>
<div class="col-xs-12 col-sm-12 text-center __web-inspector-hide-shortcut__">
                   <span><input type="submit" name="submit" value="submit" id="search_button_control" style="background:#000;cursor:pointer; color:#fff; text-align:center; margin-top: 0 auto; font-size: 15px; width:128px; font-weight:bold; padding:7px;" ></span>
                 </div>
  </div>
  </table>
  
  
  
  
  </div>
  </div>
</form>
</html>